<?php
$orig = [
    0 => ['id' => 3230],
    1 => ['id' => 3308],
    2 => [
        'id' => 3310,
        'children' => [
            0 => [
                'id' => 3312,
            ],
            1 => [
                'id' => 3313
            ]
        ]
    ]
];

$deleted = [3312];

function recurs($array, $deleted) {
    return array_filter(array_map(function ($elem) use ($deleted) {
        if (isset($elem['children'])) {
            if ($res = recurs($elem['children'], $deleted)) {
                $elem['children'] = $res;
            } else {
                unset($elem['children']);
            }
        }
        
        return in_array($elem['id'], $deleted) ? null : $elem;
    }, $array));
}

$new = recurs($orig, $deleted);

print_r($new);
