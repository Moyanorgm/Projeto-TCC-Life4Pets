<?php

require_once 'vendor/autoload.php'; // Carregar a biblioteca Twilio

use Twilio\Rest\Client;

// Seus credenciais da Twilio
$account_sid = 'AC253c41dd5ec79d10bb7500cf01bf30e3';
$auth_token = 'e9f2f84086e86978c56a095805faeb70';

// Inicializar o cliente Twilio
$client = new Client($account_sid, $auth_token);

// Número de telefone que você quer validar
$numero = $_POST['celular'];

try {
    // Fazendo a solicitação para a API Lookup
    $response = $client->lookups
                       ->v1
                       ->phoneNumbers($numero)
                       ->fetch(array("type" => "carrier"));

    // Imprimindo a resposta
    echo "Número válido!\n";
    echo "Carrier: " . $response->carrier['name'] . "\n";
} catch (Exception $e) {
    // Capturando e exibindo qualquer erro
    echo 'Erro: ' . $e->getMessage();
}
?>
