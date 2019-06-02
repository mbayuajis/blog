<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://code.jquery.com/jquery-2.1.0.min.js" ></script>
    <link rel="stylesheet" href="/css/form.css">
    <script type="text/javascript">
      $(document).ready(function(){
        var formInputs = $('input[type="username"],input[type="email"],input[type="password"]');
        formInputs.focus(function() {
     $(this).parent().children('p.formLabel').addClass('formTop');
     $('div#formWrapper').addClass('darken-bg');
     $('div.logo').addClass('logo-active');
});
formInputs.focusout(function() {
  if ($.trim($(this).val()).length == 0){
  $(this).parent().children('p.formLabel').removeClass('formTop');
  }
  $('div#formWrapper').removeClass('darken-bg');
  $('div.logo').removeClass('logo-active');
});
$('p.formLabel').click(function(){
   $(this).parent().children('.form-style').focus();
});
});
    </script>
  </head>
  <body>
    <div id="formWrapper">


<form class="" action="{{url(action('RegisterController@postRegister'))}}" method="get">
  <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
  <div class="logo">
    Register
  </div>


  <div class="form-item">
    <p class="formLabel">Username</p>
       <input type="username" name="username" id="name" class="form-style" autocomplete="off"/>
   </div>
    <div class="form-item">
      <p class="formLabel">Email</p>
         <input type="email" name="email" id="email" class="form-style" autocomplete="off"/>
     </div>
     <div class="form-item">
       <p class="formLabel">Password</p>
       <input type="password" name="password" id="password" class="form-style" />
       <!-- <div class="pw-view"><i class="fa fa-eye"></i></div> -->
     </div>
     <div class="form-item">
       <p class="pull-left"><a href="{{URL('/')}}"><small>Login</small></a></p>
       <input type="submit" class="login pull-right" value="Register">
      <div class="clear-fix"></div>
    </div>
  </div>
</form>
      <div action="" method="post" class="form">

      </div>
    </body>
</html>
