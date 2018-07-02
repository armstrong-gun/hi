<?php
    header("Content-type:text/html;charset=UTF-8");
    $coon = new mysqli ('localhost','root','','bd','3306');
    $id = $_GET["id"];
    var_dump($id);
    $sqli = "SELECT * FROM studentmark WHERE id =" .$id;
    $coon->query("SET CHARACTER SET 'utf8'");//读库   
    $coon->query("SET NAMES 'utf8'");//写库  
    $result = $coon->query($sqli);
    $row = $result -> fetch_assoc();
    var_dump($row);
    $sql = "DELETE FROM studentmark WHERE id = '$id'";
    var_dump($sql);
    $result2 = $coon -> query($sql);
    echo"<script>
    alert('删除成功')
    location.href = 'manager.php'
    </script>"
?>