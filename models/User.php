<?php

class User {
static public function login($data){
    $username = $data['username'];
    try{
        $query = 'SELECT * FROM admins WHERE USERNAME=:username';
        $stmt =DB::connect()->prepare($query);
        $stmt->execute(array(":username" => $username));
        $user =$stmt->fetch(PDO::FETCH_OBJ);
        return $user;
        if($stmt->execute()){
            return 'ok';
        }
       
    }catch(PDOException $ex){
        echo 'erreur' . $ex->getMessage();

    }
}

}
?>