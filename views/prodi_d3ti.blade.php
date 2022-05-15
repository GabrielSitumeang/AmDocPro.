@extends('layouts.main')

@section('container')
  <main id="main">
    <section id="content" style="margin-bottom: 0px; user-select: auto;">
		<h3 class="tanggal">Dokumen Kurikulum Jenjang DIII Teknologi Informasi</h3>
		<div class="tanggal">
			
		<button class="juduldokumen" style="background-color: #00FFFF; border-color:antiquewhite ; color:white"><a href="/silabus">Silabus</a></button>
		<button class="juduldokumen" style="background-color: #00FFFF; border-color:antiquewhite ; color:white"><a href="/presensi">Presensi</a></button>
		<button style="background-color: #7CFC00; border-color:antiquewhite ; color:white"><a href="/upload">Upload</a></button>
		
	</div> 
		<div class="content-wrap" style="user-select: auto;">

				<div class="container clearfix" style="user-select: auto;">

					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin clearfix" style="user-select: auto;">
						<div class="tabs side-tabs nobottommargin clearfix ui-tabs ui-corner-all ui-widget ui-widget-content" id="tab-6" style="user-select: auto;">

							<ul class="tab-nav tab-nav2 clearfix ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header" role="tablist" style="user-select: auto;">
																	<li role="tab" tabindex="0" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active ui-state-active" aria-controls="tabs-0" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true" style="user-select: auto;"><a href="#tabs-0" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-1" style="user-select: auto;">2019</a></li>
																	<li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="tabs-2" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false" style="user-select: auto;"><a href="#tabs-2" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-3" style="user-select: auto;">2020</a></li>
																	<li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="tabs-3" aria-labelledby="ui-id-4" aria-selected="false" aria-expanded="false" style="user-select: auto;"><a href="#tabs-3" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-4" style="user-select: auto;">2021</a></li>
																	<li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="tabs-4" aria-labelledby="ui-id-5" aria-selected="false" aria-expanded="false" style="user-select: auto;"><a href="#tabs-4" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-5" style="user-select: auto;">2022</a></li>
															</ul>
							<div class="tab-container" style="user-select: auto;">

																	<div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content" id="tabs-0" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false" style="user-select: auto;">
										<div id="datatable1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer" style="user-select: auto;"><div class="row" style="user-select: auto;"><div class="col-sm-12 col-md-6" style="user-select: auto;"><div class="dataTables_length" id="datatable1_length" style="user-select: auto;">
											<label style="user-select: auto;">Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable1" style="user-select: auto;"></label></div></div></div><div class="row" style="user-select: auto;"><div class="col-sm-12" style="user-select: auto;"><table class="table table-hover tb dataTable no-footer" id="datatable1" role="grid" aria-describedby="datatable1_info" style="user-select: auto;">
										  <thead style="user-select: auto;">
											<tr role="row" style="user-select: auto;"><th class="sorting_asc" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Kode: activate to sort column descending" style="width: 13%; user-select: auto;">Kode</th><th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Nama Dokumen: activate to sort column ascending" style="width: 53%; user-select: auto;">Nama Dokumen</th><th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Nama Dokumen: activate to sort column ascending" style="width: 11%; user-select: auto;">Status</th><th class="sorting_asc" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Aksi: activate to sort column descending" style="width: 30%; user-select: auto;">Aksi</th></tr>
										  </thead>
										  <tbody style="user-select: auto;">
												<tr role="row" class="odd" style="user-select: auto;">
														<td class="sorting_1" style="user-select: auto;">1</td>
														<td style="user-select: auto;">RENSTRA Perubahan 2018</td>
														<td style="user-select: auto;">Cetak</td>
														<td style="user-select: auto;"><button class="merah" style="background-color: whitesmoke; border-color:aqua; color:white"><a href="/review">Review</a></button><button style="background-color: whitesmoke; border-color: red; color:white"><a href="">Aproval</a></button></td>
													</tr><tr role="row" class="even" style="user-select: auto;">
														<td class="sorting_1" style="user-select: auto;">2</td>
														<td style="user-select: auto;">Jakin 2018</td>
														<td style="user-select: auto;">Cetak</td>
														<td style="user-select: auto;"><button class="merah" style="background-color: whitesmoke; border-color:aqua; color:white"><a href="/review">Review</a></button><button style="background-color: whitesmoke; border-color: red; color:white"><a href="">Aproval</a></button></td>
													</tr><tr role="row" class="odd" style="user-select: auto;">
														<td class="sorting_1" style="user-select: auto;">3</td>
														<td style="user-select: auto;">Jakin Honorer Semester II Tahun 2018</td>
														<td style="user-select: auto;">Cetak</td>
														<td style="user-select: auto;"><button class="merah" style="background-color: whitesmoke; border-color:aqua; color:white"><a href="/review">Review</a></button><button style="background-color: whitesmoke; border-color: red; color:white"><a href="">Aproval</a></button></td>
													</tr><tr role="row" class="even" style="user-select: auto;">
														<td class="sorting_1" style="user-select: auto;">4</td>
														<td style="user-select: auto;">RKT 2018</td>
														<td style="user-select: auto;">Cetak</td>
														<td style="user-select: auto;"><button class="merah" style="background-color: whitesmoke; border-color:aqua; color:white"><a href="/review">Review</a></button><button style="background-color: whitesmoke; border-color: red; color:white"><a href="">Aproval</a></button></td>
													</tr><tr role="row" class="odd" style="user-select: auto;">
														<td class="sorting_1" style="user-select: auto;">5</td>
														<td style="user-select: auto;">IKU 2018</td>
														<td style="user-select: auto;">Cetak</td>
														<td style="user-select: auto;"><button class="merah" style="background-color: whitesmoke; border-color:aqua; color:white"><a href="/review">Review</a></button><button style="background-color: whitesmoke; border-color: red; color:white"><a href="">Aproval</a></button></td>
													</tr><tr role="row" class="even" style="user-select: auto;">
														<td class="sorting_1" style="user-select: auto;">6</td>
														<td style="user-select: auto;">Rencana Aksi 2017-2018</td>
														<td style="user-select: auto;">Cetak</td>
														<td style="user-select: auto;"><button class="merah" style="background-color: whitesmoke; border-color:aqua; color:white"><a href="/review">Review</a></button><button style="background-color: whitesmoke; border-color: red; color:white"><a href="">Aproval</a></button></td>
													</tr><tr role="row" class="odd" style="user-select: auto;">
														<td class="sorting_1" style="user-select: auto;">7</td>
														<td style="user-select: auto;">Rencana Kerja 2018</td>
														<td style="user-select: auto;">Cetak</td>
														<td style="user-select: auto;"><button class="merah" style="background-color: whitesmoke; border-color:aqua; color:white"><a href="/review">Review</a></button><button style="background-color: whitesmoke; border-color: red; color:white"><a href="">Aproval</a></button></td>
													</tr><tr role="row" class="even" style="user-select: auto;">
														<td class="sorting_1" style="user-select: auto;">8</td>
														<td style="user-select: auto;">Proses Bisnis DISKOMINFO</td>
														<td style="user-select: auto;">Cetak</td>
														<td style="user-select: auto;"><button class="merah" style="background-color: whitesmoke; border-color:aqua; color:white"><a href="/review">Review</a></button><button style="background-color: whitesmoke; border-color: red; color:white"><a href="">Aproval</a></button></td>
													</tr><tr role="row" class="odd" style="user-select: auto;">
														<td class="sorting_1" style="user-select: auto;">9</td>
														<td style="user-select: auto;">Notulen</td>
														<td style="user-select: auto;">Cetak</td>
														<td style="user-select: auto;"><button class="merah" style="background-color: whitesmoke; border-color:aqua; color:white"><a href="/review">Review</a></button><button style="background-color: whitesmoke; border-color: red; color:white"><a href="">Aproval</a></button></td>
													</tr><tr role="row" class="even" style="user-select: auto;">
														<td class="sorting_1" style="user-select: auto;">10</td>
														<td style="user-select: auto;">Laporan Tribulan 2017-2018</td>
														<td style="user-select: auto;">Cetak</td>
														<td style="user-select: auto;"><button class="merah" style="background-color: whitesmoke; border-color:aqua; color:white"><a href="/review">Review</a></button><button style="background-color: whitesmoke; border-color: red; color:white"><a href="">Aproval</a></button></td>
													</tr></tbody>
										</table></div></div><div class="row" style="user-select: auto;"><div class="col-sm-12 col-md-5" style="user-select: auto;"><div class="dataTables_info" id="datatable1_info" role="status" aria-live="polite" style="user-select: auto;"></div></div><div class="col-sm-12 col-md-7" style="user-select: auto;"><div class="dataTables_paginate paging_simple_numbers" id="datatable1_paginate" style="user-select: auto;"><ul class="pagination" style="user-select: auto;"><li class="paginate_button page-item previous disabled" id="datatable1_previous" style="user-select: auto;"><a href="#" aria-controls="datatable1" data-dt-idx="0" tabindex="0" class="page-link" style="user-select: auto;">Previous</a></li><li class="paginate_button page-item active" style="user-select: auto;"><a href="#" aria-controls="datatable1" data-dt-idx="1" tabindex="0" class="page-link" style="user-select: auto;">1</a></li><li class="paginate_button page-item " style="user-select: auto;"><a href="#" aria-controls="datatable1" data-dt-idx="2" tabindex="0" class="page-link" style="user-select: auto;">2</a></li><li class="paginate_button page-item next" id="datatable1_next" style="user-select: auto;"><a href="#" aria-controls="datatable1" data-dt-idx="3" tabindex="0" class="page-link" style="user-select: auto;">Next</a></li></ul></div></div></div></div>
									</div>
																
									</div>					

						</div>

						
					</div><!-- .postcontent end -->

				</div>

			</div>

		</section>    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">


   

  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

@endsection