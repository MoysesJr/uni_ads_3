var quantidade = $("div#seguimentos-wrap ul").length;
var limite  = (quantidade * 330) * -1;
var largura = limite + 330;
var view_largura = $("#seguimentos-centro").width();

$("#seguimentos-wrap").css("width",limite *-1);

$("div#teste").html(limite);

$("#seguimentos-direita").click( function () {
  
    $("#seguimentos-wrap").animate({left:-1980});
    

})


$("#seguimentos-esquerda").click( function () {
    $("#teste").html("clicou no botao da esquerda")
})




