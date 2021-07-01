// Your code here!


var myApp = angular.module('myApp', ['ngRoute']);



myApp.directive("myMaps", function () {
    return {
        restricted: 'E',
        template: '<div> </div>',
        replace: true,
        link: function (scope, element, attrs) {
            var myLatLng = new google.maps.LatLng(40.7086, 19.9437);
            var mapOptions = {
                center: myLatLng,
                zoom: 16

            };
            var map = new google.maps.Map(document.getElementById(attrs.id),
                mapOptions);
            google.maps.event.addListener(map, 'click', function (event) {
                placeMarker(event.latLng);
            });
            function placeMarker(location) {
                var marker = new google.maps.Marker({
                    position: location,
                    map: map,
                    draggable: true
                });
               // markers.push(marker);
               // console.log("The markers are: " + markers);

            }
           
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