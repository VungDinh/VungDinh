<?php
function readFileJson($filePath){
    //xu ly ngoai le
    if(!file_exists($filePath)){
        //tung ra ngoai le
        throw new Exeption(message: "File not found");
    }
    $dataJson = file_get_contents($filePath);
    return json_decode($dataJson, associate: true);
}
//bat ngoai le
try{
    
}