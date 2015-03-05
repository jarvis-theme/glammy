<!--HEADER -->
<header>
    
    <!-- TOP INFO -->
    <div class="top_info">
        
        <!-- CONTAINER -->
        <div class="container clearfix">
            <ul class="secondary_menu">
                @if ( ! Sentry::check())
                    <li>{{HTML::link('member', 'Login')}}</li>
                    <li class="highlight"><a href="{{URL::to('member/create')}}" >Sign Up</a></li>
                @else
                    <li class="highlight">{{HTML::link('member', 'My Account')}}</li>
                    <li>{{HTML::link('logout', 'Logout')}}</li>
                @endif
                <!-- <li><a href="my-account.html" >my account</a></li>
                <li><a href="my-account.html" >Register</a></li> -->
            </ul>
            
            <!-- <div class="live_chat"><a href="javascript:void(0);" ><i class="fa fa-comment-o"></i> Live chat</a></div> -->
            
            <div class="phone_top">have a question? <a href="tel:{{$kontak->telepon}}" >{{$kontak->telepon}}</a></div>
        </div><!-- //CONTAINER -->
    </div><!-- TOP INFO -->
    
    
    <!-- MENU BLOCK -->
    <div class="menu_block">
    
        <!-- CONTAINER -->
        <div class="container clearfix">
            
            <!-- LOGO -->
            <div class="logo">
                @if(@getimagesize(URL::to(getPrefixDomain().'/galeri/'.$toko->logo)))
                    <a href="{{URL::to('home')}}"><img style="max-height: 180px;" src="{{URL::to(getPrefixDomain().'/galeri/'.$toko->logo)}}" /></a>
                @else
                    <a style="text-decoration:none" href="{{URL::to('home')}}"><p style="color: #3D3B3B;text-decoration: none;text-transform: uppercase;font-size: 26px;margin-top: 15px;">{{ Theme::place('title') }}</p></a>
                @endif
                <!-- <a href="index.html" ><img src="images/logo.png" alt="" /></a> -->
            </div><!-- //LOGO -->
            
            <!-- SEARCH FORM -->
            <div class="top_search_form">
                <a class="top_search_btn" href="javascript:void(0);" ><i class="fa fa-search"></i></a>
                <form method="post" action="{{URL::to('search')}}">
                    <input type="text" name="search" value="Search" onFocus="if (this.value == 'Search') this.value = '';" onBlur="if (this.value == '') this.value = 'Search';" />
                </form>
            </div><!-- SEARCH FORM -->
            
            <!-- SHOPPING BAG -->
            <div id='shoppingcartplace'>
                {{$ShoppingCart}}
            </div><!-- //SHOPPING BAG -->
            
            <ul class="navmenu center">
                <li class="sub-menu first"><a href="{{URL::to('/')}}" >Home</a></li>
                @foreach($katMenu as $key=>$menu)
                    @if($menu->parent=='0')
                    <li class="sub-menu"><a href="{{slugKategori($menu)}}" >{{$menu->nama}}</a>
                        <!-- MEGA MENU -->
                        <ul class="mega_menu megamenu_col{{$menu->anak->count()}} clearfix">
                            @foreach($anMenu as $key1=>$submenu)
                                @if($submenu->parent==$menu->id)
                                <li class="col"><a href="{{slugKategori($submenu)}}" >{{$submenu->nama}}</a>
                                    <ol>
                                        @foreach($anMenu as $key2=>$submenu2)
                                            @if($submenu->id==$submenu2->parent)
                                                <li><a style="font-weight: 400;" href="{{slugKategori($submenu2)}}" >{{$submenu2->nama}}</a></li>
                                            @endif
                                        @endforeach
                                    </ol>
                                </li>
                                @endif
                            @endforeach    
                        </ul><!-- //MEGA MENU -->
                    </li>
                    @endif
                @endforeach
            </ul><!-- //MENU -->

        </div><!-- //MENU BLOCK -->
    </div><!-- //CONTAINER -->
</header><!-- //HEADER