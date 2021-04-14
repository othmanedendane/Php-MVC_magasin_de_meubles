<?php

class Produit {

    static public function getAll(){
        $stmt =DB::connect()->prepare('SELECT * FROM produit');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;


    }

    static public function getProduct($data){
        $id = $data['id'];
        try{
            $query = 'SELECT * FROM produit WHERE id=:id';
            $stmt =DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
            $produit = $stmt->fetch(PDO::FETCH_OBJ);
            return $produit;
        }catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();

        }
        }
    

    static public function add($data){
        $stmt =DB::connect()->prepare('INSERT INTO produit (photo,nom,description,prix,statut) VALUES (:photo,:nom,:description,:prix,:statut)');
        $stmt -> bindParam(':photo',$data['photo']);
        $stmt -> bindParam(':nom',$data['nom']);
        $stmt -> bindParam(':description',$data['description']);
        $stmt -> bindParam(':prix',$data['prix']);
        $stmt -> bindParam(':statut',$data['statut']);

        if($stmt->execute()){
            return 'ok';
        }
        else{
            return 'error';
        }
        $stmt -> close();
        $stmt = null;
        }

        static public function update($data){
            $stmt =DB::connect()->prepare('UPDATE produit SET photo = :photo,nom = :nom,description = :description,prix = :prix,statut = :statut WHERE id = :id');
            $stmt -> bindParam(':id',$data['id']);
            $stmt -> bindParam(':photo',$data['photo']);
            $stmt -> bindParam(':nom',$data['nom']);
            $stmt -> bindParam(':description',$data['description']);
            $stmt -> bindParam(':prix',$data['prix']);
            $stmt -> bindParam(':statut',$data['statut']);
    
            if($stmt->execute()){
                return 'ok';
            }
            else{
                return 'error';
            }
            $stmt -> close();
            $stmt = null;
            }

            static public function delete($data){
                $id = $data['id'];
                try{
                    $query = 'DELETE FROM produit WHERE id=:id';
                    $stmt =DB::connect()->prepare($query);
                    $stmt->execute(array(":id" => $id));
                    if($stmt->execute()){
                        return 'ok';
                    }
                   
                }catch(PDOException $ex){
                    echo 'erreur' . $ex->getMessage();
        
                }
            }


    }




?>