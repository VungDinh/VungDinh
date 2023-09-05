let html = "";
for (let i = 1; i <= 10; i++) {
    html += "<tr>";
    for (let j = 2; j <= 9; j++) {
        html += "<td>";
        html += j + "x" + i + "=" + i * j
        html += "</td>";
    }
    html += "</tr>"
}
document.getElementById("main").innerHTML = html