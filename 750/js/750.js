$( document ).ready(function() {
    var swiper = new Swiper('.top-slide', {
	    pagination: '.swiper-pagination', 
	    paginationClickable: true,       
	    spaceBetween: 0,          
	    centeredSlides: true,
	    autoplay: 3500,                  
	    autoplayDisableOnInteraction: false,
	    loop: true          
	});
	//slide
	$(document).ready(function() {
		var autoLoad= setInterval(function(){
			$('#btn-next').trigger('click');
		},3000);
	
		$('#btn-next').click(function(event) {
			clearInterval(autoLoad);
			var slide_sau = $('.active').next();
			var vi_tri_hien_tai = $('.active_nut').index()+1;
			if(slide_sau.length!=0){
				$('.active').addClass('bien-mat-ben-trai').one('webkitAnimationEnd', function(event) {
					$('.bien-mat-ben-trai').removeClass('bien-mat-ben-trai').removeClass('active');
				});
				slide_sau.addClass('active').addClass('di-vao-ben-phai').one('webkitAnimationEnd', function(event) {
					$('.di-vao-ben-phai').removeClass('di-vao-ben-phai');
				});
				// xử lý nút 
				$('.nut-slide ul li').removeClass('active_nut');
				$('.nut-slide ul li:nth-child('+(vi_tri_hien_tai+1)+')').addClass('active_nut');
			}else{
				$('.active').addClass('bien-mat-ben-trai').one('webkitAnimationEnd', function(event) {
					$('.bien-mat-ben-trai').removeClass('bien-mat-ben-trai').removeClass('active');
				});
				$('.slide:first-child').addClass('active').addClass('di-vao-ben-phai').one('webkitAnimationEnd', function(event) {
					$('.di-vao-ben-phai').removeClass('di-vao-ben-phai');
				});
				// xử lý nút 
				$('.nut-slide ul li').removeClass('active_nut');
				$('.nut-slide ul li:nth-child(1)').addClass('active_nut');
			}
		});
		$('#btn-prev').click(function(event) {
			clearInterval(autoLoad);
			var slide_truoc = $('.active').prev();
			var vi_tri_hien_tai = $('.active_nut').index()+1;
			if(slide_truoc.length!=0){
				$('.active').addClass('bien-mat-ben-phai').one('webkitAnimationEnd', function(event) {
					$('.bien-mat-ben-phai').removeClass('bien-mat-ben-phai').removeClass('active');
				});
				slide_truoc.addClass('active').addClass('di-vao-ben-trai').one('webkitAnimationEnd', function(event) {
					$('.di-vao-ben-trai').removeClass('di-vao-ben-trai');
				});
				// xử lý nút 
				$('.nut-slide ul li').removeClass('active_nut');
				$('.nut-slide ul li:nth-child('+(vi_tri_hien_tai-1)+')').addClass('active_nut');
			}else{
				$('.active').addClass('bien-mat-ben-phai').one('webkitAnimationEnd', function(event) {
					$('.bien-mat-ben-phai').removeClass('bien-mat-ben-phai').removeClass('active');
				});
				$('.slide:last-child').addClass('active').addClass('di-vao-ben-trai').one('webkitAnimationEnd', function(event) {
					$('.di-vao-ben-trai').removeClass('di-vao-ben-trai');
				});
							// xử lý nút 
				$('.nut-slide ul li').removeClass('active_nut');
				$('.nut-slide ul li:last-child').addClass('active_nut');
			}
		});
	
		$('.nut-slide ul li').click(function(event) {
			clearInterval(autoLoad);
			var vi_tri_hien_tai = $('.active_nut').index()+1;
			var vi_tri_click = $(this).index()+1;
			$('.nut-slide ul li').removeClass('active_nut');
			$(this).addClass('active_nut');
			if(vi_tri_click>vi_tri_hien_tai){
				$('.active').addClass('bien-mat-ben-trai').one('webkitAnimationEnd', function(event) {
					$('.bien-mat-ben-trai').removeClass('bien-mat-ben-trai').removeClass('active');
				});
				$('.slide:nth-child('+vi_tri_click+')').addClass('active').addClass('di-vao-ben-phai').one('webkitAnimationEnd', function(event) {
					$('.di-vao-ben-phai').removeClass('di-vao-ben-phai');
				});
			}
			if(vi_tri_click<vi_tri_hien_tai){
				$('.active').addClass('bien-mat-ben-phai').one('webkitAnimationEnd', function(event) {
					$('.bien-mat-ben-phai').removeClass('bien-mat-ben-phai').removeClass('active');
				});
				$('.slide:nth-child('+vi_tri_click+')').addClass('active').addClass('di-vao-ben-trai').one('webkitAnimationEnd', function(event) {
					$('.di-vao-ben-trai').removeClass('di-vao-ben-trai');
				});
			}
	
		});
	
	});	

    // Button Search
	var b = 0;
	$(function() {
	     $('.button').click(function(){
	         if (b == 0)
	         {
	             $('.input-text').addClass('input-text-active');
	             $('.button').addClass('button-active');
	             b++;
	         }
	         else
	         {
	            $('.input-text').removeClass('input-text-active');
	            $('.button').removeClass('button-active');
	            b = 0; 
	         }
	    })
	     $('.reponsive-menu').click(function(){
	        document.getElementById("reponsive-menu").style.right = '0%';
	     })
	});

	// Reponsive Menu
	var t = 0;
	$(function() {
	     $('.reponsive-menu').click(function(){
	        if (t == 0)
	        {
	            $('#reponsive-menu').addClass('reponsive-menu-active');
	            document.getElementById("full-show").style.display = 'block';
	            t++;
	        }else{
	             $('#reponsive-menu').removeClass('reponsive-menu-active');
	             document.getElementById("reponsive-menu").style.right = '100%';
	            t = 0;
	        }
	     })
	     $('.full-show').click(function(){
	        $('#reponsive-menu').removeClass('reponsive-menu-active');
	        document.getElementById("reponsive-menu").style.right = '100%';
	        document.getElementById("full-show").style.display = 'none';
	        t = 0;
	     })
	});

	//Top-Menu
	$(function() {
	    $(".sub-current").hover(function(){
	        $(this).addClass('active');
	        if ($('.sub-current ul').hasClass('active-1'))
	            {
	                $('ul').removeClass('active-1');
	            }
	            $('.active ul').addClass('active-1');
	            $(this).removeClass('active');
	        }, function(){
	            setTimeout(function(){
	                $('.sub-current ul').removeClass('active-1');
	            }, 70000);
	    });
	});

	//Sroll-To-Top
	$(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 0) {   
                $('.bttop').fadeIn();  
            } else {
                $('.bttop').fadeOut();
            }
        });
        
        $('.bttop').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
        });
    }); 
});

   


