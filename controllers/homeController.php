<?php

Class HomeController{
    public function index($page){
        include('views/'.$page.'.php');
    }
}
?>