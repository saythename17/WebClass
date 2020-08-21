<?php
    header('Content-Type:text/html; charset=utf-8');
    //form element로 부터 GET method로 전달된 values받기
    //php는 GET방식으로 전달된 values를 $_GET 이라는 이름의 배열변수로 가지고 있음
    $title=$_GET['title']
    $msg=$_GET['msg']
    echo "<h2>제목 : $title </h2>";// php의 결합연산자 . == + 
    echo "<p>메세지 : $msg </p>";
?>

<h4>Nice to meet you</h4>
