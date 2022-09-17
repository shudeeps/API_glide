<!-- This page calculate the average from the selected date  -->
<?php 

define("PROJECT_ROOT_PATH", __DIR__ . "/");
require_once PROJECT_ROOT_PATH . "db_connect.php";


 $opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n"
  )
);

if(isset($_POST['dateFrom'])){
    $dateFrom=$_POST['dateFrom'];
    $dateTo=$_POST['dateTo'];






$context = stream_context_create($opts);

//$homepage = file_get_contents('http://mip-prd-web.azurewebsites.net/CustomDataDownload?LatestValue=true&Applicable=applicableAt&FromUtcDatetime=2022-08-31T18%3A15%3A00.000Z&ToUtcDateTime=2022-09-14T18%3A15%3A00.000Z&PublicationObjectStagingIds=PUBOBJ1660%2CPUBOB4507%2CPUBOB4508%2CPUBOB4510%2CPUBOB4509%2CPUBOB4511%2CPUBOB4512%2CPUBOB4513%2CPUBOB4514%2CPUBOB4515%2CPUBOB4516%2CPUBOB4517%2CPUBOB4518%2CPUBOB4519%2CPUBOB4521%2CPUBOB4520%2CPUBOB4522%2CPUBOBJ1661%2CPUBOBJ1662');
$file = file_get_contents('http://mip-prd-web.azurewebsites.net/CustomDataDownload?LatestValue=true&Applicable=applicableAt&FromUtcDatetime='.$dateFrom.'T18%3A15%3A00.000Z&ToUtcDateTime='.$dateTo.'T18%3A15%3A00.000Z&PublicationObjectStagingIds=PUBOBJ1660%2CPUBOB4507%2CPUBOB4508%2CPUBOB4510%2CPUBOB4509%2CPUBOB4511%2CPUBOB4512%2CPUBOB4513%2CPUBOB4514%2CPUBOB4515%2CPUBOB4516%2CPUBOB4517%2CPUBOB4518%2CPUBOB4519%2CPUBOB4521%2CPUBOB4520%2CPUBOB4522%2CPUBOBJ1661%2CPUBOBJ1662', false, $context);


/*** a new dom object ***/ 
$dom = new domDocument; 
 
/*** load the html into the object ***/ 
@$dom->loadHTML($file); 

/*** discard white space ***/ 
$dom->preserveWhiteSpace = false; 

/*** the table by its tag name ***/ 
$tables = $dom->getElementsByTagName('table'); 

/*** get all rows from the table ***/ 
$rows = $tables->item(0)->getElementsByTagName('tr'); 

/*** declare the variables ***/ 

$calorific_Value=[];
$i=0;
/*** loop over the table rows ***/ 
foreach ($rows as $row) {
   /*** get each column by tag name ***/ 
   $cols = $row->getElementsByTagName('td'); 



//  $applicable_For=$cols->item(1)->nodeValue;
 $calorific_Value[]= $cols->item(3)->nodeValue;
//  $location=$cols->item(2)->nodeValue;


}


$total_sum= array_sum($calorific_Value);
$total_length=count($calorific_Value);


$average_calorific_Vaule = $total_sum/$total_length;

var_dump($average_calorific_Vaule);
// $query = $connection->multiQuery($sql);

}
?>

<button type="button" class="btn btn-default" onclick="javascript:history.go(-1)">Back</button>


<h2>The avarage calculate_average is  <?php  echo $average_calorific_Vaule;  ?> </h2>


