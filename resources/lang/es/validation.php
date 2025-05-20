<?php

return [
    'required' => 'El campo :attribute es obligatorio.',
    'confirmed' => 'La confirmación de :attribute no coincide.',
    'min' => ['string' => 'El campo :attribute debe tener al menos :min caracteres.'],
    'regex' => 'El formato del campo :attribute no es válido.',

    'custom' => [
        'password' => [
            'regex' => 'La contraseña debe tener al menos una mayúscula, una minúscula, un número y un carácter especial. Ejemplo: Ejemplo1@',
        ],
        'titulo' => [
            'required' => 'El título es obligatorio.',
        ],
        'descripcion' => [
            'required' => 'La descripción es obligatoria.',
        ],
        'genero' => [
            'required' => 'El género es obligatorio.',
        ],
        'director' => [
            'required' => 'El director es obligatorio.',
        ],
        'fecha_estreno' => [
            'required' => 'La fecha de estreno es obligatoria.',
        ],
    ],

    'attributes' => [
        'nombre' => 'nombre',
        'apellido' => 'apellido',
        'usuario' => 'usuario',
        'password' => 'contraseña',
        'password_confirmation' => 'confirmación de contraseña',
    ],
];


