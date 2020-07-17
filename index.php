<?php
header("Content-Type:application/json");
include 'functions.php';
if(!empty($_GET['name'])){
    $name = $_GET['name'];
    $price=get_price($name);
    
    if(empty($price))
    {
        deliver_responce(200, "NOT Found", NULL);
    }
    else
    {
        deliver_responce(200, "Found", $price);
    }
    
}
else {
    
}

function deliver_responce($status,$status_message,$data){
    header("HTTP/1.1 $status $status_message");
    
    $response['status']=$status;
    $response['status_message']=$status_message;
    $response['data']=$data;
    
    $json_response = json_encode($response);
    echo  $json_response;
}

?>