<?php
/** 公关模型
 *  完成数据库连接和一些公关方法
 * Created by PhpStorm.
 * User: heyl
 * Date: 2019/5/7
 * Time: 14:16
 */

class Model
{

    protected $db = null;
    public $data = null;//当前表中数据

    /**
     * Model constructor.
     */
    public function __construct()
    {
        $this->init();
    }

    private function init()
    {
        $dbConfig = [
            'user' => 'root',//用户名
            'pass' => 'heyl1989715',//密码
            'dbname' => 'edu'//默认数据库
        ];

        $this->db = Db::getInstance($dbConfig);
    }

    /**
     * 获取全部数据
     */
    public function getAll()
    {
        $sql = "SELECT * FROM `student`";
        $this->data = $this->db->fetchAll($sql);
    }

    /**
     * 获取单条数据
     */
    public function get($id)
    {
        $sql = "SELECT * FROM `student` WHERE id = $id";
        $this->data = $this->db->fetch($sql);
    }
}