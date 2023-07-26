
var view_largura = $("#seguimentos-centro").width();
var quantidade = $("div#seguimentos ul").length;
var limite  = (quantidade * 340) * -1; 

/* view_largura  =  1160,09  */
/* limite        = -2040,00  */ 

$("#seguimentos").css("width",limite * -1);
/* seguimentos   =  2040,00  */ 


$("#seguimentos-direita").click( function () {

    posicao_atual = $("#seguimentos").position().left;
    nova_posicao = posicao_atual - view_largura;


    if (limite < posicao_atual - view_largura) {

        $("#seguimentos").animate({left:nova_posicao},1500);
        $("#seguimentos-direita i").css("opacity",0.5);
        $("#seguimentos-esquerda i").css("opacity",1);
        
        $("div#teste").html(nova_posicao);

    }
})


$("#seguimentos-esquerda").click( function () {
    
    posicao_atual = $("#seguimentos").position().left;
    nova_posicao  = posicao_atual + view_largura;


    if (limite < posicao_atual  + view_largura) {
        $("#seguimentos").animate({left:nova_posicao},1500);

        $("#seguimentos-esquerda i").css("opacity",0.5);
        $("#seguimentos-direita i").css("opacity",1);

        $("div#teste").html(nova_posicao);
    }


})




