/*
nhập diem k1&2
-yêu cầu: dtb>=6.5: đạt
ngược lại: k dat
+xdinh in/output
+xay dung thuat toan, sử dụng mã giả /lwuu đồ
+lập trình (mã thật) 
Begin
    Input num hk1&hk2
        dtb=(hk1+hk2)/2
    if (dtb>=6.5) 
    Display "Đạt";
    else 
    Display "Không đạt";
    End if
End
bt2: viết ct:
-input:c.cao, cân nặng
tính ibm
ibm>=25: béo
bt3: input: nhập tháng
output:số ngày
ví dụ: nhập tháng 1 có 31 ngày
nếu nhập tháng 6:30 ngày
*/
function calculator() {
    let score1 = document.getElementById(‘score1’).value;
    let score2 = document.getElementById(‘score2’).value;
    if (score1 <= 10 &&
        score2 <= 10 &&
        score1 >= 0 &&
        score2 >= 0) {
        let scoreMid = (Number(score1) + Number(score2)) / 2;
        if (scoreMid >= 9) {
            document.getElementById('result').innerHTML = "Score Mid: " + scoreMid + "- very good"
        } else if {scorezmid >=8
            document.getElementById('result').innerHTML = "Score Mid:"  + scoreMid + "- Fail"
        }
    } else {
        alert("Score IsValid!")
    } 
}