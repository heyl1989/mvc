<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/6
 * Time: 21:24
 */

//单例模式
class Demo
{
    //1.静态私有属性，保存当前类的实例
    private static $instance = null;

    //构造方法私有化，禁止外部用new 创建实例
    private function __construct()
    {
    }

    //克隆方法私有化，禁止外部克隆实例
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    //生成当前类的唯一实例
    public static function getInstance()
    {
        //如果不是当前类的实例，那么实例化当前类创建实例
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }
        return self::$instance;
    }

}

$demo1 = Demo::getInstance();
$demo2 = Demo::getInstance();
$demo3 = Demo::getInstance();
$demo4 = Demo::getInstance();
var_dump($demo1, $demo2, $demo3, $demo4);