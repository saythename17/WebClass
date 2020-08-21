<?php

    header('Content-Type:text/html; charset=utf-8');

    $files=$_FILES['bbb'];
    //files : 배열변수//count() : 배열의 개수를 알려주는 함수 
    echo count($files)."<br>";//출력 : always 5
    echo count($files['type']); //출력 : 파일개수
    echo "<br>===============================<br><br>";
    //선택된 파일의 개수 
    $fileNum=count($files['name']);
    
    for($i=0; $i<$fileNum; $i++){
        $srcName=$files['name'][$i]; //원본파일명
        $tmpName=$files['tmp_name'][$i]; //임시저장소 경로
        $type= $files['type'][$i]; //file type
        $size= $files['size'][$i]; //file size

        echo $srcName . "<br>";
        echo $tmpName . "<br>";
        echo $type . "<br>";
        echo $size . "<br>";
        echo "<hr>";

        //영구저장소로 파일 이동
        $dstName= "./files/" . date('Ymdhis') . $srcName;
        move_uploaded_file($tmpName,$dstName);
    }
?>