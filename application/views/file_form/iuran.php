        <!-- judul (card) -->
        <div class="container-fluid mt-4">
            <h2 class="text-center">Iuran Warga</h2>
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
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Iuran Warga</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="createForm" action="<?php echo site_url('Welcome/addDataIuran'); ?>"
                                method="post"
                                onsubmit="event.preventDefault(); handleFormSubmit(this, 'Data berhasil di tambahkan !')">
                                <div class="mb-3 d-none">
                                    <label for="kd_iuran" class="form-label">Kode Iuran Warga</label>
                                    <input type="text" class="form-control" id="kd_iuran" name="kd_iuran">
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
                                    <label for="nik" class="form_select">NIK</label>
                                    <!-- <input type="text" class="form-control" id="nik" name="nik" required> -->
									<select name="nik" id="nik" class="form-control">
										<option value="" selected disabled>Pilih NIK</option>
										<?php foreach ($NIK as $nik) : ?>
											<option value="<?= $nik->nik; ?>" selected>
												<?= $nik->nik; ?>
											</option>
										<?php endforeach ?>
									</select>
                                </div>
                                <div class="mb-3">
                                    <label for="jenis_pembayaran" class="form_select">Jenis Pembayaran</label>
                                    <!-- <input type="text" class="form-control" id="jenis_pembayaran" name="jenis_pembayaran" required> -->
									<select name="jenis_pembayaran" id="jenis_pembayaran"
										class="form-control" required>
										<option value="KAS">KAS</option>
										<option value="Lainnya">Lainnya</option>
									</select>
                                </div>
								<div class="mb-3">
                                    <label for="keterangan" class="form-label">Keterangan</label>
                                    <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="10"
                                        required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="tgl_pembayaran" class="form-label">Tanggal Pembayaran</label>
                                    <input type="date" class="form-control" id="tgl_pembayaran" name="tgl_pembayaran"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="bukti_iuran" class="form-label">Bukti Iuran</label>
                                    <input type="text" class="form-control" id="bukti_iuran" name="bukti_iuran"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="kas_tahun" class="form-label">Kas Tahun</label>
                                    <input type="text" class="form-control" id="kas_tahun" name="kas_tahun"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="kas_bulan" class="form-label">Kas Bulan</label>
                                    <input type="text" class="form-control" id="kas_bulan" name="kas_bulan"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
									<select name="status" id="status"
										class="form-control" required>
										<option value="1">Berhasil</option>
										<option value="2">Gagal</option>
									</select>
                                </div>
                               


                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                            <div id="pesan" class="alert" style="display: none;"></div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- tabel -->
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">KD BLOK</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Jenis Pembayaran</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Tanggal Pembayaran</th>
                        <th scope="col">Bukti Iuran</th>
                        <th scope="col">Kas Tahun</th>
                        <th scope="col">Kas Bulan</th>
                        <th scope="col">TOOLS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
        if (!empty($DataIuran)) {
            $no = 1;
            foreach ($DataIuran as $ReadDS) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $no; ?></th>
                        <td><?php echo $ReadDS->kd_blok; ?></td>
                        <td><?php echo $ReadDS->nik; ?></td>
                        <td><?php echo $ReadDS->jenis_pembayaran; ?></td>
                        <td><?php echo $ReadDS->keterangan; ?></td>
                        <td><?php echo $ReadDS->tgl_pembayaran; ?></td>
                        <td><?php echo $ReadDS->bukti_iuran; ?></td>
                        <td><?php echo $ReadDS->kas_tahun; ?></td>
                        <td><?php echo $ReadDS->kas_bulan; ?></td>
                        <td>
                            <!-- Tombol Edit dengan atribut data-bs-target sesuai dengan ID modal yang unik -->
                            <button type="button" class="btn btn-primary my-1" data-toggle="modal"
                                data-target="#exampleModal_<?php echo $ReadDS->kd_iuran; ?>">
                                Edit
                            </button>
                            <a href="<?php echo site_url('Welcome/deleteDataIuran/'.$ReadDS->kd_iuran)?>"
                                class="btn btn-danger" onclick="return confirmDelete(<?php echo $ReadDS->kd_iuran ?>)">Delete</a>




                            <div class="modal fade" id="exampleModal_<?php echo $ReadDS->kd_iuran; ?>"
                                tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <!-- Konten modal -->
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Iuran Warga</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="updateForm"
                                                onsubmit="event.preventDefault(); handleFormSubmit(this, 'Data berhasil di edit !');"
                                                action="<?= site_url('Welcome/updateDataIuran/' . $ReadDS->kd_iuran) ?>"
                                                method="post">
												<div class="mb-3 d-none">
													<label for="kd_iuran" class="form-label">Kode Iuran Warga</label>
													<input type="text" class="form-control" id="kd_iuran" name="kd_iuran" value="<?= $ReadDS->kd_iuran; ?>">
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
													<label for="nik" class="form_select">NIK</label>
													<!-- <input type="text" class="form-control" id="nik" name="nik" required> -->
													<select name="nik" id="nik" class="form-control">
														<?php foreach ($NIK as $nik) : ?>
															<?php if ($nik->nik == $ReadDS->nik) : ?>
																<option value="<?= $nik->kd_blok; ?>" selected>
																	<?= $nik->nik; ?>
																</option>
															<?php else : ?>
																<option value="<?= $nik->nik; ?>">
																	<?= $nik->nik; ?>
																</option>
															<?php endif; ?>
														<?php endforeach ?>
													</select>
												</div>
												<div class="mb-3">
													<label for="jenis_pembayaran" class="form_select">Jenis Pembayaran</label>
													<select name="jenis_pembayaran" id="jenis_pembayaran"
														class="form-control" required>																	
														<option value="KAS" <?php echo ($ReadDS->jenis_pembayaran == 'KAS') ? 'selected' : ''; ?>>KAS</option>
														<option value="Lainnya" <?php echo ($ReadDS->jenis_pembayaran == 'Lainnya') ? 'selected' : ''; ?>>Lainnya</option>
													</select>
												</div>
												<div class="mb-3">
													<label for="keterangan" class="form-label">Keterangan</label>
													<textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="10"
														required><?php echo $ReadDS->keterangan; ?></textarea>
												</div>
												<div class="mb-3">
													<label for="tgl_pembayaran" class="form-label">Tanggal Pembayaran</label>
													<input type="date" class="form-control" id="tgl_pembayaran" name="tgl_pembayaran" value="<?= $ReadDS->tgl_pembayaran; ?>" 
														required>
												</div>
												<div class="mb-3">
													<label for="bukti_iuran" class="form-label">Bukti Iuran</label>
													<input type="text" class="form-control" id="bukti_iuran" name="bukti_iuran" value="<?= $ReadDS->bukti_iuran; ?>"
														required>
												</div>
												<div class="mb-3">
													<label for="kas_tahun" class="form-label">Kas Tahun</label>
													<input type="text" class="form-control" id="kas_tahun" name="kas_tahun" value="<?= $ReadDS->kas_tahun; ?>"
														required>
												</div>
												<div class="mb-3">
													<label for="kas_bulan" class="form-label">Kas Bulan</label>
													<input type="text" class="form-control" id="kas_bulan" name="kas_bulan" value="<?= $ReadDS->kas_bulan; ?>"
														required>
												</div>
												<div class="mb-3">
													<label for="status" class="form-label">Status</label>
													<select name="status" id="status"
														class="form-control" required>
														<option value="1" <?php echo ($ReadDS->status == 1) ? 'selected' : ''; ?>>Berhasil</option>
														<option value="2" <?php echo ($ReadDS->status == 2) ? 'selected' : ''; ?>>Gagal</option>

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
                    window.location.href = "<?php echo site_url('Welcome/deleteDataIuran/')?>/" +
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
