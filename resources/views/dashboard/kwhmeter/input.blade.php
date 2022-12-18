@include('dashboard.template.header')
@include('dashboard.template.sidebar')

<!-- Main content -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-secondary">
                    <!-- <div class="card-header">
                    <h3 class="card-title">{{ $halaman['title'] }}</h3>
                    </div> -->
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{url('/dashboard/kwhmeter/simpan')}}" method="POST">

                        @csrf
                        <input name="id_pelanggan" type="hidden" value="{{$kwhmeter->id_pelanggan}}">
                        <input name="meter_awal" type="hidden" value="{{$kwhmeter->meter_akhir}}">
                        <input name="faktor_meter" type="hidden" value="{{$kwhmeter->faktor_meter}}">
                        <div class="card-body">
                            <div class="form-group">
                                <label>ID Pelanggan</label>
                                <input type="text" class="form-control" name="id_pelanggan" placeholder="{{$kwhmeter->id_pelanggan}}" value="{{$kwhmeter->id_pelanggan}}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Nama Pelanggan</label>
                                <input type="text" class="form-control" name="namapelanggan" placeholder="{{$kwhmeter->pelanggan->nama}}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Meter Awal (bulan kemarin)</label>
                                <input type="text" class="form-control" name="meter_awal" value="{{$kwhmeter->meter_akhir}}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Masukan KWH Meter</label>
                                <input type="text" class="form-control" name="meter_akhir" autofocus="autofocus">
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
<!-- /.content -->

@include('dashboard.template.footer')