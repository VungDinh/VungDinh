// function caculator() {
//     let inputA = document.getElementById('inputA').value;
//     let inputB = document.getElementById('inputB').value;
//     let pheptoan = document.getElementById("pheptoan").value;
//     switch (caculator) {
//         case '+':
//             result = Number(inputA) + Number(inputB);
//             break;
//         case '-':
//             result = Number(inputA) - Number(inputB);
//             break;
//         case '*':
//             result = Number(inputA) * Number(inputB);
//             break;
//         case '/':
//             result = Number(inputA) / Number(inputB);
//             break;
//     }
//     document.getElementById("ketqua").innerHTML = result
// }

function nhapGiaTri(value){
    document.getElementById('input').value += value; 
    // cộng chuỗi
}

function xoa(){
    document.getElementById('input').value = '';
}

function ketqua(){
    let input = document.getElementById('input').value;
    let result = eval(input);
    //  có chức năng tính toán biểu thức toán học 
    document.getElementById('input').value = result;
}