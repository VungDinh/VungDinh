function calculator() {
    let height = document.getElementById(height).value;
    let weight = document.getElementById(weight).value;
    if (height <= 10 &&
    weight <= 10 &&
        height >= 0 &&
        weight >= 0) {
        let bmi = (Number(height) / Number(weight)) ^2;
        if (ibm >= 18) {
            document.getElementById('result').innerHTML = "bmi:" + bmi + "- BT"
        } else {
            document.getElementById('result').innerHTML = "bmi: " + bmi + "- Fat"
        }
    } else {
        alert("Score IsValid!")
    }
}