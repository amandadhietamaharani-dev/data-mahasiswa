     <!-- TASKS -->
                <li class="xn-icon-button pull-right">
                            
                </li>
                <!-- END TASKS -->
            </ul>
            <!-- END X-NAVIGATION VERTICAL -->                     

            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>                    
                <li class="active">Dashboard</li>
            </ul>
            <!-- END BREADCRUMB -->                       
            
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                
                <!-- START WIDGETS -->                    
                <div class="row">
                    <div class="col-md-3">
                        
                        <!-- START WIDGET SLIDER -->
                        <div class="widget widget-default widget-carousel">
                            <div class="owl-carousel" id="owl-example">
                                <div>                                    
                                    <div class="widget-title">Total Visitors</div>                                                                        
                                    <div class="widget-subtitle">27/08/2014 15:23</div>
                                    <div class="widget-int">3,548</div>
                                </div>
                                <div>                                    
                                    <div class="widget-title">Returned</div>
                                    <div class="widget-subtitle">Visitors</div>
                                    <div class="widget-int">1,695</div>
                                </div>
                                <div>                                    
                                    <div class="widget-title">New</div>
                                    <div class="widget-subtitle">Visitors</div>
                                    <div class="widget-int">1,977</div>
                                </div>
                            </div>                            
                            <div class="widget-controls">                                
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>                             
                        </div>         
                        <!-- END WIDGET SLIDER -->
                        
                    </div>
                    <div class="col-md-3">                                  
                        
                        <!-- START WIDGET MESSAGES -->                    
                        <div class="widget widget-default widget-item-icon" onclick="location.href='<?=base_url('public/assets/pages-messages.html')?>';"> 
                            <div class="widget-item-left">
                                <span class="fa fa-envelope"></span>
                            </div>                             
                            <div class="widget-data">
                                <div class="widget-int num-count">48</div>
                                <div class="widget-title">New messages</div>
                                <div class="widget-subtitle">In your mailbox</div>
                            </div>      
                            <div class="widget-controls">                                
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                        </div>                            
                        <!-- END WIDGET MESSAGES -->
                        
                    </div>
                    <div class="col-md-3">
                        
                        <!-- START WIDGET REGISTRED -->
                        <div class="widget widget-default widget-item-icon" onclick="location.href='<?=base_url('/mahasiswa')?>';">
                            <div class="widget-item-left">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-int num-count"><?= $jumlahBiodata?></div>
                                <div class="widget-title">Jumlah data Mahasiswa</div>
                                <div class="widget-subtitle">Data Pribadi</div>
                            </div>
                            <div class="widget-controls">                                
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>                            
                        </div>                            
                        <!-- END WIDGET REGISTRED -->
                        
                    </div>
                    <div class="col-md-3">
                        
                        <!-- START WIDGET CLOCK -->
                        <div class="widget widget-danger widget-padding-sm">
                            <div class="widget-big-int plugin-clock">00:00</div>                            
                            <div class="widget-subtitle plugin-date">Loading...</div>
                            <div class="widget-controls">                                
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>                            
                            <div class="widget-buttons widget-c3">
                                <div class="col">
                                    <a href="#"><span class="fa fa-clock-o"></span></a>
                                </div>
                                <div class="col">
                                    <a href="#"><span class="fa fa-bell"></span></a>
                                </div>
                                <div class="col">
                                    <a href="#"><span class="fa fa-calendar"></span></a>
                                </div>
                            </div>                            
                        </div>                        
                        <!-- END WIDGET CLOCK -->
                        
                    </div>
                </div>
                <!-- END WIDGETS -->                    
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title-box">
                                    <h3>Grafik Perbandingan Jenis Kelamin</h3>
                                    <span>Jumlah Mahasiswa Laki-laki & Perempuan</span>
                                </div>
                                <ul class="panel-controls" style="margin-top: 2px;">
                                    <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                </ul>
                            </div>
                            <div class="panel-body padding-0">
                                <div class="chart-holder" id="dashboard-area-mahasiswa" style="height: 200px;"></div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        
                
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        
                        <!-- START SALES & EVENTS BLOCK -->   
                    </div>
                    <div class="col-md-4"> 
            </div>
            <!-- END PAGE CONTENT WRAPPER -->                                
        </div>            
        <!-- END PAGE CONTENT -->
    </div>
    <!-- Pemicu Grafik Morris Area -->
<!-- Pemicu Grafik Morris Bar (Batang) -->
<script type="text/javascript">
window.onload = function() {
    if (typeof Morris !== 'undefined') {
        Morris.Bar({
            element: 'dashboard-area-mahasiswa',
            data: <?= $grafik_json; ?>,
            xkey: 'label_gender',          // Nama kelompok di sumbu X
            ykeys: ['laki', 'perempuan'],  // Data yang akan dijadikan batang
            labels: ['Laki-laki', 'Perempuan'], // Label pop-up saat di-hover
            barColors: ['#006E42', '#6E0051'],  // Warna batang (Biru Gelap & Orange khas Atlant)
            hideHover: 'auto',
            gridLineColor: '#E5E5E5',
            resize: true
        });
    } else {
        console.log("Library Morris.js belum ke-load!");
    }
};
</script>
    <!-- END PAGE CONTAINER -->