@if(Session::has('message'))

<div class="error" id='message' style='display:none'>

	<p>Maaf, kode order anda tidak ditemukan.</p>

</div>

@endif

<!-- MY ACCOUNT PAGE -->
<section class="my_account parallax">
    
    <!-- CONTAINER -->
    <div class="container">
        
        <div class="my_account_block clearfix">
            <div class="login" style="width: 100%;">
                @if($checkouttype!=2)
                    <h2>Payment Confirmation</h2>
                    @if($checkouttype==1)
                    {{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'login_form'))}}
                    @elseif($checkouttype==3)
                    {{Form::open(array('url'=>'konfirmasipreorder','method'=>'post','class'=>'login_form'))}}
                    @endif
                        <div class="clearfix">
                            <div class="pull-left"><label for="categorymanufacturer1">Please enter your order code</label></div>
                        </div>
                        <input type="text" placeholder="Order code" name='kodeorder' required onFocus="if (this.value == 'your order code') this.value = '';" onBlur="if (this.value == '') this.value = 'your order code';" />
                        <div class="center"><input type="submit" value="Search"></div>
                    {{Form::close()}}
                @else

                    <p>Anda tidak perlu melakukan konfirmasi untuk inquiry</p>

                @endif
            </div>
        </div>
        
    </div><!-- //CONTAINER -->
</section><!-- //MY ACCOUNT PAGE -->

