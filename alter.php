<?php
header("Content-type:text/html;charset=UTF-8");
$coon = new mysqli ('localhost','root','','bd','3306');
$id = $_POST["id"];
var_dump($id);
$username = $_POST['username'];
$score = $_POST['score'];
$mark = $_POST['mark'];
$sqli = "update studentmark set studentName = '$username', score = $score, mark = '$mark' where id = $id";
$coon->query("SET CHARACTER SET 'utf8'");//读库   
$coon->query("SET NAMES 'utf8'");//写库 
$result = $coon ->query($sqli);
// $rows = $result ->fetch_assoc();
var_dump($result);
echo"<script>
    alert('修改成功')
    location.href = 'manager.php'
    </script>"
?>