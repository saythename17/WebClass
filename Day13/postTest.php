<?php
    header('Content-Type:text/html; charset=utf-8');

    $name=$_POST['name'];//$_ : 슈퍼전역변수
    $email=$_POST['email'];

    echo "POST: $name $email 이 등록되었습니다.";

?>