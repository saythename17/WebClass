<?php
    header('Content-Type:text/html; charset=utf-8');

    //post method로 보낸 values -> $_POST 라는 배열변수에 저장되어 옴
    $name=$_POST['name'];
    $password=$_POST['pw'];
    $gender=$_POST['rg'];
    $car=$_POST['sel'];
    $message=$_POST['msg'];
    //testarea에서 입력한 값을 가진 $message는 엔터가 적용X : 줄바꿈 문자를 \n으로 가지고 있기때문.
    //∴ 브라우저에 제대로 출력되려면 줄바꿈 문자 \n -> <br> 로 문자 바꿔치기
    // $message=str_replace('\n','<br>',$message);
    // \n -> <br> 로 변경해주는 기본 php 함수
    $message=nl2br($message);// \n line to br


    echo "<h2>$name</h2>";
    echo "<h4>$password</h4>";    
    echo "<h4>$gender</h4>";    
    echo "<h4>$message</h4>";    
    echo "<h4>$sel</h4>";   

    //배열로 전달된 data받기
    $fruits= $_POST['fruits'];//※$fruits==배열
    //php에서 배열의 index 개수를 알아내는 함수 : count()
    $num=count($fruits);

    echo "<h5>";
    for($i=0;$i<$num;$i++){
        echo "$fruits[$i]   ";
    }
    echo "</h5>";

    //hidden type value
    $aa=$_POST['aa'];
    echo "$aa";
?>