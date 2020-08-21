function show(){
    alert('show~!')
}
//다른 문서에서 사용가능하게 하려면 추출(export)필수
export default show//※※default 키워드를 가진 대표가 문서에 하나(only one) 있어야함
//1개의 문서에는 default가 1개만 있어야함

//여러개 export가능 
//default를 제외한 다른 함수는 함수선언 앞에 export

export function aaa(){
    alert('aaa')
}

export const num=100
export let age='변수'