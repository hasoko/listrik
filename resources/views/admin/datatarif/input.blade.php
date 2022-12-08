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
                                <label>Tarif per 1 KWH</label>
                                <input type="text" class="form-control" name="tarifkwh" placeholder="Tarif per KWH">
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