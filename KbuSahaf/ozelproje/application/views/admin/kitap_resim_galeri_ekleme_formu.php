<?php
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
?>

<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Resim Galerisi Ekle</h1>
                    </div>

                    <h3> <?=$veri[0]->adi?> </h3>
                    
                    

                    <form action="<?=base_url()?>admin/kitaplar/resim_upload/<?=$id?>" method = "post" enctype = "multipart/form-data">

                        <input type ="file" name ="userfile" size = "20" onchange="this.form.submit();" />
	                    
                    </form>
                    
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




                    <div class="box-content">
                    <br>
                    <ul class="thumbnails gallery">

                    <?php
                    foreach ($veriler as $rs) 
                    {
                    ?>   
                    		<li id="image-1" class="thumbnail">
	                    		<a style="background: url(<?=base_url()?>uploads/<?=$rs->resim?>)"
	                    		title = "Sample Image 1" href="<?=base_url()?>uploads/<?=$rs->resim?>">
	                    		<img class="grayscale" src="<?=base_url()?>uploads/<?=$rs->resim?>" alt = "Sample Image 1"></a>
	                    		<a href="<?=base_url()?>admin/kitaplar/delete_resim/<?=$veri[0]->id?>/<?=$rs->id?>">Sil</a>
                    		</li>
		                    	


                    
                    <?php
                    }
                    ?>


               	 </div>
                
            </div>
 </div>
    
<?php
    $this->load->view('admin/_footer');
?>
    