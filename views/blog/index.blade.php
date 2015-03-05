<!-- BREADCRUMBS -->
<section class="breadcrumb parallax margbot30"></section>
<!-- //BREADCRUMBS -->


<!-- PAGE HEADER -->
<section class="page_header">
  
  <!-- CONTAINER -->
  <div class="container">
    <h3 class="pull-left"><b>Blog</b></h3>
    
    <div class="pull-right">
      <a href="{{URL::to('/')}}" >Back to shop<i class="fa fa-angle-right"></i></a>
    </div>
  </div><!-- //CONTAINER -->
</section><!-- //PAGE HEADER --><!-- BLOG BLOCK -->
<section class="blog">
  
  <!-- CONTAINER -->
  <div class="container">
  
    <!-- ROW -->
    <div class="row">
      
      <!-- BLOG LIST -->
      <div class="col-lg-9 col-md-9 col-sm-9 padbot30">
        
        @foreach($data as $key=>$value)
        <article class="post margbot40 clearfix" data-appear-top-offset='-100' data-animated='fadeInUp'>
          <a class="post_image pull-left" href="{{URL::to("blog/".$value->slug)}}" style="min-height: 50px; width: 110px; margin-bottom: 25px;">
            <div class="recent_post_date">{{waktuTgl($value->updated_at)}}</div>
            <img src="{{imgString($value->isi)}}" alt="{{$value->judul}}"/>
          </a>
          <a class="post_title" href="{{URL::to("blog/".$value->slug)}}" >{{$value->judul}}</a>
          <div class="post_content">{{blogIndex($value->isi,650)}}</div>
        </article>
        @endforeach
        <hr>
        
        <!-- PAGINATION -->
        {{$data->links()}}
        <!-- <ul class="pagination clearfix">
          <li><a href="javascript:void(0);" >1</a></li>
          <li><a href="javascript:void(0);" >2</a></li>
          <li class="active"><a href="javascript:void(0);" >3</a></li>
          <li><a href="javascript:void(0);" >4</a></li>
          <li><a href="javascript:void(0);" >5</a></li>
          <li><a href="javascript:void(0);" >6</a></li>
          <li><a href="javascript:void(0);" >...</a></li>
        </ul> --><!-- //PAGINATION -->
      </div><!-- //BLOG LIST -->
      
      
      <!-- SIDEBAR -->
      <div id="sidebar" class="col-lg-3 col-md-3 col-sm-3 padbot50">
        
        <!-- WIDGET SEARCH -->
        <div class="sidepanel widget_search">
          <form class="search_form" method="post" action="{{URL::to('search')}}" name="search_form">
            <input type="text" name="search" value="Search..." onFocus="if (this.value == 'Search...') this.value = '';" onBlur="if (this.value == '') this.value = 'Search...';" />
          </form>
        </div><!-- //WIDGET SEARCH -->
        
        <!-- CATEGORIES -->
        <div class="sidepanel widget_categories">
          <h3>BLOG CATEGORIES</h3>
          <ul>
            @foreach($categoryList as $key=>$value)
              <li><a href="{{URL::to('blog/category/'.generateSlug($value))}}">{{$value->nama}}</a></li>
            @endforeach
          </ul>
        </div><!-- //CATEGORIES -->
        
        <!-- NEWSLETTER FORM WIDGET -->
        <!-- <div class="sidepanel widget_newsletter">
          <div class="newsletter_wrapper">
            <h3>NEWSLETTER</h3>
            <form class="newsletter_form clearfix" action="javascript:void(0);" method="get">
              <input type="text" name="newsletter" value="Enter E-mail & Get 10% off" onFocus="if (this.value == 'Enter E-mail & Get 10% off') this.value = '';" onBlur="if (this.value == '') this.value = 'Enter E-mail & Get 10% off';" />
              <input class="btn newsletter_btn" type="submit" value="Sign up & get 10% off">
            </form>
          </div>
        </div> --><!-- //NEWSLETTER FORM WIDGET -->
        
        <!-- WIDGET POPULAR POSTS -->
        <div class="sidepanel widget_popular_posts">
          <h3>POPULAR POSTS</h3>
          <ul>

            @foreach(recentBlog() as $recent)
              <li class="widget_popular_post_item clearfix">
                <a class="widget_popular_post_title" href="{{slugBlog($recent)}}" >{{$recent->judul}}</a>
                <span class="widget_popular_post_date">{{waktuTgl($recent->updated_at)}}</span>
              </li>
            @endforeach

          </ul>
        </div><!-- //WIDGET POPULAR POSTS -->
        
        <!-- WIDGET BEST SELLERS -->
        <div class="sidepanel widget_best_sellers">
          <h3>BEST SELLERS</h3>
          
          <ul class="tovar_items_small">
            @foreach(bestSeller(3) as $item)
            <li class="clearfix">
              {{imageProduk($item,array('class'=>'tovar_item_small_img','alt'=>50))}}
              <a href="{{slugProduk($item)}}" class="tovar_item_small_title">{{$item->nama}}</a>
              <span class="tovar_item_small_price">{{price($item->hargaJual)}}</span>
            </li>
            @endforeach 
            

          </ul>
        </div><!-- //WIDGET BEST SELLERS -->
        
        <!-- BANNERS WIDGET -->
        <div class="widget_banners">
          @foreach(getBanner(1) as $key=>$banner)
            @if($key==0)
              <a class="banner nobord margbot10" href="{{URL::to($banner->url)}}" ><img style="width: 100%;" src="{{URL::to(getPrefixDomain().'/galeri/'.$banner->gambar)}}" alt="$banner->gambar" /></a>
            @endif
          @endforeach
        </div><!-- //BANNERS WIDGET -->
      </div><!-- //SIDEBAR -->
    </div><!-- //ROW -->
  </div><!-- //CONTAINER -->
</section><!-- //BLOG BLOCK -->