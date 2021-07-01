// Your code here!


var myApp = angular.module('myApp', ['ngRoute']);



myApp.directive("myMaps", function () {
    return {
        restricted: 'E',
        template: '<div> </div>',
        replace: true,
        link: function (scope, element, attrs) {
            var myLatLng = new google.maps.LatLng(48.166666, -100.166666);
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
            
			
			var uluru = {lat: 63.3333335, lng:  -150.5000002};
            var den= new google.maps.Marker({
                position: uluru,
                map: map
            });	
	        den.setMap(map);
			
			var ul = {lat:37.4799417, lng: -122.449833};
            var vb = new google.maps.Marker({
                position: ul,
                map: map
            });	
	        vb.setMap(map);
			
			var uli = {lat: 41.89139 , lng: -87.59972};
            var np = new google.maps.Marker({
                position: uli,
                map: map
            });	
	        np.setMap(map);
			
			var p = {lat: 37.6, lng:  -112.1};
            var bc = new google.maps.Marker({
                position: p,
                map: map
            });	
	        bc.setMap(map);
			
			
			
           
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