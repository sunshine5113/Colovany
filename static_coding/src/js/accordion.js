

export function accordion() {

	////////////////////////////////////
	//  Accordion
	////////////////////////////////////

   
    $('.accordion').click(function(){
        if($(this).hasClass('active')){
            $(this).removeClass('active');
            $(this).next().removeClass('active');
        }else{
            $(this).addClass('active');
            $(this).next().addClass('active');
        }
    })

    
}