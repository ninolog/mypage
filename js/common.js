//viewport書き換え
$(function(){
    // setViewport
    spView = 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes';
    tbView = 'width=1200,maximum-scale=1,user-scalable=0';

    if(navigator.userAgent.indexOf('iPhone') > 0 || navigator.userAgent.indexOf('iPod') > 0 || (navigator.userAgent.indexOf('Android') > 0 && navigator.userAgent.indexOf('Mobile') > 0)){
        $("meta[name='viewport']").attr('content',spView);
    } else if(navigator.userAgent.indexOf('iPad') > 0 || (navigator.userAgent.indexOf('Android') > 0 && navigator.userAgent.indexOf('Mobile') == -1) || navigator.userAgent.indexOf('A1_07') > 0 || navigator.userAgent.indexOf('SC-01C') > 0){
        $("meta[name='viewport']").attr('content',tbView);
    } 
});




//PC・SP
$(function(){
	var wid = $(window).width();
	if( wid < 480 ){
			
		
	}else{
			
			}
});


//スマホ時のみTELテキストで有効
$(function(){
    var ua = navigator.userAgent;
    if(ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0){
        $('.tel-link-txt').each(function(){
            var str = $(this).text();
            $(this).html($('<a>').attr('href', 'tel:' + str.replace(/-/g, '')).append(str + '</a>'));
        });
    }
});



//スマホ時メニュー開閉
$(function(){
var menu = $('.sp-nav-block'), // スライドインするメニューを指定
    menuBtn = $('#sp-menu'), // メニューボタンを指定
    body = $(document.body),     
    menuWidth = menu.outerWidth();                
     
    // メニューボタンをクリックした時の動き
    menuBtn.on('click', function(){
    // body に open クラスを付与する
		menuBtn.toggleClass("active"); 
    body.toggleClass('modal');
        if(body.hasClass('modal')){
             menu.fadeIn(500);
        } else {
            menu.fadeOut(500);     
        }            
    });
});




$(function () {
  /*初期表示*/
  $('.tab-contents').hide();
  $('.tab-contents').eq(0).show();
  $('.tab').eq(0).addClass('active');
  /*クリックイベント*/
  $('.tab').each(function () {
    $(this).on('click', function () {
      var index = $('.tab').index(this);
      $('.tab').removeClass('active');
      $(this).addClass('active');
      $('.tab-contents').hide();
      $('.tab-contents').eq(index).show();
    });
  });
});






$(document).ready(function(){
  $( '.history-list.more' ).hide();
  $('.btn-trigger').on( 'click' ,function(){
    if( !$('.history-list.more').hasClass('open') ) {
      $( '.history-list.more' ).slideDown().addClass('open');
      $('.btn-trigger').addClass('close');
    } else {
      $( '.history-list.more' ).slideUp().removeClass('open');
      $('.btn-trigger').removeClass('close');
    }
  });
})




//リサイズでスタイルリセット
$(function(){
    var timer = false;
    var prewidth = $(window).width();
    $(window).resize(function() {
        if (timer !== false) {
            clearTimeout(timer);
        }
        timer = setTimeout(function() {
            var nowWidth = $(window).width();
            if(prewidth !== nowWidth){
        // リロード
                location.reload();
            }
            prewidth = nowWidth;
        }, 200);
    });
});






/* ページトップ*/
$(function() {
	var topBtn = $('.page-top');	
	topBtn.hide();
	//スクロールが100に達したらボタン表示
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
	//スクロールしてトップ
    topBtn.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
    });
});

