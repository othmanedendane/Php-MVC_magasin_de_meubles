<?php

Class AdminController{

    public function auth(){
        if(isset($_POST['submit'])){
            $data['username'] = $_POST['username'];
            $result = User::login($data);
            /*if($result->username === $_POST['username'] && password_verify($_POST['password'],$result->password))
            {
                $_SESSION['logged']=true;
                $_SESSION['username']=$result->username;
                Redirect::to('admin');
            }else{
                Session::set('error','Pseudo ou mot de passe est incorrect');
                Redirect::to('login');
            }*/
            Redirect::to('admin');
        }
    }


  



    public function index($page){
        include('views/'.$page.'.php');
    }
}
?>