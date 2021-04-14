<?php 
$data = new produitController();
$produits = $data->getAllProducts();

?>
<h1> Bonjour admin !</h1>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="class-body bg-light">
                <a href="<?php echo BASE_URL;?>add" class="btn btn-sm btn-primary mr-2 mb-2">
                    <i class="fas fa-plus"></i>
                </a>
            <table class="table table-hover">
                <thead>
                    <tr>
                    
                    <th scope="col">Nom</th>
                    <th scope="col">Description</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Statut</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach($produits as $produit):?>
                    <tr>
                        
                        <td><?php echo $produit ['nom']; ?></td>
                        <td><?php echo $produit ['description']; ?></td>
                        <td><?php echo $produit ['prix'].'$'; ?></td>
                        <td><?php echo $produit ['statut']
                                ?
                                '<span class="badge badge-success">Disponible</span>'
                                :
                                '<span class="badge badge-danger">Rupture</span>';
                        ; ?></td>
                        <td class="d-flex flex-row">
                            <form method="post" class="mr-1" action="update">
                                <input type="hidden" name="id" value="<?php echo $produit['id'];?>">
                                <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                            </form>
                            <form method="post" class="mr-1" action="delete">
                                <input type="hidden" name="id" value="<?php echo $produit['id'];?>">
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                    </td>
                    </tr>

                   
                <?php endforeach;?>
                </tbody>
            </table>
            </div>
        </div>
        </div>
</div>
</div>