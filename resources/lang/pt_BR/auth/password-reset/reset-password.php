<?php

return [

    'title' => 'Redefinir sua senha',

    'heading' => 'Redefinir sua senha',

    'buttons' => [

        'reset' => [
            'label' => 'Redefinir senha',
        ],

    ],

    'fields' => [

        'email' => [
            'label' => 'Endereço de e-mail',
        ],

        'password' => [
            'label' => 'Senha',
            'validation_attribute' => 'password',
        ],

        'passwordConfirmation' => [
            'label' => 'Confirme sua senha',
        ],

    ],

    'messages' => [
        'throttled' => 'Muitas tentativas de redefinição. Por favor, tente novamente em :seconds segundos.',
    ],

];
