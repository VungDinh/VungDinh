//let x = prompt("nhap nam sinh");
//let y = 2023;
//let z = Number(y) - Number(x);
//alert(z)
//document.write(z)
//console.log(z):debug data
//document.getElementByID("result").innerHTML=z;
//function sum(){
//lay gia tri tu o Input
//let x= document.getElementById("a").value;
//let y= document.getElementById("b").value;
//let z=Number(x)+ Number(y);
// document.getElementById("result").innerHTML = z;
//}

//function convertVNDtoUSD() {
// let monney = document.getElementById("monney").value;
//  let kq = monney / 23000;
// document.getElementById("result").innerHTML = kq
//}

//function convertUSDtoVND() {
// let monney = document.getElementById("monney").value;
//let kq = monney * 23000;
//document.getElementById("result").innerHTML = kq
//}
//BT1: Viet chuong trinh nhap vao nhiet do C -> F
//BT2: Viet chuong trinh tinh chu vi, dien tich hinh chu nhat
//- yeu cau: nhap vao chieu dai, chieu rong
//BT3: Viet chuong trinh tinh lai xuat  ngan hang
//- input: m - so thang gui, monney: so tien gui biet lai 1n co dinh 8%/nam
// function converCtoF() {
//     let F = document.getElementById("Temparature").value;
//     let kq = 5 / 9 * (F - 32);
//     document.getElementById("result").innerHTML = kq
// }
// function converFtoC() {
//     let C = document.getElementById("Temparature").value;
//     let kq = C * 9.5+32;
//     document.getElementById("result").innerHTML = kq
// }


// function Perimeter() {
//     let x = document.getElementById("Length").value;
//     let y = document.getElementById("Width").value;
//     let kq = (Number(x)+Number(y))*2
//     document.getElementById("result").innerHTML = kq
// }

// function RectangleArea() {
//     let x = document.getElementById("Length").value;
//     let y = document.getElementById("Width").value;
//     let kq = Number(x)*Number(y)
//     document.getElementById("result").innerHTML = kq
// }
function Rate() {
    let m = document.getElementById("Month").value;
    let y = document.getElementById("Money").value;
    let kq = Number(m)*Number(y)*0.08
    document.getElementById("result").innerHTML = kq
}
