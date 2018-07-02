<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理员页面</title>
</head>
<body>
    <a href="add_student.html">添加新学员</a>
    <table>
        <thead>
            <tr>
                <td>编号</td>
                <td>成绩</td>
                <td>姓名</td>
                <td>备注</td>
                <td>操作</td>
            </tr>
        </thead>
        <tbody>
            <?php
            header("Content-type:text/html; charset=UTF-8");
            $conn = new mysqli('localhost','root','','bd','3306');
            $sqli = "SELECT * FROM studentmark";
            $conn->query("SET CHARACTER SET 'utf8'");
            $result = $conn -> query($sqli);
            $rows = $result -> fetch_all();
            // var_dump($rows);
            // 遍历数组
            foreach($rows as $key => $value) {
                $arr = array("<tr>");
                //遍历每一条数据
                foreach ($value as $item) {
                    // var_dump($item);
                    array_push($arr,"<td>$item</td>");
                };
                array_push($arr,"<td><a href='del.php?id=$value[0]'>删除</a>
                <a href='alter_student.php?id=$value[0]'>修改</a>
                </td></tr>
                ");
                echo join($arr);
            };
            ?>
        </tbody>
    </table>
</body>
</html>