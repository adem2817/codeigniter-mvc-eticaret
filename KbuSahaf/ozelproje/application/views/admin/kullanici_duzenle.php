<?php
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
        
        

?>
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Kullanıcı Düzenle</h1>
                    </div>
                        <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                       <div class="panel panel-info">
                                
                            <div class="panel-body">&nbsp;
                                <form role="form" action="<?=base_url()?>/admin/kullanicilar/guncellekaydet/<?=$veri[0]->id?>" method="post">
                                            <div class="form-group">
                                                <label>Adı Soyadı</label>
                                                <input class="form-control" type="text" id = "adsoy" name = "adsoy" value="<?=$veri[0]->adsoy?>">
                                            </div>
                                            <div class="form-group">
                                                <label>E-mail</label>
                                                <input class="form-control" type="text" id = "email" name = "email" value = "<?=$veri[0]->email?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Şifre</label>
                                                <input class="form-control" type="Password" id = "sifre" name = "sifre" value = "<?=$veri[0]->sifre?>"></br>

                                        <div class="form-group" >
                                            <LABEL>Yetki</LABEL></br>
                                                <select class="form-control" name ="durum">
                                                    <option><?=$veri[0]->durum?></option>
                                                    <option>aktif</option>
                                                    <option>pasif</option>
                                                    <option>engelli</option> 
                                                </select>
                                        </div>


                                         <div class="form-group" >
                                            <LABEL>Yetki</LABEL></br>
                                                <select class="form-control" name ="yetki">
                                                    <option><?=$veri[0]->yetki?></option>
                                                    <option>admin</option>
                                                    <option>satış</option>
                                                    <option>stok</option>
                                                    <option>kargo</option>
                                                </select>
                                        </div>
                            </div

                                <div class = "form-group">
                                        <button type="submit" class="btn btn-info">Guncelle </button>
                                </div>

                                </form>
                        </div>
                    </div>
                </div>
             <!--/.ROW-->


                </div>
                
            </div>
 </div>

<?php
    $this->load->view('admin/_footer');
?>
    
