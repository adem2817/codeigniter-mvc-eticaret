
 <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Kullanıcılar
                          <a href="<?=base_url()?>admin/kullanicilar/ekle" class="btn btn-primary dropdown-toggle">Kullanıcı Ekle</a></h1></th></h1>
                                        
                            <!--biçimlendirilmiş butonumuzu burada hazırladık.adres belirledik-->
                          <?php 
                                if($this->session->flashdata("sonuc"))
                            {
                          ?>

                          <div class="alert alert-success"> 
                               <strong>İşlem :</strong> 
                               <?=$this->session->flashdata("sonuc")?>
                            </div>
                            <?php
                                }
                            ?>


                       <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            listeleme
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Adı Syadı</th>
                                            <th>E-mail</th>
                                            <th>Şifre</th>
                                            <th>Yetki</th>
                                            <th>Durum</th>
                                            <th>Tarih</th>
                                            <th>İşlem</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    	foreach ($veri as $rs) 
                                    	{
                                    ?>
                                    <tr>
                                        <td><?=$rs->id?></td>
                                        <td><?=$rs->adsoy?></td>
                                        <td><?=$rs->email?></td>
                                        <td><?=$rs->sifre?></td>
                                        <td><?=$rs->yetki?></td>
                                        <td><?=$rs->durum?></td>
                                        <td><?=$rs->tarih?></td>
                                        <th> 
                                             <a href="<?=base_url()?>admin/kullanicilar/goster/<?=$rs->id?>" class="btn btn-primary dropdown-toggle">Göster</a>

                                             <a href="<?=base_url()?>admin/kullanicilar/edit/<?=$rs->id?>" class="btn btn-primary dropdown-toggle">Düzenle</a>

                                             <a href="<?=base_url()?>admin/kullanicilar/delete/<?=$rs->id?>" 
                                             onclick ="return confirm('Silmek istediğinize emin misiniz ?'); " class="btn btn-primary dropdown-toggle">Sil</a>
                                          </th>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End  Hover Rows  -->



                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        
        <!-- /. PAGE WRAPPER  -->
</div>
    <!-- /. WRAPPER  -->


