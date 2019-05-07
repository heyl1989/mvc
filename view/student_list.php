<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2 align='center'>学生信息表</h2>
<table align='center' border='1' cellspacing='0' cellpadding='5' width='60%'>
    <tr align='center' bgcolor='#87ceeb'>
        <th>id</th>
        <th>姓名</th>
        <th>邮箱</th>
        <th>课程</th>
        <th>成绩</th>
        </th>
    </tr>
    <?php foreach ($data as $stu) { ?>
        <tr align='center'>
            <td><?php echo $stu['id']; ?></td>
            <td><?php echo $stu['name']; ?></td>
            <td><?php echo $stu['email']; ?></td>
            <td><?php echo $stu['course']; ?></td>
            <td><?php echo $stu['grade']; ?></td>
        </tr>
    <?php } ?>
</table>
<p align="center">共计：<?php echo count($data); ?>条记录</p>
</body>
</html>