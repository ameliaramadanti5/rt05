<!-- <!DOCTYPE html>
<html lang="en">

    <head>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-...">
        </script>

        <link rel="stylesheet" href="<?php echo base_url('assets/css/sb-admin-2.min.css'); ?>">


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <body> -->

        <!-- judul (card) -->
        <div class="container-fluid mt-4">
            <h2 class="text-center">Data Penduduk</h2>
            <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#exampleModal">
				+ Tambah
			</button>


            <!-- Modal -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Tambah Data Blok</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
                        <div class="modal-body">
                            <form action="<?php echo site_url('Welcome/addDataPenduduk'); ?>" method="post" onsubmit="event.preventDefault(); handleFormSubmit(this, 'Data berhasil di tambahkan !')">
                                <div class="mb-3 d-none">
                                    <label for="kd_penduduk" class="form-label">Kode Penduduk</label>
                                    <input type="text" class="form-control" id="kd_penduduk" name="kd_penduduk">
                                </div>
                                <div class="mb-3">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="text" class="form-control" id="nik" name="nik" required>
                                </div>
                                <div class="mb-3">
                                    <label for="kk" class="form-label">KK</label>
                                    <input type="text" class="form-control" id="kk" name="kk" required>
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Foto</label>
                                    <input type="text" class="form-control" id="foto" name="foto" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                                <div class="mb-3">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                                </div>
                                <div class="mb-3">
                                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                                </div>
                                <div class="mb-3">
								<label for="jenis_kelamin" class="form-select">Jenis Kelamin</label>
									<div class="input-group">
										<select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
											<option value="<?= $ReadDS->jenis_kelamin; ?>"><?= $ReadDS->jenis_kelamin; ?></option>
											<option value="L">L</option>
											<option value="P">P</option>
										</select>
									</div>
                                </div>
                                <div class="mb-3">
                                    <label for="agama" class="form-select">Agama</label>
									<div class="input-group">
										<select name="agama" id="agama" class="form-control" required>
											<option value="Islam">Islam</option>
											<option value="Kristen">Kristen</option>
											<option value="Budha">Budha</option>
											<option value="Hindu">Hindu</option>
											<option value="Konghucu">Konghucu</option>
										</select>
									</div>
                                </div>
                                <div class="mb-3">
                                    <label for="status_perkawinan" class="form-select">Status Perkawinan</label>
									<div class="input-group">
										<select name="status_perkawinan" id="status_perkawinan" class="form-control" required>
											<option value="Menikah">Menikah</option>
											<option value="Belum Menikah">Belum Menikah</option>
											<option value="Janda">Janda</option>
											<option value="Duda">Duda</option>
										</select>
									</div>
                                </div>
                                <div class="mb-3">
                                    <label for="status_pekerjaan" class="form-select">Status Pekerjaan</label>
									<div class="input-group">
										<select name="status_pekerjaan" id="status_pekerjaan" class="form-control" required>
											<option value="PNS">PNS</option>
											<option value="Karyawan Swasta">Karyawan Swasta</option>
											<option value="Dosen">Dosen</option>
											<option value="Guru">Guru</option>
											<option value="Wiraswasta">Wiraswasta</option>
											<option value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
											<option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
										</select>
									</div>
                                </div>
                                <div class="mb-3">
                                    <label for="status_keluarga" class="form-select">Status Keluarga</label>
									<div class="input-group">
										<select name="status_keluarga" id="status_keluarga" class="form-control" required>
											<option value="Kepala Keluarga">Kepala Keluarga</option>
											<option value="Istri">Istri</option>
											<option value="Anak">Anak</option>
											<option value="Orang Tua">Orang Tua</option>
											<option value="Saudara">Saudara</option>
										</select>
									</div>
                                </div>
                                <div class="mb-3">
                                    <label for="status_kewarganegaraan" class="form-select">Status
                                        Kewarganegaraan</label>
									<div class="input-group">
										<select name="status_kewarganegaraan" id="status_kewarganegaraan" required
											class="form-control">
											<option value="WNI">WNI</option>
											<option value="WNA">WNA</option>
										</select>
									</div>
                                </div>
                                <div class="mb-3">
                                    <label for="kd_blok" class="form-select">Kode Blok</label>
									<div class="input-group">
										<select name="kd_blok" id="kd_blok" class="form-control" required>
											<option value="selected" disabled>Blok Kavling</option>
											<?php foreach ($KodeBlok as $kb) : ?>
											<option value="<?= $kb->kd_blok; ?>">
												<?= $kb->nama_blok . ' - ' . $kb->no_blok; ?></option>
											
											<?php endforeach ?>
	                                    </select>
									</div>
                                </div>
                                <div class="mb-3">
                                    <label for="status_kavling" class="form-select">Status Kavling</label>
									<div class="input-group">
										<select name="status_kavling" id="status_kavling" class="form-control" required>
											<option value="Pemilik">Pemilik</option>
											<option value="Kontrak">Kontrak</option>
										</select>
									</div>
                                </div>
                                <div class="mb-3">
                                    <label for="tgl_masuk" class="form_label">Tanggal Masuk</label>
                                    <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" required>
                                </div>
                                <div class="mb-3">
                                    <label for="status_huni" class="form-select">Status Huni</label>
									<div class="input-group">
										<select name="status_huni" id="status_huni" class="form-control" required>
											<option value="Aktif">Aktif</option>
											<option value="Tidak Aktif">Tidak Aktif</option>
	                                    </select>
									</div>
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                            <div id="pesan" class="alert" style="display: none;"></div>
                        </div>
                    </div>
                </div>
            </div>


			<div class="table-responsive">
      		  <table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th scope="col">No</th>
							<!-- <th scope="col">Kode Penduduk</th> -->
							<th scope="col">Nama</th>
							<th scope="col">Tanggal Lahir</th>
							<th scope="col">Status Keluarga</th>
							<th scope="col">Blok</th>
							<th scope="col">Status Kavling</th>
							<th scope="col">Tanggal Masuk</th>
							<th scope="col">Status Huni</th>
							<th scope="col">TOOLS</th>
						</tr>
					</thead>
					<tbody>
					<?php
						if (!empty($DataPenduduk)) {
							$no = 1;
							foreach ($DataPenduduk as $ReadDS) {
								?>
									<tr>
										<th scope="row"><?php echo $no; ?></th>
										<!-- <td><?php echo $ReadDS->kd_penduduk; ?></td> -->
										<td><?php echo $ReadDS->nama; ?></td>
										<td><?php echo $ReadDS->tgl_lahir; ?></td>
										<td><?php echo $ReadDS->status_keluarga; ?></td>
										<td>
											<?php
											foreach ($KodeBlok as $kb) {
												if ($kb->kd_blok == $ReadDS->kd_blok) {
													echo $kb->nama_blok . ' - ' . $kb->no_blok;
													break;
												}
											}
										?>
										</td>
										<td><?php echo $ReadDS->status_kavling; ?></td>
										<td><?php echo $ReadDS->tgl_masuk; ?></td>
										<td><?php echo $ReadDS->status_huni; ?></td>
										<td>
											<!-- Tombol Edit dengan atribut data-bs-target sesuai dengan ID modal yang unik -->
											<!-- <button type="button" class="btn btn-success" data-bs-toggle="modal"
												data-bs-target="#exampleModal_<?php echo $ReadDS->kd_penduduk; ?>">
												Update
											</button> -->
											<button type="button" class="btn btn-primary my-1" data-toggle="modal"
												data-target="#exampleModal_<?php echo $ReadDS->kd_penduduk; ?>">
												Edit
											</button>
											<!-- <a href="<?php echo site_url('Welcome/deleteDataPenduduk/'.$ReadDS->kd_penduduk)?>"
												class="btn btn-danger" onclick="return confirmDelete()">Hapus</a>

 -->
										<a href="<?php echo site_url('Welcome/deleteDataSuratKeluar/'.$ReadDS->kd_penduduk)?>"
											class="btn btn-danger" onclick="return confirmDelete(<?php echo $ReadDS->kd_penduduk ?>)">Delete</a>



											<div class="modal fade" id="exampleModal_<?php echo $ReadDS->kd_penduduk; ?>" tabindex="-1"
												aria-labelledby="exampleModalLabel" aria-hidden="true">
												<!-- Konten modal -->
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">Tambah Data Blok</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<form
																action="<?= site_url('Welcome/updateDataPenduduk/' . $ReadDS->kd_penduduk) ?>"
																onsubmit="event.preventDefault(); handleFormSubmit(this, 'Data berhasil di edit !');"
																method="post">
																<div class="mb-3 d-none">
																	<label for="kd_penduduk" class="form-label">Kode Penduduk</label>
																	<input type="text" class="form-control" id="kd_penduduk"
																		name="kd_penduduk" value="<?= $ReadDS->kd_penduduk; ?>"
																		readonly>
																</div>
																<div class="mb-3">
																	<label for="nik" class="form-label">NIK</label>
																	<input type="text" class="form-control" id="nik" name="nik"
																		value="<?= $ReadDS->nik; ?>" required>
																</div>
																<div class="mb-3">
																	<label for="kk" class="form-label">KK</label>
																	<input type="text" class="form-control" id="kk" name="kk"
																		value="<?= $ReadDS->kk; ?>" required>
																</div>
																<div class="mb-3">
																	<label for="foto" class="form-label">Foto</label>
																	<input type="text" class="form-control" id="foto" name="foto"
																		value="<?= $ReadDS->foto; ?>" required>
																</div>
																<div class="mb-3">
																	<label for="nama" class="form-label">Nama</label>
																	<input type="text" class="form-control" id="nama" name="nama"
																		value="<?= $ReadDS->nama; ?>" required>
																</div>
																<div class="mb-3">
																	<label for="tempat_lahir" class="form-label">Tempat Lahir</label>
																	<input type="text" class="form-control" id="tempat_lahir"
																		name="tempat_lahir" value="<?= $ReadDS->tempat_lahir; ?>" required>
																</div>
																<div class="mb-3">
																	<label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
																	<input type="date" class="form-control" id="tgl_lahir"
																		name="tgl_lahir" value="<?= $ReadDS->tgl_lahir; ?>" required>
																</div>
																<div class="mb-3">
																	<label for="jenis_kelamin" class="form-select">Jenis Kelamin</label>
																	<select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
																		<option value="L">L</option>
																		<option value="P">P</option>
																	</select>
																</div>
																<div class="mb-3">
																	<label for="agama" class="form-select">Agama</label>
																	<select name="agama" id="agama" class="form-control" required>
																		<option value="Islam">Islam</option>
																		<option value="Kristen">Kristen</option>
																		<option value="Budha">Budha</option>
																		<option value="Hindu">Hindu</option>
																		<option value="Konghucu">Konghucu</option>
																	</select>
																</div>
																<div class="mb-3">
																	<label for="status_perkawinan" class="form-select">Status
																		Perkawinan</label>
																	<select name="status_perkawinan" id="status_perkawinan"
																		class="form-control" required>
																		<option value="Menikah">Menikah</option>
																		<option value="Belum Menikah">Belum Menikah</option>
																		<option value="Janda">Janda</option>
																		<option value="Duda">Duda</option>
																	</select>
																</div>
																<div class="mb-3">
																	<label for="status_pekerjaan" class="form-select">Status
																		Pekerjaan</label>
																	<select name="status_pekerjaan" id="status_pekerjaan"
																		class="form-control" required>
																		<option value="PNS">PNS</option>
																		<option value="Karyawan Swasta">Karyawan Swasta</option>
																		<option value="Dosen">Dosen</option>
																		<option value="Guru">Guru</option>
																		<option value="Wiraswasta">Wiraswasta</option>
																		<option value="Mengurus Rumah Tangga">Mengurus Rumah Tangga
																		</option>
																		<option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
																	</select>
																</div>
																<div class="mb-3">
																	<label for="status_keluarga" class="form-select">Status
																		Keluarga</label>
																	<select name="status_keluarga" id="status_keluarga"
																		class="form-control" required>
																		<option value="Kepala Keluarga">Kepala Keluarga</option>
																		<option value="Istri">Istri</option>
																		<option value="Anak">Anak</option>
																		<option value="Orang Tua">Orang Tua</option>
																		<option value="Saudara">Saudara</option>
																	</select>
																</div>
																<div class="mb-3">
																	<label for="status_kewarganegaraan" class="form-select">Status
																		Kewarganegaraan</label>
																	<select name="status_kewarganegaraan" id="status_kewarganegaraan"
																		class="form-control" required>
																		<option value="WNI">WNI</option>
																		<option value="WNA">WNA</option>
																	</select>
																</div>
																<div class="mb-3">
																	<label for="kd_blok" class="form_select">Kode Blok</label>
																	<select name="kd_blok" id="kd_blok" class="form-control">
																		<option value="" selected disabled>Blok Kavling</option>
																		<?php foreach ($KodeBlok as $kb) : ?>
																			<?php if ($kb->kd_blok == $ReadDS->kd_blok) : ?>
																				<option value="<?= $kb->kd_blok; ?>" selected>
																					<?= $kb->nama_blok . ' - ' . $kb->no_blok; ?>
																				</option>
																			<?php else : ?>
																				<option value="<?= $kb->kd_blok; ?>">
																					<?= $kb->nama_blok . ' - ' . $kb->no_blok; ?>
																				</option>
																			<?php endif; ?>
																		<?php endforeach ?>
																	</select>
																</div>

																<div class="mb-3">
																	<label for="status_kavling" class="form-select">Status
																		Kavling</label>
																	<select name="status_kavling" id="status_kavling"
																		class="form-control" required>
																		<option value="Pemilik">Pemilik</option>
																		<option value="Kontrak">Kontrak</option>
																	</select>
																</div>
																<div class="mb-3">
																	<label for="tgl_masuk" class="form_label">Tanggal Masuk</label>
																	<input type="date" class="form-control" id="tgl_masuk"
																		name="tgl_masuk" value="<?= $ReadDS->tgl_masuk; ?>" required>
																</div>
																<div class="mb-3">
																	<label for="status_huni" class="form-select">Status Huni</label>
																	<select name="status_huni" id="status_huni" class="form-control" required>
																		<option value="Aktif">Aktif</option>
																		<option value="Tidak Aktif">Tidak Aktif</option>
																	</select>
																</div>

																<button type="submit" class="btn btn-primary">Simpan</button>
															</form>
															<!-- Akhir formulir -->
														</div>
													</div>
												</div>
												<!-- Akhir konten modal -->

											</div>
											<!-- Akhir Modal Edit -->
										</td>
									</tr>
									<?php
								$no++;
							}
						}
						?>
					</tbody>
				</table>
			</div>
        </div>


		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script>
			function confirmDelete(kode) {
				Swal.fire({
					title: "Apakah anda yakin ?",
					text: "Anda ingin menghapus data ini ?",
					icon: "warning",
					showCancelButton: true,
					confirmButtonColor: "#d33",
					cancelButtonColor: "#3085d6",
					confirmButtonText: "Ya, data akan di hapus!",
				}).then((result) => {
					if (result.isConfirmed) {
						Swal.fire({
							title: "Berhasil !",
							text: 'Data berhasil di hapus !',
							icon: "success",
							showLoaderOnConfirm: true,
						}).then((result) => {
							if (result.isConfirmed || result.dismiss === Swal.DismissReason.close) {
								// Redirect to the delete URL with the correct kd_blok
								window.location.href = "<?php echo site_url('Welcome/deleteDataPenduduk/')?>/" +
								kode;
							}
						});
					}
				});
				return false;
			}


			function succesModal(msg) {
				Swal.fire({
					title: "Berhasil !",
					text: msg,
					icon: "success",
					showLoaderOnConfirm: true,
				}).then((result) => {
					// Reload the page after the Swal modal is closed
					if (result.isConfirmed || result.dismiss === Swal.DismissReason.close) {
						location.reload();
					}
				});
			}

			function handleFormSubmit(form, msg) {
				var formData = $(form).serialize();
				console.log(formData);

				$.ajax({
					type: "POST",
					url: $(form).attr("action"),
					data: formData,
					success: function(response) {
						console.log(response);
						// Assuming your server returns a JSON object with a "success" property
						// if (response.success) {
						succesModal(msg);
						// } else {
						//     // Handle the case when the form submission is not successful
						//     // You can display an error message or take other actions
						//     alert("Form submission failed. Please try again.");
						// }
					},
					error: function() {
						// Handle the case when the AJAX request fails
						alert("An error occurred. Please try again later.");
					}
				});

				// Return false to prevent the default form submission
				return false;
			}

		</script>
        <!-- Bootstrap core JavaScript-->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="assets/js/sb-admin-2.min.js"></script>
<!-- 
    </body>

</html> -->
