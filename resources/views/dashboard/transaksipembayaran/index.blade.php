@include('dashboard.template.header')
@include('dashboard.template.sidebar')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-header">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Transaksi Pembayaran</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">
                            <table id="transaksipembayaran" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No Tagihan</th>
                                        <th>Nama Pengguna</th>
                                        <th>Bulan</th>
                                        <th>Tahun</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tagihan as $value)
                                    <tr>
                                        <td>{{ $value->id_tagihan}}</td>
                                        <td>{{ $value->pelanggan->nama}}</td>
                                        <td>{{ $value->bulan}}</td>
                                        <td>{{ $value->tahun}}</td>
                                        @if( $value->status === 'Belum Bayar')
                                        <td><span class="badge badge-danger">Belum Bayar</span></td>
                                        @else
                                        <td><span class="badge badge-success">Sudah Bayar</span></td>
                                        @endif

                                        @if( $value->status === 'Belum Bayar')
                                        <td><a href="{{url('/dashboard/transaksipembayaran/invoice/'.$value->id_tagihan)}}" role="button" class="flex-row btn btn-primary btn-sm">Pembayaran</a></td>
                                        @else
                                        <td><button type="button" class="btn btn-primary btn-sm" disabled>Pembayaran</button> </td>
                                        @endif

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