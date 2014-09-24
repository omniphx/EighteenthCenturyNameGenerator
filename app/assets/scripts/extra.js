angular.module('app', [])
    .controller('generatorCtrl', function($scope, $http){

        $scope.gender = 'Male';

        $scope.name = '';

        $scope.getName = function(gender) {
            return $http.get("/name/"+gender).success(function(data) {
                $scope.name = data;
                $scope.description = 'My 18th century name is '+data+'!';
            });
        };

        // Social Media
        $scope.url = 'http://18thCenturyNames.com';
        $scope.title = '18th Century Names';
        $scope.description = 'Generate 18th century names!';
        $scope.hashtag = '#18thCenturyNames';
        $scope.summary = 'A website for generating 18th century English names';

    });