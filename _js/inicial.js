function verMais(){
    var divCursos = document.getElementById("todos-cursos");
    divCursos.style.height = "auto";
    
}

/* Função para diminuir ou aumentar a div dos cursos */
$(function () {
    $('#botao-ver-mais').click(function () {
        var divCursos = document.getElementById("todos-cursos");

        if($(this).text() == 'Ver Menos'){
            divCursos.style.height = "300px";
            $(this).text("Ver Mais");
        }else{
            
            divCursos.style.height = "auto";
            $(this).text("Ver Menos");
        }
        
        /*var valorSpam= $("spam", this).text();
        var paragrafo = $("#detalhe-curso").text(valorSpam);
        $(this).css('text-decoration', 'underline');*/
    });
});

/* Função para colocar o detalhe do curso na tag p */
$(function () {
    $('.lista-item').mouseenter(function () {
        var valorSpam= $("spam", this).val();
        var paragrafo = $("#detalhe-curso").val(valorSpam);
        $(this).css('text-decoration', 'underline');
    });
});

/* Função para tirar o detalhe do curso na tag p */
$(function () {
    $('.lista-item').mouseout(function () {
        var valorSpam= $("spam", this).text();
        var paragrafo = $("#detalhe-curso").text(valorSpam);
        $(this).css('text-decoration', 'none');
    });
});
