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
                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Profil</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Edit</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                      <!-- Post -->
                      <div class="card card-primary card-outline">
                        <div class="card-body box-profile">


                          <h3 class="profile-username text-center">{{ auth()->user()->pelanggan->nama }}</h3>

                          <p class="text-muted text-center">{{ auth()->user()->level }}</p>

                          <div class="card-body">
                            <strong><i class="fas fa-bolt mr-1"></i> Daya Digunakan</strong>
                            <p class="text-muted">
                              10 KVA
                            </p>
                            <hr>
                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Unit</strong>
                            <p class="text-muted">{{ auth()->user()->pelanggan->unit->nama_unit }}</p>
                            <hr>
                            <strong><i class="fas fa-pencil-alt mr-1"></i> Faktor Meter</strong>
                            <p class="text-muted">{{ auth()->user()->pelanggan->faktor_meter }} x</p>
                            <hr>
                            <strong><i class="far fa-file-alt mr-1"></i> NPWP </strong>
                            <p class="text-muted">{{ auth()->user()->pelanggan->npwp ?? 'belum diisi' }}</p>
                            <hr>
                            <strong><i class="far fa-file-alt mr-1"></i> Telepon </strong>

                            <p class="text-muted">{{ auth()->user()->pelanggan->telepon ?? 'belum diisi'}}</p>
                          </div>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.post -->
                    </div>

                    <div class="tab-pane" id="settings">
                      <form class="form-horizontal" action="{{url('/dashboard/profil/simpanubah/'. auth()->user()->pelanggan->id_pelanggan )}}" method="POST">

                        @csrf
                        {{ method_field('PUT') }}

                        <div class="form-group row">
                          <label for="inputNPWP" class="col-sm-2 col-form-label">NPWP</label>
                          <div class="col-sm-10">
                            <input class="form-control" placeholder="NPWP" name="npwp" value="{{ auth()->user()->pelanggan->npwp ?? '' }}" autofocus>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputTelepon" class="col-sm-2 col-form-label">No Telepon</label>
                          <div class="col-sm-10">
                            <input class="form-control" placeholder="No Telepon" name="telepon" value="{{ auth()->user()->pelanggan->telepon ?? '' }}">
                          </div>
                        </div>

                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">Simpan</button>
                          </div>
                        </div>
                      </form>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>

</section>



@include('dashboard.template.footer')