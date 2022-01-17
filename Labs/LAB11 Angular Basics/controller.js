var app = angular.module("mainApp", ["ngRoute"]);

app.config(function ($routeProvider) {
  $routeProvider
    .when("/", {
      templateUrl: "login.html",
    })
    .when("/registration", {
      templateUrl: "registration.html",
    })
    .otherwise({
      redirectTo: "/",
    });
});

app.controller("loginCtrl", function ($scope) {
  $scope.submit = function () {
    var uname = $scope.useName;
    var password = $scope.passWd;
    if (uname == "19BCE7002" && password == "charvi") {
      alert("Logged in Succesfully!");
      window.location.href = "registration.html";
    } else {
      alert("Invalid Credentials!");
    }
  };
});
