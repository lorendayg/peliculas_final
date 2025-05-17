<?php

return [
    'required' => 'El campo :attribute es obligatorio.',
    'confirmed' => 'La confirmación de :attribute no coincide.',
    'min' => ['string' => 'El campo :attribute debe tener al menos :min caracteres.'],
    'regex' => 'El formato del campo :attribute no es válido.',

    // Puedes personalizar por campo:
    'custom' => ['password' => ['regex' => 'La contraseña debe tener al menos una mayúscula, una minúscula,
     un número y un carácter especial.ejemplo:Ejemplo1@'],
    ],

    'attributes' => [
        'nombre' => 'nombre',
        'apellido' => 'apellido',
        'usuario' => 'usuario',
        'password' => 'contraseña',
        'password_confirmation' => 'confirmación de contraseña',
    ],
];

