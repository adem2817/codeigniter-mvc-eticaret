<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin KbuSahaf</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="<?=base_url()?>assets/admin/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?=base_url()?>assets/admin/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="<?=base_url()?>assets/admin/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="<?=base_url()?>assets/admin/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">KBU SAHAF</a>
            </div>

        <!-- user dropdown starts -->
        <div class="btn-group pull-right">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
            <i class="glyphicon glyphicon-user"> </i> <span class="hidden-sm hidden-xs"> <?=$this->session->oturum_data['adsoy']?>
                    
                </span>
                <span class="caret"></span>
            </button>            
            <ul class="dropdown-menu">
                <li><a href="<?=base_url() ?>/admin/kullanicilar/goster/<?=$this->session->oturum_data['id']?>">Profil</a></li>
                <li class="divider"></li>
                <li > <a href="<?=base_url() ?>/admin/login/log_out"> Çıkış </a> </li>
            </ul>
        </div>
        <!-- user dropdown end -->




        </nav>