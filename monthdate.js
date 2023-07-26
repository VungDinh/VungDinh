// function getDayofmonth(){
//     let month = document.getElementById('month').value;

// if(month == 1 
//     || month == 3
//     || month == 5
//     || month ==7) {
//     document.getElementById('result').innerHTML = "Thang" + month + "co 31 ngay";
// } else if(month == 2){
//     document.getElementById('result').innerHTML = "Thang 2 co 28 hoac 29 ngay";
// } else{
//     document.getElementById('result').innerHTML = "Thang" + month + "co 30 ngay";
// }
// }
switch (Number(month)) {
    case 1:
    case 3:
    case 5:
    case 7:
        document.getElementById('result').innerHTML = "Thang" + month + "co 31 ngay";
        break;
    case 2:
        document.getElementById('result').innerHTML = "Thang 2 co 28 hgoac 29 ngay";
        break;
    case 4:
        document.getElementById('result').innerHTML = "Thang" + month + "co 30 ngay";
        break;
    default:
        document.getElementById('result').innerHTML = "Thang tu 1-12";
        break;
}



