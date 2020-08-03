<?php
var_dump($users->result);
/*$out  = "";

$titre= '<tr>';
$titre_trt= false;

foreach($users->result as $key => $element){
    $out .= '<tr id ="'.$element->user.'"  >';
    foreach($element as $subkey => $subelement){
        if($titre_trt==false){
            $titre .= '<th>'.$subkey.'</th>' ;
        }

        $out .= '<td id="'.$subkey.'">'.$subelement.'</td>' ;
    }

    if($titre_trt==false){
        $titre.= '<th>Modifier</th></tr>';
    }
    $titre_trt= true;
    $out .= '<td id="modifier" >Modifier</td></tr>';
}
$out = '<table id ="users" >'.$titre.$out.'</table>';

echo $out;

?>*/
foreach ($users->resut as $row=>$key){
    echo $key->email;
}