<?php
namespace parkingomat\PleskDomainsPhp;

// https://zetcode.com/php/getpostrequest/
// php composer.phar req symfony/http-client

require('../vendor/autoload.php');

use Symfony\Component\HttpClient\HttpClient;

// get ALL domains from all plesk panels

$url = 'http://localhost:8080/domains.php';
$httpClient = HttpClient::create();
$response = $httpClient->request('GET', $url);
$content = $response->getContent();
echo $content . "\n";


// http://localhost:8080/domains.php?hostname=apifoundation.com
//$url = 'http://localhost:8080/domains.php?hostname=apifoundation.com';
$url = 'http://localhost:8080/domains.php';
$httpClient = HttpClient::create();
$response = $httpClient->request('GET', $url, [
    'query' => [
        'hostname' => 'apifoundation.com',
    ]
]);
$content = $response->getContent();
echo $content . "\n";




die;

$url = 'http://localhost:8080/host_domains.php';

$httpClient = HttpClient::create();
$response = $httpClient->request('POST', $url, [
    'body' => [
        'host' => 'apifoundation.com',
    ]
]);
$content = $response->getContent();
echo $content . "\n";


die;
$url = 'http://localhost:8080/domains.php';

$httpClient = HttpClient::create();
$response = $httpClient->request('POST', $url, [
    'body' => [
        'auth' => [
            "host"
        ],
        'username' => 'Lucia',
        'message' => 'Cau',
    ]
]);
$content = $response->getContent();
echo $content . "\n";
