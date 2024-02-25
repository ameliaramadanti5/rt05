        <!-- judul (card) -->
        <div class="container-fluid mt-4">
            <h2 class="text-center">Surat Keluar</h2>
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
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Surat Keluar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="createForm" action="<?php echo site_url('Welcome/addDataSuratKeluar'); ?>"
                                method="post"
                                onsubmit="event.preventDefault(); handleFormSubmit(this, 'Data berhasil di tambahkan !')">
                                <div class="mb-3 d-none">
                                    <label for="kd_surat_keluar" class="form-label">Kode Surat Keluar</label>
                                    <input type="text" class="form-control" id="kd_surat_keluar" name="kd_surat_keluar">
                                </div>
                                <div class="mb-3">
                                    <label for="nik" class="form_select">NIK</label>
                                    <input type="text" class="form-control" id="nik" name="nik" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nomor_surat" class="form-label">Nomor Surat</label>
                                    <input type="text" class="form-control" id="nomor_surat" name="nomor_surat"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="keterangan" class="form-label">Keterangan</label>
                                    <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="10"
                                        required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal_surat" class="form-label">Tanggal Surat</label>
                                    <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat"
                                        required>
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
                        <th scope="col">NIK</th>
                        <th scope="col">Nomor Surat</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Tanggal Surat</th>
                        <th scope="col">TOOLS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
        if (!empty($DataSuratKeluar)) {
            $no = 1;
            foreach ($DataSuratKeluar as $ReadDS) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $no; ?></th>
                        <td><?php echo $ReadDS->nik; ?></td>
                        <td><?php echo $ReadDS->nomor_surat; ?></td>
                        <td><?php echo $ReadDS->keterangan; ?></td>
                        <td><?php echo $ReadDS->tanggal_surat; ?></td>
                        <td>
                            <!-- Tombol Edit dengan atribut data-bs-target sesuai dengan ID modal yang unik -->
                            <button type="button" class="btn btn-primary my-1" data-toggle="modal"
                                data-target="#exampleModal_<?php echo $ReadDS->kd_surat_keluar; ?>">
                                Edit
                            </button>
                            <a href="<?php echo site_url('Welcome/deleteDataSuratKeluar/'.$ReadDS->kd_surat_keluar)?>"
                                class="btn btn-danger" onclick="return confirmDelete(<?php echo $ReadDS->kd_surat_keluar ?>)">Delete</a>




                            <div class="modal fade" id="exampleModal_<?php echo $ReadDS->kd_surat_keluar; ?>"
                                tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <!-- Konten modal -->
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Surat Keluar</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="updateForm"
                                                onsubmit="event.preventDefault(); handleFormSubmit(this, 'Data berhasil di edit !');"
                                                action="<?= site_url('Welcome/updateDataSuratKeluar/' . $ReadDS->kd_surat_keluar) ?>"
                                                method="post">
                                                <div class="mb-3 d-none">
                                                    <label for="kd_surat_keluar" class="form-label">Kode Surat
                                                        Keluar</label>
                                                    <input type="hidden" class="form-control" id="kd_surat_keluar"
                                                        name="kd_surat_keluar" value="<?= $ReadDS->kd_surat_keluar; ?>"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nik" class="form-label">NIK</label>
                                                    <input type="text" class="form-control" id="nik" name="nik"
                                                        value="<?= $ReadDS->nik; ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nomor_surat" class="form-label">Nomor Surat</label>
                                                    <input type="text" class="form-control" id="nomor_surat"
                                                        name="nomor_surat" value="<?= $ReadDS->nomor_surat; ?>"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="keterangan" class="form-label">Keterangan</label>
                                                    <textarea name="keterangan" id="keterangan" class="form-control"
                                                        cols="30" rows="10"
                                                        required><?php echo $ReadDS->keterangan; ?></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tanggal_surat" class="form-label">Tanggal Surat</label>
                                                    <input type="date" class="form-control" id="tanggal_surat"
                                                        name="tanggal_surat" value="<?= $ReadDS->tanggal_surat; ?>"
                                                        required>
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
                    window.location.href = "<?php echo site_url('Welcome/deleteDataSuratKeluar/')?>/" +
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
