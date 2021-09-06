<?php 

$username = "shreyans";                   // Use your username
$password = "Qwerty123";                  // and your password
$database = "oracle.cise.ufl.edu/orcl";   // and the connect string to connect to your database

$query = "SELECT YEAR, ROUND(TYPE_1/TOTAL*100,2) AS Type_1, ROUND(TYPE_5/TOTAL*100,2) AS Type_5, ROUND(TYPE_6/TOTAL*100,2) AS Type_6, 
ROUND(TYPE_7/TOTAL*100,2) AS Type_7, ROUND(TYPE_8/TOTAL*100,2) AS Type_8, ROUND(TYPE_9/TOTAL*100,2) AS Type_9, 
ROUND(TYPE_10/TOTAL*100,2) AS Type_10, ROUND(TYPE_11/TOTAL*100,2) AS Type_11, ROUND(TYPE_14/TOTAL*100,2) AS Type_14, 
ROUND(TYPE_16/TOTAL*100,2) AS Type_16, ROUND(TYPE_17/TOTAL*100,2) AS Type_17, ROUND(TYPE_18/TOTAL*100,2) AS Type_18, 
ROUND(TYPE_19/TOTAL*100,2) AS Type_19, ROUND(TYPE_20/TOTAL*100,2) AS Type_20, ROUND(TYPE_21/TOTAL*100,2) AS Type_21, 
ROUND(TYPE_22/TOTAL*100,2) AS Type_22, ROUND(TYPE_23/TOTAL*100,2) AS Type_23
FROM (SELECT TYPE_1, type_5, type_6, type_7, type_8, type_9, type_10, type_11, type_14, type_16, type_17, type_18, type_19, type_20, type_21, type_22, type_23, 
TYPE_1 + TYPE_5 + TYPE_6 + TYPE_7 + TYPE_8 + TYPE_9 + TYPE_10 + TYPE_11 + TYPE_14 + TYPE_16 + TYPE_17 + TYPE_18 + TYPE_19 + TYPE_20 + TYPE_21 + TYPE_22 + TYPE_23 AS TOTAL, YEAR
FROM (SELECT COUNT(A.VEHICLE_ID) AS TYPE_1, A.YEAR
FROM (SELECT v.vehicle_id, v.vehicle_type, c.year
FROM DOSPINA.VEHICLE V, DOSPINA.COLLISION C
WHERE v.cid = c.collision_id AND v.vehicle_type <> -1) A 
WHERE VEHICLE_TYPE = 1
GROUP BY A.YEAR, a.vehicle_type
ORDER BY YEAR, VEHICLE_TYPE)

NATURAL JOIN
(SELECT COUNT(A.VEHICLE_ID) AS TYPE_5, A.YEAR
FROM (SELECT v.vehicle_id, v.vehicle_type, c.year
FROM DOSPINA.VEHICLE V, DOSPINA.COLLISION C
WHERE v.cid = c.collision_id AND v.vehicle_type <> -1) A 
WHERE VEHICLE_TYPE = 5
GROUP BY A.YEAR, a.vehicle_type
ORDER BY YEAR, VEHICLE_TYPE)

NATURAL JOIN
(SELECT COUNT(A.VEHICLE_ID) AS TYPE_6, A.YEAR
FROM (SELECT v.vehicle_id, v.vehicle_type, c.year
FROM DOSPINA.VEHICLE V, DOSPINA.COLLISION C
WHERE v.cid = c.collision_id AND v.vehicle_type <> -1) A 
WHERE VEHICLE_TYPE = 6
GROUP BY A.YEAR, a.vehicle_type
ORDER BY YEAR, VEHICLE_TYPE)

NATURAL JOIN
(SELECT COUNT(A.VEHICLE_ID) AS TYPE_7, A.YEAR
FROM (SELECT v.vehicle_id, v.vehicle_type, c.year
FROM DOSPINA.VEHICLE V, DOSPINA.COLLISION C
WHERE v.cid = c.collision_id AND v.vehicle_type <> -1) A 
WHERE VEHICLE_TYPE = 7
GROUP BY A.YEAR, a.vehicle_type
ORDER BY YEAR, VEHICLE_TYPE)

NATURAL JOIN
(SELECT COUNT(A.VEHICLE_ID) AS TYPE_8, A.YEAR
FROM (SELECT v.vehicle_id, v.vehicle_type, c.year
FROM DOSPINA.VEHICLE V, DOSPINA.COLLISION C
WHERE v.cid = c.collision_id AND v.vehicle_type <> -1) A 
WHERE VEHICLE_TYPE = 8
GROUP BY A.YEAR, a.vehicle_type
ORDER BY YEAR, VEHICLE_TYPE)

NATURAL JOIN
(SELECT COUNT(A.VEHICLE_ID) AS TYPE_9, A.YEAR
FROM (SELECT v.vehicle_id, v.vehicle_type, c.year
FROM DOSPINA.VEHICLE V, DOSPINA.COLLISION C
WHERE v.cid = c.collision_id AND v.vehicle_type <> -1) A 
WHERE VEHICLE_TYPE = 9
GROUP BY A.YEAR, a.vehicle_type
ORDER BY YEAR, VEHICLE_TYPE)

NATURAL JOIN
(SELECT COUNT(A.VEHICLE_ID) AS TYPE_10, A.YEAR
FROM (SELECT v.vehicle_id, v.vehicle_type, c.year
FROM DOSPINA.VEHICLE V, DOSPINA.COLLISION C
WHERE v.cid = c.collision_id AND v.vehicle_type <> -1) A 
WHERE VEHICLE_TYPE = 10
GROUP BY A.YEAR, a.vehicle_type
ORDER BY YEAR, VEHICLE_TYPE)

NATURAL JOIN
(SELECT COUNT(A.VEHICLE_ID) AS TYPE_11, A.YEAR
FROM (SELECT v.vehicle_id, v.vehicle_type, c.year
FROM DOSPINA.VEHICLE V, DOSPINA.COLLISION C
WHERE v.cid = c.collision_id AND v.vehicle_type <> -1) A 
WHERE VEHICLE_TYPE = 11
GROUP BY A.YEAR, a.vehicle_type
ORDER BY YEAR, VEHICLE_TYPE)

NATURAL JOIN
(SELECT COUNT(A.VEHICLE_ID) AS TYPE_14, A.YEAR
FROM (SELECT v.vehicle_id, v.vehicle_type, c.year
FROM DOSPINA.VEHICLE V, DOSPINA.COLLISION C
WHERE v.cid = c.collision_id AND v.vehicle_type <> -1) A 
WHERE VEHICLE_TYPE = 14
GROUP BY A.YEAR, a.vehicle_type
ORDER BY YEAR, VEHICLE_TYPE)

NATURAL JOIN
(SELECT COUNT(A.VEHICLE_ID) AS TYPE_16, A.YEAR
FROM (SELECT v.vehicle_id, v.vehicle_type, c.year
FROM DOSPINA.VEHICLE V, DOSPINA.COLLISION C
WHERE v.cid = c.collision_id AND v.vehicle_type <> -1) A 
WHERE VEHICLE_TYPE = 16
GROUP BY A.YEAR, a.vehicle_type
ORDER BY YEAR, VEHICLE_TYPE)

NATURAL JOIN
(SELECT COUNT(A.VEHICLE_ID) AS TYPE_17, A.YEAR
FROM (SELECT v.vehicle_id, v.vehicle_type, c.year
FROM DOSPINA.VEHICLE V, DOSPINA.COLLISION C
WHERE v.cid = c.collision_id AND v.vehicle_type <> -1) A 
WHERE VEHICLE_TYPE = 17
GROUP BY A.YEAR, a.vehicle_type
ORDER BY YEAR, VEHICLE_TYPE)

NATURAL JOIN
(SELECT COUNT(A.VEHICLE_ID) AS TYPE_18, A.YEAR
FROM (SELECT v.vehicle_id, v.vehicle_type, c.year
FROM DOSPINA.VEHICLE V, DOSPINA.COLLISION C
WHERE v.cid = c.collision_id AND v.vehicle_type <> -1) A 
WHERE VEHICLE_TYPE = 18
GROUP BY A.YEAR, a.vehicle_type
ORDER BY YEAR, VEHICLE_TYPE)

NATURAL JOIN
(SELECT COUNT(A.VEHICLE_ID) AS TYPE_19, A.YEAR
FROM (SELECT v.vehicle_id, v.vehicle_type, c.year
FROM DOSPINA.VEHICLE V, DOSPINA.COLLISION C
WHERE v.cid = c.collision_id AND v.vehicle_type <> -1) A 
WHERE VEHICLE_TYPE = 19
GROUP BY A.YEAR, a.vehicle_type
ORDER BY YEAR, VEHICLE_TYPE)

NATURAL JOIN
(SELECT COUNT(A.VEHICLE_ID) AS TYPE_20, A.YEAR
FROM (SELECT v.vehicle_id, v.vehicle_type, c.year
FROM DOSPINA.VEHICLE V, DOSPINA.COLLISION C
WHERE v.cid = c.collision_id AND v.vehicle_type <> -1) A 
WHERE VEHICLE_TYPE = 20
GROUP BY A.YEAR, a.vehicle_type
ORDER BY YEAR, VEHICLE_TYPE)

NATURAL JOIN
(SELECT COUNT(A.VEHICLE_ID) AS TYPE_21, A.YEAR
FROM (SELECT v.vehicle_id, v.vehicle_type, c.year
FROM DOSPINA.VEHICLE V, DOSPINA.COLLISION C
WHERE v.cid = c.collision_id AND v.vehicle_type <> -1) A 
WHERE VEHICLE_TYPE = 21
GROUP BY A.YEAR, a.vehicle_type
ORDER BY YEAR, VEHICLE_TYPE)

NATURAL JOIN
(SELECT COUNT(A.VEHICLE_ID) AS TYPE_22, A.YEAR
FROM (SELECT v.vehicle_id, v.vehicle_type, c.year
FROM DOSPINA.VEHICLE V, DOSPINA.COLLISION C
WHERE v.cid = c.collision_id AND v.vehicle_type <> -1) A 
WHERE VEHICLE_TYPE = 22
GROUP BY A.YEAR, a.vehicle_type
ORDER BY YEAR, VEHICLE_TYPE)

NATURAL JOIN
(SELECT COUNT(A.VEHICLE_ID) AS TYPE_23, A.YEAR
FROM (SELECT v.vehicle_id, v.vehicle_type, c.year
FROM DOSPINA.VEHICLE V, DOSPINA.COLLISION C
WHERE v.cid = c.collision_id AND v.vehicle_type <> -1) A 
WHERE VEHICLE_TYPE = 23
GROUP BY A.YEAR, a.vehicle_type
ORDER BY YEAR, VEHICLE_TYPE)
WHERE YEAR BETWEEN 2000 AND 2005)";

