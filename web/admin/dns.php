<!DOCTYPE html>  <html lang="en"><head>    <meta charset="utf-8">    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta name="viewport" content="width=device-width, initial-scale=1">    <meta name="description" content="">    <meta name="author" content="">    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">    <title>康师傅流控管理后台</title>    <!-- Bootstrap Core CSS -->    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">    <!-- Menu CSS -->    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">    <!-- animation CSS -->    <link href="css/animate.css" rel="stylesheet">    <!-- Custom CSS -->    <link href="css/style.css" rel="stylesheet">    <!-- color CSS -->    <link href="css/colors/default.css" id="theme" rel="stylesheet">    <!-- animation CSS -->    <link href="css/animate.css" rel="stylesheet">    <!-- Date picker plugins css -->    <link href="../plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />    <!-- Daterange picker plugins css -->    <link href="../plugins/bower_components/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">    <link href="../plugins/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">        <link href="../plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />    <link href="../plugins/bower_components/custom-select/custom-select.css" rel="stylesheet" type="text/css" />    <link href="../plugins/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" />    <link href="../plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />    <link href="../plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />    <link href="../plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />    <link href="../plugins/bower_components/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->    <!--[if lt IE 9]>    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->    <script>        (function (i, s, o, g, r, a, m) {            i['GoogleAnalyticsObject'] = r;            i[r] = i[r] || function () {                (i[r].q = i[r].q || []).push(arguments)            }, i[r].l = 1 * new Date();            a = s.createElement(o), m = s.getElementsByTagName(o)[0];            a.async = 1;            a.src = g;            m.parentNode.insertBefore(a, m)        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');        ga('create', 'UA-19175540-9', 'auto');        ga('send', 'pageview');    </script></head><?php    include 'php/header.php';    include 'php/left-sidebar.php';    ?>    <!-- Page Content -->    <div id="page-wrapper">        <div class="container-fluid">            <div class="row bg-title">                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">                    <h4 class="page-title">DNS拦截</h4> </div>                <!-- /.col-lg-12 -->            </div>            <!--.row-->            <div class="alert alert-success alert-dismissable">    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">    &times;    </button>                    <strong>示例：</strong> 127.0.0.1 www.baidu.com 则用户访问百度会被屏蔽，高级游戏用户可关注公众号 秃头程序猿 获取每日最新DNS拦截(仅供参考)。                  </div>            <div class="row">                <div class="col-md-12">                    <div class="white-box">                                        <div class="row">                            <div class="col-sm-12 col-xs-12"><?php  if($_GET['act'] == 'update'){  $info = file_put_contents("/etc/kangml_hosts",$_POST["content"]);    echo '<div class="alert alert-success alert-dismissable">    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">    &times;    </button>                  成功修改，请在服务器里使用vpn命令重启VPN服务生效！</div>                <a href="dns.php" class="btn btn-info btn-icon btn-icon-standalone">                  <i class="fa fa-list-ol"></i>                  <span>返回</span>                </a>                  <style>#appcon{display: none;}</style>';  }else{    $action = "?act=update";    $info = file_get_contents("/etc/kangml_hosts");    //$p = '/default\s([0-9]*)/';    //preg_match($p,$info,$m);    }?><script>    KindEditor.ready(function(K) {      var editor1 = K.create('textarea[name="content"]', {        cssPath : '/app_api/Core/KE/plugins/code/prettify.css',        uploadJson : '/app_api/Core/KE/php/upload_json.php',        fileManagerJson : '/app_api/Core/KE/php/file_manager_json.php',        allowFileManager : true,        afterCreate : function() {          var self = this;          K.ctrl(document, 13, function() {            self.sync();            K('form[name=add]')[0].submit();          });          K.ctrl(self.edit.doc, 13, function() {            self.sync();            K('form[name=add]')[0].submit();          });        }      });      prettyPrint();    });  </script>      <form id="appcon" class="form-horizontal" role="form" method="POST" action="<?php echo $action;?>" onsubmit="return checkStr()">      <div class="form-group" >        <label for="firstname" class="col-sm-2 control-label">DNS拦截规则</label>        <div class="col-sm-10">                  <div class="col-sm-10">                    <textarea class="form-control" rows="20" name="content" id="myEditor"><?php echo $info ?></textarea>          <script>UE.getEditor('myEditor');</script>          </div>        </div>      </div>       <div class="form-group">        <div class="col-sm-offset-2 col-sm-10">          <button type="submit" class="btn btn-success">提交数据</button>        </div>      </div>    </form>                             </div>                        </div>                    </div>                </div>            </div>            <!--./row-->            <?php include 'php/right-sidebar.php';?>        </div>        <!-- /.container-fluid -->        <?php include 'php/footer.php';?>    </div>    <!-- /#page-wrapper -->    </div>    <!-- /#wrapper -->    <!-- jQuery -->    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>    <!-- Bootstrap Core JavaScript -->    <script src="bootstrap/dist/js/bootstrap.min.js"></script>    <!-- Menu Plugin JavaScript -->    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>    <!--slimscroll JavaScript -->    <script src="js/jquery.slimscroll.js"></script>    <!--Wave Effects -->    <script src="js/waves.js"></script>    <!-- Custom Theme JavaScript -->    <script src="js/custom.min.js"></script>    <script src="js/jasny-bootstrap.js"></script>    <!--Style Switcher -->    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>    <!--Style Switcher -->    <!-- Plugin JavaScript -->    <script src="../plugins/bower_components/moment/moment.js"></script>    <!-- Clock Plugin JavaScript -->    <script src="../plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.js"></script>    <!-- Color Picker Plugin JavaScript -->    <script src="../plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>    <script src="../plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>    <script src="../plugins/bower_components/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>    <!--Style Switcher --><script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script></body></html>