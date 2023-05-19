<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Meilisearch\Client;

$client = new Client('http://localhost:7700', '9f0a5ea64ff5a28f1e4f5e600d64bf4532af972966010f439b55ca8b67980648');

// $movies_json = file_get_contents(__DIR__ . '../dumps/movies.json');
// $movies = json_decode($movies_json);

// $client->index('movies')->addDocuments($movies);

// print_r($client->getTask(0));
// print_r($client->index('movies')->search('botman'));
// print_r($client->getKeys());