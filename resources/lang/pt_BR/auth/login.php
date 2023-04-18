<?php

return [

    'title' => 'Login',

    'heading' => 'Entrar',

    'buttons' => [

        'authenticate' => [
            'label' => 'Entrar',
        ],

        'register' => [
            'before' => 'ou',
            'label' => 'inscrever-se para uma conta',
        ],

        'request_password_reset' => [
            'label' => 'Esqueceu sua senha?',
        ],

    ],

    'fields' => [

        'email' => [
            'label' => 'Endereço de e-mail',
        ],

        'password' => [
            'label' => 'Senha',
        ],

        'remember' => [
            'label' => 'Lembrar',
        ],

    ],

    'messages' => [
        'failed' => 'Estas credenciais não correspondem aos nossos registros.',
        'throttled' => 'Muitas tentativas de login. Por favor, tente novamente em :seconds segundos.',
    ],

];
