<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/6
 * Time: 21:21
 */

$con = mysqli_connect('localhost', 'root', 'heyl1989715', 'edu');
mysqli_query($con, 'set names utf8');
$result = mysqli_query($con, "select * from student");
if ($result && mysqli_num_rows($result) > 0) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    echo "<h2 align='center'>没有数据返回</h2>";
}