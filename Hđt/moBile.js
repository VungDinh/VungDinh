class Mobile {//Khai báo lớp
    constructor() {//Khai báo thuộc tính
        battery ;
        messages;
        inbox;
        outbox;
        Status;
        Name;

        constructor(iname){
            this.name = iname;
            this.pin = 100;
            this.message = "";
            this.inbox = [];
            this.outbox = [];
            this.Status = true;
        }
        checkstatus(){
            if(this.Status == true){
                console.log('dthoai' + this.Name+"dangbat");
                }
                else{
                    console.log('dthoai' + this.Name+"dangtat");
                }
    }
    turnOn(){}
    turnOff(){}
    changePin(){}
    writeMessage(){}
    sendMessage(){}
    seeInbox(){}
    seeOutbox(){}
    
}
}
