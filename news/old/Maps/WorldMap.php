<?php
// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 

session_start();
if(!isset($_SESSION["myusername"] )){
    header("location:..\main_login.php");
}

?>
<head>
    <title>Entities locations</title>
    <script src="http://www.amcharts.com/lib/3/ammap.js"></script>
    <script src="http://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
    <script src="http://www.amcharts.com/lib/3/themes/none.js"></script>
    <script src="WorldMap.js"></script>
    <link href="WorldMap.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="chartdiv"></div>
</body>
