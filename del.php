<?php
    header("Content-type:text/html;charset=UTF-8");
    $id = $_POST["id"];
    $coon = new mysqli ('localhost','root','','bd','3306');
    // var_dump($id);
    // $sqli = "SELECT * FROM studentmark WHERE id =" .$id;
    $coon->query("SET CHARACTER SET 'utf8'");//读库   
    $coon->query("SET NAMES 'utf8'");//写库  
    // $result = $coon->query($sqli);
    
    // $row = $result -> fetch_assoc();
    // var_dump($row);
    $sql = "DELETE FROM studentmark WHERE id = '$id'";
    // var_dump($sqli);
    $result2 = $coon -> query($sql);
    // $row = $result -> fetch_assoc();
    // $arr = array();
    // while($row = $result2->fetch_assoc()){
    //     array_push($arr,$row);
    // }
    if ($result2) {
        $array = array("code" => "200", "msg" => "");
    }else {
        $array = array("code" => "100", "msg" => "错误");
    }
    echo json_encode($array)
?>