<?php

class form{
    private $monForm = '';
    private $classeBootstrap = '';

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

//Fonction supplémentaire qui permet d'ajouter du texte
    public function addText2($fLabel,$fParam)
    {

        $this->monForm.= $fLabel;
        $this->monForm.='<br/>';

    }

//Fonction qui permet d'ajouter un bouton radio
    public function addRadio($fLabel,$fName,$fId,$fParam)
    {

        $this->monForm.='<input class= "'.$this->classeBootstrap.'" type="radio" name="'.$fName.'" value="'.$fId.'" id="'.$fId.'"/>';
        $this->monForm.='<label for="'.$pId.'">'.$fLabel.' </label><br/>';

    }

//Fonction qui permet d'ajouter une case a cocher
    public function addCheckbox($fLabel,$fName,$fParam)
    {

        $this->monForm.='<input class= "'.$this->classeBootstrap.'" type="checkbox" name="'.$fName.'" value="'.$fName.'" id="'.$fName.'" />';
        $this->monForm.='<label for="'.$fName.'">'.$fLabel.'</label><br/>';

    }

    public function addHidden($pName,$fId,$fValue='')
    {

        $this->monForm.='<input type="hidden" name="'.$fName.'" id="'.$fId.'"  value = "'.$fValue.'"/><br/>';
    }


//Fonction qui permet d'ajouter un bouton d'envoi
    public function addSubmit($fName,$fValue,$fParam=null)
    {

        $this->monForm.='<br/><input class= "'.$this->classeBootstrap.'" type="submit" name="'.$fName.'" value="'.$fValue.'"/>';

    }

//Fonction qui permet d'ajouter un bouton reset
    public function addReset($fName,$fValue,$fParam)
    {

        $this->monForm.='  <input class= "'.$this->classeBootstrap.'" type="reset" name="'.$fName.'" value="'.$fValue.'"/>';

    }

//Fonction qui permet d'ajouter un bouton simple
    public function addButton($fName,$fValue,$fRetour,$fParam)
    {

        $this->monForm.=' <input class= "'.$this->classeBootstrap.'" type="button" name="'.$fName.'" value="'.$fValue.'" onclick="'.$fRetour.'" />';

    }

//Fonction qui permet de fermer le formulaire
    private function endForm()
    {
        $this->monForm.='</fieldset></form>';

    }

}
