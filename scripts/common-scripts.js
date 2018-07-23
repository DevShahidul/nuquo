;(function($){
	$(function(){

		// Begin input common focus and blur for value.
        $('input:text,input:password, input[type="email"],input[type="number"],textarea').focus(function(){if(this.value==this.defaultValue){this.value=''}})
        $('input:text,input:password,input[type="email"], input[type="number"],textarea').blur(function(){if(!this.value){this.value=this.defaultValue;}})
        // Ends input common focus and blur for value.
   
        $('.main-nav ul li').find('ul').addClass('hasSubnav')
        $('.main-nav ul li').find('ul').parent().addClass('hasSubnav')

        if($(window).width() < 768){
            $('.main-nav ul li.hasSubnav > a').bind('click','touchend', function(e){
                e.preventDefault()
                $('.main-nav li.hasSubnav').removeClass('active')
                $(this).parent().addClass('active')
                $('.main-nav li.hasSubnav').find('> ul:visible').slideUp()

                if($(this).parent().find('> ul:visible').length){
                    $(this).parent().find('> ul').slideUp()
                    $(this).parent().removeClass('active')
                }

                else{
                    $(this).parent().find('> ul').slideDown()
                    $(this).parent().addClass('active')
                }

            })
        }

        //this function for selectrics
        if ($("select.styled-select").length) {
            $('select.styled-select').selectric();
        }
           
        
        $("div.moblie-nav").click(function(){
            $("nav.main-nav").slideToggle();
        })
        
        
        if($("#our-team").length ){
            $("div.designation-info a").each(function(){
                var $_this = $(this);
               

                $_this.on('click', function(e){
                    e.preventDefault();
					
					var itemFigureHeight = $_this.parents("div.item-info").find("figure").outerHeight();
                	var itemDefaultHeight = $_this.parents("div.item-info").find("div.designation-info").outerHeight()+itemFigureHeight
               	 	var itemInfoHeight = $_this.parents("div.item-info").find(".information-details").outerHeight();
                	var setHeight = itemDefaultHeight+itemInfoHeight;

                    if($_this.parents("div.item-info").hasClass("info-expanded")){

                        $_this.parents("div.item-info").removeClass("info-expanded")
                        $_this.parent().removeClass("info-show");
                        $("div.expand-info-wrap").height(0);
                        $("div.item-info").height(itemDefaultHeight);
                    }
                    else{

                        $("div.item-info").removeClass("info-expanded")
                        $_this.parents("div.item-info").addClass("info-expanded")

                        $("div.expand-info-wrap").height(0);
                        $("div.item-info").height(itemDefaultHeight);
                        $_this.parents("div.info-expanded").height(setHeight + 30);
                        $_this.parents("div.info-expanded").find("div.expand-info-wrap").height(itemInfoHeight)

                        $(".designation-info").removeClass("info-show")
                        $_this.parent().addClass("info-show");
                    }

                })

                $(window).resize(function(){
					
					var itemFigureHeight = $_this.parents("div.item-info").find("figure").outerHeight();
                	var itemDefaultHeight = $_this.parents("div.item-info").find("div.designation-info").outerHeight()+itemFigureHeight
               	 	var itemInfoHeight = $_this.parents("div.item-info").find(".information-details").outerHeight();
                	var setHeight = itemDefaultHeight+itemInfoHeight;
					
                    $_this.parents("div.item-info").removeClass("info-expanded")
                    $_this.parent().removeClass("info-show");
                    $("div.expand-info-wrap").height(0);
                    $("div.item-info").height(itemDefaultHeight);
                })

            })
        }
     
        $("div.faq-text-info").find("div.accordion > h5").parent().addClass("show-text")
        $("div.faq-text-info div.accordion.show-text h5").bind('click', 'touchend', function(e){
               $("div.faq-text-info div.accordion.show-text").find("> p:visible").slideUp()
               $("div.faq-text-info div.accordion.show-text h5").removeClass("active")
            if($(this).parent().find("> p:visible").length){
                $(this).removeClass("active")
                $(this).parent().find("p").slideUp()
            } 
            else{
                $(this).addClass("active")
                $(this).parent().find("p").slideDown()
            }
        })
            
        
        
        // This function for Email me modal
        $(".tab-content-item .email-btn").each(function(i){
            var setTitle = $(this).parent().find("h6 dfn").html()
            
            $(this).click(function(e){
                e.preventDefault();
                e.stopPropagation();
                
                $(".email-me-wrap .title-text h3").html(setTitle)
                $(".email-me-wrap").fadeIn()
            })
        })
        
        $('body').click(function(){
            $(".email-me-wrap").fadeOut()
        })
        
            
         $("a.audit").click(function(e){
             e.preventDefault()
             e.stopPropagation();
             $("body").addClass("audit-show")

         })

         $("body").click(function(){
             $("body").removeClass("audit-show")
         })

		$('.audit-info').click(function(e){
            e.stopPropagation();
        });

        $(".learn-more-section a").html(function(index, curHTML){
           var text = curHTML.split(/[\s-]/),
               newtext = '<span class="last-word">' + text.pop() + '</span>';
           return text.join(' ').concat(' ' + newtext);
         });


        //this is for map funciton

        $('#m_caontactmap area').each(function(i){
            
            $(this).mouseenter(function(){
                $('.map-hover img').hide();
                $('.map-hover img').eq(i).show();
            });
            $(this).mouseleave(function(){
                $('.map-hover img').hide();
            });
            $(this).click(function(e){
                e.preventDefault();
                $('.map-hover img').hide();
                $('.map-hover img').eq(i).show();
                $('#map-tab div.tab-content-item').hide();
                $('#map-tab div.tab-content-item').eq(i).show();
            });
            
            
            $('.tab-wrap').mouseleave(function(){
                $('#map-tab div.tab-content-item').hide();
                $('.map-hover img').hide();
            });

        });


        if($("#m_caontactmap").length){
            $('img[usemap]').rwdImageMaps();
        }
        

        /*if( $('div.video-figure-wrap').length){
            $('div.video-figure-wrap').attr('id', 'ytplayer');
            //$('div.video-figure-wrap').html('');

            // Load the IFrame Player API code asynchronously.
            var tag = document.createElement('script');
            tag.src = "https://www.youtube.com/player_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

            // Replace the 'ytplayer' element with an <iframe> and
            // YouTube player after the API code downloads.
            var player;
            function onYouTubePlayerAPIReady() {
                player = new YT.Player('ytplayer', {
                  height: '420',
                  width: '746',
                  playerVars : {
                        autoplay : 0
                    },
                  videoId: 'Vr7QgRqkEOQ'
                });
            }

            $(window).scroll(function() {
                $("iframe").each( function() {
                    if( $(window).scrollTop() > $(this).offset().top - 200 ) {
                        //$(this).css('opacity',1);
                        player.playVideo();
                    } else {
                        //$(this).css('opacity',0);
                        player.stopVideo();
                    }
                }); 
            });
        }*/
        

        
	})// End ready function.

	$(window).load(function(){
        // Begin common slider
        if ( $('div.slider-wrap').length == 0 ) return false

        $('div.slider-wrap').flexslider({
            animation:"fade",
            slideshow: true,
            directionNav: false,
            controlNav:false,
            slideshowSpeed: 5000,  //Integer: Set the speed of the slideshow cycling, in milliseconds
            animationSpeed: 600, 
            useCSS: false,
            start: function(slider){
                //$('body').removeClass('loading');

            }
            ,
            animationLoop: true,
            pauseOnAction: false, // default setting

            after: function(slider) {

            }
        })	

    	$('div.slider-wrap video').trigger('play');

    })
	

})(jQuery)

