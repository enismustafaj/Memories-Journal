// Your code here!


var myApp = angular.module('myApp', ['ngRoute']);



myApp.directive("myMaps", function () {
    return {
        restricted: 'E',
        template: '<div> </div>',
        replace: true,
        link: function (scope, element, attrs) {
            var myLatLng = new google.maps.LatLng(12.455164846 ,-71.667997328);
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
            
			
			var uluru = {lat: -13.163068, lng:  -72.545128};
            var mp= new google.maps.Marker({
                position: uluru,
                map: map
            });	
	        mp.setMap(map);
			
			var ul = {lat:5.967162798 , lng: -62.534664528};
            var af = new google.maps.Marker({
                position: ul,
                map: map
            });	
	        af.setMap(map);
			
			var uli = {lat: -51.0 , lng:-73.094};
            var tp = new google.maps.Marker({
                position: uli,
                map: map
            });	
	        tp.setMap(map);
			
			var p = {lat: -20.1335977989 , lng: -67.4868113861};
            var su = new google.maps.Marker({
                position: p,
                map: map
            });	
	        su.setMap(map);
			

			
           
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