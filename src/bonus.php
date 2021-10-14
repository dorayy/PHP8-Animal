<?php

// Utilisation de match

$age = 17;

$result = match (true) {
    $age >= 70 => 'Ancien',
    $age >= 27 => 'Adulte',
    $age >= 18 => 'Jeunes',
    default => 'Enfants',
};

var_dump($result);

