$(function(){
	$('[data-tooggle="tooltip"]').tooltip();
});

$(function navbarMenu(){ 
     var fecharMenu = $("#navbarMenu");

     fecharMenu.on("click", "a", null, function () {
         fecharMenu.collapse('hide');
     });
 });

$(function navbarFooter(){ 
     var fecharMenuFooter = $("#navbarFooter");

     fecharMenuFooter.on("click", "a", null, function () {
         fecharMenuFooter.collapse('hide');
     });
 });