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
                            <table id="datapelanggan" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Pelanggan</th>
                                        <th>Faktor Meter</th>
                                        <th>Nama</th>
                                        <th>NPWP</th>
                                        <th>No Telepon</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pelanggan as $value)
                                    <tr>
                                        <td>{{ $value->id_pelanggan }}</td>
                                        <td>{{ $value->faktor_meter }}</td>
                                        <td>{{ $value->nama }}</td>
                                        <td>{{ $value->npwp }}</td>
                                        <td>{{ $value->telepon }}</td>
                                        <td><button type="button" class="d-flex flex-row btn btn-primary btn-sm">Edit</button>
                                            <form action="{{url('/admin/datapelanggan/'.$value->id_pelanggan)}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button onclick="return confirm('Yakin Data {{ $value->nama }} di hapus?')" class="d-flex flex-row btn btn-danger btn-sm">Hapus</button>
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

@include('admin.template.footer')