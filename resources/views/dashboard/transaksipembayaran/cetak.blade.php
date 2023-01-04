<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $halaman['title'] ?? "Halaman"}} Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/lte') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('/lte') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('/lte') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('/lte') }}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/lte') }}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('/lte') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('/lte') }}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('/lte') }}/plugins/summernote/summernote-bs4.min.css">
  <!-- datatable -->
  <link rel="stylesheet" href="{{ asset('/lte') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('/lte') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('/lte') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body onload="window.print()">

  <section class="content">


    <!-- /.card-header -->
    <div class="card-body">
      <div class="tab-content">
        <div class="active tab-pane" id="terakhir">
          <!-- Post -->
          <!-- <div class="card card-primary card-outline"> -->
          <div class="card">
            <div class="row">
              <div class="col-12">
                <h2 class="page-header">
                  <i class="fas fa-bolt"></i> Taman Mini Indonesia Indah

                </h2>

              </div>
              <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-sm-6 invoice-col">
                Pemakaian Listrik
                <address>
                  <b>ID Pelanggan :</b> {{ $tagihan->id_pelanggan}}<br>
                  <b>Nama :</b> {{ $tagihan->pelanggan->nama}}<br>
                  <b>Faktor Meter :</b> {{ $tagihan->pelanggan->faktor_meter}}<br>
                  <b>Phone :</b> {{ $tagihan->pelanggan->telepon}}<br>
                  <b>NPWP :</b> {{ $tagihan->pelanggan->npwp}}
                </address>
              </div>
              <!-- /.col -->

              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                <b>Invoice #{{ $tagihan->id_tagihan}}</b><br>
                <br><br>
                <b>Tagihan Bulan:</b> {{ $tagihan->bulan}}/{{ $tagihan->tahun}}<br>

              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Table row -->
            <div class="row">
              <div class="col-12 table-responsive">
                <!-- <table class="table table-borderless"> -->
                <table class="table table-sm">

                  <tbody>
                    <tr>
                      <td colspan="5"><b>KWH Pemakaian</b></td>
                    </tr>
                    <tr>
                      <td>Meter Akhir</td>
                      <td colspan="4">
                        {{ $tagihan->kwhmeter->meter_akhir }}
                      </td>

                    </tr>
                    <tr>
                      <td>Meter Awal</td>
                      <td colspan="4">
                        {{ $tagihan->kwhmeter->meter_awal }}
                      </td>
                    <tr>
                      <td>Jumlah KWH <span class="text-muted"><small>(Meter Akhir - Meter Awal) x Faktor Meter</small></span></td>
                      <td colspan="4">
                        {{ $tagihan->jumlah_meter }}
                      </td>
                    </tr>

                    <tr>
                      <td colspan="5"><b>Biaya Pemakaian</b></td>
                    </tr>
                    <tr>
                      <td>LWBP</td>
                      <td>
                        {{ number_format($tagihan->jumlah_meter * 67 / 100, 0, ',', '.') }}
                      </td>
                      <td>x</td>
                      <td>@foreach ($lwbp as $value)
                        {{number_format($value->tarifperkwh, 0, ',', '.')}}
                        @endforeach
                      </td>
                      <td>
                        Rp. {{ number_format($tagihan->lwbp, 2, ',', '.') }}</td>
                    </tr>
                    <tr>
                      <td>WBP</td>
                      <td>
                        {{ number_format($tagihan->jumlah_meter * 33 / 100, 0, ',', '.') }}
                      </td>
                      <td>x</td>
                      <td>@foreach ($wbp as $value)
                        {{number_format($value->tarifperkwh, 0, ',', '.')}}
                        @endforeach
                      </td>
                      <td><u>Rp. {{ number_format($tagihan->wbp, 2, ',', '.') }}</u></td>
                    </tr>
                    <tr>
                      <td colspan="4"></td>

                      <td><b>Rp. {{ number_format(($tagihan->lwbp + $tagihan->wbp) , 2, ',', '.') }}</b></td>
                    </tr>


                    <tr>
                      <td>PJU DKI</td>
                      <td>0,03</td>
                      <td>x</td>
                      <td>{{ number_format(($tagihan->lwbp + $tagihan->wbp) * 3 / 100, 2, ',', '.') }}</td>
                      <td>Rp. {{ number_format($tagihan->pjudki, 2, ',', '.') }}</td>
                    </tr>
                    <tr>
                      <td>PEMELIHARAAN</td>
                      <td>0,05</td>
                      <td>x</td>
                      <td>{{ number_format(($tagihan->lwbp + $tagihan->wbp) * 5 / 100, 2, ',', '.') }}</td>
                      <td><u>Rp. {{ number_format($tagihan->pemeliharaan, 2, ',', '.') }}</u></td>
                    </tr>
                    <tr>
                      <td colspan="4"></td>

                      <td><b>Rp. {{ number_format(($tagihan->pjudki + $tagihan->pemeliharaan) , 2, ',', '.') }}</b>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
              <!-- accepted payments column -->
              <div class="col-6">
                <p class="lead">NB:</p>
                <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                  Pembayaran rekening listrik jatuh tempo pada tanggal 15 tiap bulan nya <br>
                  Pembayaran dibayarkan kebidang Keuangan TMII atau dapat melalui rekening <br>
                  Bank BNI 2150720216 a.n PT Taman Wisata Candi Borobudur Prambanan dan Ratu Boko
                </p>
              </div>
              <!-- /.col -->
              <div class="col-6">
                <p class="lead">Amount Due 2/22/2014</p>

                <div class="table-responsive">
                  <table class="table">
                    <tr>
                      <th style="width:50%">Subtotal :</th>
                      <td>Rp. {{ number_format(($tagihan->lwbp + $tagihan->wbp) + ($tagihan->pjudki + $tagihan->pemeliharaan) , 2, ',', '.') }}</td>
                    </tr>

                    <tr>
                      <th>Materai :</th>
                      <td>Rp {{ number_format($tagihan->materai, 2, ',', '.') }}</td>
                    </tr>
                    <tr>
                      <th>Total :</th>
                      <td><b>Rp. {{ number_format(($tagihan->lwbp + $tagihan->wbp) + ($tagihan->pjudki + $tagihan->pemeliharaan) + $tagihan->materai, 2, ',', '.') }}</b></td>
                    </tr>
                    <tr>
                      <th>Dibulatkan :</th>
                      <td><b>Rp. {{ number_format(round(($tagihan->lwbp + $tagihan->wbp) + ($tagihan->pjudki + $tagihan->pemeliharaan) + $tagihan->materai), 0, ',', '.') }}</b></td>
                    </tr>
                    <tr>
                      <th>Terbilang :</th>
                      <td><b>{{ Terbilang::make(round(($tagihan->lwbp + $tagihan->wbp) + ($tagihan->pjudki + $tagihan->pemeliharaan) + $tagihan->materai), ' rupiah') }}</b></td>
                    </tr>
                  </table>
                </div>
              </div>
              <!-- /.col Terbilang::make(123456, ' rupiah', 'senilai '); -->
            </div>


          </div>
          <!-- /.post -->
        </div>





      </div>


  </section>


  <script src="{{ asset('/lte') }}/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('/lte') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('/lte') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <!-- <script src="plugins/chart.js/Chart.min.js"></script> -->
  <!-- Sparkline -->
  <!-- <script src="plugins/sparklines/sparkline.js"></script> -->
  <!-- JQVMap -->
  <!-- <script src="plugins/jqvmap/jquery.vmap.min.js"></script> -->
  <!-- <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
  <!-- jQuery Knob Chart -->
  <!-- <script src="plugins/jquery-knob/jquery.knob.min.js"></script> -->
  <!-- daterangepicker -->
  <!-- <script src="plugins/moment/moment.min.js"></script> -->
  <!-- <script src="plugins/daterangepicker/daterangepicker.js"></script> -->
  <!-- Tempusdominus Bootstrap 4 -->
  <!-- <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> -->
  <!-- Summernote -->
  <!-- <script src="plugins/summernote/summernote-bs4.min.js"></script> -->
  <!-- overlayScrollbars -->
  <script src="{{ asset('/lte') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('/lte') }}/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="dist/js/demo.js"></script> -->
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- <script src="{{ asset('/lte') }}/dist/js/pages/dashboard.js"></script> -->

  <!-- Datatables script -->
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


</body>

</html>