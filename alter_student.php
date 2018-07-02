<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    
    
$id = $_GET['id'];
var_dump($id);
echo"
<form action='alter.php' method='post'>
        <input type='hidden' name='id' value='$id;'>
        <input type='text' placeholder='输入名字' name='username'>
        <br/>
        <input type='text' placeholder='输入成绩' name='score'>
        <br/>
        <input type='text' placeholder='输入备注' name='mark'>
        <br/>
        <input type='submit' value='修改'>
    </form>
"

?>
</body>

</html>