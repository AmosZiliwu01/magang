@extends('layouts.main')
@section('title', 'Pengurus')
@section('content')
    <div class="row">
        <!-- Pengurus Table -->
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title">Daftar Pengurus</h5>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-pengurus-modal">
                            <i class="fa fa-plus"></i> Tambah
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="pengurus-table" class="table text-center">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Deskripsi</th>
                                <th>Urutan</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- Pengurus data will be loaded here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Pengurus Modal -->
    <div class="modal fade" id="add-pengurus-modal" tabindex="-1" role="dialog" aria-labelledby="addPengurusModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPengurusModalLabel">Tambah Pengurus</h5>
                </div>
                <div class="modal-body">
                    <form id="add-pengurus-form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="pengurus-nama">Nama</label>
                            <input type="text" class="form-control" id="pengurus-nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="pengurus-jabatan">Jabatan</label>
                            <input type="text" class="form-control" id="pengurus-jabatan" name="jabatan" required>
                        </div>
                        <div class="form-group">
                            <label for="pengurus-deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="pengurus-deskripsi" name="deskripsi" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="pengurus-user">User (Optional)</label>
                            <select class="form-control" id="pengurus-user" name="user_id">
                                <option value="">-- Pilih User --</option>
                                <!-- Options will be loaded here -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pengurus-gambar">Foto</label>
                            <input type="file" class="form-control" id="pengurus-gambar" name="gambar" accept="image/*">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Pengurus Modal -->
    <div class="modal fade" id="edit-pengurus-modal" tabindex="-1" role="dialog" aria-labelledby="editPengurusModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editPengurusModalLabel">Edit Pengurus</h5>
                </div>
                <div class="modal-body">
                    <form id="edit-pengurus-form" enctype="multipart/form-data">
                        <input type="hidden" id="edit-pengurus-id" name="id">
                        <div class="form-group">
                            <label for="edit-pengurus-nama">Nama</label>
                            <input type="text" class="form-control" id="edit-pengurus-nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-pengurus-jabatan">Jabatan</label>
                            <input type="text" class="form-control" id="edit-pengurus-jabatan" name="jabatan" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-pengurus-deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="edit-pengurus-deskripsi" name="deskripsi" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="edit-pengurus-user">User (Optional)</label>
                            <select class="form-control" id="edit-pengurus-user" name="user_id">
                                <option value="">-- Pilih User --</option>
                                <!-- Options will be loaded here -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit-pengurus-gambar">Foto</label>
                            <input type="file" class="form-control" id="edit-pengurus-gambar" name="gambar" accept="image/*">
                            <div class="mt-2">
                                <img id="edit-pengurus-gambar-preview" src="" alt="Preview" style="max-width: 100px; max-height: 100px; display: none;">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            fetchPengurus();
            fetchUsersForDropdown();

            // Add event listener for forms
            document.getElementById("add-pengurus-form").addEventListener("submit", addPengurus);
            document.getElementById("edit-pengurus-form").addEventListener("submit", updatePengurus);
        });

        // Fetch Pengurus
        function fetchPengurus() {
            fetch("/api/v1/pengurus")
                .then(response => response.json())
                .then(data => {
                    const tbody = document.querySelector("#pengurus-table tbody");
                    tbody.innerHTML = "";

                    // Sort the pengurus by urutan
                    const sortedPengurus = data.data.sort((a, b) => a.urutan - b.urutan);
                    const totalItems = sortedPengurus.length;

                    sortedPengurus.forEach((pengurus, index) => {
                        // Determine which arrows to show based on position
                        let orderingButtons = '';

                        if (index === 0 && totalItems > 1) {
                            // Top item - only show down arrow
                            orderingButtons = `<button class="btn btn-sm btn-outline-secondary ms-1" onclick="movePengurusDown(${pengurus.id})"><i class="fa fa-arrow-down"></i></button>`;
                        } else if (index === totalItems - 1 && totalItems > 1) {
                            // Bottom item - only show up arrow
                            orderingButtons = `<button class="btn btn-sm btn-outline-secondary me-1" onclick="movePengurusUp(${pengurus.id})"><i class="fa fa-arrow-up"></i></button>`;
                        } else if (totalItems > 1) {
                            // Middle items - show both arrows
                            orderingButtons = `
                        <button class="btn btn-sm btn-outline-secondary me-1" onclick="movePengurusUp(${pengurus.id})"><i class="fa fa-arrow-up"></i></button>
                        <button class="btn btn-sm btn-outline-secondary ms-1" onclick="movePengurusDown(${pengurus.id})"><i class="fa fa-arrow-down"></i></button>
                    `;
                        }

                        const row = `
                <tr>
                    <td>${index + 1}</td>
                    <td>${pengurus.nama}</td>
                    <td>${pengurus.jabatan}</td>
                    <td>${pengurus.deskripsi ? pengurus.deskripsi.substring(0, 50) + (pengurus.deskripsi.length > 50 ? '...' : '') : '-'}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            ${orderingButtons}
                        </div>
                    </td>
                    <td>
                        ${pengurus.gambar ?
                            `<img class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;" src="/storage/${pengurus.gambar}" alt="pengurus"/>` :
                            '-'}
                    </td>
                    <td>
                        <button class="btn btn-sm btn-warning" onclick="openEditPengurusModal(${pengurus.id})"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-sm btn-danger" onclick="deletePengurus(${pengurus.id})"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>`;
                        tbody.innerHTML += row;
                    });
                })
                .catch(error => {
                    console.error("Error fetching pengurus:", error);
                });
        }

        // Move Pengurus Up
        function movePengurusUp(id) {
            console.log(`Moving pengurus ID ${id} up`);
            // Disable all movement buttons to prevent multiple clicks
            const buttons = document.querySelectorAll('button[onclick^="movePengurus"]');
            buttons.forEach(btn => btn.disabled = true);

            // Add loading indicator
            Swal.fire({
                title: 'Moving...',
                text: 'Moving item up one position',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            fetch(`/api/v1/pengurus/${id}/move-up`, {
                method: "POST",
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                }
            })
                .then(response => response.json())
                .then(data => {
                    Swal.close();

                    if (data.success) {
                        // Only refresh the table on success
                        fetchPengurus();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: data.message,
                        });
                        // Re-enable buttons on error
                        buttons.forEach(btn => btn.disabled = false);
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Failed to move pengurus. Please try again.',
                    });
                    // Re-enable buttons on error
                    buttons.forEach(btn => btn.disabled = false);
                });
        }

        // Move Pengurus Down
        function movePengurusDown(id) {
            console.log(`Moving pengurus ID ${id} down`);
            // Disable all movement buttons to prevent multiple clicks
            const buttons = document.querySelectorAll('button[onclick^="movePengurus"]');
            buttons.forEach(btn => btn.disabled = true);

            // Add loading indicator
            Swal.fire({
                title: 'Moving...',
                text: 'Moving item down one position',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            fetch(`/api/v1/pengurus/${id}/move-down`, {
                method: "POST",
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                }
            })
                .then(response => response.json())
                .then(data => {
                    Swal.close();

                    if (data.success) {
                        // Only refresh the table on success
                        fetchPengurus();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: data.message,
                        });
                        // Re-enable buttons on error
                        buttons.forEach(btn => btn.disabled = false);
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Failed to move pengurus. Please try again.',
                    });
                    // Re-enable buttons on error
                    buttons.forEach(btn => btn.disabled = false);
                });
        }

        // Fetch Users for Dropdown
        function fetchUsersForDropdown() {
            fetch("/api/v1/users")
                .then(response => response.json())
                .then(data => {
                    const addDropdown = document.getElementById("pengurus-user");
                    const editDropdown = document.getElementById("edit-pengurus-user");

                    // Clear existing options except the first one
                    addDropdown.innerHTML = '<option value="">-- Pilih User --</option>';
                    editDropdown.innerHTML = '<option value="">-- Pilih User --</option>';

                    // Add new options
                    data.data.forEach(user => {
                        const option = document.createElement("option");
                        option.value = user.id;
                        option.textContent = `${user.name} (${user.email})`;

                        addDropdown.appendChild(option.cloneNode(true));
                        editDropdown.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error("Error fetching users for dropdown:", error);
                });
        }

        // Add Pengurus
        function addPengurus(e) {
            e.preventDefault();
            const form = document.getElementById("add-pengurus-form");
            const formData = new FormData(form);

            fetch("/api/v1/pengurus", {
                method: "POST",
                body: formData,
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error("Network response was not ok.");
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Pengurus added successfully.',
                        }).then(() => {
                            $("#add-pengurus-modal").modal("hide");
                            form.reset();
                            fetchPengurus();
                        });
                    } else {
                        let errorMessage = 'Something went wrong.';
                        if (data.message) {
                            errorMessage = Object.values(data.message).join(', ');
                        }
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: errorMessage,
                        });
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Failed to add pengurus. Please try again.',
                    });
                });
        }

        // Update Pengurus
        function updatePengurus(e) {
            e.preventDefault();
            const form = document.getElementById("edit-pengurus-form");
            const formData = new FormData(form);
            const pengurusId = document.getElementById("edit-pengurus-id").value;

            // Add method-spoofing for Laravel to treat this as PUT request
            formData.append('_method', 'PUT');

            fetch(`/api/v1/pengurus/${pengurusId}`, {
                method: "POST", // Using POST with _method for Laravel
                body: formData,
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Pengurus updated successfully.',
                        }).then(() => {
                            $("#edit-pengurus-modal").modal("hide");
                            fetchPengurus();
                        });
                    } else {
                        let errorMessage = 'Something went wrong.';
                        if (data.message) {
                            errorMessage = Object.values(data.message).join(', ');
                        }
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: errorMessage,
                        });
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Failed to update pengurus. Please try again.',
                    });
                });
        }

        // Delete Pengurus
        function deletePengurus(id) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(`/api/v1/pengurus/${id}`, {
                        method: "DELETE"
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire("Deleted!", "Pengurus has been deleted.", "success");
                                fetchPengurus();
                            } else {
                                Swal.fire("Error!", data.message, "error");
                            }
                        })
                        .catch(error => {
                            Swal.fire("Error!", "Something went wrong.", "error");
                        });
                }
            });
        }

        // Open Edit Pengurus Modal
        function openEditPengurusModal(pengurusId) {
            // Fetch the pengurus data first
            fetch(`/api/v1/pengurus/${pengurusId}`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const pengurus = data.data;

                        document.getElementById("edit-pengurus-id").value = pengurus.id;
                        document.getElementById("edit-pengurus-nama").value = pengurus.nama;
                        document.getElementById("edit-pengurus-jabatan").value = pengurus.jabatan;
                        document.getElementById("edit-pengurus-deskripsi").value = pengurus.deskripsi || '';

                        // Set user if exists
                        if (pengurus.user_id) {
                            document.getElementById("edit-pengurus-user").value = pengurus.user_id;
                        } else {
                            document.getElementById("edit-pengurus-user").value = '';
                        }

                        // Show current photo if exists
                        const photoPreview = document.getElementById("edit-pengurus-gambar-preview");
                        if (pengurus.gambar) {
                            photoPreview.src = `/storage/${pengurus.gambar}`;
                            photoPreview.style.display = "block";
                        } else {
                            photoPreview.style.display = "none";
                        }

                        $("#edit-pengurus-modal").modal("show");
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'Failed to load pengurus data',
                        });
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Failed to load pengurus data. Please try again.',
                    });
                });
        }
    </script>
@endsection
