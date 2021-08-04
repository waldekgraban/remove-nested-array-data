# Remove Nested Array Data
A proposal to solve the problem of removing nested data from an array.

I spent a lot of time solving this problem, so I would like to share the result of this work. It may be useful to you.

### Sample nested array 

```
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
```

### example.php

Version without foreach, with recursion and removing children if there is no ID in children

### example2.php

If the children can be an empty blackboard, example.php can be shortened to this.

### example3.php

Version using foreach instead of recursion 
