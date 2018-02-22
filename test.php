<?php 

	require 'vendor/autoload.php'; 	

	// Establish connection to the database
	require_once 'vendor/autoload.php'; 
	use GraphAware\Neo4j\Client\ClientBuilder;
	$client = ClientBuilder::create()
		    ->addConnection('bolt', 'bolt://neo4j:root@localhost:7687')
		    ->build();

		    $query = "MATCH(n) RETURN n.name"; 
		    $results = $client->run($query);

		    foreach ($results->getRecords() as $result) {
		     	echo $result->value('n.name');
		     } 


?>