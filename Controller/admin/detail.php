<?php
    require_once "../../Model/CRUD_Produit.php";
    $id=$_GET['id'];
    $crud = new CRUD_Produit();
    $Produit = $crud->find($id);
    include "../../View/admin/detail.php";
    
