<html>
<head>
	<title>Order by</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

</head>
<body ng-app="app" ng-controller="ctr">
<ul>
  <li ng-repeat="x in names | orderBy:'country'">
    {{ x.name + ', ' + x.country }}
  </li>
</ul>

<table border=1 align="center" style="background-color:lightblue; width:50%">
	
		<tr>
			<th ng-click="order('name')">name</th>
			<th ng-click="order('country')">country</th>
		</tr>
<tr ng-repeat="y in names|orderBy:myOrderBy">
	<td>{{y.name}}</td>
		<td>{{y.country}}</td>
	</tr>
</table>


<script>
angular.module('app', []).controller('ctr', function($scope) {
    $scope.names = [
        {name:'Jani',country:'Norway'},
        {name:'Carl',country:'Sweden'},
        {name:'Margareth',country:'England'},
        {name:'Hege',country:'Norway'},
        {name:'Joe',country:'Denmark'},
        {name:'Gustav',country:'Sweden'},
        {name:'Birgit',country:'Denmark'},
        {name:'Mary',country:'England'},
        {name:'Kai',country:'Norway'}
        ];
        $scope.order=function(x)
        {
        	$scope.myOrderBy=x;
        }
});
</script>
</script>
	</body>
	</html>