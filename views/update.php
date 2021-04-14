<?php 
if(isset($_POST['id'])){
$exist = new produitController();
$product = $exist->getOneProduct();
}

if(isset($_POST['submit'])){
    $exist = new produitController();
    $exist->updateProduct();
    }
?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
        <div class="card">
        <div class="card-header">Modifier un article</div>
            <div class="class-body bg-light">
            <a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
                <i class="fas fa-home"></i>
                </a>
                <form method="post">

                <div class="form-group">
                    <label for="photo">Photo*</label>
                    <input type ="text" name="photo" class="form-control" placeholder="Photo">
                    </div>

                    <div class="form-group">
                    <label for="nom">Nom*</label>
                    <input type ="text" name="nom" class="form-control" placeholder="Nom"
                    value="<?php echo $product->nom; ?>"
                    >
                    </div>

                    <div class="form-group">
                    <label for="description">Description*</label>
                    <input type ="text" name="description" class="form-control" placeholder="Description"
                    value="<?php echo $product->description; ?>">
                    <input type="hidden" name="id" value="<?php echo $product->id;?>">
                    </div>

                    <div class="form-group">
                    <label for="prix">Prix*</label>
                    <input type ="text" name="prix" class="form-control" placeholder="Prix"
                    value="<?php echo $product->prix; ?>">
                    </div>

                    <div class="form-group">
                    <select class="form-control" name="statut">
                        <option value="1" value=<?php echo $product->statut ? 'selected' : ''; ?>>Disponible</option>
                        <option value="0" value=<?php echo $product->statut ? 'selected' : ''; ?>>Rupture</option>
                    </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="submit">Valider</button>
                    </select>
                    </div>
                </form>
            </div>
        </div>
        </div>
</div>
</div>