<?php
$datas = require('image_slide/donnees.php');

function findOneById($id){
    global $datas;
    foreach($datas as $data){
        if ($data['id']==$id){
            return $data;
        }

    }
    return false;
}

function CountNumberOfPhoto($id){
    $nombre=0;
    $datas=findOneById($id)['image'];
    foreach($datas as $data){
        $nombre+=1;
    }
    return $nombre;
}

function verifieIdentification(){
    if (isset($_SESSION['id'])){
        return true;
    } else {
        return false;
    }
}