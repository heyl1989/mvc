<?php
/**
 * Created by PhpStorm.
 * User: heyl
 * Date: 2019/5/7
 * Time: 11:03
 */
ini_set("display_errors", "On");
error_reporting(E_ALL);
include 'model/Db.php';

$db = Db::getInstance();
//更新
//$sql = "UPDATE `student` SET `grade`=89 where `id`=1";
//$db->exec($sql);
//echo "成功更新了{$db->num}条数据";

//新增
//$sql = "INSERT `student` SET `name`='朱老师',`email`='perter@php.com',`course`='js',`grade`=98,create_time=now(),update_time=now()";
//$db->exec($sql);
//echo "成功新增了{$db->num}条数据，新增主键id是{$db->insertId}";

//删除
//$sql = "DELETE FROM `student` where `id`=5";
//$db->exec($sql);
//echo "成功删除了{$db->num}条数据";

//查询单条
//$sql = "SELECT id,name,email,grade FROM `student` where `grade`>80";
//$row = $db->fetch($sql);
//print_r($row);

//查询多条
$sql = "SELECT id,name,email,grade FROM `student` where `grade`>80";
$rows = $db->fetchAll($sql);
echo '<pre>';
print_r($rows);