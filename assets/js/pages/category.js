define(['jquery'], function($){
	return new function(){
		var self = this;
		var URL = window.location.protocol + "//" + window.location.host;
		self.run = function(){
			toggleBox();
			selectOption();
		};

		var toggleBox = function(){
			/*-----------------------------------------------------------------------------------*/
			/*	Tovar Sizes
			/*-----------------------------------------------------------------------------------*/
			$(document).ready(function() {
				// toggle variable sizes of all elements
				$('#toggle-sizes').find('a.view_full').click(function(){
					$('a.view_box').removeClass('active');
					$(this).addClass('active');
					$('.shop_block').addClass('variable-sizes').isotope('reLayout');
					return false;
				});
				$('#toggle-sizes').find('a.view_box').click(function(){
					$('a.view_full').removeClass('active');
					$(this).addClass('active');
					$('.shop_block').removeClass('variable-sizes').isotope('reLayout');
					return false;
				});
			});			
		};

		var selectOption = function(){
			$('#show').change(function(){
				id=this.value;		
				link = $(this).attr('data-rel');
				arr = new Array();
				data = getQueryVariable();
				qry = '';
				if(data['page']!=undefined){
					qry = qry+'?page='+data['page'];
				}
				if(data['show']!=undefined){
					if(qry==''){
						qry = qry+'?show='+id;
					}				
					else{
						qry = qry+'&show='+id;
					}
						
				}else{
					if(qry==''){
						qry = qry+'?show='+id;
					}
					else{
						qry = qry+'&show='+id;
					}

				}
				if(data['view']!=undefined){
					if(qry==''){
						qry = qry+'?view='+data['view'];
					}
					else{
						qry = qry+'&view='+data['view'];
					}
				}
				window.location = link+qry;
			});
		};

		var getQueryVariable = function() {
			var query = window.location.search.substring(1);
			var vars = query.split('&');
			var rs = new Array();
			for (var i = 0; i < vars.length; i++) {
				var pair = vars[i].split('=');
				rs[decodeURIComponent(pair[0])] = decodeURIComponent(pair[1]);
			}
			return rs;
		};

	}
});