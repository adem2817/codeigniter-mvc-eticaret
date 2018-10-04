<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- BOOTSTRAP STYLES-->
    <link href="<?=base_url()?>assets/admin/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?=base_url()?>assets/admin/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="<?=base_url()?>assets/admin/img/logo-invoice.png" />
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form action="<?=base_url()?>admin/login/login_ol" method="post">
                                    <hr />
                                    <h5>Bilgilerinizi Giriniz</h5>
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="email" name = "email" class="form-control" placeholder="Email " />
                                        </div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name= "password" class="form-control"  placeholder="Parola" />
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> Beni Hatırla
                                            </label>
                                            <span class="pull-right">
                                                   <a href="index.html" >Parolamı unuttum ? </a> 
                                            </span>
                                        </div>
                                     
                                     <button type="submit" class="btn btn-primary" > GİR </button>
                                    <hr />

                                    Üye olmak için 
                                    <a href= "<?=base_url()?>admin/index.html" > Buraya Tıkla </a> ya da 
                                    <a href= "<?=base_url()?>admin/index.html">Anasayfa ya Git</a> 
                                    </form>

                                     <?php 
                                        if($this->session->flashdata("login_hata"))
                                        {
                                    ?>

                                      <div class="alert alert-success"> 
                                           <strong>İşlem :</strong> 
                                           <?=$this->session->flashdata("login_hata")?>
                                      </div>
                                    <?php
                                        }
                                    ?>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
