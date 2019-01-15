

          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Karyawan Alpha hari ini</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="dt" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Tanggal</th>
                  <th>Keterangan</th>
                  
                 
                </tr>
                </thead>
                <tbody>
                <?php
                    $date = date('d-m-y');

                    $no=1;
                    $query="SELECT * from alpha join karyawan on alpha.id_karyawan= karyawan.id_karyawan WHERE tanggal = '$date'";
                    $result=$mysqli->query($query);
                    $num_result=$result->num_rows;
                    if ($num_result > 0 ) { 
                        while ($data=mysqli_fetch_assoc($result)) {
                        extract($data);
                    ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $nama; ?></td>
                      <td><?php echo $tanggal; ?></td>
                      <td><?php echo $status; ?></td>
                      
                      <!-- <td><?php echo $foto; ?></td> -->
<!--                       <td><?php echo $level; ?></td>
 -->                      <td>
                        <a href="?hal=alpha_detail&id=<?php echo $id_alpha; ?>" class="btn btn-success"><i class="fa fa-edit"></i> Detail</a>
                        <a href="alpha_proses.php?hapus=<?php echo $id_alpha;?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus [[ <?php echo $nama;?> ]] ??')"><i class="fa fa-trash"></i> Delete</a>
                      </td>
                    </tr>
                <?php }
                  } ?>
                </tbody>
              </table>

              <div class="form-group">
                <label class="col-sm-3 control-label"> </label>
                <div class="col-sm-4">
                  <div class="pull-left">
                    <a href="?hal=alpha" class="btn btn-warning"><i class="fa fa-chevron-left"></i> Kembali</a>
                  </div>

                  </div> 
                </div>
              </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
