<?php
header('Content-Type: text/html; charset=UTF-8');
$username = $_POST["user"];
$password = $_POST["pass"];
$mark = isset($_POST["mark"])?$_POST["mark"] : "";
$conn= new mysqli('localhost','root','','bd','3306');

// ip地址，用户名， 密码， 连接的数据源， 端口号， 默认是3306
$sql="SELECT * from user_info WHERE username = '$username'";

$conn->query("SET CHARACTER SET 'utf8'");//读库   
$conn->query("SET NAMES 'utf8'");//写库  
$result = $conn -> query($sql);
    
$row = $result -> fetch_assoc();
var_dump($row['username'])
if($row['username']){
    if ($row['password']) {
        echo"
        <script>
        alert('登录成功')
        </script>  
        "
    }
}else {
$sql_insert = "INSERT INTO user_info (username, password) VALUES ('$username', '$password')";

}
// $json = file_get_contents('json/user.json');
// $json = json_decode($json);
// foreach ($conn as $key=>$value) {
//     if ($username === $value->username){
//         if ($password === $value->password) {
//             echo"<script>alert('登录成功')</script>";
//         }else{
//             echo"<script>
//             alert('你是不是密码错了呀？')
//             window.location.href = 'form.html'
//             </script>";
//         }
//     }
//     break;
    
// }
// if ($key == count($conn)-1) {
//     echo"<script>
//             alert('你是不是用户名错了呀？')
//             window.location.href = 'form.html'
//             </script>";
// }

// echo"用户名$username 密码$password";
?>