var app = angular.module("mainApp", []);
app.controller("regCtrl", function ($scope) {
    $scope.courseList = ["OOPS", "DSA", "WEB TECH", "DBMS", "DMS", "DL", "DAA", "ML", "AI"];
    $scope.addItem = function () {
        $scope.errortext = "";
        if (!$scope.addMe) {
            return;
        }
        if ($scope.courseList.indexOf($scope.addMe) == -1) {
            $scope.courseList.push($scope.addMe);
        } else {
            alert("The course is already in your list.");
        }
    };
    $scope.removeItem = function (x) {
        $scope.errortext = "";
        $scope.courseList.splice(x, 1);
    };
});

app.controller("lgotCtrl", function ($scope) {
    $scope.lgot = function () {
        $scope.username = "";
        $scope.password = "";
        window.location.href = "index.html";
        alert("Logged out Succesfully!");
    };
});
