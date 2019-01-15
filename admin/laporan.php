

          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Presensi Karyawan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="dt" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Waktu</th>
                  <th>Lokasi</th>
<!--                   <th>Latitude</th>
                  <th>Longtitude</th> -->
                  <th>Presensi</th>
                  
                  
                </tr>
                </thead>
                <tbody>
                <?php
                    $no=1;
                    $query="SELECT * from presensi join karyawan on presensi.id_karyawan= karyawan.id_karyawan";
                    $result=$mysqli->query($query);
                    $num_result=$result->num_rows;
                    if ($num_result > 0 ) { 
                        while ($data=mysqli_fetch_assoc($result)) {
                        extract($data);
                    ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $nama; ?></td>
                      <td><?php echo $waktu; ?></td>
                      <td><?php echo $lokasi; ?></td>
                      <td><?php echo $jenis_presensi; ?></td>
                      
                      <!-- <td><?php echo $foto; ?></td> -->
<!--                       <td><?php echo $level; ?></td>
 -->                      <td>
                        <a href="?hal=laporan_olah&id=<?php echo $id_presensi; ?>" class="btn btn-success"><i class="fa fa-edit"></i> Detail</a>
                        <a href="laporan_proses.php?hapus=<?php echo $id_presensi;?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus [[ <?php echo $nama;?> ]] ??')"><i class="fa fa-trash"></i> Delete</a>
                      </td>
                    </tr>
                <?php }
                  } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->