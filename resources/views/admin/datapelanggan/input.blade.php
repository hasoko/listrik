@include('admin.template.header')
@include('admin.template.sidebar')

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
                            <div class="form-group col-md-6">
                                <label>ID Pelanggan</label>
                                <input type="text" class="form-control" name="idpelanggan" placeholder="7680000" disabled>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Daya</label>
                                <select class="form-control">
                                    <option selected>Pilih Daya</option>
                                    <option value="1">900 VA</option>
                                    <option value="2">1.300 VA</option>
                                    <option value="3">2.200 VA</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="namapelanggan" placeholder="Nama Pelanggan" autofocus="autofocus">
                            </div>
                            <div class="form-group col-md-6">
                                <label>NPWP</label>
                                <input type="text" class="form-control" name="npwp" placeholder="no NPWP jika ada">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label>No Telepon</label>
                                <input type="text" class="form-control" name="notlp" placeholder="No Telepon">
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

@include('admin.template.footer')