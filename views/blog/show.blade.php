<!-- BREADCRUMBS -->
<section class="breadcrumb parallax margbot30"></section>
<!-- //BREADCRUMBS -->


<!-- PAGE HEADER -->
<section class="page_header">
  
  <!-- CONTAINER -->
  <div class="container">
    <h3 class="pull-left"><b>Blog Post</b></h3>
    
    <div class="pull-right">
      <a href="{{URL::to('/')}}" >Back to shop<i class="fa fa-angle-right"></i></a>
    </div>
  </div><!-- //CONTAINER -->
</section><!-- //PAGE HEADER -->

<!-- BLOG BLOCK -->
<section class="blog">
  
  <!-- CONTAINER -->
  <div class="container">
  
    <!-- ROW -->
    <div class="row">
      
      <!-- BLOG LIST -->
      <div class="col-lg-9 col-md-9 col-sm-9">
        
        <article class="post blog_post clearfix margbot20" data-appear-top-offset='-100' data-animated='fadeInUp'>
          <div class="post_title" >{{$detailblog->judul}}</div>
          <ul class="post_meta">
            <li><i class="fa fa-user"></i><a href="javascript:void(0);" >{{$detailblog->kategori->nama}}</a></li>
            <li><i class="fa fa-calendar"></i><span class="sep">|</span> {{date("d M Y", strtotime($detailblog->updated_at))}}</li>
          </ul>
          
          <div class="blog_post_content">
            {{$detailblog->isi}}
          </div>          
        </article>
        
        <div class="shared_tags_block clearfix" data-appear-top-offset='-100' data-animated='fadeInUp'>
          <div class="pull-left post_tags">
            {{ getTags('<a href="javascript:void(0);" ></a><br>',$tag)}}
          </div>
          
          <div class="pull-right tovar_shared clearfix">
            <p>Share item with friends &nbsp;</p>
            <ul>
              <!--
              <li><a class="facebook" href="javascript:void(0);" ><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" href="javascript:void(0);" ><i class="fa fa-linkedin"></i></a></li>
              <li><a class="google-plus" href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a></li>
              <li><a class="tumblr" href="javascript:void(0);" ><i class="fa fa-tumblr"></i></a></li>
              -->

              <iframe src="//www.facebook.com/plugins/share_button.php?href={{URL::to('blog/'.$detailblog->slug)}}&amp;layout=button" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:20px; margin-right:10px !important;" allowTransparency="true"></iframe>
              <a class="twitter-share-button" href="https://twitter.com/share" data-count="none">Tweet </a>
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </ul>
          </div>
        </div>
        
        
        <!-- LEAVE A COMMENT -->
        <div id="comment_form" data-appear-top-offset='-100' data-animated='fadeInUp'>
          <h2>Leave a Comment</h2>
          <div class="comment_form_wrapper">
            <form action="javascript:void(0);" method="post">
              {{$fbscript}}
              {{fbcommentbox(URL::to("blog/".$detailblog->slug), '640px', '5', 'light')}}
            </form>
          </div>
        </div><!-- //LEAVE A COMMENT -->
        
        @if(isset($prev))
          <p style="text-align: left" class="post margbot40 clearfix col-lg-6 col-md-6 col-sm-6" data-appear-top-offset='-100' data-animated='fadeInUp'>
            <a class="post_title" href="{{$prev->slug}}" >&larr; {{$prev->judul}}</a>
          </p>
        @else
          <div class="pull-right"></div>
        @endif

        @if(isset($next))
          <p style="text-align: right" class="post margbot40 clearfix col-lg-6 col-md-6 col-sm-6" data-appear-top-offset='-100' data-animated='fadeInUp'>
            <a class="post_title" href="{{$next->slug}}" >{{$next->judul}} &rarr;</a>
          </p>
          <!-- <div style="text-align: right" class="pull-right"><a href="{{$next->slug}}">Next post &rarr;</a></div> -->
        @else
          <div class="pull-right"></div>
        @endif
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
