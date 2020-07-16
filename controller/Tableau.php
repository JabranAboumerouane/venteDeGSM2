<?php


class Tableau{
    public $tableau=array();


    public function getTableau(array ()){



    }?>
        <div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</php></th>
<th scope="col">Nom</th>
<th scope="col">Prénom</th>
<th scope="col">Code</th>
<th scope="col">Actif</th>
</tr>
</thead>
<tbody>
<tr>
    <th scope="row"><?php echo $resultat['idUtilisateurs']; ?></th>
<td><?php echo $resultat['Nom']; ?></td>
<td><?php echo $resultat['Prénom']; ?></td>
<td><?php echo $resultat['Code']; ?></td>
<td><?php echo $resultat['actif']; ?></td>
</tr>
</tbody>
</table>
</div>
<?php
}