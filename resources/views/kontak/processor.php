<?php
// This is the page labeled "processor.php" in the ajax script
if(!empty($_GET)) {
    require(__DIR__.'/app/Http/Controllers/Kontak.php');
    // Create new database instance
    $con        =   new Kontak();
    // Generate a string and bind array from post
    $qStr       =   $con->getSelectStr($_GET);
    // Create the statement
    echo
    $statement  =   "SELECT * from `posts`{$qStr}";
    // Get the bind array
    $bind       =   $con->getBind();
    print_r($bind);
    // Get the results
    $results    =   $con->query($statement,$bind)->getResults();
    print_r($results);
    exit;
}
?>