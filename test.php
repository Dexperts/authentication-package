<?php

    require_once './src/Auth.php';

    // Creates a new object of Auth class.
    $rq = new \Auth\Auth();

    // Print the result of the call function.
    print_r($rq->call('dexperts'));

    echo '\n';

?>