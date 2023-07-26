function giaiPTbac2(){
    let a = document.getElementById('a').value;
    let b = document.getElementById('b').value;
    let c = document.getElementById('c').value;
    let delta = b*b-4*a*c;
    console.log(delta);
    document.getElementById("result").innerHTML = delta
    if( delta >0){
        let x1 = (-b + Math.sqrt(delta)) / (2 * a);
        let x2 = (-b - Math.sqrt(delta)) / (2 * a);
        document.getElementById('result').innerHTML = `Phuong trinh co 2 nghiem: X1= ${x1}, X2= ${x2}`;
    } else if (delta == 0) {
        let x = -b/(2*a);
        document.getElementById('result').innerHTML = `phuong trinh co nghiem kep X=${x}`;

    }else{
        document.getElementById('result').innerHTML = "phuong trinh vo nghiem";
    }
}