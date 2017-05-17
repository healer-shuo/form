<?php
/**
 * Created by PhpStorm.
 * User: shuo
 * Date: 2017/5/10
 * Time: 9:49
 */
if($_POST['a']&&$_POST['b']){
    echo $_POST['a']+$_POST['b'];
}else{
    echo '请输入数字';
}