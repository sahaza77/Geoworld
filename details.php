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
$id = ($_GET['name']);
$pays = getPays($id);
}
?>
<main role="main" class="flex-shrink-0">

  <div class="container">
       <?php
       echo "<h1> $pays->Name </h1>"; ?>
       <div>
       <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; border: 2px solid black; border-collapse: collapse;">
       <thead style="background-color: transparent; color: black;">
           <tr>
          <th style="border: 1px solid black; text-align: center;">Drapeau</th>
          <th style="border: 1px solid black; text-align: center;">Nom</th>
          <th style="border: 1px solid black; text-align: center;">Population</th>
          <th style="border: 1px solid black; text-align: center;">Président</th>
          <th style="border: 1px solid black; text-align: center;"> Surface</th>
          <th style="border: 1px solid black; text-align: center;"> Capitale</th>
         </tr>
               </thead>
               <tbody>                                                  
                 <tr>
                 <td class="text-center" style="border: 1px solid black;"> <?php $source = "images/flag/".strtolower($pays->Code2).".png" ?>
             <img src=<?= $source; ?> height="45" width="60" ></td>
          <td class="text-center" style="border: 1px solid black;"><a href="index2.php?name=<?php echo $pays->Name; ?>"><?php echo $pays->Name; ?></a></td>
            <td class="text-center" style="border: 1px solid black;"> <?php echo $pays->Population ?></td>
            <td class="text-center" style="border: 1px solid black;"><?php echo $pays->HeadOfState ?></td>
            <td class="text-center" style="border: 1px solid black;"> <?php echo $pays->SurfaceArea ?></td>
            <td class="text-center" style="border: 1px solid black;"> <?php $capitale = getCapitale($pays->Capital);
            if ($capitale) {
                echo $capitale->Name; 
            } else {
                echo '-----';
            }
            ?></td>      
                  </tr>
                 
               </tbody>
             </table>                          
       <?php
       require_once 'javascripts.php';
       require_once 'footer.php';
       ?>