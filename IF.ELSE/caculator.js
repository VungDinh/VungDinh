

function addition(){
    let inputA = document.getElementById('inputA').value;
    let inputB= document.getElementById('inputB').value;

    let addition = Number(inputA)+Number(inputB);
    document.getElementById("ketqua").innerHTML = addition
}

function subtraction(){
    let inputA = document.getElementById('inputA').value;
    let inputB= document.getElementById('inputB').value;

    let addition = Number(inputA)-Number(inputB);
    document.getElementById("ketqua").innerHTML = addition
}

function multiplication(){
    let inputA = document.getElementById('inputA').value;
    let inputB= document.getElementById('inputB').value;

    let addition = Number(inputA)*Number(inputB);
    document.getElementById("ketqua").innerHTML = addition
}

function division(){
    let inputA = document.getElementById('inputA').value;
    let inputB= document.getElementById('inputB').value;

    let addition = Number(inputA)/Number(inputB);
    document.getElementById("ketqua").innerHTML = addition
}

// function tinhtoan(caculator){
//     let inputA = document.getElementById('inputA').value;
//     let inputB= document.getElementById('inputB').value;
//     let result = 0;
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