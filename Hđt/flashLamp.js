// Lớp Pin
class Battery {
    constructor(energy) {
        this.energy = energy; // Năng lượng của pin (đơn vị: mAh)
    }

    getEnergy() {
        return this.energy;
    }

    setEnergy(energy) {
        this.energy = energy;
    }
}

// Lớp Đèn
class FlashLamp {
    constructor() {
        this.isOn = false; // Trạng thái đèn (bật/tắt)
        this.battery = null; // Đối tượng pin
    }

    setBattery(battery) {
        this.battery = battery;
    }

    turnOn() {
        if (this.battery && this.battery.getEnergy() > 0) {
            this.isOn = true;
            console.log("Đèn đã được bật.");
        } else {
            console.log("Không đủ năng lượng để bật đèn.");
        }
    }

    turnOff() {
        this.isOn = false;
        console.log("Đèn đã được tắt.");
    }
}

// Sử dụng các lớp đối tượng
const battery = new Battery(1000); // Tạo một đối tượng pin với năng lượng 1000 mAh

const flashLamp = new FlashLamp(); // Tạo một đối tượng đèn
flashLamp.setBattery(battery); // Gắn đối tượng pin vào đèn

flashLamp.turnOn(); // Bật đèn
console.log("Năng lượng của pin:", flashLamp.battery.getEnergy()); // In ra năng lượng của pin

flashLamp.turnOff(); // Tắt đèn