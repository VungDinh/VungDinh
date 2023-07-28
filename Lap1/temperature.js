let nhietDo = prompt("Input temperature");
let text;
if (nhietDo == null || nhietDo == "") {
    alert("Bạn phải nhập nhiệt độ")
} else {
    if (isNaN(nhietDo)) {
        alert("Bạn phải nhập số")
    } else {
        if (Number(nhietDo) < 20) {
            alert('Lạnh quá')
        } else {
            alert('Nóng quá')
        }
    }
}