// function myButton(){
//     // Lấy đối tượng button NO
// 		// let noButton = document.getElementById("no");

// 		// Khi người dùng di chuột lên nút NO, di chuyển nút đó đến một vị trí ngẫu nhiên trên màn hình
// 		noButton.addEventListener("mouseover", function() {
// 			let randomX = Math.floor(Math.random() * window.innerWidth);
// 			let randomY = Math.floor(Math.random() * window.innerHeight);
//             console.log(randomX + "px", randomY + "px");
// 			noButton.style.left = randomX + "px";
// 			noButton.style.top = randomY + "px";
// 		});

		// Khi người dùng click vào nút YES, hiển thị thông báo "<3"
		let yesButton = document.getElementById("yes");
		yesButton.addEventListener("click", function() {
			alert("<3");
		});
// }
// var noButton = document.getElementById("abc");
// // Khi người dùng di chuột lên nút NO, di chuyển nút đó đến một vị trí ngẫu nhiên trên màn hình
// noButton.addEventListener("mouseover", function() {
//     var randomX = Math.floor(Math.random() * window.innerWidth);
//     var randomY = Math.floor(Math.random() * window.innerHeight);
//     noButton.style.left = randomX + "px";
//     noButton.style.top = randomY + "px";
// });

// document.addEventListener("DOMContentLoaded", function(event) {
//     // Đảm bảo rằng button đã được tải vào DOM trước khi thêm sự kiện click
//     var button = document.getElementById("abc");
//     button.addEventListener("mouseover", function() {
//         var randomX = Math.floor(Math.random() * window.innerWidth);
//         var randomY = Math.floor(Math.random() * window.innerHeight);
//         noButton.style.left = randomX + "px";
//         noButton.style.top = randomY + "px";
//     });
// });