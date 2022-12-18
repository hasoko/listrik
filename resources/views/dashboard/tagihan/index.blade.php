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
            <!-- /.content -->

            <div>
              <!-- <div class="col-md-12"> -->
              <div class="card">

                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#terakhir" data-toggle="tab">Tagihan Terakhir</a></li>
                    <li class="nav-item"><a class="nav-link" href="#histori" data-toggle="tab">Histori</a></li>
                  </ul>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="terakhir">
                      <!-- Post -->
                      <div class="card card-primary card-outline">

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
                              <b>ID Pelanggan:</b> 799999<br>
                              <b>Nama:</b> Gigih Hasoko Wibowo<br>
                              <b>Daya:</b> 1.300 VA<br>
                              <b>Phone:</b> 08123-5432<br>
                              <b>Email:</b> user@listriktmii.com
                            </address>
                          </div>
                          <!-- /.col -->

                          <!-- /.col -->
                          <div class="col-sm-4 invoice-col">
                            <b>Invoice #007612</b><br>
                            <br>
                            <b>Order ID:</b> 4F3S8J<br>
                            <b>Payment Due:</b> 2/22/2014<br>
                            <b>Account:</b> 968-34567
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                          <div class="col-12 table-responsive">
                            <table class="table table-borderless">

                              <tbody>
                                <tr>
                                  <td colspan="5"><b>Biaya Pemakaian</b></td>
                                </tr>
                                <tr>
                                  <td>LWBP</td>
                                  <td>123</td>
                                  <td>x</td>
                                  <td>1.033</td>
                                  <td>Rp.1.000.000</td>
                                </tr>
                                <tr>
                                  <td>WBP</td>
                                  <td>321</td>
                                  <td>x</td>
                                  <td>1.584</td>
                                  <td><u>Rp.1.000.000</u></td>
                                </tr>
                                <tr>
                                  <td colspan="4"></td>

                                  <td>Rp.2.000.000</td>
                                </tr>


                                <tr>
                                  <td>PJU DKI</td>
                                  <td>0,1</td>
                                  <td>x</td>
                                  <td>Rp.2.000.000</td>
                                  <td>Rp.200.000</td>
                                </tr>
                                <tr>
                                  <td>PEMELIHARAAN</td>
                                  <td>0,1</td>
                                  <td>x</td>
                                  <td>Rp.2.000.000</td>
                                  <td><u>Rp.200.000</u></td>
                                </tr>
                                <tr>
                                  <td colspan="4"></td>

                                  <td>Rp. 2.000.000</td>
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
                              Pembayaran rekening listrik jatuh tempo pada tanggal 15 Desember 2022<br>
                              Pembayaran dibayarkan kebidang Keuangan TMII atau dapat melalui rekening <br>
                              Bank BNI a.n PT Taman Wisata Candi Borobudur Prambanan dan Ratu Boko
                            </p>
                          </div>
                          <!-- /.col -->
                          <div class="col-6">
                            <p class="lead">Amount Due 2/22/2014</p>

                            <div class="table-responsive">
                              <table class="table">
                                <tr>
                                  <th style="width:50%">Subtotal:</th>
                                  <td>Rp2.500.000</td>
                                </tr>
                                <tr>
                                  <th>PPN (11%)</th>
                                  <td>Rp250.000</td>
                                </tr>
                                <tr>
                                  <th>Materai:</th>
                                  <td>Rp10.000</td>
                                </tr>
                                <tr>
                                  <th>Total:</th>
                                  <td>Rp2.750.000</td>
                                </tr>
                              </table>
                            </div>
                          </div>
                          <!-- /.col -->
                        </div>


                      </div>
                      <!-- /.post -->
                    </div>


                    <div class="tab-pane" id="histori">
                      <div class="card-body">
                        <table id="histori" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th>Id Tagihan</th>
                              <th>Bulan</th>
                              <th>Tahun</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>TL092323</td>
                              <td>Januari</td>
                              <td>2022</td>
                              <td><a href="#" class="badge badge-success">Sudah Bayar</a></td>

                            </tr>

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
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>

</section>
@include('dashboard.template.footer')