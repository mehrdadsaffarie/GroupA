(function($){

    $.fn.slider = function(options){
	
			var settings = $.extend({
			  "width" 				: 220,
			  "height"				: 250,
			  "page"				: 1,
			  "itemsPerPage"		: 1,
			  "speed"				: 700,
			  "pagination"			: true,
			  "navigation"			: true,
			  "slideshow"			: false,
			  "slidershow_speed"	: 10000
			}, options);
						
            return this.each(function(){
			
			    var $this = $(this),
				$mask = $("<div class=\"jq-slider-mask\"></div>"),
				$content = $("<div class=\"jq-slider-content\"></div>"),
				$list = $('ul',$this),
				$items = $('li',$this),
				$prev = $("<div class=\"jq-slider-prev\"><span>قبلی</span></div>"),
				$next = $("<div class=\"jq-slider-next\"><span>بعدی</span></div>"),
				$pages = $("<ul class=\"jq-slider-pages\"></ul>")
				
				$this.data("options", settings);
				$this.data("options").pages = $items.length/settings["itemsPerPage"];
				
				if ($this.data("options").pages <= 1) $this.data("options").pagination = false;
				if ($this.data("options").pages <= 1) $this.data("options").navigation = false;
				
				$mask
					.width(settings["width"]*settings["itemsPerPage"])
					.height(settings["height"])
					
				$content	
					.width($this.data("options").pages*$items.length*settings["itemsPerPage"]*$this.data("options").width)
					.height(settings["height"]);
					
				$list
					.addClass("jq-slider-list")
					.wrap($mask)
					.wrap($content);
					
				$content = $(".jq-slider-content",$this);
				$mask = $(".jq-slider-mask",$this);
				
				$items
					.addClass("jq-slider-item")
					.width(settings["width"])
					.height(settings["height"]);  
					
				if ($this.data("options").navigation){
				
					$prev
						.prependTo($this)
						.css("top",(($mask.outerHeight(true)-$prev.outerHeight(true))/2))
						.click(function(){
							$prevPage = --$this.data("options").page;
							goTo($prevPage);
						})
					
					$next
						.appendTo($this)
						.css("top",(($mask.outerHeight(true)-$next.outerHeight())/2))
						.click(function(){
							$nextPage = ++$this.data("options").page;
							goTo($nextPage);
						})
						
					$this.hover(function(){
						$next.stop(true, true).fadeIn();
						$prev.stop(true, true).fadeIn();
					},function(){
						$prev.stop(true, true).fadeOut();
						$next.stop(true, true).fadeOut();
					})	
						
				}
					
				if ($this.data("options").pagination){	
					
					for(var $i=1;$i<=$this.data("options").pages;++$i){
						$("<li>"+$i+"</li>")
							.appendTo($pages)
							.click(function(){
								goTo($(this,$pages).index()+1);
							});
					}
						
					$pages
						.appendTo($this)
						.css("left",(($mask.outerWidth(true)-$pages.outerWidth(true))/2));
						
				}

				$this
					.addClass("jq-slider")
					.width($mask.outerWidth(true))
					.height($mask.outerHeight(true)+($this.data("options").pagination ? $pages.outerHeight(true) : 0));
	
								
				function goTo($page, $animate){
				
					$this.data("options").page = $page;
				
					if ($animate == null)
						$animate = true;				
					if ($page > $this.data("options").pages)
						$this.data("options").page = $page = 1;
					if ($page < 1)
						$this.data("options").page = $page = $this.data("options").pages;
						
					if ($this.data("options").pagination){
						$("li",$pages).removeClass("jq-slider-current-page");
						$("li:nth-child("+$page+")",$pages).addClass("jq-slider-current-page");
					}
					
					$move = -(($page-1)*($this.data("options").width*settings["itemsPerPage"]));
					
					if ($animate)
						$content.stop(true,true).animate({"left": $move},$this.data("options").speed);
					else
						$content.css("left", $move);

					if ($this.data("options").slideshow){
						clearTimeout($this.data("options").timer);
						$this.data("options").timer = setTimeout(function(){goTo(++$page)}, $this.data("options").slidershow_speed);
					}
					
				}

				goTo(settings["page"], false);

            });
		
    };
	
})(jQuery);