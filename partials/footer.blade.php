<!-- FOOTER -->
<footer>
    
    <!-- CONTAINER -->
    <div class="container" data-animated='fadeInUp'>
        
        <!-- ROW -->
        <div class="row">
            
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 col-ss-12 padbot30">
                <h4>Contacts</h4>
                <div class="foot_address"><span>{{ Theme::place('title') }}</span>{{$kontak->alamat}}</div>
                <div class="foot_phone"><a href="tel:{{$kontak->telepon}}" >{{$kontak->telepon}}</a></div>
                <div class="foot_mail"><a href="mailto:{{$kontak->email}}" >{{$kontak->email}}</a></div>
            </div>
            @foreach($tautan as $key=>$group)
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 col-ss-12 padbot30">
                    <h4>{{$group->nama}}</h4>                
                    <ul>
                        @foreach($group->link as $key=>$link)
                            <li>
                                @if($link->halaman=='1')
                                    <a href={{"'".URL::to("halaman/".strtolower($link->linkTo))."'"}}>{{$link->nama}}</a>
                                @elseif($link->halaman=='2')
                                    <a href={{"'".URL::to("blog/".strtolower($link->linkTo))."'"}}>{{$link->nama}}</a>
                                @elseif($link->url=='1')
                                    <a href="{{strtolower($link->linkTo)}}">{{$link->nama}}</a>
                                @else
                                    <a href={{"'".URL::to(strtolower($link->linkTo))."'"}}>{{$link->nama}}</a>
                                @endif
                            </li>                        
                        @endforeach
                    </ul>
                </div>
            @endforeach
            
            <div class="respond_clear_480"></div>
            
            <!-- <div class="col-lg-4 col-md-4 col-sm-6 padbot30">
                <h4>About shop</h4>
                <p>We ask for your name, telephone number, home address, email address and age for competitions, prize draws or newsletter sign ups. When a purchase is made on our site, in addition to the above, we also ask for delivery address, and payment method details.</p>
                <p>We may obtain information about your usage of our website to help us develop and improve it further through online surveys and other requests.</p>
            </div> -->
            
            <div class="col-lg-4 col-md-4 padbot30" id="mc_embed_signup">
                <h4>Newsletter</h4>
                <form class="newsletter_form clearfix" action="{{@$mailing->action}}" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form newsletter" target="_blank">
                    <input id="newsletter mce-EMAIL" type="text" name="EMAIL" value="Enter E-mail & Get 10% off" onFocus="if (this.value == 'Enter E-mail & Get special offering') this.value = '';" onBlur="if (this.value == '') this.value = 'Enter E-mail & Get special offering';" />
                    <input {{ @$mailing->action==''?'disabled="disabled"':'' }} class="btn newsletter_btn" type="submit" value="SIGN UP">
                </form>
                <h4>we are in social networks</h4>
                <div class="social">
                    @if($kontak->fb)
                        <a target="_blank" href="{{URL::to($kontak->fb)}}"><i class="fa fa-facebook"></i></a>
                    @endif
                    @if($kontak->tw)
                        <a target="_blank" href="{{URL::to($kontak->tw)}}"><i class="fa fa-twitter"></i></a>
                    @endif
                    @if($kontak->gp)
                        <a target="_blank" href="{{URL::to($kontak->gp)}}"><i class="fa fa-google-plus"></i></a>
                    @endif
                    @if($kontak->pt)
                        <a target="_blank" href="{{URL::to($kontak->pt)}}"><i class="fa fa-pinterest-square"></i></a>
                    @endif
                    @if($kontak->tl)
                        <a target="_blank" href="{{URL::to($kontak->tl)}}"><i class="fa fa-tumblr"></i></a>
                    @endif
                    @if($kontak->ig)
                        <a target="_blank" href="{{URL::to($kontak->ig)}}"><i class="fa fa-instagram"></i></a>
                    @endif
                </div>
            </div>
        </div><!-- //ROW -->
    </div><!-- //CONTAINER -->
    
    <!-- COPYRIGHT -->
    <div class="copyright">
        
        <!-- CONTAINER -->
        <div class="container clearfix">
            <div class="foot_logo" style="margin-top: 14px;">
                @foreach($bank as $value)
                    <img style="" src="{{URL::to('img/'.$value->bankdefault->logo)}}" alt="" />
                @endforeach
            </div>
            
            <div class="copyright_inf">
                <span> {{ Theme::place('title') }} © {{date('Y')}}</span> |
                <span>Powered by <a style="text-decoration: none;" target="_blank" href="http://jarvis-store.com">Jarvis Store</a></span> |
                <a class="back_top" href="javascript:void(0);" >Back to Top <i class="fa fa-angle-up"></i></a>
            </div>
        </div><!-- //CONTAINER -->
    </div><!-- //COPYRIGHT -->
</footer><!-- //FOOTER -->   
{{pluginPowerup()}}
