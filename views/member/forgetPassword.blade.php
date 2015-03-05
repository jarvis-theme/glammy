@if(Session::has('errorlogin'))
    <div class="error" id='message' style='display:none'>
        <p>Maaf, email atau password anda salah.</p>
    </div>
@endif
@if(Session::has('error'))
    <div class="error" id='message' style='display:none'>
        {{Session::get('error')}}!!!
    </div>
@endif
@if(Session::has('errorrecovery'))
    <div class="error" id='message' style='display:none'>
        <p>Maaf, email anda tidak ditemukan.</p>
    </div>
@endif
@if(Session::has('forget'))
<div class="success" id='message' style='display:none'>
    <p>Cek email untuk me-reset password anda!</p>
</div>  
@endif
@if(Session::has('error'))
<div class="error" id='message' style='display:none'>
    <p>{{Session::get('error')}}</p>
</div>  
@endif

<!-- MY ACCOUNT PAGE -->
<section class="my_account parallax">
    
    <!-- CONTAINER -->
    <div class="container">
        
        <div class="my_account_block clearfix">
            <div class="login">
                <h2>Forgot password</h2>
                <form class="login_form" action="{{URL::to('member/forgetpassword')}}" method="post">
                    <input type="text" name="recoveryEmail" required placeholder="your email" onFocus="if (this.value == 'your email') this.value = '';" onBlur="if (this.value == '') this.value = 'your email';" />
                    <div class="center"><input type="submit" value="Reset Password"></div>
                </form>
            </div>
            <div class="new_customers">
                <h2 style="margin:0;">ALREADY REGISTERED</h2>
                <div class="center padbot30 "><a class="btn active" href="{{URL::to('member/')}}" >login</a></div>
                <h2 style="margin:0;">NEW CUSTOMERS</h2>
                <div class="center padbot30 "><a class="btn active" href="{{URL::to('member/create')}}" >create new account</a></div>
            </div>
        </div>
        
    </div><!-- //CONTAINER -->
</section><!-- //MY ACCOUNT PAGE -->