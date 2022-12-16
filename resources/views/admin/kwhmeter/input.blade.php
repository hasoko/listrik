@include('admin.template.header')
@include('admin.template.sidebar')

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
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label>ID Pelanggan</label>
                                <input type="text" class="form-control" name="idpelanggan" placeholder="{{$kwhmeter->id_pelanggan}}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Nama Pelanggan</label>
                                <input type="text" class="form-control" name="namapelanggan" placeholder="{{$kwhmeter->pelanggan->nama}}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Meter Awal (bulan kemarin)</label>
                                <input type="text" class="form-control" name="kwhawal" placeholder="{{$kwhmeter->meter_akhir}}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Masukan KWH Meter</label>
                                <input type="text" class="form-control" name="kwhmeter" autofocus="autofocus">
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

@include('admin.template.footer')