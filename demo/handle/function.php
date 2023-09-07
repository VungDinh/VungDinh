
<?php

function readFileToData($filePath){
    $dataJson = file_get_contents($filePath);
    return json_decode($dataJson, true);
}

function writeFileToData($filePath, $data){
    $dataJson = json_encode($data);
    file_put_contents($filePath, $dataJson);
}

function checkUser($users, $email, $password) {
    foreach ($users as $index => $user) {
        if (
            $user['email'] == $email  &&
            $user['password'] == $password
        ) {
            return true;
        }
    }

    return false;

}

function createUser($filePath,$name, $email, $password){
        // chuyen doi du lieu tu json -> array
        $users = readFileToData($filePath);

        $userRegister = [
            "name" => $name,
            "email" => $email,
            "password" => $password
        ];
        array_push($users, $userRegister);
        writeFileToData($filePath, $users);
}

function searchProduct($name, $products){
    $kqSearch = [];
    if(!$name){
        $kqSearch = $products;
    }
    foreach($products as $key => $product){
        if($product['id'] == $name){
            $kqSearch[$key] = $product;
            continue;
        }
        //search chu thuong, hien thi ca chu hoa
        if(strpos(strtoupper($product['name']), strtoupper($name)) !== false){
            $kqSearch[$key] = $product;
            continue;
        //if(strpos($product['name'], $name) !== false){
          //  $kqSearch[$key] = $product;
          //  continue;
        }
        if($product['price'] == $name){
            $kqSearch[$key] = $product;
            continue;
        }
        if(strpos(strtoupper($product['remarks']), strtoupper($name)) !== false){
            $kqSearch[$key] = $product;
            continue;
        }
    }
    return $kqSearch;
}