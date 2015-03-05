<!-- FONTS -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

{{HTML::style(dirTemaToko().'glammy/assets/css/bootstrap.min.css')}}
{{HTML::style(dirTemaToko().'glammy/assets/css/flexslider.css')}}
{{HTML::style(dirTemaToko().'glammy/assets/css/fancySelect.css')}}
{{HTML::style(dirTemaToko().'glammy/assets/css/animate.css')}}

@if($tema->isiCss=='')
	{{HTML::style(dirTemaToko().'glammy/assets/css/style.css')}}
@else
	{{HTML::style(dirTemaToko().'glammy/assets/css/editstyle.css')}}
@endif
{{createFavicon($toko)}}
<!-- Other -->


