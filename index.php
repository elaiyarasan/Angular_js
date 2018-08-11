<!DOCTYPE html>
<html>
<head>
	<title>Angular Js</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
<div ng-app="" style="background-color: {{name}}" ng-init="rock='rohit'">
<p>Name :<input type="text" ng-model="name" placeholder="Enter the color name"></p>
<h1>HELLO {{name}}</h1>
<div style="background-color: {{name}}">
<ul>
	<li>red</li>
	<li>green</li>
<li>orange</li>
<li>gray</li>
</ul>
</div>
<br/>
number1
<input type="number" ng-model="row">
<br/>
number2
<input type="number" ng-model="clo">
<br/>Adtion of two numbers
<input type=number value="{{row+clo}}" readonly>

<select ng-model="rose">
	<option value="red" selected>red</option>
		<option value="green">green</option>
	<option value="orange">orange</option>
	<option value="brown">brown</option>
</select>
<div style="background-color:{{rose}}">
	<ul>
<li>ram</li>
<li>ravi</li>
</ul>


<p ng-bind="rose"></p>
<input type="text" ng-model="rock">
<p ng-bind="rock"></p>
</div>

</div>
</body>
</html>