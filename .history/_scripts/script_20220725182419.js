var quantidade = $("div#seguimentos-wrap ul").length;
var limite  = (quantidade * 330) * -1;

var largura = limite + 320;

var view_largura = $("#seguimentos-centro").width();

$("#seguimentos-wrap").css("width",limite*-1);


$("#seguimentos-direita").click( function () {

    posicao_atual   = $("#seguimentos-wrap").position().left;
    nova_posicao    = posicao_atual - view_largura;


  
    if (limite <  posicao_atual - view_largura) {
 
        $("#seguimentos-wrap").animate({left:nova_posicao},1500);
        $("#seguimentos-esquerda i").css("opacity",1)


    }

    $("div#teste").html(limite);
})


$("#seguimentos-esquerda").click( function () {
    $("#teste").html("clicou no botao da esquerda")
})




