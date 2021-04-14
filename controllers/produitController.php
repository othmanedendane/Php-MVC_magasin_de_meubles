<?php
class ProduitController{
    public function getAllProducts(){
        $products = Produit::getAll();
        return $products;
    }

    public function getOneProduct(){
        if(isset($_POST['id'])){
            $data = array (
                'id' => $_POST['id']
            );
            $product = Produit::getProduct($data);
            return $product;
        }
        
    }

    public function addProduct(){
        if(isset($_POST['submit'])){
            $data = array(
                'photo' => $_POST['photo'],
                'nom' => $_POST['nom'],
                'description' => $_POST['description'],
                'prix' => $_POST['prix'],
                'statut' => $_POST['statut'],
            );
            $result = Produit::add($data);
            if($result === 'ok'){
                Session::set('success','Produit ajouté');
                Redirect::to('home');
            }else{
                echo $result;
            }
        }
    }

    public function updateProduct(){
        if(isset($_POST['submit'])){
            $data = array(
                'id' => $_POST['id'],
                'photo' => $_POST['photo'],
                'nom' => $_POST['nom'],
                'description' => $_POST['description'],
                'prix' => $_POST['prix'],
                'statut' => $_POST['statut'],
            );
            $result = Produit::update($data);
            if($result === 'ok'){
                Session::set('success','Produit modifié');
                Redirect::to('home');
            }else{
                echo $result;
            }
        }
    }

    public function deleteProduct(){
        if(isset($_POST['id'])){
            $data['id'] = $_POST['id'];
            $result = Produit::delete($data);
            if($result === 'ok'){
                Session::set('success','Produit supprimé');
                Redirect::to('home');
            }else{
                echo $result;
            }
        }
    }
}
?>