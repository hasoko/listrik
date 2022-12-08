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
                                <input type="text" class="form-control" name="idpelanggan" placeholder="7680000" disabled>
                            </div>
                            <div class="form-group">
                                <label>Nama Pelanggan</label>
                                <input type="text" class="form-control" name="namapelanggan" placeholder="Anjungan Jawa Barat" disabled>
                            </div>
                            <div class="form-group">
                                <label>Masukan KWH Meter</label>
                                <input type="text" class="form-control" name="kwhmeter" autofocus="autofocus">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Foto KWH Meter</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
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