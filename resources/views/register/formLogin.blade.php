<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://code.jquery.com/jquery-2.1.0.min.js" ></script>
    <link rel="stylesheet" href="/css/form.css">
  </head>
  <body>
    <div id="formWrapper">

      <div id="form">
        <div class="logo">
          Login
        </div>
		      <div class="form-item">
            <p class="formLabel">Email</p>
               <input type="email" name="email" id="email" class="form-style" autocomplete="off"/>
		       </div>
           <div class="form-item">
             <p class="formLabel">Password</p>
             <input type="password" name="password" id="password" class="form-style" />
             <!-- <div class="pw-view"><i class="fa fa-eye"></i></div> -->
             <p><a href="#" ><small>Forgot Password ?</small></a></p>
           </div>
           <div class="form-item">
             <p class="pull-left"><a href="#"><small>Register</small></a></p>
             <input type="submit" class="login pull-right" value="Log In">
		        <div class="clear-fix"></div>
		      </div>
        </div>
      </div>
    </body>
</html>
