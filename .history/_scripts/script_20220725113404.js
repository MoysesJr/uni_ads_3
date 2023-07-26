var quantidade = $("div#seguimentos-wrap ul").length;
var limite  = (quantidade * 304) * -1;
var largura = limite + 304;
var view_largura = $("#seguimentos-centro").width()
$("div#teste").html(view_largura);

