<?php
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
        
        

?>
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Yeni Kullanıcı Ekle</h1>
                    </div>
                        <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                       <div class="panel panel-info">
                                
                            <div class="panel-body">&nbsp;
                                <form role="form" action="<?=base_url()?>/admin/kullanicilar/eklekaydet" method="post">
                                            <div class="form-group">
                                                <label>Adı Soyadı</label>
                                                <input class="form-control" type="text" id = "adsoy" name = "adsoy">
                                            </div>
                                            <div class="form-group">
                                                <label>E-mail</label>
                                                <input class="form-control" type="text" id = "email" name = "email">
                                            </div>
                                            <div class="form-group">
                                                <label>Şifre</label>
                                                <input class="form-control" type="Password" id = "sifre" name = "sifre"></br>

                                        <div class="form-group" >
                                            <LABEL>Yetki</LABEL></br>
                                                <select class="form-control" name ="durum">  
                                                    <option>aktif</option>
                                                    <option>pasif</option>
                                                    <option>engelli</option> 
                                                </select>
                                        </div>
                                         <div class="form-group">
                                            <LABEL>Yetki</LABEL></br>
                                                <select class="form-control" name ="yetki">
                                                    <option>admin</option>
                                                    <option>satış</option>
                                                    <option>stok</option>
                                                    <option>kargo</option>
                                                </select>
                                        </div>
                            </div

                                <div class = "form-group">
                                        
                                        <button type="submit" class="btn btn-info">Ekle </button>
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
    
