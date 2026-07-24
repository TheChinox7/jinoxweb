<?php

test('the application returns a successful response', function () {
    $response = $this->get('/');

    $response
        ->assertStatus(200)
        ->assertSee('MAKYSOFT S.A.S')
        ->assertSee('soporte@makysoft.com')
        ->assertSee('593962894078')
        ->assertDontSee('Jino Morales');
});
