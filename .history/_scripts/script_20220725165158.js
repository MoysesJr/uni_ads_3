var quantidade = $("div#seguimentos-wrap ul").length;
var limite  = (quantidade * 330) * -1;
var largura = limite + 330;

var view_largura = $("#seguimentos-centro").width();

$("#seguimentos-wrap").css("width",limite*-1);



$("#seguimentos-direita").click( function () {

    posicao_atual   = $("#seguimentos-wrap").position().left;
    nova_posicao    = posicao_atual - view_largura;

    $("div#teste").html(nova_posicao);
  
    if (limite <  posicao_atual - view_largura) {
 
        $("#seguimentos-wrap").animate({left:nova_posicao},1500);
    }

  
})


$("#seguimentos-esquerda").click( function () {
    $("#teste").html("clicou no botao da esquerda")
})




