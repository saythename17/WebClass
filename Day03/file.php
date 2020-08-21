<?php
    
    header('Content-Type:text/html; charset=utf-8');
    //사용자가 file을 전송하면 실제 파일의 데이터는 임시저장소에 저장
    //전송된 파일을 설명하는 추가데이터(header정보)만 현재 php문서에 전달됨
    //전달된 추가데이터는  $_FILES라는 배열변수에 있음
    //$_FILES는 총 5칸짜리 배열(5개의 요소로 이루어짐)

    $file=$_FILES['aaa'];
    //└배열변수 (5칸 짜리)
    //전송된 원본파일명
    $srcName=$file['name'];
    //file type
    $fileType=$file['type'];
    //file size
    $fileSize=$file['size'];
    //upload file의 임시 보관 저장소 경로
    $tmpName=$file['tmp_name'];

    echo "$srcName<br>";
    echo "$fileType<br>";
    echo "$fileSize<br>";
    echo "$tmpName<br>";

    //임시저장소에 있는 파일을 영구저장하기 위해 이동
    $dstName='./files/'.date('Ymdhis') .".png";
    // jpg 파일을 보내도 png로 저장됨(권장 X)
    move_uploaded_file($tmpName,$dstName);
    

?>