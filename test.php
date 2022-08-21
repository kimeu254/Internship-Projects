<?php
//The GET method produces a long string that appears in your server logs, in the browser's Location: box.

/*The POST method transfers information via HTTP headersThe information is encoded as described in case of GET
method and put into a header called QUERY_STRING.*/

//GET Method
if( $_GET["name"] || $_GET["age"] ) {
    echo "Welcome ". $_GET['name']. "<br />";
    echo "You are ". $_GET['age']. " years old.";

    exit();
}

//POST Method
if( $_POST["name"] || $_POST["age"] ) {
    if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {
        die ("invalid name and name should be alpha");
    }
    echo "Welcome ". $_POST['name']. "<br />";
    echo "You are ". $_POST['age']. " years old.";

    exit();
}
