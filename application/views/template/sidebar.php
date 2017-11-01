 <style type="text/css">


 </style>
 <aside id="sidebar" class="column" style=" margin-top: 40px; ">
      <hr/>
      <?php $idartikel =$this->uri->segment(3); ?>
      <h3>Menu</h3> 
      <ul class="toggle">
        <li class="icn_categories"><a href="<?php echo site_url('baca/juduljurnal1').'/'.$idartikel; ?>">Abstrak </a></li>
        <li class="icn_categories"><a href="<?php echo site_url('baca/pendahuluan1').'/'.$idartikel; ?>">Pendahuluan</a></li>
        <li class="icn_categories"><a href="<?php echo site_url('baca/kajianpustaka1').'/'.$idartikel; ?>">Kajianpustaka</a></li>
        <li class="icn_categories"><a href="<?php echo site_url('baca/landasanteori1').'/'.$idartikel; ?>">Landasan Teori</a></li>
        <li class="icn_categories"><a href="<?php echo site_url('baca/metodepenelitian1').'/'.$idartikel;?>">Metode Penelitian</a></li>
        <li class="icn_categories"><a href="<?php echo site_url('baca/pembahasan1').'/'.$idartikel; ?>">Pembahasan</a></li>
        <li class="icn_categories"><a href="<?php echo site_url('baca/penutup1').'/'.$idartikel; ?>">Penutup</a></li>
        <li class="icn_categories"><a href="<?php echo site_url('baca/daftarpustaka1').'/'.$idartikel; ?>">Daftar Pustaka</a></li>
      </ul>
      
    </aside>