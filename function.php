<?php
include_once 'Customer.php';

function saveData($data){
    $dataJson = json_encode($data);
    file_put_contents('data.json', $dataJson);
}

function loadData() {
    $loadJson = file_get_contents('data.json');
    return json_decode($loadJson,true);
}

function addNewCustomer($customer) {
    $customers = loadData();
    array_push($customers, $customer);
    saveData($customers);
}

function convertDataToCustomer() {
    $data = loadData();
    $customers = [];
    foreach ($data as $item) {
        $customer = new Customer($item['name'],$item['email'],$item['role']);
        array_push($customers, $customer);
    }
    return $customers;
}
