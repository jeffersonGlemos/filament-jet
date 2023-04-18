<?php

return [

    'title' => 'Autenticação de dois fatores',

    'description' => 'Adicione segurança adicional à sua conta usando a autenticação de dois fatores.',

    'note' => 'Quando a autenticação de dois fatores estiver ativa, você será solicitado a fornecer um token aleatório seguro durante a autenticação. Você pode recuperar esse token do aplicativo Google Authenticator do seu telefone.',

    'setup_key' => 'Chave de configuração',

    'enabled' => [
        'title' => 'Você ativou a autenticação de dois fatores.',
        'description' => 'A autenticação de dois fatores agora está habilitada. Escaneie o seguinte código QR usando o aplicativo autenticador do seu telefone.',
        'store_codes' => 'Armazene esses códigos de recuperação em um gerenciador de senhas seguro. Eles podem ser usados para recuperar o acesso à sua conta se o seu dispositivo de autenticação de dois fatores for perdido.',
    ],

    'disabled' => [
        'title' => 'Você não ativou a autenticação de dois fatores.',
    ],

    'finish_enabling' => [
        'title' => 'Conclua a ativação da autenticação de dois fatores.',
        'description' => 'Para concluir a ativação da autenticação de dois fatores, escaneie o seguinte código QR usando o aplicativo autenticador do seu telefone ou insira a chave de configuração e forneça o código OTP gerado.',
    ],

    'buttons' => [
        'enable' => 'Ativar',
        'regenerate_codes' => 'Regerar códigos',
        'disable' => 'Desativar',
        'confirm_finish' => 'Confirme e finalizar',
        'cancel_setup' => 'Cancelar configuração',
        'show_codes' => 'Mostrar códigos de recuperação',
        'hide_codes' => 'Esconder códigos de recuperação',
    ],

    'fields' => [
        'code' => 'Código',
        'recovery_code' => 'Código de recuperação',
    ],

    'messages' => [
        'verified' => 'Código verificado. A autenticação de dois fatores está ativada.',
        'disabled' => 'A autenticação de dois fatores foi desativada.',
        'recovery_codes_regenerated' => 'Códigos de recuperação regerados.',
        'invalid_code' => 'O código que você digitou é inválido.',
        'invalid_confirmation_code' => 'O código de autenticação de dois fatores fornecido é inválido.',
    ],

];
