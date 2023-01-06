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
                            <table id="informasi" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Judul</th>
                                        <th>Tanggal Posting</th>
                                        <th>User</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($informasi as $value)

                                    <tr>
                                        <td>{{ $value->id_informasi }}</td>
                                        <td>{{ $value->judul }}</td>
                                        <td>{{ $value->tgl_informasi }}</td>
                                        <td>{{ $value->user->username }}</td>

                                        <td><a href="{{url('/dashboard/informasi/edit/'.$value->id_informasi)}}" role="button" class="flex-row btn btn-primary btn-sm">Edit</a>
                                            <form action="{{url('/dashboard/informasi/'.$value->id_informasi)}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button onclick="return confirm('Yakin Data {{ $value->judul }} di hapus?')" class="d-flex flex-row btn btn-danger btn-sm">Hapus</button>
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