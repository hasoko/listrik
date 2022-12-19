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