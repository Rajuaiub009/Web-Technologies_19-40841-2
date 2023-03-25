<?php 

require_once 'db_connect.php';


function showAllProducts(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `add_product` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showProduct($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `add_product` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

// function searchUser($username){
//     $conn = db_conn();
//     $selectQuery = "SELECT * FROM `add_manager` WHERE username LIKE '%$username%'";

    
//     try{
//         $stmt = $conn->query($selectQuery);
//     }catch(PDOException $e){
//         echo $e->getMessage();
//     }
//     $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     return $rows;
// }


function addProduct($data){
	$conn = db_conn();
    $selectQuery = "INSERT into add_product (productname, productcategory, productprice)
VALUES (:productname, :productcategory, :productprice)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':productname' => $data['productname'],
        	':productcategory' => $data['productcategory'],
        	':productprice' => $data['productprice']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateSeller($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE add_manager set name = ?, email = ?, username = ?  where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['email'], $data['username'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteSeller($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM add_manager WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}