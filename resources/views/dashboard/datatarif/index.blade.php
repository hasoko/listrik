@include('dashboard.template.header')
@include('dashboard.template.sidebar')

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

                                        <th>Tarif LWBP</th>
                                        <th>Tarif WBP</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tarif as $value)
                                    <tr>
                                        <td>{{ $value->tarif_lwbp }}</td>
                                        <td>{{ $value->tarif_wbp }}</td>
                                        <td><a href="{{url('/dashboard/datatarif/edit/'.$value->id_tarif)}}" role="button" class="flex-row btn btn-primary btn-sm">Edit</a></td>
                                    </tr>
                                    @endforeach
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
@include('dashboard.template.footer')