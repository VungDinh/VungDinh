function tinhGiaithua() {
    let so = Number(prompt("Nhập một số để tính giai thừa"))
    let giai_thua = 1
    if(so == 0 || so == 1){
        giai_thua = 1;
    }else if(so<0){
        alert("Error!")
    }else{
        for (let i=1;i<=so;i++) {
            giai_thua = giai_thua*i
        }
    }
    document.write("Giai thừa của "+so+" = "+giai_thua)
}
