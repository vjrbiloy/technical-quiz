<?php

/*
 * I have the following array:

Array
(
    [0] => Array
        (
            [name] => Peter
            [phone] => 480-777-2389
        )

    [1] => Array
        (
            [name] => Jenny
            [phone] => 602-867-5309
        )

)

 * Create a PHP script that will reformat it so that it looks like this (add
 * comments as appropriate to explain steps):

Array
(
    [names] => Array
        (
            [0] => Peter
            [1] => Jenny
        )

    [phones] => Array
        (
            [0] => 480-777-2389
            [1] => 602-867-5309
        )

)

 */


// Answer: 
$contacts = [
    [
        'name'  => 'Peter',
        'phone' => '480-777-2389'
    ],
    [
        'name'  => 'Jenny',
        'phone' => '602-867-5309'
    ]
];

// Initialize the reformatted array
$formattedResults = [
    'names'  => [],
    'phones' => []
];

foreach ($contacts as $contact) {
    $formattedResults['names'][] = $contact['name'];
    $formattedResults['phones'][] = $contact['phone'];
}

// Print the formatted results
echo"<pre>";print_r($formattedResults);echo"</pre>";

?>
