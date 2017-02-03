var app = angular.module("app", []);

app.factory('services', ['$http', function($http) {
    var obj={};
    obj.getConteudo = function() { return $http.get('dados.php'); }
    return obj;
}]);

app.controller("dadosController", function($scope, services) {
    services.getConteudo().then( function(data) {
        $scope.conteudos = data.data;
    } );
});

app.run();