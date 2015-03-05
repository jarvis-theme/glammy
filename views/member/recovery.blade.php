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
@if($errors->all())
    <div class="error" id='message' style='display:none'>
        @foreach($errors->all() as $message)
        <p>{{ $message }}</p>
        @endforeach
    </div>  
@endif

<!-- MY ACCOUNT PAGE -->
<section class="my_account parallax">
    
    <!-- CONTAINER -->
    <div class="container">
        
        <div class="my_account_block clearfix">
            <div class="login">
                <h2>Input new password</h2>
                {{Form::open(array('url' => 'member/recovery/'.$id.'/'.$code, 'class' => 'login_form'))}}
                    <input type="text" required name="password" required placeholder="new password" onFocus="if (this.value == 'new password') this.value = '';" onBlur="if (this.value == '') this.value = 'new password';" />
                    <input type="text" required name="password_confirmation" required placeholder="confirmation new password" onFocus="if (this.value == 'confirmation new password') this.value = '';" onBlur="if (this.value == '') this.value = 'confirmation new password';" />
                    <div class="center"><input type="submit" value="Change password"></div>
                {{Form::close()}}
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