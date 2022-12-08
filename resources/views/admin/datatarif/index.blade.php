@include('admin.template.header')
@include('admin.template.sidebar')

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
                            <table id="datatarif" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Tarif</th>
                                        <th>Jenis</th>
                                        <th>Tarif</th>
                                         <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>WBP</td>
                                        <td>1100</td>
                                        <td><button type="button" class="btn btn-primary btn-sm">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>LWBP</td>
                                        <td>1300</td>
                                        <td><button type="button" class="btn btn-primary btn-sm">Edit</button></td>
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