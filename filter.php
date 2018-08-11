<html>
<head><title>Angular js</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
	<div ng-app="app" ng-controller="ctr">
		<ul>
			<li ng-repeat="x in names">
				{{x|uppercase}}
			</li>
	</ul>

<p>filtering the by the letter</p>
<input type="text" ng-model="search">
	<ul>
		<li ng-repeat="y in names | filter:search">
			{{y}}
		</li>
	</ul>
<p><h1>Price:{{price+""+currency}}</h1></p>
	</div>
	<script>
	var app=angular.module("app",[]);
	// app.run()
	app.controller("ctr",function($scope){
		$scope.names=['lol','rol','diviation','obscure'];
		$scope.price=500;
	});
	</script>
</body>
</html>