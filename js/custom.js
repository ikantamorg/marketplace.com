/*! 
 *  Written for 	  : http://repucaution.com/
 *  Author      	  : @IkantamCorp - @ElmahdiMahmoud
 *  Updated     	  : 30.08.2013
 *  Further changes   : @ElmahdiMahmoud
 */

(function($) {
	$(document).ready(function() {

		//set class to IE10
		if (document.body.style.msTouchAction != undefined) {
			document.documentElement.className += "ie10";
		}
		//fixed header
		$(window).scroll(function() {
			var y = $(this).scrollTop(),
				header = $('body > header');
			if (y >= 50) {
				header.addClass('fixed');
			} else {
				header.removeClass('fixed');
			}
			
		});
		
		
		//featured slider
			var
			current = 0,
				$slideImgf = $('.slider > div:first'),
				slideCount = $('.slider > div').length,
				slideImg = $('.slider > div'),
				$bullets = $("<a>").attr("href", "#"),
				figure = $('.slider-wrapper figure'),
				firstFig = $('.slider-wrapper figure:first');

				firstFig.show();

			//show first image slide 
			$slideImgf.css({
				display: 'block'
			});

 			$('.slider-navigation a').on('click', function() {
				if ($(this).hasClass('active')) return false;
				var _this = $(this),
					_index = _this.index();
				$("a.active").removeClass("active");
				$(this).addClass("active");
				$(slideImg).fadeOut(800).eq(_index).fadeIn(1600);
				$(figure).hide().eq(_index).show();
				return false;
			}); 
			
			var timeFlag = true;
			
			$('.controls button').on('click', function() {
				
				if(!timeFlag) return false;
				
				var 
					
					$this = $(this), 		
					index = $this.index(), 

					$shown 	   = slideImg.not(':hidden'), 
					shownIndex = $shown.index(),
					nextIndex,
					minIndex   = 0,
					maxIndex   = slideImg.children().length - 1,

					$visible = figure.not(':hidden'),
					visibleIndex = $visible.index(),
					nxtIndex,
					indexMin = 0,
					indexMax = figure.children().length - 1;


				if ($this.hasClass('prev')) {
					nextIndex = shownIndex - 1;
					nxtIndex = visibleIndex - 1;
				} else {
					nextIndex = shownIndex + 1;
					nxtIndex = visibleIndex + 1;
				}
				if (nextIndex < minIndex) {
					nextIndex = maxIndex;
				}
				if (nextIndex > maxIndex) {
					nextIndex = minIndex;
				}

				if (nxtIndex < indexMin) {
					nxtIndex = indexMax;
				}
				if (nxtIndex > indexMax) {
					nxtIndex = indexMin;
				}

				$shown.fadeOut(800);
				$visible.hide();
				$(slideImg[nextIndex]).fadeIn(1600);
				$(figure[nxtIndex]).show();
				$('.slider-navigation a').removeClass('active');
				$('.slider-navigation a').eq(nxtIndex).addClass('active');
				timeFlag = false;
				setTimeout(function(){
					timeFlag = true
				}, 1600);
				
			});
		
		//back to top button
		$('a[href=#top]').on('click', function() {
			$('body,html').animate({
				scrollTop: 0
			}, 1000);
			return false;
		});
		$('nav li a').on('click', function() {

			var distance = 120;
			$('html,body').animate({
				scrollTop: $(this.hash).offset().top - distance
			}, 1000);

			return false;
		});
		$('.getModal').on('click', function() {
			$('#myModal').modal();
			return false;
		});
		
	$('#contactForm').on('submit', function () {
	    var
			fname 	= $('[name=firstName]').val(),
	        lname 	= $('[name=lastName]').val(),
	        email   = $('[name=email]').val(),
	        message = $('[name=message]').val();
 
	    if ($('#contactForm input[type="text"]').val() == ""  || $('#contactForm input[type="email"]').val() == "" || $("#contactForm textarea").val() == "") {
	        $('#contactForm input[type="text"], #contactForm input[type="email"], #contactForm textarea').addClass('fielderror');
	    } else {
	        $.ajax({
	            type: "POST",
	            url: "functions.php",
	            data: {
	                fname: fname,
	                lname: lname,
	                email: email,
	                message: message
	            }
	        }).success(function (html) {
	            $('h3.notification').html('Your message has been sent successfuly, we\'ll feed you back as soon as we can.<br/\> Thank you').addClass('successmsg');
	        }).error(function () {
	            $('h3.notification').html('Oops something went wrong!').addClass('errormsg');
	        });
			$('#contactForm .control-group').hide('slow');	
	    }
	    return false;
	});
	
        $('#contactusForm').on('submit', function () {
            var
            urName = $('[name=urName]').val(),
                emailA = $('[name=emailAddress]').val(),
                urMsg = $('[name=urMsg]').val();

            if ($('#contactusForm input[type="text"]').val() == "" || $('#contactusForm input[type="email"]').val() == "" || $("#contactusForm textarea").val() == "") {
                $('#contactusForm input[type="text"],#contactusForm input[type="email"],#contactusForm textarea').addClass('fielderror');
            } else {
                $.ajax({
                    type: "POST",
                    url: "functions.php",
                    data: {
                        urName: urName,
                        emailA: emailA,
                        urMsg: urMsg
                    }
                }).success(function (html) {
                    $('#contactusForm h3.notification').html('Your message has been sent successfuly, we\'ll feed you back as soon as we can.<br/\> Thank you').addClass('successmsg');
                }).error(function () {
                    $('#contactusForm h3.notification').html('Oops something went wrong!').addClass('errormsg');
                });
                $('#contactusForm .control-group').hide('slow');
            }
            return false;
        });
	
        $('#contactForm input[type="text"],#contactForm textarea, #contactusForm input[type="text"], #contactusForm textarea').on('click', function () {
            $('#contactForm input[type="text"],#contactForm textarea, #contactusForm input[type="text"], #contactusForm textarea').removeClass('fielderror');
        });
		
	}); //end doc ready



    $('#form_subscribe').submit(function(e) {
        e.preventDefault();
        var $this = $(this),
            email = $('#input_subscribe_email').val()
            , $notification = $this.find('h5')
            ;

        $notification.empty();

        $.post("functions.php",
            {
                email: email,
                action: 'popup'
            },
            null,
            'json'
        ).success(function(data) {
                console.log(data);
                if (!data.result && data.error) {
                    $notification.html(data.error).addClass('errormsg');
                }
                if (data.result/* && data.url*/) {
                    $this.parent().html("<h5>Thank you for your interest. We will get in touch with you with demo version access details.</h5>");
                  /*  $('#subox')
                        .modal('hide')
                        .on('hidden', function () {
                            $('body').empty();
                            window.location.href = data.url;
                        });*/
                }

            }).error(function() {
                $notification.html('Oops something went wrong!').addClass('errormsg');
            });

    });
})(jQuery);