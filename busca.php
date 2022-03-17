<?php header('Content-Type: text/html; iso-8859-1');?>
<?php
$student = [
    'name' => 'Jose',
    'lastname' => 'Silva',
    'age' => '23',
    'email' => 'deveduardomelo@gmail.com',
    'phone' => '+55 (11) 98888-8888',
    'notes' => [
        'bd' => [
            'primeiro_bimestre' => 8,
            'segundo_bimestre' => 9,
            'terceiro_bimestre' => 6,
            'quarto_bimestre' => 7,
        ],
        'pweb' => [
            'primeiro_bimestre' => 8,
            'segundo_bimestre' => 9,
            'terceiro_bimestre' => 6,
            'quarto_bimestre' => 7,
        ],
        'git' => [
            'primeiro_bimestre' => 8,
            'segundo_bimestre' => 9,
            'terceiro_bimestre' => 6,
            'quarto_bimestre' => 7,
        ],
    ]
    ];

    echo(json_encode($student));

    
?>
