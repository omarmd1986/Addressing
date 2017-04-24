<?php

require_once './vendor/autoload.php';

use CommerceGuys\Addressing\AddressFormat\AddressFormatRepository;
use CommerceGuys\Addressing\Subdivision\SubdivisionRepository;

use CommerceGuys\Addressing\Country\CountryRepository;

$cr = new CountryRepository();
echo count($cr->getList()).PHP_EOL;
print_r($cr->getList());

exit;
$addressFormatRepository = new AddressFormatRepository();
$subdivisionRepository = new SubdivisionRepository();

// Get the address format for Brazil.
//$addressFormat = $addressFormatRepository->get('BR');

// Get the subdivisions for Brazil.
$states = $subdivisionRepository->getAll(['US']);
echo count($states).PHP_EOL;
foreach ($states as $state) {
    echo get_class($state).PHP_EOL;
    printf('%s - %s', $state->getCode(), $state->getName());
    echo PHP_EOL;
    //$municipalities = $state->getChildren();
}

exit;
// Get the subdivisions for Brazilian state Ceará.
$municipalities = $subdivisionRepository->getAll(['BR', 'CE']);
foreach ($states as $state) {
    echo $state->getName();
}
