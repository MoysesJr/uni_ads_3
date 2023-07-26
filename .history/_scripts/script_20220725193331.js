
var quantidade = $("div#seguimentos-wrap ul").length;
var limite  = (quantidade * 330) * -1;

var largura = limite + 320;

var view_largura = $("#seguimentos-centro").width();

$("#seguimentos-wrap").css("width",limite*-1);

$("div#teste").html(limite);

$("#seguimentos-direita").click( function () {

    posicao_atual   = $("#seguimentos-wrap").position().left;
    nova_posicao    = posicao_atual - view_largura;


  
    if (limite <  posicao_atual - view_largura) {
 
        $("#seguimentos-wrap").animate({left:nova_posicao},1500);
        $("#seguimentos-esquerda i").css("opacity",1); 
    }

    if (limite > nova_posicao) {
        $("#seguimentos-direita i").css("opacity",0.5); 
        $("#seguimentos-direita i").css("cursor","not-allowed"); 
    }

    
})


$("#seguimentos-esquerda").click( function () {
    posicao_atual   = $("#seguimentos-wrap").position().left;

    if ( posicao_atual + view_largura <= 1) {
        
        nova_posicao = posicao_atual + view_largura;
        $("#seguimentos-wrap").animate({left:nova_posicao},1500);
    }

    if (limite < nova_posicao) {
        $("#seguimentos-esquerda i").css("opacity",0.5); 
        $("#seguimentos-esquerda i").css("cursor","not-allowed"); 
    }

    

})




