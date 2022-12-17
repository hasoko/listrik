@include('admin.template.header')
@include('admin.template.sidebar')


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
              <form action="{{url('/admin/transaksipembayaran/bayar/'. $tagihan->id_tagihan)}}" method="POST">
              @csrf
            {{ method_field('PUT') }}
            <input name="id_pelanggan" type="hidden" value="{{$tagihan->id_pelanggan}}">
            <input name="id_kwhmeter" type="hidden" value="{{$tagihan->id_kwhmeter}}">
            <input name="id_tagihan" type="hidden" value="{{$tagihan->id_tagihan}}">
         
                <!-- <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#terakhir" data-toggle="tab">Tagihan Terakhir</a></li>
                  <li class="nav-item"><a class="nav-link" href="#histori" data-toggle="tab">Histori</a></li>
                </ul> -->
                <!-- <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a> -->
                Total Tagihan 
                <!-- <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Bayar</button> -->
                <!-- <a href="{{url('/admin/transaksipembayaran/bayar/'.$tagihan->id_tagihan)}}" role="button" class="btn btn-success btn-sm float-right"><i class="far fa-credit-card"></i> Bayar</a> -->
                <button type="submit" class="btn btn-primary">Simpan</button>    
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
        <table class="table table-borderless">

          <tbody>
          <tr>
            <td colspan="5"><b>Biaya Pemakaian</b></td>
          </tr>
           <tr>
            <td>LWBP</td>
            <td>{{$lwbp}}</td>
            <td>x</td>
            <td>1.033</td>
            <td>{{ $tagihan->lwbp }}</td>
          </tr> 
          <tr>
            <td>WBP</td>
            <td>321</td>
            <td>x</td>
            <td>1.584</td>
            <td><u>{{ $tagihan->wbp }}</u></td>
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
            <td>{{ $tagihan->pjudki }}</td>
          </tr>
          <tr>
            <td>PEMELIHARAAN</td>
            <td>0,1</td>
            <td>x</td>
            <td>Rp.2.000.000</td>
            <td><u>{{ $tagihan->pemeliharaan }}</u></td>
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
              <td>{{ $tagihan->materai }}</td>
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

@include('admin.template.footer')