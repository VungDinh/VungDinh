
<?php

function readFileToData($filePath)
{
    $dataJson = file_get_contents($filePath);
    return json_decode($dataJson, true);
}

function writeFileToData($filePath, $data)
{
    $dataJson = json_encode($data);
    file_put_contents($filePath, $dataJson);
}

function checkUser($users, $email, $password)
{
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

//function createUser($filePath, $name, $email, $password)
//{
   // try {
        // chuyen doi du lieu tu json -> array
      //  $users = readFileToData($filePath);

      //  $userRegister = [
         //   "name" => $name,
          //  "email" => $email,
          //  "password" => $password
        //];
        //array_push($users, $userRegister);
        //writeFileToData($filePath, $users);
    //} catch (Exception $ex) {
       // return $ex->getMessage();
    //}
//}
function createUser($filePath, $name, $email, $facebook,$password)
{
    try {
        // chuyen doi du lieu tu json -> array
        $users = readFileToData($filePath);

        $userRegister = [
            "Name" => $name,
            "Email" => $email,
            "Facebook" => $facebook,
            "Password" => $password,
        ];
        array_push($users, $userRegister);
        writeFileToData($filePath, $users);
    } catch (Exception $ex) {
        return $ex->getMessage();
    }
}

function searchProduct($name, $products)
{
    $kqSearch = [];
    if (!$name) {
        $kqSearch = $products;
    }
    foreach ($products as $key => $product) {
        if ($product['id'] == $name) {
            $kqSearch[$key] = $product;
            continue;
        }
        //search chu thuong, hien thi ca chu hoa
        if (strpos(strtoupper($product['name']), strtoupper($name)) !== false) {
            $kqSearch[$key] = $product;
            continue;
            //if(strpos($product['name'], $name) !== false){
            //  $kqSearch[$key] = $product;
            //  continue;
        }
        if ($product['price'] == $name) {
            $kqSearch[$key] = $product;
            continue;
        }
        if (strpos(strtoupper($product['remarks']), strtoupper($name)) !== false) {
            $kqSearch[$key] = $product;
            continue;
        }
    }
    return $kqSearch;
}

function sortByKey($products, $key, $desc)
{
    try {
        usort($products, function ($a, $b) use ($key, $desc) {
            if ($desc) {
                return $a[$key] - $b[$key];
            } else {
                return $b[$key] - $a[$key];
            }
        });
        return $products;
    } catch (Exception $ex) {
        return $ex->getMessage();
    }
}
