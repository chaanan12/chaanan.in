<script type='text/javascript' src='<?php echo base_url();?>assets/js/sharing.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/js/sharing1.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/js/sharing2.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/js/sharing3.js'></script>
<script type='text/javascript'>
var renderInvisibleReCaptcha = function() {

    for (var i = 0; i < document.forms.length; ++i) {
        var form = document.forms[i];
        var holder = form.querySelector('.inv-recaptcha-holder');

        if (null === holder) continue;
		holder.innerHTML = '';

         (function(frm){
			var cf7SubmitElm = frm.querySelector('.wpcf7-submit');
            var holderId = grecaptcha.render(holder,{
                'sitekey': '6Lc2VKsZAAAAANJxzz-MJVeIeP-l5pd8qAylxx6o', 'size': 'invisible', 'badge' : 'bottomright',
                'callback' : function (recaptchaToken) {
					if((null !== cf7SubmitElm) && (typeof jQuery != 'undefined')){jQuery(frm).submit();grecaptcha.reset(holderId);return;}
					 HTMLFormElement.prototype.submit.call(frm);
                },
                'expired-callback' : function(){grecaptcha.reset(holderId);}
            });

			if(null !== cf7SubmitElm && (typeof jQuery != 'undefined') ){
				jQuery(cf7SubmitElm).off('click').on('click', function(clickEvt){
					clickEvt.preventDefault();
					grecaptcha.execute(holderId);
				});
			}
			else
			{
				frm.onsubmit = function (evt){evt.preventDefault();grecaptcha.execute(holderId);};
			}


        })(form);
    }
};
</script>
<script type='text/javascript' async defer src='https://www.google.com/recaptcha/api.js?onload=renderInvisibleReCaptcha&#038;render=explicit'></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/js/skip.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/js/skip1.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/js/skpi2.js'></script>
<!-- hook code snippet footer -->
<script>
$(document).ready(function(){
	$(window).scroll(function(){
		scrollheight = $('body').height();
		if($(window).scrollTop() + $(window).height() == $(document).height()) {
			$('.scrolldown').fadeOut();
		} else {
			$('.scrolldown').fadeIn();
			if($(document).scrollTop() > 0){
				jQuery("header").addClass('smaller');
			}
			else {
				jQuery("header").removeClass('smaller');
			}
		}
	});

	jQuery(".scrolldown").click(function() { jQuery("html, body").animate({ scrollTop: $(window).scrollTop() + 500 }, "slow");});
});
</script><link href="<?php echo base_url();?>assets/2/wp-content/uploads/sites/2616/scripts/mmenu/jquery.mmenu.all.css" type="text/css" rel="stylesheet" />
<script src="<?php echo base_url();?>assets/2/wp-content/uploads/sites/2616/scripts/mmenu/jquery.mmenu.all.min.js" type="text/javascript"></script>
<script>

