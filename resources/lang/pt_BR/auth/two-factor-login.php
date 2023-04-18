<?php

return [

    'title' => 'Desafio de dois fatores',

    'heading' => 'Desafio de dois fatores',

    'buttons' => [

        'authenticate' => [
            'label' => 'Entrar',
        ],

        'register' => [
            'before' => 'ou',
            'label' => 'inscrever-se para uma conta',
        ],

        'recovery_code' => [
            'label' => 'Usar um código de recuperação',
        ],

        'authentication_code' => [
            'label' => 'Usar um código de autenticação',
        ],

    ],

    'fields' => [

        'code' => [
            'label' => 'Código',
            'placeholder' => 'XXX-XXX',
        ],

        'recoveryCode' => [
            'label' => 'Código de recuperação',
            'placeholder' => 'abcdef-98765',
        ],

    ],

    'messages' => [
        'failed' => [
            'code' => 'O código de autenticação de dois fatores fornecido é inválido.',
            'recoveryCode' => 'O código de recuperação de dois fatores fornecido é inválido.',
        ],
        'throttled' => 'Muitas tentativas de login. Por favor, tente novamente em :seconds segundos.',
    ],

];
