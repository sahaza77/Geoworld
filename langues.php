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
 if (isset($_GET['name']) && !empty($_GET['name']) ){
 $continent = ($_GET['name']);
 $desPays = getCountriesByContinent($continent);
 }
 else{
 $continent = "Monde";
 $desPays = getAllCountries();
 }
 $langues= getLangue();
 ?>


<div class="container">
    <h1> <strong>Langues les plus parlées</strong> </h1>
    <div>
    <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; border: 2px solid black; border-collapse: collapse;">
    <thead style="background-color: transparent; color: black;">
         <tr>
         <th style="border: 1px solid black; text-align: center;">Language</th>
         <th style="border: 1px solid black; text-align: center;">Nombre de pays</th>
         </tr>
</thead>
       <?php
       // $desPays est un tableau dont les éléments sont des objets représentant
       // des caractéristiques d'un pays (en relation avec les colonnes de la table Country)
          foreach($langues as $langue) { ?>
          <tr>
          <td class="text-center" style="border: 1px solid black;"><?php echo $langue->Language?></td>
          <td class="text-center" style="border: 1px solid black;"> <?php echo $langue->NombreDePays?></td>
            
          </tr>
        <?php } ?>
    </table>
    </div>