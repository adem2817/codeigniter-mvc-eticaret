
 <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Kitaplar
                          <a href="<?=base_url()?>admin/kitaplar/ekle" class="btn btn-primary dropdown-toggle">Kitap Ekle</a></h1></th></h1>
                                        
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
                                            <th>Kitap Adı</th>
                                            <th>Türü</th>
                                            <th>Fiyatı</th>
                                            <th>Durum</th>
                                            <th>Resim</th>
                                            <th>Galeri</th>
                                            <th>İşlemler</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    	foreach ($veri as $rs) 
                                    	{
                                    ?>
                                    <tr>
                                        <td><?=$rs->id?></td>
                                        <td><?=$rs->adi?></td>
                                        <td><?=$rs->turu?></td>
                                        <td><?=$rs->fiyat?></td>
                                        <td><?=$rs->durum?></td>


                                        <td>
                                            <a href="<?=base_url()?>admin/kitaplar/resim_ekle/<?=$rs->id?>">

                                            <?php
                                                if($rs->resim == NULL){
                                            ?>
                                            <button class="btn btn-primary dropdown-toggle">Resim Ekle</button> 
                                            <?php
                                            } else
                                            {?>
                                            <img height=40 src="<?=base_url()?>uploads/<?=$rs->resim?>">
                                            <?php
                                            }       
                                            ?>
                                            </a>
                                        </td>
                                        

                                        <td>
                                            <a href="<?=base_url()?>admin/kitaplar/resim_galeri_ekle" class="btn btn-primary dropdown-toggle">
                                                Galeri
                                            </a>
                                        </td>

                                        <th> 
                                             <a href="<?=base_url()?>admin/kitaplar/goster/<?=$rs->id?>" class="btn btn-primary dropdown-toggle">Göster</a>

                                             <a href="<?=base_url()?>admin/kitaplar/edit/<?=$rs->id?>" class="btn btn-primary dropdown-toggle">Düzenle</a>

                                             <a href="<?=base_url()?>admin/kitaplar/delete/<?=$rs->id?>" 
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


