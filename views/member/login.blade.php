<!-- MY ACCOUNT PAGE -->
<section class="my_account parallax">
    
    <!-- CONTAINER -->
    <div class="container">
        
        <div class="my_account_block clearfix">
            <div class="login">
                <h2>I'M ALREADY REGISTERED</h2>
                <form class="login_form" action="{{URL::to('member/login')}}" method="post">
                    <input type="text" name="email" placeholder="your email" onFocus="if (this.value == 'your email') this.value = '';" onBlur="if (this.value == '') this.value = 'your email';" />
                    <input class="last" type="password" name="password" value="Password" onFocus="if (this.value == 'Password') this.value = '';" onBlur="if (this.value == '') this.value = 'Password';" />
                    <div class="clearfix">
                        <!-- <div class="pull-left"><input type="checkbox" id="categorymanufacturer1" /><label for="categorymanufacturer1">Keep me signed</label></div> -->
                        <div class="pull-right"><a class="forgot_pass" href="{{URL::to('member/forget-password')}}" >Forgot password?</a></div>
                    </div>
                    <div class="center"><input type="submit" value="Login"></div>
                </form>
            </div>
            <div class="new_customers">
                <h2>NEW CUSTOMERS</h2>
                <p>Register with Glammy Shop to enjoy personalized services, including:</p>
                <ul>
                    <li><a href="javascript:void(0);" >—  Online Order Status</a></li>
                    <li><a href="javascript:void(0);" >—  Love List</a></li>
                    <li><a href="javascript:void(0);" >—  Sign up to receive exclusive news and private sales</a></li>
                    <li><a href="javascript:void(0);" >—  Place Test Orders</a></li>
                    <li><a href="javascript:void(0);" >—  Quick and easy checkout</a></li>
                </ul>
                <div class="center"><a class="btn active" href="{{URL::to('member/create')}}" >create new account</a></div>
            </div>
        </div>
        
    </div><!-- //CONTAINER -->
</section><!-- //MY ACCOUNT PAGE -->