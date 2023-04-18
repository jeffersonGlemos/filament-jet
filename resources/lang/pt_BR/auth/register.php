<?php

return [

    'title' => 'Registrar',

    'heading' => 'Inscreva-se',

    'buttons' => [

        'login' => [
            'before' => 'ou',
            'label' => 'faça login na sua conta',
        ],

        'register' => [
            'label' => 'Inscreva-se',
        ],

    ],

    'fields' => [

        'email' => [
            'label' => 'Endereço de e-mail',
        ],

        'name' => [
            'label' => 'Nome',
        ],

        'password' => [
            'label' => 'Senha',
            'validation_attribute' => 'password',
        ],

        'passwordConfirmation' => [
            'label' => 'Confirme sua senha',
        ],

        'terms_and_policy' => [
            'label' => 'Eu concordo com os :terms_of_service e :privacy_policy',
            'terms_of_service' => 'Termos de Serviço',
            'privacy_policy' => 'Política de Privacidade',
        ],

    ],

    'messages' => [
        'throttled' => 'Muitas tentativas de registro. Por favor, tente novamente em :seconds segundos.',
    ],

];
