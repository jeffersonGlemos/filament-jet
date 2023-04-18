<?php

return [

    'create' => [
        'title' => 'Criar Token de API',
        'description' => 'Os tokens de API permitem que serviços de terceiros se autentiquem com nosso aplicativo em seu nome.',

        'submit' => 'Criar',
    ],

    'update' => [
        'notify' => 'Token atualizado com sucesso!',
    ],

    'delete' => [
        'notify' => 'Token deletado',
    ],

    'modal' => [
        'title' => 'Token de API',
        'description' => 'Copie seu novo token de API. Para sua segurança, não será exibido novamente.',

        'buttons' => [
            'close' => 'Fechar',
        ],
    ],

    'table' => [
        'never' => 'Nunca',

        'bulk_actions' => [
            'delete' => 'Excluir',
        ],
    ],

    'fields' => [
        'token_name' => 'Nome do token',
        'permissions' => 'Permissões',
        'last_used_at' => 'Usado por último',
    ],

];
