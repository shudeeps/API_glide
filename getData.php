<!-- To display all the data    -->
<?php 

define("PROJECT_ROOT_PATH", __DIR__ . "/");
require_once PROJECT_ROOT_PATH . "db_connect.php";

$sql= "SELECT * FROM data";
$result = $connection->fetchAllData($sql);


if (mysqli_num_rows($result) > 0) {
?>

<button type="button" class="btn btn-default" onclick="javascript:history.go(-1)">Back</button>
  <table>
  
  <tr>
    <td>Id</td>
    <td>Applicable For</td>
    <td>Calorific value</td>
    <td>Area</td>

  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["applicable_for"]; ?></td>
    <td><?php echo $row["calorific_value"]; ?></td>
    <td><?php echo $row["Area"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>


