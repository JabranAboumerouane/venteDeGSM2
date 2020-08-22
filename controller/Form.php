<?php

class form{
    private $monForm = '';
    private $classeBootstrap = 'form-group';

    public function __construct($fName,$fMethod,$fAction,$fOnsubmit='',$fLegend=''){
        $this->monForm='<form name="'.$fName.'" method="'.$fMethod.'" action="'.$fAction.'" onsubmit="'.$fOnsubmit.'">';
        $this->monForm.='<fieldset><legend>'.$fLegend.'</legend>';
    }

    public function getForm(){
        $this->endForm();
        return $this->monForm;
    }

//Fonction qui permet d'ajouter une zone de texte
    public function addEmail($fLabel,$fName,$fId,$fParam='',$fRequired=false , $fPlaceholder='' , $fValue='')
    {

        $this->monForm.='<label for="'.$fId.'">'.$fLabel.' </label>';
        $this->monForm.='<input class= "'.$this->classeBootstrap.'" type="email" name="'.$fName.'" id="'.$fId.'" '.$this->getRequired($fRequired).' placeholder="'.$fPlaceholder.'" value = "'.$fValue.'"/><br/>';
        $this->monForm.='<br/>';

    }

    private function getRequired($fRequired){
        if($fRequired==true){
            return 'required';
        }
        else{
            return '';
        }
    }

    public function addText($fLabel,$fName,$fId,$fParam='',$fRequired=false , $fPlaceholder='' , $fValue='')
    {

        $this->monForm.='<label for="'.$fId.'">'.$fLabel.' </label>';
        $this->monForm.='<input class= "'.$this->classeBootstrap.'" type="text" name="'.$fName.'" id="'.$fId.'" '.$this->getRequired($fRequired).' placeholder="'.$fPlaceholder.'" value = "'.$fValue.'"/><br/>';
        $this->monForm.='<br/>';

    }


    public function addPassword($fLabel,$fName,$fId,$fParam='',$fRequired=false , $fPlaceholder='' , $fValue='')
    {
        $this->monForm.='<label for="'.$fId.'">'.$fLabel.' </label>';
        $this->monForm.='<input class= "'.$this->classeBootstrap.'" type="password" name="'.$fName.'" id="'.$fId.'" '.$this->getRequired($fRequired).' placeholder="'.$fPlaceholder.'" value = "'.$fValue.'"/><br/>';
        $this->monForm.='<br/>';
    }

//Fonction qui permet d'ajouter un bouton d'envoi
    public function addSubmit($fName,$fValue,$fParam=null)
    {

        $this->monForm.='<br/><input class= "'.$this->classeBootstrap.'" type="submit" name="'.$fName.'" value="'.$fValue.'"/>';

    }


//Fonction qui permet de fermer le formulaire
    private function endForm()
    {
        $this->monForm.='</fieldset></form>';

    }

}
