<pre>
    <!--
        1.<pre></pre>是html标签，意思是按原样输出不做更改。
        2.php代码中用pre主要是做错误代码输出时候，或者打印数组输出起到保持格式的统一性。
    -->

<?php

include "classes.inc";
/**
 * 打印出object的值
 * @param $obj
 */
function print_vars($obj)
{
    //
    foreach (get_object_vars($obj) as $prop => $var) {
        echo "\t$prop => $var\n";
    }
}

function print_methods($obj)
{
    $arr = get_class_methods(get_class($obj));
    foreach ($arr as $method) {
        echo "\tfunction $method()\n";
    }
}

function
?>
</pre>