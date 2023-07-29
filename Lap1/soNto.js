// input n
// output: n là snto or n k la snto
// Phantich:
// snt>=2 và chia hết cho 1& chính nó
function check(){
    let n = document.getElementById('number').ariaValueMax;
    let flag = false;

    if(n==2){
        flag=false;
    }else{
    for(let i = 2 ; i<n ;i++){
        if(n%i==0){
            flag = true;
            break;
        }
        }
    }
    if (flag==true){
        document.getElementById('result').innerHTML=n+"k phai snt"
    }else{
        document.getElementById('result').innerHTML=n+"la snt"
    }
}