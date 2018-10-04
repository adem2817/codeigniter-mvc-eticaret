<?php
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
?>

<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Resim Ekle</h1>
                    </div>
<label>             <h3> <?=$veri[0]->adi?> </h3>
                    
                    <?php
                    	if($veri[0]->resim!=NULL)
                    		{?>
	                    	<img height="100" src="<?=base_url()?>uploads/<?=$veri[0]->resim?>">
	                       <?php
	                    	}
	                    	?>

                    
                            <?php echo form_open_multipart(base_url().'admin/kitaplar/resim_upload/'.$id);?>
        	                    <!-- <input type ="file" name ="userfile" size = "20" onchange="this.form.submit();" /> -->
                                <input type ="file" name ="userfile" size = "20" />
        	                    <input type ="submit" value = "upload" />
                            
</label>
       
                </div>
                
            </div>
 </div>
    
<?php
    $this->load->view('admin/_footer');
?>
    