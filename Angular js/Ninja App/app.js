var myNinjaApp = angular.module("myNinjaApp", ["ngRoute"]);

myNinjaApp.config([
    "$routeProvider",
    "$locationProvider",
    function ($routeProvider, $locationProvider) {
        $locationProvider.hashPrefix("");
        $routeProvider
            .when("/homepage", {
                templateUrl: "homepage.html",
            })
            .when("/directory", {
                templateUrl: "directory.html",
                controller: "NinjaController",
            })
            .otherwise({
                redirectTo: "/",
            });
    },
]);

myNinjaApp.controller("NinjaController", [
    "$scope",
    "$http",
    function ($scope, $http) {
        $scope.removeNinja = function (ninja) {
            var removedNinja = $scope.ninjas.indexOf(ninja);
            $scope.ninjas.splice(removedNinja, 1);
        };

        $scope.addNinja = function () {
            $scope.ninjas.push({
                name: $scope.newninja.name,
                belt: $scope.newninja.belt,
                rate: parseInt($scope.newninja.rate),
                available: true,
            });
            $scope.newninja.name = "";
            $scope.newninja.belt = "";
            $scope.newninja.rate = "";
        };

        $http.get("data.json").then(function (response) {
            $scope.ninjas = response.data;
        });

        // $scope.ninjas = [
        //     {
        //         name: "Yoshi",
        //         belt: "Green",
        //         rate: 50,
        //         available: true,
        //         thumb: "images/yoshi.png",
        //     },
        //     {
        //         name: "Crystal",
        //         belt: "Yellow",
        //         rate: 30,
        //         available: true,
        //         thumb: "images/crystal.png",
        //     },
        //     {
        //         name: "Haiku",
        //         belt: "Orange",
        //         rate: 10,
        //         available: false,
        //         thumb: "images/ryu.png",
        //     },
        //     {
        //         name: "Rexy",
        //         belt: "Black",
        //         rate: 90,
        //         available: true,
        //         thumb: "images/rex.png",
        //     },
        // ];
        // console.log(angular.toJson($scope.ninjas));
    },
]);
