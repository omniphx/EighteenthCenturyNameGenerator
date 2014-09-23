angular.module('app', [])
    .controller('generatorCtrl', function($scope, $http){

        $scope.gender = 'Male';

        $scope.name = '';

        $scope.getName = function(gender) {
            return $http.get("/name/"+gender).success(function(data) {
                $scope.name = data;
            });
        };

    });