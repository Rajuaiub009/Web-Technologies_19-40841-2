<?php 

require_once 'db_connect.php';


function showAllSellers(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `add_manager` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showSeller($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `add_manager` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchUser($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `add_manager` WHERE username LIKE '%$username%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addSeller($data){
	$conn = db_conn();
    $selectQuery = "INSERT into add_manager (name, email, username, password, retypepassword)
VALUES (:name, :email, :username, :password, :retypepassword)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':username' => $data['username'],
        	':password' => $data['password'],
        	':retypepassword' => $data['retypepassword']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


// function updateSeller($id, $data){
//     $conn = db_conn();
//     $selectQuery = "UPDATE add_manager set  name = ?, email = ?, username = ?  where username = ?";
//     try{
//         $stmt = $conn->prepare($selectQuery);
//         $stmt->execute([
//         	$data['name'],$data['email'], $data['username'], $username
//         ]);
//     }catch(PDOException $e){
//         echo $e->getMessage();
//     }
    
//     $conn = null;
//     return true;
// }

function deleteSeller($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM add_manager WHERE `username` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}