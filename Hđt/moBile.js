class Mobile {
    // khai bao thuoc tinh
    pin;
    messages;
    inBox;
    outBox;
    status;
    name;

    constructor(iName) {
        this.name = iName;
        this.pin = 80;
        this.messages = "";
        this.inBox = [];
        this.outBox = [];
        this.status = true;
    }

    checkStatus(){
        this.pin--;
        if(this.status == true) {
            console.log('Dien thoai ' + this.name  + " dang bat");
        } else {
            console.log('Dien thoai ' + this.name  + " dang tat");
        }
    }

    turnOn(){
        this.pin--;
        this.status = true;
    }

    turnOff(){
        this.pin--;
        this.status = false;
    }
    
    changePin(){
        let x = setInterval(() => {
            this.pin++;
            console.log('dang sac pin ' + this.pin + "%")
            if(this.pin == 100) {
                console.log('pin da day')
                clearInterval(x);
            }
        }, 500)
    }

    writeMessage(text){
        this.pin--;
        this.messages = text;
    }

    sendMessage(phone){
        this.pin--;
        phone.inBox.push(this.messages)
        this.outBox.push(this.messages)
    }
    seeInBox(){
        this.pin--;
        return this.inBox;
    }
    seeOutBox(){
        this.pin--;
        return this.outBox;
    }
}