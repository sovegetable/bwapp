

<?php
    //@author:inuyasha
    $strs="QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm";
    $name=substr(str_shuffle($strs),mt_rand(0,strlen($strs)-11),5);//随机抽取一个
	session_id("$name");
    session_start();
    
    echo "session弱随机(可爆破)<br>";
    echo "session ID:".session_id()."<br>";
?>
