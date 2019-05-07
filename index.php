<?php
/**
 * Created by PhpStorm.
 * User: heyl
 * Date: 2019/5/7
 * Time: 14:47
 */
ini_set("display_errors", "On");
error_reporting(E_ALL);
//加载模型类
require 'model/Db.php';
require 'model/Model.php';
require 'model/StudentModel.php';

//判断当前URL中是否有C：controler
$controller = isset($_GET['c']) ? $_GET['c'] : 'Student';
//给控制器名添加后缀
$controller .= 'Controller';

//加载控制器
require 'controller/' . $controller . '.php';
//获取方法
$action = isset($_GET['a']) ? $_GET['a'] : 'listAll';
//实例化自定义控制器类
$stu = new $controller();
$stu->$action();//根据学生id，默认为1