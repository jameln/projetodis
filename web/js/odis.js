function changeHeaderStyle(){
	$('#navigation > .navbar').addClass('navbar-white');
	$('#navigation > .navbar').removeClass('navbar-dark');
	$('#navigation > .navbar > .page-header-inner  > .page-logo > a > img').attr("src", '{{asset("assets/layouts/layout4/img/logo-light.png")}}');
}