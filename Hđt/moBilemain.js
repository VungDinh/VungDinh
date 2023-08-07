let iphone = new Mobile('iphone');
let samsung = new Mobile('samsung');
iphone.writeMessage('Xin chao ban, toi la Iphone');
iphone.sendMessage(samsung);
samsung.writeMessage('Hi');
samsung.sendMessage(iphone);

console.log(iphone.seeInBox());