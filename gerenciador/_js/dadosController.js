function dadosController($scope, DadosServices) {
    $scope.conteudo = {nome: ''};
	$.get("../dados.php", function(dados){
        $scope.conteudos = $.parseJSON(dados);
        
    });
}