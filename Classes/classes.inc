<?php
/**
 * 函数库
 * Classes.inc
 */

// 基类及其成员属性与方法
class Vegetable
{
    var $edible;
    var $color;

    function Vegetable($edible, $color = "green")
    {
        $this->edible = $edible;
        $this->color = $color;
    }

    function is_edible()
    {
        return $this->edible;
    }

    function what_color()
    {
        return $this->color;
    }
} // Vegetable 类定义结束

/**
 *  扩展基础类
 */

class Spinach extends Vegetable
{
    var $cooked = false;

    function Spinach()
    {
        $this->Vegetable(true, "green");
    }
    //“烹调”的方法
    function cook_it()
    {
        $this->cooked = true;
    }

    //获知它是否已被烹调了”的方法
    function is_cooked()
    {
        return $this->cooked;
    }
} // Spinach 类定义结束
?>