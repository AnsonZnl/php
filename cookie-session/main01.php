<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/12/13
 * Time: 14:44
 */

if(isset($_SESSION)){
    echo "欢迎".$_SESSION["uname"];
}
