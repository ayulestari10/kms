<!-- MAIN -->
        <div class="main">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Data User <a href="<?= base_url('kebagan/tambah-data-user') ?>" class="btn btn-success"><i class="fa fa-plus"></i></a></h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Daftar User
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <style type="text/css">
                                        tr th, tr td {text-align: center; padding: 1%;}
                                    </style>
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Jabatan</th>
                                                <th>Bagian</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; foreach($data as $row): ?>
                                            <tr>
                                                <td style="width: 20px !important;" ><?= $i ?></td>
                                                <td><?= $row->nip ?></td>
                                                <td><?= $row->nama ?></td>
                                                <td><?= $row->jabatan ?></td>
                                                <td><?= $row->bagian ?></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                        Aksi <span class="caret"></span></button>
                                                        <ul class="dropdown-menu" role="menu">
                                                          <li><a href="<?= base_url('kebagan/edit-data-user/'.$row->nip) ?>"><i class="lnr lnr-pencil"></i> Edit</a></li>
                                                          <li><a href="<?= base_url('kebagan/detail-data-user/'.$row->nip) ?>"><i class="fa fa-eye"></i> Detail</a></li>
                                                          <li><a href="" onclick="delete_user('<?= $row->nip ?>')"><i class="lnr lnr-trash"></i> Hapus </a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $i++; endforeach; ?>
                                        </tbody>
                                    </table>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>


            <script>
                $(document).ready(function() {
                    $('.input-group.date').datepicker({format: "yyyy-mm-dd"});
                    
                    $('#dataTables-example').DataTable({
                        responsive: true
                    });
                });

                function delete_user(nip) {
                    $.ajax({
                        url: '<?= base_url('kebagan/data-user') ?>',
                        type: 'POST',
                        data: {
                            delete: true,
                            nip: nip
                        },
                        success: function(response) {
                            var json = $.parseJSON(response);
                            window.location = '<?= base_url('kebagan/data-user') ?>';
                        },
                        error: function(e) {
                            console.log(e.responseText);
                        }
                    });
                    return false;
                }
            </script>