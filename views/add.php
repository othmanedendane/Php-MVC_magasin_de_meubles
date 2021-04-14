<?php 
if(isset($_POST['submit'])){
$new = new produitController();
$new->addProduct();
}
?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
        <div class="card">
        <div class="card-header">Ajouter un article</div>
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
                    <input type ="text" name="nom" class="form-control" placeholder="Nom">
                    </div>

                    <div class="form-group">
                    <label for="description">Description*</label>
                    <input type ="text" name="description" class="form-control" placeholder="Description">
                    </div>

                    <div class="form-group">
                    <label for="prix">Prix*</label>
                    <input type ="text" name="prix" class="form-control" placeholder="Prix">
                    </div>

                    <div class="form-group">
                    <select class="form-control" name="statut">
                        <option value="1">Disponible</option>
                        <option value="0">Rupture</option>
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