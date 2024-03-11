<?php
class Client{
    var $name;
    var $age;
    var $city;
    public function __construct(){}
}

    #objeto a json
    $client = new Client();
    $client->name = "Arma";
    $client->age = 35;
    $client->city = "San lorenzo";

    $code_json = json_encode($client);

    echo $code_json;
?>