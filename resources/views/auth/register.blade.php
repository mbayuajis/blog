<style media="screen">
@import url(http://weloveiconfonts.com/api/?family=entypo);
@import url(https://fonts.googleapis.com/css?family=Roboto);

.container {
margin: 12% auto 0;
}
.container:before {
content: url('');
display: block;
margin: 0 auto;
height: 184px;
width: 173px;
}

/* zocial */
[class*="entypo-"]:before {
font-family: 'entypo', sans-serif;
}

*,
*:before,
*:after {
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
}

h2 {
font-family: 'Roboto', sans-serif;
color:rgba(255,255,255,.8);
margin-left:12px;
}

body {
background: #272125;
/*
background: url("http://www.inboundnow.com/wp-content/uploads/2014/08/bg1.jpg") no-repeat center center fixed;
background-size: cover;
*/
}

#ml-login {
position:relative;
margin: 50px auto;
width: 380px;
height: auto;
}

#ml-login input {
padding: 16px;
border-radius:7px;
border:0px;
background: rgba(255,255,255,.2);
display: block;
margin: 15px;
width: 300px;
color:white;
font-size:18px;
height: 54px;
}

#ml-login input:focus {
outline-color: rgba(0,0,0,0);
background: rgba(255,255,255,.95);
color: #e74c3c;
}

#ml-login button {
float:right;
height: 193px;
width: 50px;
border: 0px;
background: #e74c3c;
border-radius:7px;
padding: 10px;
color:white;
font-size:22px;
}

#ml-login .inputUserIcon {
position:absolute;
top:68px;
right: 80px;
color:white;
}

#ml-login .inputPassIcon {
position:absolute;
top:136px;
right: 80px;
color:white;
}

#ml-login input::-webkit-input-placeholder {
color: white;
}

#ml-login input:focus::-webkit-input-placeholder {
color: #e74c3c;
}

</style>

<div id="main" class="container"></div>
<form action="{{ route('register') }}" method="POST" id="ml-login">
  @csrf

  <h2><span class="entypo-login"></span> Register</h2>
  <button type="submit" value="Register"class="submit"<span></span></button>
  <span class="entypo-key inputPassIcon"></span>
  <input type="name"id="name" name="name" class="name" placeholder="name" />

  <span class="entypo-user inputUserIcon"></span>
  <input type="email" id="email" name="email" class="user" placeholder="e-mail" />
  <span class="entypo-key inputPassIcon"></span>
  <input type="password"id="password" name="password" class="pass" placeholder="password" />
  <span class="entypo-key inputPassIcon"></span>
  @if ($errors->has('password'))
          <span style="color:red;" role="alert">
             <strong>{{ $errors->first('password') }}</strong>
          </span>
        @endif
  <input type="password"id="password-confirm" name="password_confirmation" class="pass" placeholder="password" />


  <a style="color:white;"href="{{route ('register')}}" >Register</a>

</form>
