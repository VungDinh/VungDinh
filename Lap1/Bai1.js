var numberDiv = document.getElementById("dayso");
for (let i = 1; i <100; i++) {
    if (i == 99) {
        numberDiv.innerHTML += i+'Đã hoàn thành'
    } else {
        numberDiv.innerHTML += i+'<br>'
        console.log(i)
    }
}