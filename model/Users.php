<?php


class Users extends Model
{

    public $result; // la table


    public function getAffiche()
    {

        //connexion à la base de données
        $this->request = $this->connexion->prepare("SELECT * FROM utilisateurs");
        $this->request->execute(array());
        $result = $this->request->fetchAll(PDO::FETCH_ASSOC);
        var_dump($result);
        echo 'ici ' . sizeof($result) . ' la taille ';
        foreach ($result as $row => $table) {


            ?>
            <table class="table">
                <thead>
                <tr>
                    <?php foreach ($table as $cle => $element) {
                        echo '<th scope="col">' . $cle . '</php></th>';
                    } ?>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <?php foreach ($table as $cle => $element) {
                        echo '<td>' . $element . '</td>';
                    } ?>
                </tr>
                </tbody>
            </table>
            <?php


        }

    }
}
//foreach($this->result as $cle => $valeur) {
//echo $cle[2] ,' : ', $valeur[2] ,'<br/>'
// }