<!-- judul (card) -->
<div class="container-fluid mt-4">
    <h2 class="text-center">Data User</h2>
    <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#exampleModal">
        <i class="bi bi-plus-circle"></i> + Tambah
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data user</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="createForm" action="<?php echo site_url('Welcome/addDataUser'); ?>" method="post"
                        onsubmit="event.preventDefault(); handleFormSubmit(this, 'Data berhasil di tambahkan !')">
                        <label for="kd_user" class="form-label" hidden>Kode User</label>
                        <input type="hidden" class="form-control" id="kd_user" name="kd_user"
                            placeholder="Masukkan Kode User">
                        <div class="mb-3">
                            <label for="nik" class="form-label">Nik</label>
                            <input type="text" class="form-control" id="nik" name="nik"
                                placeholder="Masukkan Nik" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="Masukkan Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Masukkan Username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" class="form-control" id="password" name="password"
                                placeholder="Masukkan Password" required>
                        </div>
                        <div class="mb-3">
                            <label for="dentry" class="form-label">Dentry</label>
                            <input type="date" class="form-control" id="dentry" name="dentry"
                                placeholder="Masukkan Nomor Dentry" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                    <div id="pesan" class="alert" style="display: none;"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- tabel -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nik</th>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Dentry</th>
                    <th scope="col">TOOLS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($DataUser)) {
                    $no = 1;
                    foreach ($DataUser as $ReadDS) {
                ?>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $ReadDS->nik; ?></td>
                    <td><?php echo $ReadDS->email; ?></td>
                    <td><?php echo $ReadDS->username; ?></td>
                    <td><?php echo $ReadDS->password; ?></td>
                    <td><?php echo $ReadDS->dentry; ?></td>
                    <td>
                        <button type="button" class="btn btn-primary my-1" data-toggle="modal"
                            data-target="#exampleModal_<?php echo $ReadDS->kd_user; ?>">
                            Edit
                        </button>
                        <a href="#" class="btn btn-danger"
                            onclick="return confirmDelete('<?php echo $ReadDS->kd_user; ?>')">
                            Hapus
                        </a>


                        <div class="modal fade" id="exampleModal_<?php echo $ReadDS->kd_user; ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <!-- Konten modal -->
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= site_url('Welcome/updateDataUser/' . $ReadDS->kd_user) ?>"
                                            onsubmit="event.preventDefault(); handleFormSubmit(this, 'Data berhasil di edit !');"
                                            method="post">
                                            <label for="kd_user" class="form-label" hidden>Kode User</label>
                                            <input type="hidden" class="form-control" id="kd_user" name="kd_user"
                                                value="<?= $ReadDS->kd_user; ?>" readonly>
                                            <div class="mb-3">
                                                <label for="nik" class="form-label">Nik</label>
                                                <input type="text" class="form-control" id="nik" name="nik"
                                                    value="<?= $ReadDS->nik; ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="text" class="form-control" id="email" name="email"
                                                    value="<?= $ReadDS->email; ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="username" name="username"
                                                    value="<?= $ReadDS->username; ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="text" class="form-control" id="password" name="password"
                                                    value="<?= $ReadDS->password; ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="dentry" class="form-label">Dentry</label>
                                                <input type="date" class="form-control" id="dentry" name="dentry"
                                                    value="<?= $ReadDS->dentry; ?>" required>
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
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>



</div>

<script>
function confirmDelete(kd_user) {
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
                    // Redirect to the delete URL with the correct kd_user
                    window.location.href = "<?php echo site_url('Welcome/deleteDataUser/')?>/" +
                    kd_user;
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