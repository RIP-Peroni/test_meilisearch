<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Meilisearch\Client;

$client = new Client('http://localhost:7700', '9f0a5ea64ff5a28f1e4f5e600d64bf4532af972966010f439b55ca8b67980648');

// $meteorites_json = file_get_contents(__DIR__ . '/../dumps/meteorites.json');
// $meteorites = json_decode($meteorites_json);

// $client->index('meteorites')->addDocuments($meteorites);

// print_r($client->index('meteorites')->getSettings());
// print_r($client->index('meteorites')->updateSettings([
//     'filterableAttributes' => [
//         'mass',
//         '_geo',
//     ],
//     'sortableAttributes' => [
//         'mass',
//         '_geo',
//     ],
// ]));

// print_r($client->getTasks());
// print_r($client->index('meteorites')->search('', [
//     'filter' => 'mass < 200',
//     'sort' => ['mass:asc'],
// ]));

// print_r($client->index('meteorites')->search('', [
//     'filter' => '_geoRadius(46.9480, 7.4474, 210000)',
// ]));

print_r($client->index('meteorites')->search('', [
    'sort' => ['_geoPoint(48.8583701,2.2922926):asc'],
]));