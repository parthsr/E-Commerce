<!doctype html>

<html>

<head>

	<title> Small Basket </title>

	<link rel="stylesheet" type="text/css" href="SmallBasket.css">
    <link rel="icon" href="basket.png" type="image/png" sizes="16x16">

      <script src = "angular.min.js"></script>
</head>

<body ng-app="mainApp" ng-controller="cartApp">


<form>
<div id="main"> 

<ul>
  <li><a href="SmallBasket2.html"><img src="Basket.png" style="height:26px; width:40px;"></a></li>
  <li><a>Welcome, <?php echo $_POST['email']; ?>User!</a></li>

  <li style="float: right;"><a href="SmallBasket1.php">Logout</a></li>

  <li style="float: right;"><a href="SmallBasket3.php">Check Out</a></li>
  <li style="float: right;"><a href="" onclick="openNav()"> View Cart </a></li>
  <li><input class="search" type="text" name="search" placeholder="Search.." ng-model="search.text"></li>
</ul>

<div class="intro-titles">
      <h1 class="slide-animation" ng-hide='num != 0'>{{banner[0]}}</h1>
      <h1 class="slide-animation" ng-hide='num != 1'>{{banner[1]}}</h1>	
</div>

<div id="mySidenav" class="sidenav">
  <input type="button" class="closebtn" onclick="closeNav()" value=&times;>
  <table>
  <tr> <a>Items: <input class="value" name="Total" id="Total" type="text" disabled value="{{total}}"></a></tr>
<tr><a>Cost: <input style="margin:10px;" class="value" name="Cost" id="Cost" type="text" disabled value="{{cost}}"></a></tr>
  <tr ng-repeat="item in list"> 
    <td> {{item.name}}</td>
    <td> {{item.quantity}}</td>
    <td> <a href="" ng-click="deleteItem(item)">&times;</a></td>
  </tr>
  </table>
</div>

<?php echo $_POST['email'] $_POST

<!--<div class="footer"> 
<ul>
  <li><a href="#About">About</a></li>
  <li><a href="#Services">Services</a></li>
  <li><a href="#Clients">Clients</a></li>
  <li><a href="#Contact">Contact</a> </li>
</ul>
</div> -->


</div>
</form>
</body>

</html>
