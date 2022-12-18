@include('dashboard.template.header')
@include('dashboard.template.sidebar')

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    @foreach($informasi as $value)
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><b>{{ $value->judul }}</b></h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            {{ $value->isi }}
        </div>
        <!-- /.card-body -->
        <div class="card-footer text-muted">
            <p class="text-right">{{ $value->tanggal }}</p>
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
    @endforeach

</section>
<!-- /.content -->

@include('dashboard.template.footer')