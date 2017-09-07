<?php

    $business = array();

    array_push($business, array(
        'id' => 1,
        'name' => 'LA CASA DEL CUY',
        'open' => '08:00:00',
        'close' => '18:00:00',
        'state' => 0
    ));

    array_push($business, array(
        'id' => 2,
        'name' => 'VILLA CHICKEN',
        'open' => '09:00:00',
        'close' => '22:45:00',
        'state' => 1
    ));

    array_push($business, array(
        'id' => 3,
        'name' => 'TELEPIZZA',
        'open' => '22:45:00',
        'close' => '04:00:00',
        'state' => 0
    ));

    echo json_encode($business);

?>
