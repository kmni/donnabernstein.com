// Place any jQuery/helper plugins in here.
var jQuery = jQuery.noConflict();
jQuery.fn.center = function () { this.css("position","absolute"); this.css("top", Math.max(0, ((jQuery(window).height() - jQuery(this).outerHeight()) / 2) + jQuery(window).scrollTop()) + "px"); this.css("left", Math.max(0, ((jQuery(window).width() - jQuery(this).outerWidth()) / 2) + jQuery(window).scrollLeft()) + "px"); return this; }
jQuery.fn.preload = function() { this.each(function(){ var name = this; jQuery('<img src="'+this+'" />').load(function(){/*console.log(name+' loaded');*/}); }); }

var hju	= {
	
    galleryPagination:	function(parent_selector, item_selector){
    	var parent			= jQuery(parent_selector),
    		items			= parent.find(item_selector),
			itemsCount		= items.size();
		var itemsPerPage	= parent.data('items-per-page') ? parent.data('items-per-page') : 20;
		var itemsPassed		= 0;
		// console.log(itemsCount);
		items.each(function(){
			if (++itemsPassed > itemsPerPage)
			{
				jQuery(this).addClass('hidden');
			}
		});

		if (itemsCount > itemsPerPage)
		{
			if (!jQuery('.gallery_pagination').length)
				parent.append('<div class="cleaner"></div><div class="gallery_pagination clearfix"></div>');
			hju.createPagination({parent: '.gallery_pagination', class: 'more_reviews', total: itemsCount, limit: itemsPerPage, title: 'Show more'});
		}

		jQuery('a.more_reviews').on('click', function(){
			itemsPassed		= 0;
			var page		= parseInt(jQuery(this).attr('href').replace('#', '')),
				pages		= Math.ceil(itemsCount/itemsPerPage);
			if (page > 0)
			{
				jQuery('a.more_reviews').removeClass('active');
				// console.log(jQuery('a[href="#'+page+'"]'));
				jQuery('a[href="#'+page+'"]').addClass('active');
				// prev link
				if (page > 1)
				{
					jQuery('a.prev').removeClass('disabled').attr('href', '#'+(page-1));
				}
				else
					jQuery('a.prev').addClass('disabled').attr('href', '#1');
				// next link
				if (page < pages)
				{
					jQuery('a.next').removeClass('disabled').attr('href', '#'+(page+1));
				}
				else
					jQuery('a.next').addClass('disabled').attr('href', '#'+pages);

				items.addClass('hidden');
				items.each(function(){
					++itemsPassed;
					if (itemsPassed > ((page-1)*itemsPerPage) && itemsPassed <= page*itemsPerPage)
					{
						jQuery(this).removeClass('hidden');
					}
				});
			}
			// else
			// 	console.log('Invalid page number: '+page);
			return false;
		});
    },
    createPagination:	function(config){
		config.id		= config.id || false;
		config.parent	= config.parent || false;
		config.total	= config.total || 0;
		config.limit	= config.limit || 10;
		config.limit	= Math.max(1, config.limit);
		config.title	= config.title || '';
		config.class	= config.class || '';

		// if (!config.parent || !jQuery(config.parent).length)
		// 	console.log('Parental container not found for pagination!');
		// else if (config.total <= 0)
		// 	console.log('Total records is lower than or equal zero!');
		// else
		{
			var parent	= jQuery(config.parent);
			var pages	= Math.ceil(config.total/config.limit);
			parent.append('<a class="'+config.class+' prev disabled" href="#1" title="Previous page"><img src="img/s.gif"></a>');
			for (var i=1; i <= pages; i++)
			{
				parent.append('<a class="'+config.class+''+(i == 1 ? ' active' : '')+'" href="#'+i+'" title="'+config.title+'">'+i+'</a>');
			}
			parent.append('<a class="'+config.class+' next" href="#2" title="Next page"><img src="img/s.gif"></a>');
		}
	},
	
	init:	function(){
		hju.galleryPagination('#portfolio', 'a.thumbnail');
	}
};
jQuery(window).load(function(){
	hju.init();
});