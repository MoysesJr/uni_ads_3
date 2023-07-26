
var view_largura = $("#seguimentos-centro").width();
var quantidade = $("div#seguimentos ul").length;
var limite  = (quantidade * 340) * -1; 

/* view_largura  =  1160,09  */
/* limite        = -2040,00  */ 

$("#seguimentos").css("width",limite * -1);
/* seguimentos   =  2040,00  */ 


$("#seguimentos-direita").click( function () {

    posicao_atual = $("div#seguimentos").position().ri;
    nova_posicao  = posicao_atual - view_largura;

    
    $("div#teste").html(posicao_atual);

    $("#seguimentos").animate({left:nova_posicao},1500);
        

})


$("#seguimentos-esquerda").click( function () {
    posicao_atual   = $("#seguimentos").position().left;

    if ( posicao_atual + view_largura <= 0.5) {
        
        nova_posicao = posicao_atual + view_largura;
        $("#seguimentos-wrap").animate({left:nova_posicao},1500);
    }
 

})




