@extends('layouts.main')
 

@section('template')

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMDocPro - Prodi</title>

	<!-- Custom fonts for this template -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

	@endsection

  @section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Dokumen Kurikulum</h1>
                    <p class="mb-4"></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <button class="btn btn-success" ><a href="/silabus">Silabus</a></button>
							<button class="btn btn-success" ><a href="/presensi">Presensi</a></button>
							<button class="btn btn-success" ><a href="/uploadpage">Upload</a></button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Nama Dokumen</th>
                                            <th>Status </th>
											<th>Aksi </th>
                                            
                                        </tr>
                                    </thead>
                            
                                    <tbody>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning"><a href="/review">Review</a></button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Review</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Review</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Review</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Review</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Review</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Review</button> </td>
                                        </tr>
                                        <tr>
											<td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Review</button> </td>
                                        </tr>
                                        <tr>
											<td> </td>
                                            <td> </td>
                                            <td> </td>
											<td><button type="button" class="btn btn-warning">Review</button> </td>
                                        </tr>
                                        <tr>
											<td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Review</button> </td>
                                        </tr>
                                        <tr>
											<td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Review</button> </td>
                                        </tr>
                                        <tr>
											<td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Review</button> </td>
                                        </tr>
                                        <tr>
										<td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Review</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
										<td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Review</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                           <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><button type="button" class="btn btn-warning">Warning</button> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            @endsection
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    @section('kontainer')

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>

    @endsection

</body>

</html>