var n=0

// while(true){
//     n++

//     //worker는 UI변경작업을 할 수 없음
//     //Main Thread에게 대신 출력을 요청
//     //postMessage(n)//Main Thread 에게 전달

//     //but , while문을 도는 속도가 너무 빨라 제대로 전달이 안될 수 있음
// }
function fff(){
    n++
    postMessage(n)

    setTimeout(fff,500)//500ms후에 fff함수 실행
}

fff()