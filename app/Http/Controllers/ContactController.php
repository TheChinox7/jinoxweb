<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    /**
     * Envía un mensaje de WhatsApp a través de Evolution API
     */
    public function sendWhatsApp(Request $request)
    {
        try {
            // Validación y normalización de datos
            $data = $this->validateAndNormalizeInput($request);
            
            // Configuración de la API
            $config = $this->getApiConfiguration();
            
            // Envío del mensaje
            $response = $this->sendMessage($config, $data);
            
            return response()->json([
                'success' => true,
                'message' => 'Mensaje enviado correctamente.'
            ]);
            
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Datos inválidos.',
                'errors' => $e->errors()
            ], 422);
            
        } catch (\Exception $e) {
            Log::error('WhatsApp send error', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], $e->getCode() ?: 500);
        }
    }
    
    /**
     * Valida y normaliza los datos de entrada
     */
    private function validateAndNormalizeInput(Request $request): array
    {
        $validated = $request->validate([
            'dial_code' => ['required', 'string', 'regex:/^\+\d{1,4}$/'],
            'phone' => ['required', 'string', 'regex:/^\d{7,15}$/'],
            'message' => ['nullable', 'string', 'max:1000']
        ]);
        
        // Normalización de datos
        $dialCode = preg_replace('/\D+/', '', $validated['dial_code']);
        $phone = (int) preg_replace('/\D+/', '', $validated['phone']);
        $recipient = $dialCode . $phone;
        $message = trim($validated['message'] ?? '') ?: 'Hola, soy *Jino Morales*, desarrollador *Full Stack*. Gracias por contactarme. *¿En qué puedo ayudarte?*';
        
        return compact('recipient', 'message');
    }
    
    /**
     * Obtiene y valida la configuración de la API
     */
    private function getApiConfiguration(): array
    {
        $config = [
            'base_url' => rtrim(env('EVOLUTION_API_URL', ''), '/'),
            'instance' => env('EVOLUTION_API_INSTANCE_NAME', ''),
            'api_key' => env('EVOLUTION_API_KEY', '')
        ];
        
        // Validar configuración completa
        foreach ($config as $key => $value) {
            if (empty($value)) {
                throw new \Exception('Configuración de Evolution API incompleta: ' . $key, 500);
            }
        }
        
        return $config;
    }
    
    /**
     * Envía el mensaje a través de Evolution API
     */
    private function sendMessage(array $config, array $data): array
    {
        $endpoint = $config['base_url'] . '/message/sendText/' . urlencode($config['instance']);
        
        $payload = [
            'number' => $data['recipient'],
            'text' => $data['message']
        ];
        
        $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'apikey' => $config['api_key']
            ])
            ->acceptJson()
            ->timeout(15)
            ->retry(2, 1000) // 2 reintentos con 1 segundo de espera
            ->post($endpoint, $payload);
            
        if (!$response->successful()) {
            $body = $response->json();
            $errorMessage = $this->extractErrorMessage($body);
            
            Log::warning('Evolution API error', [
                'status' => $response->status(),
                'body' => $body,
                'endpoint' => $endpoint
            ]);
            
            throw new \Exception($errorMessage, $response->status());
        }
        
        return $response->json();
    }
    
    /**
     * Extrae el mensaje de error de la respuesta de la API
     */
    private function extractErrorMessage(array $body): string
    {
        // Diferentes formatos de error que puede devolver la API
        if (isset($body['message'])) {
            if (is_array($body['message'])) {
                return implode(', ', $body['message']);
            }
            return $body['message'];
        }
        
        if (isset($body['error'])) {
            return $body['error'];
        }
        
        return 'Error al enviar el mensaje por WhatsApp.';
    }
}