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
$name = ($_GET['name']);
$detailpays =  getPaysByName($name);
//var_dump($detailpays);
}
?>
<div class="container">
<?php
echo "<h1>  $detailpays->Name </h1>"; ?>
<div>
<table class="table table-striped table-bordered table-hover" style="width:100%; border: 2px solid black; border-collapse: collapse;">
<thead>
         <tr>
          <th>drapeaux</th>
          <th>Surface</th> 
         <th>Population</th> 
         <th>Président</th>      
         <th>Capitale </th>           
         </tr>
        </thead>
        <tbody>
          <tr>
          <td> <?php $source= "images/flag/".strtolower($detailpays->Code2).".png"?>
            <img src=<?= $source; ?> height="45" width="60" ></td>
            <td> <?php echo $detailpays->SurfaceArea?></td> 
            <td> <?php echo $detailpays->Population ?></td> 
            <td> <?php echo $detailpays->HeadOfState ?></td>           
            <td> <?php  echo getCapitale($detailpays->Capital)->Name; ?></td>
           </tr>        
        </tbody>
      </table>
    
<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>