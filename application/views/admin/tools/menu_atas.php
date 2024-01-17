 <nav class="main-header navbar navbar-expand navbar-white navbar-light">

     <!-- Left navbar links -->
     <ul class="navbar-nav">
         <li class="nav-item">
             <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
         </li>

     </ul>


     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">

         <!-- Navbar Search -->
         <li class="nav-item">
             <a class="nav-link">
                 <?php $level = $this->session->userdata('level'); ?>
                 <b style="color:#111; font-size:15px;">




                 </b>
             </a>

         </li>



         <li class="nav-item ">
             <a href="#" class="btn btn-success btn-sm  elevation-1" data-toggle="modal"
                 data-target="#staticBackdrop_user">
                 <i class="nav-icon fa fa-user-cog"></i>
             </a>
         </li>
         &nbsp;
         <li class="nav-item ">
             <a href="Login_akses/logout" Onclick="return confirm('apakah yakin ingin keluar ?');"
                 class="btn btn-info btn-sm  elevation-1">
                 <i class="nav-icon fa fa-power-off"></i>
             </a>
         </li>
     </ul>
 </nav>


 <!-- Modal -->
 <div class="modal fade" id="staticBackdrop_user" data-backdrop="static" data-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="staticBackdropLabel">
                     <i class="nav-icon fa fa-user-cog"></i> Data User Login
                 </h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form action="Home/Ubah_data_user" method="POST">
                 <div class="modal-body">
                     <input type="text" hidden name="id_admin"
                         value="<?php echo $id_admin = $this->session->userdata('id_admin'); ?>">
                     <div class="row">
                         <div class="form-group col-md-6">
                             <input type="text" class="form-control" required placeholder="username" name="user"
                                 value="<?php echo $id_admin = $this->session->userdata('username'); ?>">
                         </div>
                         <div class="form-group col-md-6">
                             <input type="password" class="form-control" required name="pass" value="">
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary btn-sm" name="proses">Ubah</button>
                 </div>
             </form>
         </div>
     </div>
 </div>
 <!-- Modal -->