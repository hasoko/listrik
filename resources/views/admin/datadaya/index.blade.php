@include('admin.template.header')
@include('admin.template.sidebar')

<!-- Main content -->
<!-- <a href="/admin/datadaya/input">input</a> -->
<!-- /.content -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-header">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title">{{ $halaman['title'] }}</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">
                            <table id="datadaya" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Daya</th>
                                        <th>Daya</th>
                                        <th>Aksi</th>

                                 </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>900 VA</td>
                                        <td><button type="button" class="btn btn-primary btn-sm">Edit</button> <button type="button" class="btn btn-danger btn-sm">Hapus</button></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>1.300 VA</td>
                                        <td><button type="button" class="btn btn-primary btn-sm">Edit</button> <button type="button" class="btn btn-danger btn-sm">Hapus</button></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>2.200 VA</td>
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