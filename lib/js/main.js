		 $(document).ready(function () {
	             location.href="#home";
			  
			 		$("#load").delay(4000).fadeOut("slow");
						  $("body").css("overflow-y","scroll"); 
				
	             
			 	var width = $(window).width();
				var height = $(window).height();
				
				$('.width').css("width",width);
				$('.height').css("height",height);
				  $(window).on("scroll",function(){
					  	var scrollWindow = $(window).scrollTop()

				    var scroll= height;
				
                  if(scrollWindow >=scroll)	{
					  $("header").addClass("ha-header")
				  }
					else{
						$("header").removeClass("ha-header")
					}				  
			  });
				$(document).on("scroll", onScroll);

				$('a[href^="#"]').on('click', function (e) {
					e.preventDefault();
					$(document).off("scroll");

					$('a').each(function () {
						$(this).removeClass('active');
					})
					$(this).addClass('active');

					var target = this.hash;
					$target = $(target);
					$('html, body').stop().animate({
						'scrollTop': $target.offset().top+2
					}, 500, 'swing', function () {
						window.location.hash = target;
						$(document).on("scroll", onScroll);
					});
				});
			

			function onScroll(event){
				var scrollPosition = $(document).scrollTop();
				$('nav li a').each(function () {
					var currentLink = $(this);
					var refElement = $(currentLink.attr("href"));
					if (refElement.position().top <= scrollPosition && refElement.position().top + refElement.height() > scrollPosition) {
						$('nav ul li a').removeClass("active");
						currentLink.addClass("active");
					}
					else{
						currentLink.removeClass("active");
					}
				});
			}
			
			});
