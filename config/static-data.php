<?php

use App\Models\ContactSubject;

return [
    'contact_subjects' => collect()->push(
        new ContactSubject(['id' => 1, 'name' => 'Lojistik']),
        new ContactSubject(['id' => 2, 'name' => 'Tekstil']),
        new ContactSubject(['id' => 3, 'name' => 'Bilişim']),
        new ContactSubject(['id' => 4, 'name' => 'Diğer']),
    ),
];
