@include('admin.template.header')
@include('admin.template.sidebar')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Input Data Daya</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                            <div class="form-group col-md-6">
                                <label>ID Daya</label>
                                <input type="text" class="form-control" name="iddaya" placeholder="1" disabled>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Daya</label>
                                <input type="text" class="form-control" name="daya" placeholder="Daya" autofocus="autofocus">
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