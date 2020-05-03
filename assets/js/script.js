$(function(){ 
     var fecharMenu = $("#navbarMenu");

     fecharMenu.on("click", "a", null, function () {
         fecharMenu.collapse('hide');
     });
 });
$(function(){
	$('[data-tooggle="tooltip"]').tooltip();
}