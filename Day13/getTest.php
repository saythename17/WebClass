<?php
    header('Content-Type:text/html; charset=utf-8');

    $name=$_GET['name'];//$_ : 슈퍼전역변수
    $email=$_GET['email'];

    echo "$name $email 이 등록되었습니다.";

?>