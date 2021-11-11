<?php
    $json = array();
	
    if($_SERVER['REQUEST_METHOD'] == "POST"){
      // 換成php://input 
      $inputJson = file_get_contents('php://input');
      $decodedJson = json_decode($inputJson);
      //$email = $decodedJson[0];
      if(!empty($decodedJson)){
        //......
        $json = array("status"=>0, "youremail"=>$decodedJson->email);
      }else{
        $json = array("status" => 1, "msg" => "inputJson is empty");
      }
    }else{
      $json = array("status" => 1, "msg" => "Request method not accepted");
    }
    header('Content-type: application/json;charset=utf-8');
    echo json_encode($json);
?>