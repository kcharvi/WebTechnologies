var app = angular.module("app", []);

app.controller("favSubjects", function ($scope) {
    $scope.favsubs = ["OOPS", "DSA", "DL"];
    $scope.addSubs = function () {
        $scope.favsubs.push($scope.newsub);
        $scope.newsub = "";
    };
    $scope.removeSubs = function () {
        $scope.favsubs.pop();
    };
});

app.controller("favMovies", function ($scope) {
    $scope.favmovs = ["Harry Potter", "Lord of the rings"];
    $scope.addMovs = function () {
        var inputVal = $scope.newmov;
        $scope.favmovs.push(inputVal);
        $scope.newmov = "";
        // array_push($scope.favmovs, $scope.newmov);
    };
    $scope.removeMovs = function () {
        $scope.favmovs.pop();
    };
});
