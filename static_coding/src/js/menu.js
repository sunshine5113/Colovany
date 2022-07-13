

export function menu() {

	////////////////////////////////////
	//  Smart phone menu
	////////////////////////////////////

    $(".menu__icon").click(function(){
        if($('.header-wrap__menu').hasClass('active')){
            $('.header-wrap__menu').removeClass('active');
            $(this).removeClass('active');
        }else{
            $('.header-wrap__menu').addClass('active');
            $(this).addClass('active');
        }
    })
}