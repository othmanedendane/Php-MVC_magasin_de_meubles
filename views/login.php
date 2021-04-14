<?php 

if(isset($_POST['submit'])){
    $log = new AdminController();
    $log->auth();
    }
?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
        <div class="card">
        <div class="card-header">
        <h3 class = "text-center">Connexion</h3>
        </div>
            <div class="class-body bg-light">
            

                    <form method="post" class="mr-1" >
                    <div class="form-group">
                    <input type="text" name="username" placeholder="Pseudo" class="form-control">
                    </div>

                    <div class="form-group">
                    <input type="password" name="password" placeholder="Mot de passe" class="form-control">
                    </div>
                    <button name ="submit" class="btn btn-sm btn-primary">Connexion</button>
                    </form>
            </div>
            
        </div>
        </div>
</div>
</div>