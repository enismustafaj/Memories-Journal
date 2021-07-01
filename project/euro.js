// Your code here!


var myApp = angular.module('myApp', ['ngRoute']);



myApp.directive("myMaps", function () {
    return {
        restricted: 'E',
        template: '<div> </div>',
        replace: true,
        link: function (scope, element, attrs) {
            var myLatLng = new google.maps.LatLng(47.413029, 30.299316);
            var mapOptions = {
                center: myLatLng,
                zoom: 4,
				scrollable: false


            };
            var map = new google.maps.Map(document.getElementById(attrs.id),
                mapOptions);
            google.maps.event.addListener(map, 'click', function (event) {
                placeMarker(event.latLng);
            });
            
			
			var uluru = {lat: 41.9028, lng: 12.4964};
            var rome = new google.maps.Marker({
                position: uluru,
                map: map
            });	
	        rome.setMap(map);
			
			var ul = {lat: 48.8566, lng: 2.3522};
            var paris = new google.maps.Marker({
                position: ul,
                map: map
            });	
	        paris.setMap(map);
			
			var uli = {lat: 51.5074, lng: 0.1278};
            var london = new google.maps.Marker({
                position: uli,
                map: map
            });	
	        london.setMap(map);
			
			var p = {lat: 50.0755381, lng: 14.437805};
            var prague = new google.maps.Marker({
                position: p,
                map: map
            });	
	        prague.setMap(map);
			
			var b = {lat: 41.390205, lng: 2.154007};
            var barcelona = new google.maps.Marker({
                position: b,
                map: map
            });	
	        barcelona.setMap(map);
			
			var v = {lat: 48.210033, lng: 16.363449};
            var vienna = new google.maps.Marker({
                position: v,
                map: map
            });	
	        vienna.setMap(map);
			
			var sa = {lat: 36.4200, lng: 25.4317};
            var santorini = new google.maps.Marker({
                position: sa,
                map: map
            });	
	        santorini.setMap(map);
			
           
        }
        

    }
});

myApp.controller('MainCtrl', ['$scope', '$mdSidenav', function ($scope, $mdSidenav) {

    $scope.toggleSidenav = function (menuId) {

        $mdSidenav(menuId).toggle();

    };

    $scope.alba = function () {
        console.log("Weare here");
    };
	
	        

   

}]);