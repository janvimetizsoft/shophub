<!doctype html>
<html>
    <head>
        <title><?php echo isset($title) ? $title : 'Birthday-offer'; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <link rel="stylesheet" href="<?php echo base_url("public/assets/css/bootstrap.min.css"); ?>" />
    </head>
    <body screen_capture_injected="true">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default" style="margin-top: 50%;">
                <div class="panel-heading"> <strong class="">Login</strong>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" action="" method="post">
                        <div class="form-group">
                            <div class=" col-sm-9">
                                The URL of the Shop (enter it exactly like this: myshop.myshopify.com) :
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <input type="text" name="shop" id="shop"  class="form-control"  required="">
                            </div>
                        </div>
                        <div class="form-group last">
                            <div class=" col-sm-9">
                                <input type="submit" value="Login/Install" class="btn btn-success btn-sm">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">Don't have a shop to install your app in handy? <a href="https://app.shopify.com/services/partners/api_clients/test_shops" rel="register" class="">Register here</a>
                </div>
            </div>
        </div>
    </body>
</html>