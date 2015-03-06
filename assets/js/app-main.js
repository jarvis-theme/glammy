var dirTema = document.getElementsByTagName('link')[1].getAttribute('href');

require.config({
	baseUrl: '/',
	shim: {
		"bootstrap"	: {
			deps: ['jquery'],
		},
		"fancy_select" : {
			deps: ['jquery'],
		},/*
		"jq_carousel" : {
			deps: ['jquery'],
		},*/
		"jq_flexslider" : {
			deps : ['jquery'],
		},
		'jq_ui' : {
			deps : ['jquery'],
		},
		"jq_sticky" : {
			deps : ['jquery'],
		},
		"noty" : {
			deps : ['jquery'],
		},
	},

	paths: {
		// LIBRARY
		jquery 			: ['//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min',dirTema+'assets/js/lib/jquery.min'],
		animate			: dirTema+'assets/js/lib/animate',
		bootstrap 		: ['//maxcdn.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min',dirTema+'assets/js/lib/bootstrap.min'],
		cart			: 'js/cart',
		fancy_select	: dirTema+'assets/js/lib/fancySelect',
		flipclock		: dirTema+'assets/js/lib/flipclock.min',
		jq_carousel		: dirTema+'assets/js/lib/jquery.jcarousel',
		jq_flexslider	: dirTema+'assets/js/lib/jquery.flexslider-min',
		jq_sticky		: dirTema+'assets/js/lib/jquery.sticky',
		jq_ui			: 'js/jquery-ui',
		jqui_custom		: dirTema+'assets/js/lib/jqueryui.custom.min',
		noty			: 'js/jquery.noty',
		parallax		: dirTema+'assets/js/lib/parallax',
		superfish		: dirTema+'assets/js/lib/superfish.min',

		// ROUTE
		router          : 'js/router',

		// CONTROLLER
		category        : dirTema+'assets/js/pages/category',
		home            : dirTema+'assets/js/pages/home',
		main            : dirTema+'assets/js/pages/default',
		member          : dirTema+'assets/js/pages/member',
		produk          : dirTema+'assets/js/pages/produk',
	}
});
require([
	'router',
	'bootstrap',
	'main',
], function(router,b,main)
{
	// CATEGORY
	router.define('category/*', 'category@run');

	// HOME
	router.define('/','home@run');
	router.define('home', 'home@run');

	// MEMBER
	router.define('member/*', 'member@run');

	// PRODUK
	router.define('produk/*', 'produk@run');
	
	router.run();
	main.run();
});