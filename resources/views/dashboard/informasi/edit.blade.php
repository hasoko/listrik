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

                    <form action="{{url('/dashboard/informasi/simpanubah/'. $informasi->id_informasi )}}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="card-body">

                            <div class="form-group col-md-6">
                                <label>Judul</label>
                                <input type="text" class="form-control" name="judul" placeholder="Judul Informasi" value="{{ $informasi->judul }}" autofocus>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Isi</label>
                                <textarea class="form-control" rows="3" name="isi" placeholder="Isi Informasi">{{ $informasi->isi }}</textarea>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class=" card-footer">
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