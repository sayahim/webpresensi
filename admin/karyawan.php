

          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Karyawan</h3>
              <div class="box-tools pull-right">
                 <!-- <button data-toggle="modal" data-target="#myModal" class="btn btn-primary" type="button"> <span class="label label-primary">( <i class="fa fa-plus"></i> ) ADD </span></button>  -->
                 <a href="?hal=karyawan_olah" class="btn btn-primary btn-flat" style="float:right;margin-top:0px;"><i class="fa  fa-plus-square"></i> Tambah Data</a>
              </div> 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="dt" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <th>No</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Handphone</th>
                  <th>Jenis Kelamin</th>

                </tr>
                </thead>
                <tbody>
                <?php
                    $no=1;
                    $query="SELECT * from karyawan";
                    $result=$mysqli->query($query);
                    $num_result=$result->num_rows;
                    if ($num_result > 0 ) { 
                        while ($data=mysqli_fetch_assoc($result)) {
                        extract($data);
                    ?>  
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $nama; ?></td>
                      <td><?php echo $username; ?></td>
                      <td><?php echo $no_tlpn; ?></td>
                      <td><?php echo $jenis_kelamin; ?></td>
                    <td>
                        <a href="?hal=karyawan_olah&id=<?php echo $id_karyawan; ?>" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                        <a href="karyawan_proses.php?hapus=<?php echo $id_karyawan;?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus [[ <?php echo $nama;?> ]] ??')"><i class="fa fa-trash"></i> Delete</a>
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
