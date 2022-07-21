<?php
require_once('App/init.php');
use Wahidin\Ongkir\Kurir\show;


$from_to = (object) [
    'destination' => 1362,
    'destinationType' => 'subdistrict',
    'origin' => 342,
    'originType' => 'city'
];

print_r(
    show::init($from_to)->lion()
);
// print_r(
//     show::init($from_to)->jne()
// );
// print_r(
//     show::init($from_to)->sicepat()
// );
// print_r(
//     show::init($from_to)->tiki()
// );
// print_r(
//     show::init($from_to)->jnt()
// );
// print_r(
//     show::init($from_to)->pos()
// );
// print_r(
//     show::init($from_to)->ncs()
// );