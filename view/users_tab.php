<?php
$idn=count($users->result);
var_dump($idn);//nombre de résultat id dans la query
$out  = "";

    $titre= '<tr>';
    $titre_trt= false;


    foreach($users->result as $row => $key){
    $out .= '<tr id ="'.$key->id_user.'"  >';

    foreach($key as $element => $subelement){
    if($titre_trt==false){
    $titre .= '<th>'.$element.'</th>' ;
    }

    $out .= '<td id="'.$element.'">'.$subelement.'</td>' ;
    }

    if($titre_trt==false){
    $titre.= '<th>Modifier</th></tr>';
}
$titre_trt= true;


$out .= '<td><a href="../controller/edit_user_by_admin.php?id='.$key->id_user.' " class="btn btn-info" role="button" title= >Modifier</a></td>';
$out .= '<td><a href="../controller/remove_user_by_admin.php?id='.$key->id_user.' " class="btn btn-info" role="button" title= >Suprimer</a></td></tr>';
    }

$out= '<table class="table table-striped tailletab" >'.$titre.$out.'</table>';


echo $out;