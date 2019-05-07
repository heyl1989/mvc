<?php
/** 学生模块控制器
 *  模块一般有增删改查
 * Created by PhpStorm.
 * User: heyl
 * Date: 2019/5/7
 * Time: 14:37
 */

class StudentController
{
    /**
     * 获取所有数据
     */
    public function listAll()
    {
        //实例化模型，获取数据
        $stu = new StudentModel();
        $stu->getAll();
        $data = $stu->data;
        include 'view/student_list.php';
    }

    /**
     * 获取单条数据
     */
    public function info($id = 1)
    {
        //实例化模型，获取数据
        $id = isset($_GET['id']) ? $_GET['id'] : $id;
        $stu = new StudentModel();
        $stu->get($id);
        $data = $stu->data;
        include 'view/student_info.php';
    }

}