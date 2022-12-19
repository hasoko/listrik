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
                            <h3 class="card-title">{{ auth()->user()->pelanggan->nama }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">
                            <table id="transaksipembayaran" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No Tagihan</th>
                                        <th>Total Tagihan</th>
                                        <th>Bulan</th>
                                        <th>Tahun</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tagihan as $value)
                                    <tr>
                                        <td>{{ $value->id_tagihan}}</td>
                                        <td>Rp. {{ number_format(round(($value->lwbp + $value->wbp) + ($value->pjudki + $value->pemeliharaan) + $value->materai), 0, ',', '.') }}</td>
                                        <td>{{ $value->bulan}}</td>
                                        <td>{{ $value->tahun}}</td>
                                        @if( $value->status === 'Belum Bayar')
                                        <td><span class="badge badge-danger">Belum Bayar</span></td>
                                        @else
                                        <td><span class="badge badge-success">Sudah Bayar</span></td>
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