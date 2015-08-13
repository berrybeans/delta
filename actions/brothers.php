<?php

    //this is a testing file for php techniques

    $action = $_POST["action"];
    if(function_exists($action)) {
        echo $action($_POST["data"]);
    } else {
        echo json_encode((object)array('success' => false, 'msg' => $action . ' is not a valid method.'));
    }

    function add($data) {
        //$res = json_decode($data);
        return json_encode($data["a"] + $data["b"]);
    }
?>
