<?php
return function ($kirby, $pages, $page, $site) {

    $alert = null;

    if ($kirby->request()->is('POST') && get('submit')) {

        // check the honeypot
        if (empty(get('website')) === false) {
            go($page->url());
        }

        // Form data
        $data = [
            'service' => get('service'),
            'first-name' => get('first-name'),
            'last-name' => get('last-name'),
            'zip-code' => get('zip-code'),
            'city' => get('city'),
            'email' => get('email'),
            'phone' => get('phone'),
            'text' => get('text')
        ];

        // Validation rules
        $rules = [
            'service' => [],
            'first-name' => ['required', 'minLength' => 2],
            'last-name' => ['required', 'minLength' => 2],
            'zip-code' => ['required', 'minLength' => 4],
            'city' => ['required', 'minLength' => 2],
            'email' => ['email'], // optional
            'phone' => ['required', 'regex' => '/^\+?[0-9\s\-]+$/'],
            'text' => ['required', 'minLength' => 3, 'maxLength' => 3000],
        ];

        // Validation messages
        $messages = [
            'first-name' => 'Bitte gültigen Vornamen eingeben',
            'last-name' => 'Bitte gültigen Nachnamen eingeben',
            'zip-code' => 'Bitte gültige Postleitzahl eingeben',
            'city' => 'Bitte gültigen Ort eingeben',
            'email' => 'Bitte gültige Email-Adresse eingeben',
            'text' => 'Text muss zwischen 3 und 3000 Zeichen lang sein'
        ];

        // some of the data is invalid
        if ($invalid = invalid($data, $rules, $messages)) {
            $alert = $invalid;

            // the data is fine, let's send the email
        } else {
            try {
                $name = trim($data['first-name'] . ' ' . $data['last-name']);
                $service = ('Gewünschte Leistung: ' . $data['service']) ?: 'Keine Angabe';
                $text = $data['text'] . "\n\n" . $service;
                $kirby->email([
                    'template' => 'email',
                    'from' => $site->global_mail()->value(),
                    'replyTo' => $data['email'] ?: $site->global_mail()->value(),
                    'to' => $site->global_mail()->value(),
                    'subject' => esc($name) . ' hat dir über das Kontaktformular geschrieben',
                    'data' => [
                        'name' => esc($name),
                        'zip' => esc($data['zip-code']),
                        'city' => esc($data['city']),
                        'email' => esc($data['email']),
                        'phone' => esc($data['phone']),
                        'text' => esc($text)
                    ]
                ]);

            } catch (Exception $error) {
                if (option('debug')):
                    $alert['error'] = 'Mail konnte nicht gesendet werden: <strong>' . $error->getMessage() . '</strong>';
                else:
                    $alert['error'] = 'Mail konnte nicht gesendet werden!';
                endif;
            }

            // no exception occurred, let's send a success message
            if (empty($alert) === true) {
                $success = 'Danke! Deine Nachricht wurde gesendet.';
                $data = [];
            }
        }
    }

    return [
        'alert' => $alert,
        'data' => $data ?? false,
        'success' => $success ?? false
    ];
};