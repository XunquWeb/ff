<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>css/login.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container_fix">
        <div class="login_title">
            <div class="logo">
                <img src="<?=base_url()?>image/logo_img.png">
            </div>
            <div class="slogan">
                <img src="<?=base_url()?>image/logo_text.png">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="ver_fix">
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="account-wall">
                    <form class="form-signup">
                        <input type="text" class="form-control" id="" placeholder="用户名" required autofocus>
                        <input type="password" class="form-control" placeholder="密码" required>
                        <input type="password" class="form-control" id="" placeholder="确认密码" required autofocus>
                        <button class="btn btn-lg btn-primary btn-block " id="loginButton" type="submit">
                            加入寻趣</button>
                    </form>
                </div>
                <a href="#" class="text-center new-account">已有账号，点此登陆</a>
            </div>
        </div>

    </div>
    <div class="footer_container">
        <div class="footer_ver_fix">
        </div>
        <div class="login_footer">
            ©寻趣网 寻找身边的乐趣
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>