jQuery(document).ready(function() {
    $html = jQuery('html');
    
    jQuery("#ham-menu").mmenu({
        "offCanvas": {
            "position": "right"
        }
    });
    
    setInterval(function(){ 
        if ($html.hasClass('mm-opened')) {
            jQuery("#hamburger-icon").addClass('is-active');
        } 
        else {
            jQuery("#hamburger-icon").removeClass('is-active');
        }
    }, 1000);
    
    
        
    var API = jQuery("#ham-menu").data( "mmenu" );
    
    jQuery("#hamburger-icon").on('click',function(){
        if ($html.hasClass('mm-opened')) {
            API.close();
        } else {
            API.open();
            jQuery("#hamburger-icon").removeClass('is-active');
        }
        
        
    });
    
    
});
</script><script>
$(document).ready(function(){
  var disable_nav = ["Resources "];
  $('nav[role="navigation"] ul li').each(function(){
    for(var i=0; i < disable_nav.length; i++){
      if( $(this).children('a').text() == disable_nav[i] ){
        $(this).children('a').removeAttr('href');
        break;
      }
    }
  });
  $('div[role="complementary"] .flexnav li').each(function(){
    for(var i=0; i < disable_nav.length; i++){
      if( $(this).children('a').text() == disable_nav[i] ){


        $(this).children('a').removeAttr('href');
        break;
      }
    }
  });
  var check_select_main_nav = setInterval(function(){
    if( $('nav[role=navigation] select').length > 0 ){
      $('nav[role=navigation] select > option').each(function(){
        if(!$(this).attr('value').startsWith('http')){
          $(this).attr('disabled', 'disabled');
        }
      });
      clearInterval(check_select_main_nav);
    }
  }, 500);
});
</script><style>
.form-space > p {
    display: none;
}
#input_3_2_3_container > label, #input_3_2_6_container > label {
    display: none;
}
#popup .gform_wrapper .gform_body .gfield_checkbox > li > input {
    margin: 0;
}
#popup{
	top:10%;
}
#popup .modal-dialog {
    max-width: 1000px;
    width: 90%;
}
#popup .modal-content {
    background: url(https://pronto-core-cdn.prontomarketing.com/2/wp-content/uploads/sites/2616/2018/08/bg-popup.jpg) no-repeat center center;
    border: none;
    background-size: cover;
}
#popup .modal-header {
    border-bottom: none;
}
#popup input[type="submit"] {
    width: 100%;
    max-width: 180px;
    padding: 12px 10px;
}
#popup .gform_wrapper .gform_footer {
    padding: 0px;
}
#popup .modal-body > div {
    background-color: rgba(255,255,255,0.9);
    padding: 20px 40px;
    width: auto;
}
#popup .modal-body {
    padding: 0;
    justify-content: flex-end;
    min-height: auto;
}

.close-btn-group > a {
    color: #888;
    font-size: 17px;
}
#popup button.close {
    position: absolute;
    top: 10px;
    right: 10px;
    z-index: 999;
    color: #000;
    opacity: 1;
    font-size: 30px;
}

/*** Confirmation ***/
#popup .gform_confirmation_wrapper {
    margin-top: 40px;
}
#popup .gform_confirmation_wrapper br {
    display: none;
}
#popup .gform_confirmation_wrapper h2 {
    font-size: 30px;
}
#popup .gform_confirmation_wrapper p {
    font-size: 18px;
    display: block;
}

@media (min-width: 992px) and (max-width:1600px) {
    #popup{
	top:2%;
 }
}

@media (max-width: 991px) {
    #popup .modal-dialog {
      max-width: 800px;
      width: 90%;
    }
    #popup .modal-body {
        display: block;
    }
    #popup .modal-body > div {
        width: 100%;
    }
}
@media (max-width:768px) {
    #popup .modal-dialog {
      max-width: 600px;
      width: 90%;
    }
    #popup .modal-body > div {
        padding: 20px;
        
    }
    .close-btn-group {
        text-align: center;
    }
    .close-btn-group > a {
        font-size: 13px;
    }
}
</style>


<script type="text/javascript"> 
jQuery(document).ready(function(){
    if (!getCookie('permanent') && !getCookie('temp') ) {
        jQuery('#popup').modal();
    }
});
function permanent_close() {
    setCookie('permanent', true, 999999);
    $('#popup').modal('toggle');
}
function temp_close() {
    setCookie('temp', true, 1);
    $('#popup').modal('toggle');
}
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
</script>


<script>
$(document).ready(function(){
    var owl = $('#slide-video-banner');

    owl.on('initialized.owl.carousel', function(e){
        $('.owl-item.active video').get(0).play();
        // $('.hp-banner-wrapper .content').addClass('active');
    })
    
    owl.owlCarousel({
        autoplay: true,
        autoplayTimeout: 9000,
        autoplayHoverPause: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        loop:true,
        nav:true,
        dots:true,
        items:1
    })
  
    owl.on('translated.owl.carousel',function(e){
        $('.owl-item.active video').get(0).play();
    });
    if(!isMobile()){
        $('.owl-item .item').each(function(){
            var attr = $(this).attr('data-videosrc');
            if (typeof attr !== typeof undefined && attr !== false) {
                console.log('hit');
                var videosrc = $(this).attr('data-videosrc');
                $(this).prepend('<video muted><source src="'+videosrc+'" type="video/mp4"></video>');
            }
        });
        $('.owl-item.active video').attr('autoplay',true);
    }
});

