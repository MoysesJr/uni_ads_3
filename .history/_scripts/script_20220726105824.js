
var quantidade = $("div#seguimentos-wrap ul").length;
var limite  = (quantidade * 330) * -1; 
var view_largura = $("#seguimentos-centro").width(); 

/* limite       = -1980    */ 
/* view_largura = 1160,09  */

$("#seguimentos-wrap").css("width",limite * -1);
/* seguimentos-wrap = 1980    */ 





$("#seguimentos-direita").click( function () {

    posicao_atual   = $("#seguimentos-wrap").position().left;
 /* posicao_atual   = 0 (1ªvez)   */ 
    nova_posicao    = posicao_atual - view_largura;
 /* nova_posicao    = 0 - 1160,09 = -1160,09 */

 $("div#teste").html(limite); 
    if (limite <  posicao_atual - view_largura) {
     /* limite   = -1980  for menor que 0 - 1160,09  */ 
        $("#seguimentos-wrap").animate({left:nova_posicao},1500);
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




