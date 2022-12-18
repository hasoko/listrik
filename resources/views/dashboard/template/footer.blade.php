</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('/lte') }}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('/lte') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/lte') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<!-- <script src="plugins/chart.js/Chart.min.js"></script> -->
<!-- Sparkline -->
<!-- <script src="plugins/sparklines/sparkline.js"></script> -->
<!-- JQVMap -->
<!-- <script src="plugins/jqvmap/jquery.vmap.min.js"></script> -->
<!-- <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
<!-- jQuery Knob Chart -->
<!-- <script src="plugins/jquery-knob/jquery.knob.min.js"></script> -->
<!-- daterangepicker -->
<!-- <script src="plugins/moment/moment.min.js"></script> -->
<!-- <script src="plugins/daterangepicker/daterangepicker.js"></script> -->
<!-- Tempusdominus Bootstrap 4 -->
<!-- <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> -->
<!-- Summernote -->
<!-- <script src="plugins/summernote/summernote-bs4.min.js"></script> -->
<!-- overlayScrollbars -->
<script src="{{ asset('/lte') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/lte') }}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="{{ asset('/lte') }}/dist/js/pages/dashboard.js"></script> -->

<!-- Datatables script -->
<script src="{{ asset('/lte') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('/lte') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('/lte') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('/lte') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('/lte') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('/lte') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('/lte') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('/lte') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('/lte') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('/lte') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('/lte') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('/lte') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<!-- Datatables helper -->
<script>
    $(function() {
        // https://datatables.net/forums/discussion/43723/how-can-i-remove-default-button-class-of-datatable-btn-default
        $.fn.dataTable.Buttons.defaults.dom.button.className = 'btn';

        $("#kwhmeter").DataTable({
            "responsive": true,
            "lengthChange": false,
            "ordering": false,
            "autoWidth": false,
            "columnDefs": [ { 
                "searchable": false, 
                "targets": [3,4] } ],
            "buttons": [  {
                text: 'Input KWH Meter',
                className: 'btn btn-success',
                action: function ( e, dt, node, config ) {
                    location.href = "kwhmeter/input";
                }
            }
        ]
        }).buttons().container().appendTo('#kwhmeter_wrapper .col-md-6:eq(0)');

        $("#datapelanggan").DataTable({
            "responsive": true,
            "lengthChange": false,
            "ordering": false,
            "autoWidth": false,
            "columnDefs": [ { 
                "searchable": false, 
                "targets": 5 } ],
            "buttons": [  {
                text: 'Tambah Pelanggan',
                className: 'btn btn-success',
                action: function ( e, dt, node, config ) {
                    location.href = "datapelanggan/input";
                }
            }
        ]
        }).buttons().container().appendTo('#datapelanggan_wrapper .col-md-6:eq(0)');


        $("#dataunit").DataTable({
            "responsive": true,
            "lengthChange": false,
            "ordering": false,
            "autoWidth": false,
            "columnDefs": [ { 
                "searchable": false, 
                "targets": 3 } ],
            "buttons": [  {
                text: 'Tambah Data Unit',
                className: 'btn btn-success',
                action: function ( e, dt, node, config ) {
                    location.href = "dataunit/input";
                }
            }
        ]
        }).buttons().container().appendTo('#dataunit_wrapper .col-md-6:eq(0)');


        $("#laporan").DataTable({
            "responsive": true,
            "lengthChange": false,
            "ordering": false,
            "autoWidth": false,
            "buttons": [

                {
                    extend: "collection",
                    text: "Export",
                    className: 'btn btn-primary',
                    autoClose: true,
                    buttons: [

                        {
                            extend: "excel",
                            text: "Simpan Excel <i class='\"nav-icon fas fa-file-excel'\"></i>"
                        },
                        {
                            extend: "pdf",
                            text: "Simpan PDF <i class='\"nav-icon fas fa-file-pdf'\"></i>"
                        }

                    ]
                },
                {
                    extend: 'spacer',
                    style: 'bar'
                },
                {
                    extend: "print",
                    className: 'btn btn-success',
                    text: "Cetak"
                }
            ]
        }).buttons().container().appendTo('#laporan_wrapper .col-md-6:eq(0)');


        
        $("#informasi").DataTable({
            "responsive": true,
            "lengthChange": false,
            "ordering": false,
            "autoWidth": false,
            "buttons": [  {
                text: 'Tambah Informasi',
                className: 'btn btn-success',
                action: function ( e, dt, node, config ) {
                    location.href = "informasi/input";
                }
            }
        ]
        }).buttons().container().appendTo('#informasi_wrapper .col-md-6:eq(0)');

});
</script>
</body>

</html>