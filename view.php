<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/6
 * Time: 21:22
 */

echo "<h2 align='center'>学生信息表</h2>";
echo "<table align='center' border='1' cellspacing='0' cellpadding='5' width='60%'>";
echo "<tr align='center' bgcolor='#87ceeb'><th>id</th><th>姓名</th><th>邮箱</th><th>课程</th><th>成绩</th></th></tr>";
foreach ($rows as $row) {
    echo "<tr align='center'>";
    echo "<td align='center'>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['course']}</td><td>{$row['grade']}</td>";
    echo "</tr>";
}
echo "</table>";