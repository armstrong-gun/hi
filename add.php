<?php
header("Content-type: text/html; charset=UTF-8");
$username = $_POST['username'];
$score = $_POST['score'];
$mark = $_POST['mark'];
// var_dump($username);
$coon = new mysqli ('localhost','root','','bd','3306');
$coon->query("SET CHARACTER SET 'utf8'");//读库   
    $coon->query("SET NAMES 'utf8'");//写库  
$sqli = "INSERT INTO studentmark(studentName,score,mark) VALUES('$username','$score','$mark')";
var_dump($sqli);
$result = $coon -> query($sqli);
echo"<script>
    alert('添加成功')
    location.href = 'manager.php'
    </script>"
?>