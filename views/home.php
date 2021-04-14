<?php 
$data = new produitController();
$produits = $data->getAllProducts();


?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-10 mx-auto">
        <?php include('./views/includes/alerts.php');?>
        <button onclick="window.location.href='login'" name="submit" class="btn btn-sm btn-primary" >Admin</button>
        <div class="card">
            <div class="class-body bg-light">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">Photo</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Description</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Statut</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach($produits as $produit):?>
                    <tr>
                        <th scope="row"><?php echo "<img src='./images/$produit[1]'style = height:70%;width:50%;align=center>"; ?></th>
                        <td><?php echo $produit ['nom']; ?></td>
                        <td><?php echo $produit ['description']; ?></td>
                        <td><?php echo $produit ['prix'].'$'; ?></td>
                        <td><?php echo $produit ['statut']
                                ?
                                '<span class="badge badge-success">Disponible</span>'
                                :
                                '<span class="badge badge-danger">Rupture</span>';

                        
                        ; ?></td>
                    </tr>

                   
                <?php endforeach;?>
                </tbody>
            </table>
            </div>
        </div>
        </div>
</div>
</div>