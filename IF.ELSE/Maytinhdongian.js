function caculator(){
    let a = document.getElementById('a').value;
    let b = document.getElementById('b').value;
    let c = document.getElementById('c').value;
    let delta = b*b-4*a*c;
    console.log(delta);
    document.getElementById("result").innerHTML = delta
}