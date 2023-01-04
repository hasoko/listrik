@include('dashboard.template.header')
@include('dashboard.template.sidebar')


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
            <!-- /.content -->

            <div>
              <!-- <div class="col-md-12"> -->
              <div class="card">

                <div class="card-header p-2">
                  <form action="{{url('/dashboard/transaksipembayaran/bayar/'. $tagihan->id_tagihan)}}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <input name="id_pelanggan" type="hidden" value="{{$tagihan->id_pelanggan}}">
                    <input name="id_kwhmeter" type="hidden" value="{{$tagihan->id_kwhmeter}}">
                    <input name="id_tagihan" type="hidden" value="{{$tagihan->id_tagihan}}">
                    <input name="total_bayar" type="hidden" value="{{ round(($tagihan->lwbp + $tagihan->wbp) + ($tagihan->pjudki + $tagihan->pemeliharaan) + $tagihan->materai) }}">

                    Total Tagihan
                    <b>Rp. {{ number_format(round(($tagihan->lwbp + $tagihan->wbp) + ($tagihan->pjudki + $tagihan->pemeliharaan) + $tagihan->materai), 0, ',', '.') }}</b> <button id="bayar" type="submit" class="btn btn-primary">Bayar</button>
                  </form>
                </div>

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
                </div>
              </div>
            </div>
          </div>

</section>

@section('myjsfile')
<script>
  var anchor = document.getElementById('bayar');

  anchor.addEventListener('click', doSomething, false);

  function doSomething() {
    alert('Melakukan Pembayaran Tagihan No. {{$tagihan->id_tagihan}}');
    var win = window.open("{{url('/dashboard/transaksipembayaran/cetak/'. $tagihan->id_tagihan)}}", '_blank');
    win.focus();
  }
</script>
@stop


@include('dashboard.template.footer')