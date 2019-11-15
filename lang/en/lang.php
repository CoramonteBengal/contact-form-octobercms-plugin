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
        'send' => 'Send',
        'name' => 'Name',
        'email' => 'e-mail',
        'content' => 'Message',
        'invalid_name' => 'Name is required',
        'invalid_email' => 'Enter a valid email adress',
        'invalid_content' => 'Enter your message',
        'success' => 'Message sent succesfully',
        'error' => 'Error sending the message',
    ]
];

