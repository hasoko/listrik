@include('admin.template.header')
@include('admin.template.sidebar')


<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-header">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ $halaman['title'] }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">
                            <table id="datapelanggan" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Pelanggan</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Unit</th>
                                        <th>No Telepon</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>780000</td>
                                        <td>Anjungan Jawa Barat</td>
                                        <td>Anjungan</td>
                                        <td>08123456798</td>
                                        <td>fulan@gmail.com</td>
                                        <td><button type="button" class="btn btn-primary btn-sm">Edit</button> <button type="button" class="btn btn-danger btn-sm">Hapus</button></td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>
                        <!-- /.card-body -->



                    </div>
                </div>
            </div>
        </div>
</section>

<!-- /.content -->

@include('admin.template.footer')