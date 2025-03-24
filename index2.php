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
/*
if (isset($_GET['id']) && !empty($_GET['id'])) {
  $country_id = $_GET['id'];
  $capital = getCapitale($idpays); 
} else {
  $capital = null;
}*/
?>

<main role="main" class="flex-shrink-0">

  <div class="container">
  <?php
echo "<h1>" . $continent . "</h1>";
?>
    <div>
     <table class="table">
         <tr>
          <th>Drapeau</th>
           <th>Nom</th>
           <th>Population</th>
           <th>Président</th>
           <th> Surface</th>
           <th> Capitale</th>
         </tr>
       <?php
       // $desPays est un tableau dont les éléments sont des objets représentant
       // des caractéristiques d'un pays (en relation avec les colonnes de la table Country)
       // Bouche pour afficher tout les pays dans le tableau
       foreach ($desPays as $pays) : ?>
          <tr>
          <td> <?php $source = "images/flag/".strtolower($pays->Code2).".png" ?>
             <img src=<?= $source; ?> ></td>
          <td><a href="index2.php?id=<?php echo $pays->id; ?>"><?php echo $pays->Name; ?></a></td>
            <td> <?php echo $pays->Population ?></td>
            <td> <?php echo $pays->HeadOfState ?></td>
            <td> <?php echo $pays->SurfaceArea ?></td>
            <td> <?php $capitale = getCapitale($pays->Capital);
            if ($capitale) {
                echo $capitale->Name; 
            } else {
                echo '-----';
            }
            ?></td>
          </tr>
        <?php endforeach ; ?>
     </table>
    </div>
  </div>
</main>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>