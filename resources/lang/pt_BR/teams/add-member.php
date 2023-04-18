<?php

return [

    'title' => 'Adicionar membro da equipe',

    'description' => 'Adicione um novo membro à sua equipe, permitindo que eles colaborem com você.',

    'note' => 'Forneça o endereço de e-mail da pessoa que você gostaria de adicionar a esta equipe. O endereço de e-mail deve estar associado a uma conta existente.',

    'buttons' => [
        'save' => 'Salvar',
    ],

    'fields' => [
        'email' => 'E-mail',
        'role' => 'Função',
    ],

    'messages' => [
        'invited' => 'Novo membro convidado para a equipe.',
        'added' => 'Novo membro adicionado à equipe.',
        'already_belongs_to_team' => 'Este usuário já pertence à equipe.',
        'already_invited_to_team' => 'Este usuário já foi convidado para a equipe.',
        'email_not_registered' => 'Não foi possível encontrar um usuário registrado com este endereço de e-mail.',
    ],

];
