var mySportsApp = angular.module("mySportsApp", []);

mySportsApp.controller("sportsController", function ($scope) {
    $scope.sports = ["Cricket", "Football", "Tennis"];
    $scope.classRed = "";
    $scope.addSport = function () {
        $scope.sports.splice(2, 0, $scope.newSport);
        $scope.newSport = "";
    };
    $scope.removeSport = function () {
        $scope.sports.shift();
    };

    $scope.updateData = function () {
        if ($scope.classRed.length == 0) {
            $scope.classRed = "secondRed";
        } else {
            $scope.classRed = "";
        }
    };
});
