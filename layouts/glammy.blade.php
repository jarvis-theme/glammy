<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        {{ Theme::partial('seostuff') }}    
        {{ Theme::partial('defaultcss') }}  
        <!--Google Webfont -->
        <link href='http://fonts.googleapis.com/css?family=Istok+Web' rel='stylesheet' type='text/css'>
        {{ Theme::asset()->styles() }}  
    </head>
    <body>
        <!-- PRELOADER -->
        <div id="preloader"><img src="{{URL::to(dirTemaToko().'glammy/assets/images/preloader.gif')}}" alt="" /></div>

        <!-- //PRELOADER -->
        <div class="preloader_hide">

            <!-- PAGE -->
            <div id="page">
                {{ Theme::partial('header') }}  
                
                {{ Theme::partial('slider') }}  
                
                {{ Theme::place('content') }}   

                {{ Theme::partial('footer') }}  
               
            </div>
        </div>

        {{ Theme::partial('defaultjs') }}   
        {{-- Theme::asset()->scripts() --}} 
        {{-- Theme::asset()->container('footer')->scripts() --}}    
        {{ Theme::partial('analytic') }}    
    </body>
</html>