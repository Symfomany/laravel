var containerControllers = angular.module('chartApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('{%');
    $interpolateProvider.endSymbol('%}');
});

containerControllers.controller('StatsCtrl',function($scope) {
               console.log('okaaaay');

                //datas
                $scope.title = "Mes statistiques sur les Charts";
                $scope.phones = [
                    {'name': 'Nexus S',
                        'snippet': 'Fast just got faster with Nexus S.'},
                    {'name': 'Motorola XOOM™ with Wi-Fi',
                        'snippet': 'The Next, Next Generation tablet.'},
                    {'name': 'MOTOROLA XOOM™',
                        'snippet': 'The Next, Next Generation tablet.'}
                    ];

                //$scope.nom = "";
                //
                //$scope.mafct = function(){
                //    return ($scope.nom == "banana") ? "Banana" : "";
                //};

});




//statApp.controller('StatsCtrl', ['$scope', '$routeParams', '$http',
//        function($scope, $routeParams, $http) {
//            $scope.title = "Mes statistiques sur les Charts";
//            $scope.phones = [
//                {'name': 'Nexus S',
//                    'snippet': 'Fast just got faster with Nexus S.'},
//                {'name': 'Motorola XOOM™ with Wi-Fi',
//                    'snippet': 'The Next, Next Generation tablet.'},
//                {'name': 'MOTOROLA XOOM™',
//                    'snippet': 'The Next, Next Generation tablet.'}
//            ];
//
//            //$http.get('datas.json').success(function(data) {
//            //    $scope.phone = data;
//            //});
//        }]
//);