$c = oci_connect($username, $password, $database);
if (!$c) {
    $m = oci_error();
    trigger_error('Could not connect to database: '. $m['message'], E_USER_ERROR);
}
$s = oci_parse($c, $query);
if (!$s) {
    $m = oci_error($c);
    trigger_error('Could not parse statement: '. $m['message'], E_USER_ERROR);
}
$r = oci_execute($s);
if (!$r) {
    $m = oci_error($s);
    trigger_error('Could not execute statement: '. $m['message'], E_USER_ERROR);
}

$chart_data = " ";
while($row = oci_fetch_array($s, OCI_BOTH)){
  //$data[] = $row;
  //'" < These quotes + Double quotes below on year represent X-Axis > "'
  $chart_data .= "{ year:'".$row["YEAR"]."', type_1:".$row["TYPE_1"].", type_5:".$row["TYPE_5"].", type_6:".$row["TYPE_6"].", type_7:".$row["TYPE_7"].", type_8:".$row["TYPE_8"].", type_9:".$row["TYPE_9"].", type_10:".$row["TYPE_10"].", type_11:".$row["TYPE_11"].", type_14:".$row["TYPE_14"].", type_16:".$row["TYPE_16"].", type_17:".$row["TYPE_17"].", type_18:".$row["TYPE_18"].", type_19:".$row["TYPE_19"].", type_20:".$row["TYPE_20"].", type_21:".$row["TYPE_21"].", type_22:".$row["TYPE_22"].", type_23:".$row["TYPE_23"]."}, ";
}
//To remove last comma from $chart_data
$chart_data = substr($chart_data, 0, -2);

?>


<!DOCTYPE html>
<html>
 <head>
  <title>Webslesson Tutorial | How to use Morris.js chart with PHP & Mysql</title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
 </head>
 <body>
  <center>
  <br /><br />
  <div class="container" style="width:900px;">
   <!--<h2 align="center">Morris.js chart with PHP & Mysql</h2>-->
   <h1 align="center">Collision Data Through the years</h3>   
   <br /><br />
   <div id="chart"></div>
  </div>
</center>
 </body>
</html>

<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'year',
 ykeys:['type_1','type_5','type_6','type_7','type_8','type_9','type_10','type_11','type_14','type_16','type_17','type_18','type_19','type_20','type_21','type_22','type_23'],
 labels:['Light Duty Vehicle ','Panel/cargo van','Other trucks and vans','Unit trucks > 4536 kg','Road Tractor','School Bus','Smaller School Bus','Urban and Intercity Bus','Motorcycle and moped','Off road vehicles','Bicycle','Purpose-built motorhome','Farm Equipment','Construction equipment ','Fire engine','Snowmobile','Street car'],
 hideHover:'auto',
 stacked:false
});
</script>