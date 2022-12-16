@include('admin.template.header')
@include('admin.template.sidebar')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Input Data Daya</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{url('/admin/dataunit/simpan')}}" method="POST">
                        @csrf
                        <div class="card-body">

                            <div class="form-group col-md-6">
                                <label>Nama Unit</label>
                                <input type="text" class="form-control" name="nama_unit" placeholder="Nama Unit" autofocus="autofocus">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kode Prefix</label>
                                <input type="text" class="form-control" name="prefix" placeholder="Prefix">
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