@include('dashboard.template.header')
@include('dashboard.template.sidebar')

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

                    <form action="{{url('/dashboard/datatarif/simpanubah/'. $tarif->id_tarif )}}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="card-body">

                            <div class="form-group col-md-6">
                                <label>Tarif LWBP per 1 KWH</label>
                                <input type="text" class="form-control" value="{{ $tarif->tarif_lwbp}}" name="tarif_lwbp" placeholder="Tarif LWBP per KWH">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Tarif WBP per 1 KWH</label>
                                <input type="text" class="form-control" value="{{ $tarif->tarif_wbp }}" name="tarif_wbp" placeholder="Tarif WBP per KWH">
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

@include('dashboard.template.footer')