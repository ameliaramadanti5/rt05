<!-- judul (card) -->
<div class="container mt-4">
    <h2 class="text-center">Data Pesan Masuk</h2>
    <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#exampleModal">
        + Tambah
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pesan Masuk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form id="createForm" action="<?php echo site_url('Welcome/addDataPesan'); ?>" method="post" onsubmit="(); handleFormSubmit(this, 'Data berhasil di tambahkan')">
                        <label for="kd_pesan" class="form-label" hidden>Kode Pesan</label>
                        <input type="hidden" class="form-control" id="kd_pesan" name="kd_pesan"
                            placeholder="Masukkan Kode Pesan" required>
                        <div class="mb-3">
                            <label for="nik" class="form-label">Nomor Induk Kependudukan</label>
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea name="pesan" id="editor1" cols="30" rows="2" class="form-control"
                                required></textarea>
                          
                        </div>
                        <div class="mb-3">
                            <label for="tgl_pesan" class="form-label">Tanggal Pesan</label>
                            <input type="date" class="form-control" id="tgl_pesan" name="tgl_pesan" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                    <div id="pesan" class="alert" style="display: none;"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="table-responsive">
        <!-- tabel -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Pesan</th>
                    <th scope="col">Tanggal Pesan</th>
                    <th scope="col">TOOLS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($DataPesan)) {
                    $no = 1;
                    foreach ($DataPesan as $ReadDS) {
                ?>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $ReadDS->nik; ?></td>
                    <td><?php echo $ReadDS->pesan; ?></td>
                    <td><?php echo $ReadDS->tgl_pesan; ?></td>
                    <td>
                        <!-- Tombol Edit dengan atribut data-bs-target sesuai dengan ID modal yang unik -->
                        <button type="button" class="btn btn-primary my-1" data-toggle="modal"
                            data-target="#exampleModal_<?php echo $ReadDS->kd_pesan; ?>">
                            Update
                        </button>
                       <a href="#" class="btn btn-danger" onclick="return confirmDelete(<?php echo $ReadDS->kd_pesan; ?>)">
    Delete
</a>


                        <div class="modal fade" id="exampleModal_<?php echo $ReadDS->kd_pesan; ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <!-- Konten modal -->
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Pesan Masuk</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="<?= site_url('Welcome/updateDataPesan/' . $ReadDS->kd_pesan) ?>"
										  onsubmit="(); handleFormSubmit(this, 'Data berhasil di update !');"
										  method="post">
                                            <label for="kd_pesan" class="form-label" hidden>Kode Pesan</label>
                                            <input type="hidden" class="form-control" id="kd_pesan" name="kd_pesan"
                                                value="<?= $ReadDS->kd_pesan; ?>" readonly>
                                            <div class="mb-3">
                                                <label for="nik" class="form-label">NIK</label>
                                                <input type="text" class="form-control" id="nik" name="nik"
                                                    value="<?= $ReadDS->nik; ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="pesan" class="form-label">Pesan</label>
                                                <textarea name="pesan" id="editor2<?= $ReadDS->kd_pesan; ?>" cols="30"
                                                    rows="2" class="form-control"
                                                    required><?= $ReadDS->pesan ?></textarea>
                                               
                                            </div>
                                            <div class="mb-3">
                                                <label for="tgl_pesan" class="form-label">Tanggal Pesan</label>
                                                <input type="date" class="form-control" id="tgl_pesan" name="tgl_pesan"
                                                    value="<?= $ReadDS->tgl_pesan; ?>" required>
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

<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<script data-sample="1">
                            CKEDITOR.replace('editor1', {
                                filebrowserBrowseUrl: '<?php echo base_url(); ?>js/ckeditor_full/filemanager/browser/default/browser.html?Connector=<?php echo base_url(); ?>js/ckeditor_full/filemanager/connectors/php/connector.php',
                                filebrowserImageBrowseUrl: '<?php echo base_url(); ?>js/ckeditor_full/filemanager/browser/default/browser.html?Type=Image&Connector=<?php echo base_url(); ?>js/ckeditor_full/filemanager/connectors/php/connector.php',
                                filebrowserFlashBrowseUrl: '<?php echo base_url(); ?>js/ckeditor_full/filemanager/browser/default/browser.html?Type=Flash&Connector=<?php echo base_url(); ?>js/ckeditor_full/filemanager/connectors/php/connector.php',
                                filebrowserUploadUrl: '<?php echo base_url(); ?>js/ckeditor_full/filemanager/connectors/php/upload.php?Type=File',
                                filebrowserImageUploadUrl: '<?php echo base_url(); ?>js/ckeditor_full/filemanager/connectors/php/upload.php?Type=Image',
                                filebrowserFlashUploadUrl: '<?php echo base_url(); ?>js/ckeditor_full/filemanager/connectors/php/upload.php?Type=Flash'
                            });
                            </script>

<script data-sample="1">
                                                CKEDITOR.replace('editor2<?= $ReadDS->kd_pesan; ?>', {
                                                    filebrowserBrowseUrl: '<?php echo base_url(); ?>js/ckeditor_full/filemanager/browser/default/browser.html?Connector=<?php echo base_url(); ?>js/ckeditor_full/filemanager/connectors/php/connector.php',
                                                    filebrowserImageBrowseUrl: '<?php echo base_url(); ?>js/ckeditor_full/filemanager/browser/default/browser.html?Type=Image&Connector=<?php echo base_url(); ?>js/ckeditor_full/filemanager/connectors/php/connector.php',
                                                    filebrowserFlashBrowseUrl: '<?php echo base_url(); ?>js/ckeditor_full/filemanager/browser/default/browser.html?Type=Flash&Connector=<?php echo base_url(); ?>js/ckeditor_full/filemanager/connectors/php/connector.php',
                                                    filebrowserUploadUrl: '<?php echo base_url(); ?>js/ckeditor_full/filemanager/connectors/php/upload.php?Type=File',
                                                    filebrowserImageUploadUrl: '<?php echo base_url(); ?>js/ckeditor_full/filemanager/connectors/php/upload.php?Type=Image',
                                                    filebrowserFlashUploadUrl: '<?php echo base_url(); ?>js/ckeditor_full/filemanager/connectors/php/upload.php?Type=Flash'
                                                });
                                                </script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script>
			function confirmDelete(kd_pesan) {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: "Berhasil !",
                text: 'Data Berhasil Di Hapus !',
                icon: "success",
                showLoaderOnConfirm: true,
            }).then((result) => {
                if (result.isConfirmed || result.dismiss === Swal.DismissReason.close) {
                    // Redirect to the delete URL with the correct kd_pesan
                    window.location.href = "<?php echo site_url('Welcome/deleteDataPesan/')?>/" + kd_pesan;
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
					success: function (response) {
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
					error: function () {
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
