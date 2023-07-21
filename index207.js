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

function convertVNDtoUSD() {
    let monney = document.getElementById("monney").value;
    let kq = monney / 23000;
    document.getElementById("result").innerHTML = kq
}

function convertUSDtoVND() {
    let monney = document.getElementById("monney").value;
    let kq = monney * 23000;
    document.getElementById("result").innerHTML = kq
}