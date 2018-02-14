<?php

// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 

session_start();
if(!isset($_SESSION["myusername"] )){
header("location:main_login.php");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Prefender Mocup</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/css/bootstrap-combined.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0-beta.2/angular.min.js"></script>
    <script src="prefender.js">
    </script>
</head>
<body ng-app="prefender" >
    <div ng-controller="MainCtrl">
       <table class="table">
           <thead>
               <tr>
                   <th>ID</th>
                   <th>Source</th>
                   <th>Dest</th>
                   <th>Desc</th>
                   <th>Data Elements</th>
                   <th>Rule</th>
               </tr>
           </thead>
           <tbody Onefilter ng-repeat-start="finfo in filters" filter="finfo" data="data">
           </tbody>
           <tbody ng-repeat-end="">
               <tr><td><button ng-click="DeleteFilter($index)">Delete</button></td></tr>
           </tbody>
       </table>
        <!--<myCountry></myCountry>-->

    </div>
</body>
</html>
