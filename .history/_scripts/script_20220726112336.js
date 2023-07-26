
var quantidade = $("div#seguimentos-wrap ul").length;
var limite  = (quantidade * 340) * -1; 
var view_largura = $("#seguimentos-centro").width(); 

/* limite       = - 2040,00    */ 
/* view_largura = + 1160,09  */

$("#seguimentos-wrap").css("width",limite * -1);
/* seguimentos-wrap = 1980    */ 




$("#seguimentos-direita").click( function () {

    posicao_atual   = $("#seguimentos-wrap").position().left;
    nova_posicao    = posicao_atual - view_largura;

    $("div#teste").html(pos); 

    $("#seguimentos-wrap").animate({left:nova_posicao},1500);
        
    if (limite <  posicao_atual - view_largura) {
    
    
        $("#seguimentos-esquerda i").css("opacity",1); 
    }

    if (limite <  nova_posicao) {
        $("#seguimentos-direita i").css("opacity",1);
    }
})


$("#seguimentos-esquerda").click( function () {
    posicao_atual   = $("#seguimentos-wrap").position().left;

    if ( posicao_atual + view_largura <= 0.5) {
        
        nova_posicao = posicao_atual + view_largura;
        $("#seguimentos-wrap").animate({left:nova_posicao},1500);
    }
 

})




