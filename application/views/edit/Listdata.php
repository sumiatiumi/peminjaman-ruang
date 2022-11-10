<!DOCTYPE html>
<html>
<?php $this->load->view("partial/head.php") ?>
<div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="admin">Home</a>
              </li>
              <li class="breadcrumb-item active">Tables</li>
            </ol>
            <form method="POST" action="input_user2" enctype="multipart/form-data" class="col-md-12">
              <div class="row">
                <div class="col-md-4">                
                  
                  <div class="form-group">
                    <label for="Password Siswa">No Induk</label>
                    <input value=""  type="text" class="form-control" name="ayah">
                  </div>
                 
                  <div class="form-group">
                    <label for="Password Orang Tua">Alamat</label>
                    <input value=""  type="text" class="form-control" name="wali">
                  </div>

                   <div class="form-group">
                    <label for="Password Siswa">Guru BK</label>
                    <input value=""  type="text" class="form-control" name="ayah">
                  </div>
                 
                  <div class="form-group">
                    <label for="Password Orang Tua">Nama Wali</label>
                    <input value=""  type="text" class="form-control" name="wali">
                  </div>  

                 <div class="form-group">
                    <label for="Password Siswa">Nama </label>
                    <input value=""  type="text" class="form-control" name="ayah">
                  </div>
                 
                  <div class="form-group">
                    <label for="Password Orang Tua">Tempat Lahir</label>
                    <input value=""  type="text" class="form-control" name="wali">
                  </div>      
                                           
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="Tanggal Lahir">Tanggal Lahir</label>
                    <input value=""  type="date" class="form-control" name="tl">
                  </div>   

                   <div class="form-group">
                    <label for="Jenis Kelamin">Jenis Kelamin</label>
                    <select class="form-control" name="jk">
                         <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>

                   <div class="form-group">
                    <label for="Golongan Darah">Golongan Darah</label>
                    <select name="goldar" class="form-control">
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="AB">AB</option>
                      <option value="O">O</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="Status">Status</label>
                    <select class="form-control" name="status">
                      <option value="Aktif">Aktif</option>
                      <option value="Lulus">Lulus</option>
                      <option value="Berhenti">Berhenti</option>
                      <option></option>
                    </select>
                  </div>
                                   
                  <div class="form-group">
                    <label for="Angkatan">Angkatan</label>
                    <select class="form-control" name="angkatan">
                      <option value="2015/2016">2015/2016</option>
                      <option value="2016/2017">2016/2017</option>
                      <option value="2017/2018">2017/2018</option>
                      <option value="2018/2019">2018/2019</option>
                    </select>
                  </div>  

                   <div class="form-group">
                    <label for="Password Orang Tua">No Hp</label>
                    <input value=""  type="text" class="form-control" name="hp">
                  </div> 

                  <div class="form-group">
                    <label for="Password Orang Tua">Email</label>
                    <input value=""  type="text" class="form-control" name="hp">
                  </div> 
                </div>
              </div>

              <div class="card-footer small text-mutedtext-center">
                <?php 
                if(isset($_GET['ubah'])){
                 echo "<button type='submit' name='ubah' class='btn btn-warning col-md-2 col-xs-12'>Ubah</button>";
               } 
               else {
                 echo "<button name='Simpan Perubahan' type='submit' class='btn btn-primary col-md-2 col-xs-12'>Simpan Perubahan</button> ";
               }
               ?>
             </div>

           </form>
           <p class="small text-center text-muted my-5">
            <em></em>
          </p>


<?php $this->load->view("partial/foot.php") ?>
</html>