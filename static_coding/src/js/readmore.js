

export function readmore() {

	////////////////////////////////////
	//  Read more function
	////////////////////////////////////

    $('.btn-more').click(function(){
        if($(this).hasClass('active')){
            $(this).removeClass('active');
            $('.btn-more__txt').html('ユーザーの声をもっと見る');
            $('.more-wrap').removeClass('active');
        }else{
            $(this).addClass('active');
            $('.btn-more__txt').html('閉じる');
            $('.more-wrap').addClass('active');
        }
    })
}