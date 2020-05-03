$(function(){
	$('[data-tooggle="tooltip"]').tooltip();
});

$(function navbarMenu(){ 
     var fecharMenu = $("#navbarMenu");

     fecharMenu.on("click", "a", null, function () {
         fecharMenu.collapse('hide');
     });
 });