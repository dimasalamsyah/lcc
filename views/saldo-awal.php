      
      <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="form-master">

                            <p class="bg-primary">Form Saldo Awal</p>
                            <button type="button" class="btn btn-default btn-sm" style="border:" onclick="add_mastersaldo()">
                              <i class="fa fa-plus-circle fa-1x" aria-hidden="true"></i> Add
                            </button>
                            <button type="button" class="btn btn-default btn-sm" style="" onclick="printpdf_mastersaldo()">
                              <i class="fa fa-file-pdf-o fa-1x" aria-hidden="true"></i> PDF
                            </button>
                            <button type="button" class="btn btn-default btn-sm" style="" onclick="printexcel_mastersaldo()">
                              <i class="fa fa-file-excel-o fa-1x" aria-hidden="true"></i> EXCEL
                            </button>

                            <table class="table">
                                <tr>
                                    <th style="width:;">No.</th>
                                    <th style="width:;">Tanggal</th>
                                    <th style="width:;">Saldo Awal</th>
                                    <th style="width:;">Keterangan</th>
                                    <th style="width:10%;"></th>
                                </tr>
                                <tbody>
                                    <?php
                                        $no=1;
                                        foreach($db->getData() as $x){
                                            //print_r($x);
                                            ?>
                                            <tr>
                                                <td id="<?php echo $x['id']; ?>"><?php echo $no++; ?></td>
                                                <td id="tanggal-<?php echo $x['id']; ?>"><?php echo $x['tanggal']; ?></td>
                                                <td id="saldoawal-<?php echo $x['id']; ?>"><?php echo number_format($x['saldoawal'],2); ?></td>
                                                <td style="display:none" id="saldoawal_non-<?php echo $x['id']; ?>"><?php echo $x['saldoawal']; ?></td>
                                                <td id="ket-<?php echo $x['id']; ?>"><?php echo $x['ket']; ?></td>
                                                <td id="daction-<?php echo $x['id']; ?>">
                                                  <div id="action-<?php echo $x['id']; ?>">
                                                    <a href="#edit" onclick="edit_mastersaldo(<?php echo $x['id'];  ?>)">Edit</a>
                                                    <a href="php/proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>    
                                                  </div>  
                                                </td>
                                            </tr>
                                            <?php

                                        }
                                            
                                    ?>
                                </tbody>  
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

        <!-- Modal -->
        <div class="modal fade" id="modal_mastersaldo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add</h4>
              </div>
              <div class="modal-body">

                <form class="form-horizontal" method="post" id="form_mastersaldo">
                   <div class="form-group">
                        <div class="col-md-12">
                            <label for="tanggal_mastersaldo">Tanggal</label>
                            <input type="text"  id="tanggal_mastersaldo" name="tanggal_mastersaldo" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="saldo_mastersaldo">Saldo Awal</label>
                            <input type="number" id="saldo_mastersaldo" name="saldo_mastersaldo" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="ket_mastersaldo">Keterangan</label>
                            <textarea class="form-control" id="ket_mastersaldo" name="ket_mastersaldo" rows="3"></textarea>
                        </div>
                        <div class="col-md-12">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </form>

              </div>
              <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
              </div> -->
            </div>
          </div>
        </div>
        <!-- end modal -->

       