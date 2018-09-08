<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title;?></title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?=base_url()?>assets/admin/js/html5shiv.js"></script>
    <script src="<?=base_url()?>assets/admin/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="signin">


<section>

    <div class="panel panel-signin">
        <div class="panel-body">
            <button id="error" class="btn btn-danger btn-block"></button>
            <button id="redirect" class="btn btn-success btn-block "><i class="fa fa-check"></i> Login Successful. Redirecting ....</button>
            <?php
            $msg=$this->session->userdata('message');
            if($msg){
                echo "<button id='flash' class='btn btn-info btn-block'><i class='fa fa-thumbs-up'></i> ".$msg."</button>";
                $this->session->unset_userdata('message');
            }
            ?>
            <br>
            <h2 class="text-center">Login Administrator</h2><br>
            
			<form id="login" action="" method="post">
                <input type="hidden" name="" value="<?php echo $this->security->get_csrf_hash(); ?>">
                <div class="input-group mb15">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                </div><!-- input-group -->
                <div class="input-group mb15">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div><!-- input-group -->

                <div class="clearfix">
                    <div class="pull-left">
                        <div class="ckbox ckbox-primary mt10">
                            <input type="checkbox" id="rememberMe" value="1">
                            <label for="rememberMe">Remember Me</label><br>
                        </div>
                    </div>
                    <br>
                    <br>
                    <button id="sign" type="submit" class="btn btn-primary btn-block">Sign In</button>
                    <button id="auth" class="btn btn-info btn-block">Authenticating <i class='fa fa-spinner'></i></button>
                </div>
            </form>

        </div>
    </div><!-- panel -->

</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
<script>
    $('#auth').hide();
    $('#redirect').hide();
    $('#error').hide();
    $('#flash').delay(3000).fadeOut();

    $(document).bind("ajaxStart", function () {
        $('#sign').hide();
        $('#auth').show();

    });
    $(document).on('ajaxError', function () {
        $('#sign').show();
        $('#auth').hide();
        $('#error').delay(5000).fadeOut();
        $(document).trigger('reset');

    });

    $(document).on('success', function () {
        $('#sign').show();
        $('#auth').hide();
        $('#redirect').show();

    });

    $(document).ready(function () {
        $('#login').on('submit', function (e) {
            e.preventDefault();
            // var url = window.location.protocol + '//' + window.location.host + '/CruDAjaX/';
            var data = $(this).serialize();
            $.ajax({
                url: "<?php echo base_url('admin/auth/process');?>",
                type: 'post',
                data: data,
                dataType: 'json',
                success: function (response) {
                    if (response.status === 'error') {
                        $('#error').show().html('<i class="fa fa-warning"></i> ' +response.message);
                        $(document).trigger('ajaxError');
						console.log(response);
                    }
                    else {
                        $(document).trigger('success');
                        window.location = "<?php echo base_url('dashboard/admin');?>";
                    }
                }
            });
        });
    });

</script>
