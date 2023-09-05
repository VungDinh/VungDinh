class Rectangle{
    with;
    height;

constructor(inputWidth,inputHeight){
this.width = inputWidth;
this.height = inputHeight;
}
getArea(){
    let result = this.width*this.height;
    return result;
}
getPerimeter(){
    let result = (this.width+this.height)*2;
    return result;
}
}