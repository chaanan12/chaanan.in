/* Do not modify this file directly. It is compiled from other files. */
/* global jetpackSlideshowSettings, escape */
function JetpackSlideshow(e,t,i){this.element=e,this.images=[],this.controls={},this.transition=t||"fade",this.autostart=i}JetpackSlideshow.prototype.showLoadingImage=function(e){if(e){this.loadingImage_=document.createElement("div"),this.loadingImage_.className="slideshow-loading";var t=document.createElement("img");t.src=jetpackSlideshowSettings.spinner,this.loadingImage_.appendChild(t),this.loadingImage_.appendChild(this.makeZeroWidthSpan()),this.element.append(this.loadingImage_)}else this.loadingImage_&&(this.loadingImage_.parentNode.removeChild(this.loadingImage_),this.loadingImage_=null)},JetpackSlideshow.prototype.init=function(){this.showLoadingImage(!0);for(var e=this,t=0;t<this.images.length;t++){var i=this.images[t],s=document.createElement("img");s.src=i.src,s.title=void 0!==i.title?i.title:"",s.alt=void 0!==i.alt?i.alt:"",s.align="middle",s.setAttribute("itemprop","image"),s.nopin="nopin";var o=document.createElement("div");o.className="slideshow-slide-caption",o.setAttribute("itemprop","caption description"),o.innerHTML=i.caption;var n=document.createElement("div");n.className="slideshow-slide",n.setAttribute("itemprop","associatedMedia"),n.setAttribute("itemscope",""),n.setAttribute("itemtype","https://schema.org/ImageObject"),0===t&&(s.complete?setTimeout(function(){e.finishInit_()},1):jQuery(s).load(function(){e.finishInit_()})),n.appendChild(s),s.removeAttribute("width"),s.removeAttribute("height"),n.appendChild(this.makeZeroWidthSpan()),n.appendChild(o),this.element.append(n)}},JetpackSlideshow.prototype.makeZeroWidthSpan=function(){var e=document.createElement("span");return e.className="slideshow-line-height-hack",-1!==window.navigator.userAgent.indexOf("MSIE ")?e.appendChild(document.createTextNode(" ")):e.innerHTML="&nbsp;",e},JetpackSlideshow.prototype.finishInit_=function(){this.showLoadingImage(!1),this.renderControls_();var e=this;if(this.images.length>1){this.element.cycle({fx:this.transition,prev:this.controls.prev,next:this.controls.next,timeout:jetpackSlideshowSettings.speed,slideExpr:".slideshow-slide",onPrevNextEvent:function(){return e.onCyclePrevNextClick_.apply(e,arguments)}});var t=this.element;this.autostart||(t.cycle("pause"),jQuery(this.controls.stop).removeClass("running"),jQuery(this.controls.stop).addClass("paused")),jQuery(this.controls.stop).click(function(){var e=jQuery(this);return e.hasClass("paused")?(e.addClass("running"),e.removeClass("paused"),t.cycle("resume",!0)):(t.cycle("pause"),e.removeClass("running"),e.addClass("paused")),!1})}else this.element.children(":first").show(),this.element.css("position","relative");this.initialized_=!0},JetpackSlideshow.prototype.renderControls_=function(){if(!this.controlsDiv_){var e=document.createElement("div");e.className="slideshow-controls";for(var t=["prev","stop","next"],i=0;i<t.length;i++){var s=t[i],o=document.createElement("a");o.href="#",e.appendChild(o),this.controls[s]=o}this.element.append(e),this.controlsDiv_=e}},JetpackSlideshow.prototype.onCyclePrevNextClick_=function(e,t){if(jetpackSlideshowSettings.blog_id){var i=this.images[t].id;(new Image).src=document.location.protocol+"//pixel.wp.com/g.gif?host="+escape(document.location.host)+"&rand="+Math.random()+"&blog="+jetpackSlideshowSettings.blog_id+"&subd="+jetpackSlideshowSettings.blog_subdomain+"&user_id="+jetpackSlideshowSettings.user_id+"&post="+i+"&ref="+escape(document.location)}},function(e){function t(){e(".jetpack-slideshow-noscript").remove(),e(".jetpack-slideshow").each(function(){var t=e(this);if(!t.data("processed")){var i=new JetpackSlideshow(t,t.data("trans"),t.data("autostart"));i.images=t.data("gallery"),i.init(),t.data("processed",!0)}})}e(document).ready(t),e("body").on("post-load",t)}(jQuery);