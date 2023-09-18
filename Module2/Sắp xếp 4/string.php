<?php
$name = "CodeGym";
$address = "Hanoi";
echo substr($address,offset:0, length:3);

//k dùng hàm có sẵn, viết hàm đảo ngược
function reverseString($string) {
    $length = strlen($string);
    $reversed = '';
    
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $string[$i];
    }
    
    return $reversed;
}

// Sử dụng hàm đảo ngược chuỗi
$input = "Hello, World!";
$reversed = reverseString($input);
echo $reversed;


// pw 6-32 ký tự, cả số và chữ
// http/https://domain.com/vn
//patter 1://"//
//patter domain://.
//BTVN: viet pattern cho IP addres, biển số xemay
//ip:xxx.yyy.zzz.ddd
//192.168.1.1
//vd:34-xx-yyyyy
//34-B3-911168=>true
//a4-B3-91168=>false
///^(?:[0-9]{1,3}\.){3}[0-9]{1,3}$/ =>IP address
// "/^((0,1)[0-9]{2})|(2([0-4][0-9]|5[0-5]))$/"
///^[0-9]{2}-[A-Z0-9]{1,2}-[0-9]{6}$/ => biển số
//or: /^\d{2}-[A-Z]\d-\d{3}\.\d{2}$/
?>