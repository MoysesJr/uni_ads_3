var quantidade = $("div#seguimentos-wrap ul").length;
var limite  = (quantidade * 325) * -1;
var largura = limite + 325;
var view_largura = $("#seguimentos-cecn").width();

$("#seguimentos-wrap").css("width",limite *-1);

$("div#teste").html(limite);

$("#seguimentos-direita").click( function () {

    posicao_atual   = $("#seguimentos-wrap").position().left;
    nova_posicao    = posicao_atual - view_largura;
  
    if (limite <  posicao_atual - view_largura) {
 
        $("#seguimentos-wrap").animate({left:nova_posicao},2000);
    }

})


$("#seguimentos-esquerda").click( function () {
    $("#teste").html("clicou no botao da esquerda")
})




