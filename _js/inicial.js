function verMais(){
    var divCursos = document.getElementById("todos-cursos");
    divCursos.style.height = "auto";
    
}


/* Função para diminuir ou aumentar a div dos cursos */
$(function () {
    $('#botao-ver-mais').click(function () {
        var divCursos = document.getElementById("todos-cursos");
        var divDetalheCurso = $("#detalhe-curso");
        if($(this).text() == 'Ver Menos'){
            divCursos.style.height = "300px";
            divCursos.style.boxShadow ="inset 0 -10px 10px -10px #000000";
            $(this).text("Ver Todos");
        }else{       
            divCursos.style.height = "auto";
            divCursos.style.boxShadow ="none";
            var imgDedo = $("#dedo-indicando");

            /* Mantem a div fixa somente se o botão ver mais for clicado */
            divDetalheCurso.scrollToFixed();
            imgDedo.scrollToFixed();
            $(this).text("Ver Menos");
        }
        
    });
});

$(function(){
    $('#tQualiSim').click(function(){
        var linhaSumir = $('.linhaSumir');
        
        linhaSumir.css('display', 'table-row');
    });

    $('#tQualiNao').click(function(){
        var linhaSumir = $('.linhaSumir');
        linhaSumir.css('display', 'none');
    });
});

/* Função para colocar o detalhe do curso na tag p ao passar o mouse*/
$(function () {
    $('.lista-item').hover(function () {
        var valorSpam= $("spam", this).html();
        var paragrafo = $("#detalhe-curso").html(valorSpam);
        var imgDedo = $("#dedo-indicando");
        imgDedo.css("display", "none");
        paragrafo.css("background-color", "#7FFFD4");
        $(this).css('border-bottom', 'solid 1px #000');

    });
});

/* Função para tirar o detalhe do curso na tag p ao tirar o mouse*/
$(function () {
    $('.lista-item').mouseout(function () {
        $(this).css('border-bottom', 'none');
    });
});
