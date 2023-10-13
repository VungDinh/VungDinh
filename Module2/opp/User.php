/*
chú ý: 1 lớp con kế thừa 1 lớp cha, nhưng cha có nhiều con
 Final: chống kế thừa
* Xay dung 3 class:

 * User:

 *  thuoc tinh :id, name, email, phone

 *  phuong thuc: getName(), getEmail(), getPhone(), getInfo()

 *

 * Customer:

 *   thuoc tinh: id, name, email, phone, address,

 *   phuong thuc: getName(), getEmail(), getPhone(), getAddress(), getInfo()

 * Student:

 *   thuoc tinh: id, name, email, phone, address, group, rank

 *   phuong thuc: getName(), getEmail(), getPhone(), getAddress(), getInfo()

 *   getGroup(), getRank()

<?php
class User {
    protected $id;
    protected $name;
    protected $email;
    protected $phone;

    public function __construct($id, $name, $email, $phone) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getInfo() {
        return "ID: " . $this->id . "Name: " . $this->name . "Email: " . $this->email . "Phone: " . $this->phone;
    }
}

class Customer extends User {
    protected $address;

    public function __construct($id, $name, $email, $phone, $address) {
        parent::__construct($id, $name, $email, $phone);
        $this->address = $address;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getInfo() {
        return parent::getInfo() . "Address: " . $this->address;
    }
}

class Student extends User {
    protected $address;
    protected $group;
    protected $rank;

    public function __construct($id, $name, $email, $phone, $address, $group, $rank) {
        parent::__construct($id, $name, $email, $phone);
        $this->address = $address;
        $this->group = $group;
        $this->rank = $rank;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getGroup() {
        return $this->group;
    }

    public function getRank() {
        return $this->rank;
    }

    public function getInfo() {
        return parent::getInfo() . "Address: " . $this->address . "Group: " . $this->group . "Rank: " . $this->rank;
    }
}
?>