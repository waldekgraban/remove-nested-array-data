<?php

$orig = [
    0 => ['id' => 3230],
    1 => ['id' => 3308],
    2 => [
        'id' => 3310,
        'children' => [
            0 => [
                'id' => 3312    
            ],
            1 => [
                'id' => 3313
            ]
        ]
    ]
];

$deleted = [3312, 3230];

$new = [];

function exi($array, $deleted) {
    return array_filter($array, function($data) use ($deleted) {
        return !in_array($data['id'], $deleted);
    });
}

$new = exi($orig, $deleted);

foreach ($new as &$sub) {
    if (isset($sub['children'])) {
        $sub['children'] = exi($sub['children'], $deleted);
    }
}

unset($sub);

print_r($new);
