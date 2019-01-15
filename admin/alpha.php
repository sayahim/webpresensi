
    <?php
      $date = date('d-m-y');
      ?>

      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-3">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo JumlahDataUser($mysqli,"alpha", "tanggal='$date'"); ?></h3>

            <p>Karyawan Alpha Hari ini</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>

            <a href="?hal=alpha_cek" class="small-box-footer">Lihat Karyawan Alpha<i class="fa fa-arrow-circle-right"></i></a>
          
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-3">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo JumlahDataUser($mysqli,"presensi", "jenis_presensi='Berangkat'"); ?></h3>

              <p>Riwayat karyawan alpha</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
              <a href="?hal=alpha_list"</>
            <a href="?hal=alpha_riwayat" class="small-box-footer">Lihat Riwayat Alpha <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

