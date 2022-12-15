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
                    <form action="{{url('/admin/datapelanggan/simpan')}}" method="POST">
                        @csrf
                        <div class="card-body">

                            <div class="form-group col-md-4">
                                <label>Unit</label>
                                <select class="form-control" name="id_unit">
                                    <!-- <option selected>Pilih Unit</option> -->
                                    @foreach($unit as $value)
                                    <option value="{{ $value->id_unit }}">{{ $value->nama_unit }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Faktor Meter</label>
                                <input type="text" class="form-control" name="faktor_meter" placeholder="Faktor Meter" autofocus="autofocus">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama Pelanggan">
                            </div>
                            <div class="form-group col-md-6">
                                <label>NPWP</label>
                                <input type="text" class="form-control" name="npwp" placeholder="no NPWP jika ada">
                            </div>
                            <div class="form-group col-md-6">
                                <label>No Telepon</label>
                                <input type="text" class="form-control" name="telepon" placeholder="No Telepon">
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