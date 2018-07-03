<?php
header('Content-Type:text/html;charset=UTF-8');
    $conn = new mysqli('localhost','root','','bd','3306');

    $conn->query("SET CHARACTER SET 'utf8'");//读库   
    $conn->query("SET NAMES 'utf8'");//写库 
    $sql = "SELECT * FROM studentmark";
    $result = $conn -> query($sql);
    $arr = array();
    while($row = $result->fetch_assoc()){
        array_push($arr,$row);
    }
    if ($arr) {
        $arr = array("code"=>"0",
        "msg"=>"","data"=>$arr);

    }else{
        $arr = array("code"=>"100", "msg"=> "开了个小差，出现了未知错误");
    }
    // var $row = $result -> fetch_all();
echo json_encode($arr);
$conn->close();
?>