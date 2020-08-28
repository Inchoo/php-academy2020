<?php

// $db = new PDO(""); //Fatal error: Uncaught PDOException: invalid data source name 


try {
    $db = new PDO("");
} catch (PDOException $e) {
    echo "Something went wrong: ", $e->getMessage();
}
echo "<hr />";

function work()
{

    $t = rand(1, 10);
    switch (true) {
        case  ($t < 4):
            //This is just an example. You should not throw a PDOException from your own code.
            throw new PDOException("Database is not available");
            break;
        case  ($t < 8):
            throw new Exception("Number is 5 or less");
            break;
        default:
            echo "No exceptions";
    }

}


try {
    work();
} catch (PDOException $e) {
    echo "SQLException: ", $e->getMessage();
} catch (Exception $e) {
    echo "Exception: ", $e->getMessage();
} finally {
    echo "<hr />";
    echo "No matter of catch occurance, if stated finally is always executed";
}