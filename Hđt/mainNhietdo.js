class Temperature{
    DoC;
    constructor (inputDoc){
        this.DoC= inputDoc;
    }
    getDoF(){
        let result = this.DoC*1.8+32;
        return result;
    }
    getKevin(){
        let result = this.DoC+273.15;
        return result;
    }
}