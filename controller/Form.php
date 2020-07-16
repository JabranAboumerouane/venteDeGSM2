<?php


class Form
{
private $myform;
private $codeInit;
private $codetext;
private $codesubmit;
private $endForm;

    public function __construct($fStyle, $faction, $fmethode,$ftitre){

        $this->codeInit="<form id=".$fStyle." action=".$faction."method".$fmethode.">";
        $this->codeInit.="<fieldset><legend>".$ftitre."</legend>";
        echo $this->codeInit;

    }
    public function setFirstName($ftype,$fname){
        $this->codetext="<p>Votre prénom : <input type=".$ftype." name=".$fname." value='firsname'></p>";
        echo $this->codetext;

    }
    public function setLastName($ftype,$lname){
        $this->codetext="<p>Votre Nom : <input type=".$ftype." name=".$lname." value='lastname'></p>";
        echo $this->codetext;

    }
    public function setEmail($ftype,$femail){
        $this->codetext="<p>Votre Email : <input type=".$ftype." name=".$femail." value='toto@server.xx'></p>";
        echo $this->codetext;

    }
    public function setPassword($ftype,$fpassword){
        $this->codetext="<p>Votre Password : <input type=".$ftype." name=".$fpassword." value='password'></p>";
        echo $this->codetext;

    }
    public function setSubmit($fsubmit="submit",$fvalue="ok"){
        $this->endForm="<p><input type=".$fsubmit." value=".$fvalue."></p>";
        $this->endForm.="</field>";
        $this->endForm.="</form>";
        echo $this->endForm;
    }
}

//$formulaire=new Form("toto", "post");
//echo $formulaire->setFirstName("text","firstname");
//echo $formulaire->setLastName("text","lastname");
//echo $formulaire->setSubmit();


