<?php
/**
 * Villes du monde
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

<?php require_once 'header.php'; ?>
<?php
require_once 'inc/manager-db.php';

// Récupérer toutes les villes triées par ordre alphabétique
$villes = getToutesLesVilles();

?>

<div class="container">
    <h1><strong>Toutes les Villes du Monde</strong></h1>
    <div>
        <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; border: 2px solid black; border-collapse: collapse;">
            <thead style="background-color: transparent; color: black;">
                <tr>
                    <th style="border: 1px solid black; text-align: center;">Nom</th>
                    <th style="border: 1px solid black; text-align: center;">Population</th>
                    <th style="border: 1px solid black; text-align: center;">District</th>
                    <th style="border: 1px solid black; text-align: center;">Pays</th>
                </tr>
            </thead>
            <tbody>
            <?php
            // Affichage des villes
            foreach ($villes as $ville) { ?>
                <tr>
                    <td class="text-center" style="border: 1px solid black;"><?php echo $ville->Name ?></td>
                    <td class="text-center" style="border: 1px solid black;"><?php echo $ville->Population ?></td>
                    <td class="text-center" style="border: 1px solid black;"><?php echo $ville->District ?></td>
                    <td class="text-center" style="border: 1px solid black;"><?php echo $ville->CountryName ?></td> 
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once 'footer.php'; ?>
