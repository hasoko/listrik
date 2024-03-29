@include('dashboard.template.header')
@include('dashboard.template.sidebar')
@inject('carbon', 'Carbon\Carbon')
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
                            <table id="kwhmeter" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Pelanggan</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Unit</th>
                                        <th>Ket</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kwhmeter as $value)
                                    <tr>
                                        <td>{{ $value->id_pelanggan }}</td>
                                        <td>{{ $value->pelanggan->nama }}</td>
                                        <td>{{ $value->pelanggan->unit->nama_unit }}</td>
                                        <!-- <td>
                                            @if($value->tanggal_catat == "12" and $carbon::now()->month == "01")
                                            <span class="badge badge-danger">belum di catat</span>
                                            @elseif($value->bulan < $carbon::now()->month)
                                                <span class="badge badge-danger">belum di catat</span>
                                                @else
                                                <span class="badge badge-success">sudah di catat</span>
                                                @endif
                                        </td> -->
                                        <td>
                                            @if($value->tgl_catat == null)
                                            <span class="badge badge-warning">baru</span>
                                            @elseif($value->bln_kwhmeter == "12" and $carbon::now()->month == "01")
                                            <span class="badge badge-danger">belum di catat</span>
                                            @elseif($value->bln_kwhmeter < $carbon::now()->month)
                                                <span class="badge badge-danger">belum di catat</span>
                                                @else
                                                <span class="badge badge-success">sudah di catat</span>
                                                @endif
                                        </td>
                                        <!-- <td>{{ $value->tanggal_catat }}</td> -->
                                        <td>
                                            @if($value->bln_kwhmeter == "12" and $carbon::now()->month == "01")
                                            <a href="{{url('/dashboard/kwhmeter/input/'.$value->id_pelanggan)}}" role="button" class="flex-row btn btn-primary btn-sm">Input KWH Meter</a>
                                            @elseif($value->bln_kwhmeter < $carbon::now()->month)
                                                <a href="{{url('/dashboard/kwhmeter/input/'.$value->id_pelanggan)}}" role="button" class="flex-row btn btn-primary btn-sm">Input KWH Meter</a>
                                                @elseif($value->bln_kwhmeter == $carbon::now()->month)
                                                <button type="button" class="btn btn-primary btn-sm" disabled>Input KWH Meter</button>
                                                @else
                                                <button type="button" class="btn btn-primary btn-sm" disabled>Input KWH Meter</button>
                                                @endif

                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                                <!-- <tfoot>
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                    
                                    </tr>
                                </tfoot> -->
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