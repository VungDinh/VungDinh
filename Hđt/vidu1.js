// class student {
//     name;
//     age;
//     constructor(name, age) {
//         this.name = name;
//         this.age = age;
//     }
//     talk(message) {
//         console.log("Tôi tên là:" + this.name + " " + message);
//     }
// }
// let khanh = new student("Khanh", 30)
// let vu = new student("Vu", 29)

// khanh.talk("Xin chao Vu");
// vu.talk("ok Khanh");

/*
Xay dung lop hình tròn radius(bán kinh)
phương thwusc: chu vi, diện tích
khởi tạo đối tượng hình tròn
in ra chu vi, diện tích hình tròn đó*/
class Circle{
    radius;
    constructor(radius) {
        this.radius = radius;
    }
    getDiameter(){
        return Math.PI * this.radius * 2;
    }
    getArea() {
        return Math.PI * this.radius * this.radius;
    }
}
let Circle = new Circle(2)
let area = Circle.getArea();
let dia = Circle.getDiameter();
console.log("Chu vi hình tròn là : " + dia);
console.log("Diện tích hình tròn là : " + area);
/*
_tính trừu tượng: loại bỏ đặc điểm, hành vi rieneg, giữ lại cái chung
-tính kế thừa:
-tính bao gói
-tính đa hình: cùng 1 hđ nhwung có kết quả khác nhau, ở các đối tượng khác nhau
