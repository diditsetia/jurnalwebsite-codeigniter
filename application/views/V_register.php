<style type="text/css">
.image-upload > input {
display: none;
}




   </style>
   <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 style="color: #56bca6">Register</h4>
                <?php echo $error;?>
            </div>
        </div>
        <!-- /.row -->
       
        <hr>
        <form  enctype='multipart/form-data'  action="<?php echo site_url('web/aksiregister'); ?>" method="post" >
        <div class="row">
           <div class="form-group">

              <div class="col-md-3" style="margin-left: 100px;">
              
               <div  class="image-upload " style="height: 200px; width: 100% ; ">
            
                  <label  for="file-input" >
                     <img  class=""  src="<?php echo base_url('assets/img/photocamera.png') ; ?>"
                      style="height: 100px; width:100px ; display: block; margin-top: 35px; margin-left: 100px;"
                          data-holder-rendered="true">
                          <span style="margin-left: 130px;">FOTO</span>
                  </label>
              
                <input type='file' name='userfile' required id='file-input' > 
                </div> 

                 </div>
              <div class="col-sm-3">
              <label style="
               margin-top: 20px;">Nama Lengkap</label>
              <input type="text" class="form-control" name="nama" required placeholder="namalengkap" value="" >
              </div>
              <div class="col-sm-3">
              <label style="
               margin-top: 20px;">Username</label>
              <input type="text" class="form-control" name="username" required placeholder="username" value="" >
              </div>
              

              <div class="col-sm-3">
              <label style="
               margin-top: 40px;">Password</label>
              <input type="password" class="form-control" name="password" required placeholder="password" value="" >
              </div>

               <div class="col-sm-3">
              <label style="
               margin-top: 40px;">email</label>
              <input type="email" class="form-control" name="email" required placeholder="email" value="" >
              </div>



        </div>   
        </div>
        <div class="row">
           <div class="form-group">

              <div class="col-md-3"  style="margin-left: 100px;"> 
                 
              </div>

              <div class="col-md-2"  >  
                 <label   >Tanggal Lahir</label>
              <?php
                $now=date('Y');
                  echo "<select name='tahun' class='form-control'>";
                for ($a=1990;$a<=$now;$a++)
                 {
                echo "<option value='$a'>$a</option>";
                } 
            echo "</select>";
              ?>
              </div>
               <div class="col-md-2" style="
                    margin-top: 5px;
                    " > 
                 <label ></label>
                    <select name="bulan" class="form-control">
                    <option selected="selected">Bulan</option>
                    <?php
                    $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                    $jlh_bln=count($bulan);
                    for($c=0; $c<$jlh_bln; $c+=1){
                        echo"<option value=$bulan[$c]> $bulan[$c] </option>";
                    }
                    ?>
                    </select>
              </div>
               <div class="col-md-2"  style="
                    margin-top: 5px;
                    " > 
                 <label ></label>
                    <select name="tanggal" class="form-control">
                    <option selected="selected">Tanggal</option>
                    <?php
                    for($a=1; $a<=31; $a+=1){
                        echo"<option value=$a> $a </option>";
                    }
                    ?>
                    </select>
              </div>

        </div>   
        </div>
         <div class="row">
           <div class="form-group">

              <div class="col-md-3" style="margin-left: 100px;">   
              </div>
               <div class="col-md-3" > 
                 <label style="
               margin-top: 35px;" >Jenis Kelamin</label>
              <select class="form-control" name="jenis">
              <option   value='laki-laki'>Laki-laki</option>
              <option   value='perempuan'>Perempuan</option>
              </select>
              </div>

               <div class="col-md-3" > 
                 <label style="
               margin-top: 35px;" >Nomer HP</label>
              <input type="text" class="form-control" name="hp" required placeholder="nomerhp" value="" >
              </div>

        </div>   
        </div>

           <div class="row">
           <div class="form-group">

              <div class="col-md-3" style="margin-left: 100px;">   
              </div>
    
               <div class="col-md-6" > 
                 <label style="
               margin-top: 35px;" >Alamat</label>
              <textarea style="height: 120px; " class="form-control " required name="alamat" placeholder="alamat" ></textarea>
              </div>

        </div>   
        </div>
         <div class="row">
           <div class="form-group">

              <div class="col-md-3" style="margin-left: 100px;">   
              </div>
    
               <div class="col-md-6" > 
                 <label style="
               margin-top: 35px;" >Alasan ingin menulis jurnal ilmiah?</label>
              <textarea style="height: 120px; " class="form-control " required name="alasan" placeholder="alasan kamu" ></textarea>
              </div>

        </div>   
        </div>

        <div class="row">
           <div class="form-group">

              <div class="col-md-3" style="margin-left: 100px;">   
              </div>
    
               <div class="col-md-1" > 
                 <label style="
               margin-top: 35px;" ></label>
              <button type="submit"  name="submit" value="submit"  class="btn btn-info"   style="width:100%">Kirim</button>
              </div>

        </div>   
        </div>

          
        </div>
      </form>  
        
    </div>
       