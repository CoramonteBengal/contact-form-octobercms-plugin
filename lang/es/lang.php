<?php return [
    'plugin' => [
        'name' => 'Contact',
        'description' => ''
    ],
    'components' => [
        'contact' => [
            'name' => 'Contact',
            'description' => 'KISS contact form',
            'settings' => [
                'recipient' => [
                    'title' => 'Recipient',
                    'description' => 'The email recipient for this form',
                ],
                'template' => [
                    'title' => 'Template',
                    'description' => 'The email template from <i>Settings > Mail > Mail templates</i>',
                ],
            ],
        ],
    ],
    'strings' => [
        'send' => 'Enviar',
        'name' => 'Nombre',
        'email' => 'e-mail',
        'content' => 'Mensaje',
        'invalid_name' => 'Indica tu nombre',
        'invalid_email' => 'El e-mail no es válido',
        'invalid_content' => 'Escribe tu mensaje',
        'success' => 'Mensaje enviado correctamente',
        'error' => 'Error enviando el mensaje',
    ]
];

