@include('dashboard.template.header')
@include('dashboard.template.sidebar')

<!-- Main content -->
<!-- <a href="/dashboard/datadaya/input">input</a> -->
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
                            <table id="dataunit" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Unit</th>
                                        <th>Nama Unit</th>
                                        <th>Kode Prefix</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($unit as $value)
                                    <tr>
                                        <td>{{ $value->id_unit }}</td>
                                        <td>{{ $value->nama_unit }}</td>
                                        <td>{{ $value->prefix }}</td>
                                        <td><button type="button" class="d-flex flex-row btn btn-primary btn-sm">Edit</button>
                                            <form action="{{url('/dashboard/dataunit/'.$value->id_pelanggan)}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button onclick="return confirm('Yakin Data {{ $value->nama_unit }} di hapus?')" class="d-flex flex-row btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
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