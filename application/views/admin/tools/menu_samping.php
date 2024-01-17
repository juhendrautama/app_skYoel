 <aside class="main-sidebar sidebar-dark-dark bg-gradient-info elevation-0">

     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex ">

             <div class="info" class="brand-link">
                 <center>
                     <font style="font-size:15px; ">Aplikasi <br> WeelChair And Car Assistance</font>
                 </center>

             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2 ">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <li class="nav-item">
                     <a href="Home" style="color:#fff;" class="nav-link 
                        <?php if ($this->uri->segment('1') == 'Home') {
                            echo "active";
                        } else {
                        } ?>">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             DASHBOARD
                         </p>
                     </a>
                 </li>
                 <?php
                    $level = $this->session->userdata('level');
                    if ($level == '1') {
                    ?>
                 <li class="nav-item">
                     <a href="Data_pegawai" style="color:#fff;" class="nav-link 
                        <?php if ($this->uri->segment('1') == 'Data_pegawai') {
                            echo "active";
                        } else {
                        } ?>">
                         <i class="nav-icon fas fa-archway"></i>

                         <p>
                             Bandara
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="Data_pegawai" style="color:#fff;" class="nav-link 
                        <?php if ($this->uri->segment('1') == 'Data_pegawai') {
                            echo "active";
                        } else {
                        } ?>">
                         <i class="nav-icon fas fa-plane-departure"></i>
                         <p>
                             Maskapai
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="Data_kompetensi" style="color:#fff;" class="nav-link 
                        <?php if ($this->uri->segment('1') == 'Data_kompetensi') {
                            echo "active";
                        } else {
                        } ?>">
                         <i class="nav-icon fas fa-wheelchair"></i>

                         <p>
                             WeelChair
                         </p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a href="Data_bidang" style="color:#fff;" class="nav-link 
                        <?php if ($this->uri->segment('1') == 'Data_bidang') {
                            echo "active";
                        } else {
                        } ?>">
                         <i class="nav-icon fas fa-shuttle-van"></i>

                         <p>
                             Car Assistance
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="Cek_data_kompetensi" style="color:#fff;" class="nav-link 
                        <?php if ($this->uri->segment('1') == 'Cek_data_kompetensi') {
                            echo "active";
                        } else {
                        } ?>">
                         <i class="nav-icon fas fa-user-tie"></i>
                         <p>
                             Petugas
                         </p>
                     </a>
                 </li>


                 <?php } else if ($level == '2') { ?>



                 <li class="nav-item">
                     <a href="DataOrder" style="color:#fff;" class="nav-link 
                        <?php if ($this->uri->segment('1') == 'DataOrder') {
                            echo "active";
                        } else {
                        } ?>">
                         <i class="nav-icon fas fa-clipboard-list"></i>

                         <p>
                             Data Order
                         </p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a href="Petugas" style="color:#fff;" class="nav-link 
                        <?php if ($this->uri->segment('1') == 'Petugas') {
                            echo "active";
                        } else {
                        } ?>">
                         <i class="nav-icon fas fa-user-tie"></i>
                         <p>
                             Petugas
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="WeelChair" style="color:#fff;" class="nav-link 
                        <?php if ($this->uri->segment('1') == 'WeelChair') {
                            echo "active";
                        } else {
                        } ?>">
                         <i class="nav-icon fas fa-wheelchair"></i>

                         <p>
                             WeelChair
                         </p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a href="CarAssistance" style="color:#fff;" class="nav-link 
                        <?php if ($this->uri->segment('1') == 'CarAssistance') {
                            echo "active";
                        } else {
                        } ?>">
                         <i class="nav-icon fas fa-shuttle-van"></i>

                         <p>
                             Car Assistance
                         </p>
                     </a>
                 </li>



                 <?php } ?>

             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>