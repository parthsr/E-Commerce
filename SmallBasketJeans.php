<!doctype html>

<html>

<head>

	<title> Small Basket </title>

	<link rel="stylesheet" type="text/css" href="SmallBasket.css">
    <link rel="icon" href="basket.png" type="image/png" sizes="16x16">

      <script src = "angular.min.js"></script>
</head>

<body ng-app="mainApp" ng-controller="cartApp">

<form action="SmallBasket3.php">
<div id="main"> 

<ul>
  <li><a href="SmallBasket2.html"><img src="Basket.png" style="height:26px; width:40px;"></a></li>
  <li><a>Welcome, <?php echo $_POST['email']; ?>User!</a></li>

  <li style="float: right;"><a href="SmallBasket1.php">Logout</a></li>

  <li style="float: right;"><a href=""><input type="submit" value="Check Out"></a></li>
  <li style="float: right;"><a href="" onclick="openNav()"> View Cart </a></li>
  <li><input class="search" type="text" name="search" placeholder="Search.." ng-model="search.text"></li>
</ul>


<h1> Jeans </h1>
<h3> Product ID: 3 </h3>
<div class="container"> 
<img src= "jeans.jpg" class="image" >
</div>

<div class="prodinfo">
Jeans you can live in. <br>
Price: 1500 <br>
<button ng-click="increment(list[1])"> Add to Cart </button>
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

<!--<div class="footer"> 
<ul>
  <li><a href="#About">About</a></li>
  <li><a href="#Services">Services</a></li>
  <li><a href="#Clients">Clients</a></li>
  <li><a href="#Contact">Contact</a> </li>
</ul>
</div> -->
</div>

<script>
var main = angular.module("mainApp", []); 

main.controller('cartApp', function($scope,$interval) {

$scope.total=0;
$scope.cost= 0;
$scope.num='0';

$interval( function(){ 
      if($scope.num == 1){
          $scope.num = 0;
      }else{
          $scope.num = 1;
      }
  }, 3000);
$scope.banner= ["Discover the recommended picks for the season!", "With the best brands and the finest quality!"]

$scope.list= [{id:"1", name:"Hat", price:'400', photo:'hat.jpg', text: "Hat from Panama", quantity:0}, {id:"2", name: "Jeans", price:'1500', photo:'jeans.jpg', text: "Jeans you can live in", quantity: 0}, {id: "3", name: "Shoes", price:'1200', photo:'shoes.jpg', text: "Shoes of the finest quality", quantity: 0}]

$scope.increment= function(x) {
  var y= document.getElementById(x.name).value;
  y++;
  document.getElementById(x.name).value=y;
  x.quantity= y;
  $scope.total += 1;
  $scope.cost += 1*x.price;
}

$scope.decrement= function(x) {
  var y= document.getElementById(x.name).value;
  y--;
  document.getElementById(x.name).value=y;
  x.quantity=y;
  $scope.total -= 1;
  $scope.cost -= 1*x.price;  
}

$scope.deleteItem= function(x) {
  var y= document.getElementById(x.name).value;
  var t= y;
  y=0;
  document.getElementById(x.name).value=y;
  x.quantity=y; 
  $scope.total -=t;
  $scope.cost -= t*x.price;
}

});
</script>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginRight = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginRight= "0";
}

</script> 
</div>
</form>
</body>

</html>