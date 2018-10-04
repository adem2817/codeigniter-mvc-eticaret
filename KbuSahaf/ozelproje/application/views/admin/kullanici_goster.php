<?php
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
        
        

?>
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Kullanıcı Bilgileri</h1>
                    </div>
                        <!-- /. ROW  -->
                <div class="panel panel-default">
                        <div class="panel-heading">
                            Bilgiler
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                       <tr>
                                       <th>Adı Soyadı</th>
                                        <td><?=$veri[0]->adsoy?></td>
                                       </tr>
                                       
                                       <tr>
                                       <th>Email Adresi</th>
                                        <td><?=$veri[0]->email?></td>
                                       </tr>

                                       <tr>
                                       <th>Yetkisi</th>
                                        <td><?=$veri[0]->yetki?></td>
                                       </tr>

                                       <tr>
                                       <th>Durum</th>
                                        <td><?=$veri[0]->durum?></td>
                                        </tr>
                                </table>
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
    
