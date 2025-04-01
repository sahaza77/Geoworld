<?php
/**
 * Home Page
 *
 * PHP version 7
 *
 * @category  Page
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

 ?>
 <?php  require_once 'header.php'; ?>
 <?php
 require_once 'inc/manager-db.php';
 if (isset($_GET['id']) && !empty($_GET['id'])) {
    $idPays = $_GET['id'];
    $pays = getPays($idPays); // Obtenir les informations du pays
    $villes = getVilles($idPays); // Récupérer les villes du pays
   
    //var_dump($villes);
}
 ?>


<div class="container">
    <h1> <strong>Villes</strong> </h1>
    <div>
    <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; border: 2px solid black; border-collapse: collapse;">
    <thead style="background-color: transparent; color: black;">
         <tr>
         <th style="border: 1px solid black; text-align: center;">Nom</th>
         <th style="border: 1px solid black; text-align: center;">Population</th>
         <th style="border: 1px solid black; text-align: center;">District</th>
         </tr>
</thead>
       <?php
       // $desPays est un tableau dont les éléments sont des objets représentant
       // des caractéristiques d'un pays (en relation avec les colonnes de la table Country)
          foreach($villes as $ville) { ?>
          <tr>
          <td class="text-center" style="border: 1px solid black;"><?php echo $ville->Name?></td>
          <td class="text-center" style="border: 1px solid black;"> <?php echo $ville->Population ?></td>
          <td class="text-center" style="border: 1px solid black;"> <?php echo $ville->District ?></td>
            
          </tr>
        <?php } ?>
    </table>
    </div>