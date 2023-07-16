<?php

    require_once "src/class.igdb.php";

    $igdb = new IGDB("ujrqcn26y62avuwvwx06cgtsjw4swa", "z9f0h3yuynx87d89h0zd913ezfiqps");

    try {
        $result = $igdb->game('search "uncharted 4"; fields id,name; limit 1;');
    } catch (IGDBEndpointException $e) {
        // Something went wrong, we have an error
        echo $e->getMessage();
    }
	{
		echo $result
	}
?>

