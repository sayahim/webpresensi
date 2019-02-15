          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Karyawan Izin</h3>
              <div class="box-tools pull-right">

              </div> 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="dt" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Mulai Izin</th>
                  <th>Selesai Izin</th>
                  <th>Jenis</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>

                </tr>
                </thead>
                <tbody>
                <?php
                    $no=1;
                    $query="SELECT * from izin join karyawan on karyawan.id_karyawan = izin.id_karyawan";

                    $result=$mysqli->query($query);
                    $num_result=$result->num_rows;
                    if ($num_result > 0 ) { 

                        while ($data=mysqli_fetch_assoc($result)) {

                                extract($data);

                    ?>
                    <tr>

                      <td><?php echo $no++ ?></td>
                      <td><?php echo $nama; ?></td>
                      <td><?php echo $tgl_mulai; ?></td>
                      <td><?php echo $tgl_akhir; ?></td>
                      <td><?php echo $jenis; ?></td>
                      <td><?php echo $keterangan; ?></td>

                      <td>

                      <a href="?hal=izin_detail&id=<?php echo $id_izin; ?>" class="btn btn-success"><i class="fa fa-edit">
                        
                      </i> Detail</a>
                      
                      </td>
                    </tr>
                <?php }} ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