function isMobile(width) {
    if(width == undefined){
        width = 300;
    }
    if(window.innerWidth <= width) {
        return true;
    } else {
        return false;
    }
}
</script>
<script type="text/javascript">
jQuery(window).load(function() {
jQuery( '#slide-banners' ).fitVids();

jQuery( '#slide-banners' ).flexslider2({namespace: "wooslider-"
, animation: "fade", useCSS: true, slideshowSpeed: 7000, animationSpeed: 600, slideshow: true, video: true, directionNav: true, keyboard: false, mousewheel: false, pausePlay: false, animationLoop: true, pauseOnAction: true, pauseOnHover: false, smoothHeight: true, touch: true, controlNav: true, start: function(slider){var wooslider_holder = jQuery(slider).find("li.slide"); if(0 !== wooslider_holder.length){ var wooslides = ([]).concat(wooslider_holder.splice(0,2), wooslider_holder.splice(-2,2), jQuery.makeArray(wooslider_holder)); jQuery.each(wooslides, function(i,el){ var content = jQuery(this).attr("data-wooslidercontent"); if(typeof content == "undefined" || false == content) return; jQuery(this).append(content).removeAttr("data-wooslidercontent"); }); } jQuery(slider).fitVids(); var maxHeight = 0; jQuery(slider).find(".wooslider-control-nav li").each(function(i,el) { maxHeight = maxHeight > jQuery(this).height() ? maxHeight : jQuery(this).height(); }); jQuery(slider).css("margin-bottom", maxHeight + 20 + "px");var wooslider_holder = jQuery(slider).find("li.slide"); if(0 !== wooslider_holder.length){ var wooslides = ([]).concat(wooslider_holder.splice(0,2), wooslider_holder.splice(-2,2), jQuery.makeArray(wooslider_holder)); jQuery.each(wooslides, function(i,el){ var content = jQuery(this).attr("data-wooslidercontent"); if(typeof content == "undefined" || false == content) return; jQuery(this).append(content).removeAttr("data-wooslidercontent"); }); } jQuery(slider).fitVids(); var maxHeight = 0; jQuery(slider).find(".wooslider-control-nav li").each(function(i,el) { maxHeight = maxHeight > jQuery(this).height() ? maxHeight : jQuery(this).height(); }); jQuery(slider).css("margin-bottom", "0" + "px");}, before: function(slider){}, after: function(slider){}, end: function(slider){}, added: function(slider){}, removed: function(slider){}});

});
</script>

<script type='text/javascript' async defer src='https://www.google.com/recaptcha/api.js?onload=renderInvisibleReCaptcha&#038;render=explicit'></script>
<script type='text/javascript' src='https://pronto-core-cdn.prontomarketing.com/2/wp-content/themes/phoenix/js/skip-link-focus-fix.js?ver=20130115'></script>
<script type='text/javascript' src='https://pronto-core-cdn.prontomarketing.com/2/wp-content/plugins/pronto-lead-insights/js/lip.js?ver=20150324'></script>
<script type='text/javascript' src='https://pronto-core-cdn.prontomarketing.com/2/wp-includes/js/wp-embed.min.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://pronto-core-cdn.prontomarketing.com/2/wp-content/plugins/wooslider/assets/js/jquery.mousewheel.min.js?ver=2.1.0-20121206'></script>
<script type='text/javascript' src='https://pronto-core-cdn.prontomarketing.com/2/wp-content/plugins/wooslider/assets/js/jquery.flexslider.min.js?ver=2.4.1-20170608'></script>

<link rel="stylesheet" href="<?php echo base_url();?>assets/2/wp-content/uploads/sites/2616/scripts/owlcarousel/animate.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/2/wp-content/uploads/sites/2616/scripts/owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/2/wp-content/uploads/sites/2616/scripts/owlcarousel/owl.theme.default.min.css">
<script src="<?php echo base_url();?>assets/2/wp-content/uploads/sites/2616/scripts/owlcarousel/owl.carousel.min.js"></script>
<script type='text/javascript' src='https://pronto-core-cdn.prontomarketing.com/2/wp-content/plugins/wooslider/assets/js/jquery.fitvids.js?ver=2.1.0-20121206'></script>

<script src="<?php echo base_url();?>assets/2/wp-content/themes/phoenix/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/main.js"></script>
</body>
</html>