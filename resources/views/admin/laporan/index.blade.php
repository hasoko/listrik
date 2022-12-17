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
                            <h3 class="card-title">Laporan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">
                            <table id="laporan" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No Pembayaran</th>
                                        <th>Nama Pengguna</th>
                                        <th>Bulan</th>
                                        <th>Tahun</th>
                                        <th>Tanggal Bayar</th>
                                        <th>Total Bayar</th>
                                        <th>Status</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pembayaran as $value)
                                    <tr>
                                        <td>{{ $value->id_pembayaran}}</td>
                                        <td>{{ $value->pelanggan->nama}}</td>
                                        <td>{{ $value->tagihan->bulan }}</td>
                                        <td>{{ $value->tagihan->tahun }}</td>
                                        <td>{{ $value->tanggal_bayar}}</td>
                                        <td>{{ $value->total_bayar}}</td>
                                        <td>{{ $value->tagihan->status }}</td>

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


<script src="{{ asset('/lte') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('/lte') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('/lte') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('/lte') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('/lte') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('/lte') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('/lte') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('/lte') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('/lte') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('/lte') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('/lte') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('/lte') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    });
</script>

@include('admin.template.footer')