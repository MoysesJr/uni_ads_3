
var view_largura = $("#seguimentos-centro").width();
var quantidade = $("div#seguimentos ul").length;
var limite  = (quantidade * 340) * -1; 

/* view_largura  =  1160,09  */
/* limite        = -2040,00  */ 

$("#seguimentos").css("width",limite * -1);
/* seguimentos    = 2040,00    */ 

$("div#teste").html(limite); 

$("#seguimentos-direita").click( function () {

    posicao_atual = $("#seguimentos").position().left;
    nova_posicao  = posicao_atual - view_largura;



    $("#seguimentos").animate({left:nova_posicao},1500);
        
    if (limite <  posicao_atual - view_largura) {
    
    
        $("#seguimentos-esquerda i").css("opacity",1); 
    }

    if (limite <  nova_posicao) {
        $("#seguimentos-direita i").css("opacity",1);
    }
})


$("#seguimentos-esquerda").click( function () {
    posicao_atual   = $("#seguimentos").position().left;

    if ( posicao_atual + view_largura <= 0.5) {
        
        nova_posicao = posicao_atual + view_largura;
        $("#seguimentos-wrap").animate({left:nova_posicao},1500);
    }
 

})




