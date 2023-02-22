<?php
// array index
$animals = ['kambing', 'kucing', 'kerbau'];

// akses semua nilai array
foreach ($animals as $animal) {
    echo$animal . '<br>';
}

// array assosiatif
$student = [
    'name' => 'Yahya Syauqi',
    'major' => 'Informatics',
    'mage' => 3
];

echo $student['name'];