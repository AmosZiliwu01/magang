@extends('layouts.main')
@section('title', 'Gallery')
@section('content')
    <div class="row">
        <!-- Gallery Table -->
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title">Daftar Gallery</h5>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-gallery-modal">
                            <i class="fa fa-plus"></i> Tambah
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="gallery-table" class="table text-center">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Kategori</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- Gallery data will be loaded here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Gallery Modal -->
    <div class="modal fade" id="add-gallery-modal" tabindex="-1" role="dialog" aria-labelledby="addGalleryModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addGalleryModalLabel">Tambah Gallery</h5>
                </div>
                <div class="modal-body">
                    <form id="add-gallery-form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="gallery-judul">Judul</label>
                            <input type="text" class="form-control" id="gallery-judul" name="judul" required>
                        </div>
                        <div class="form-group">
                            <label for="gallery-deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="gallery-deskripsi" name="deskripsi" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="gallery-kategori">Kategori</label>
                            <select class="form-control" id="gallery-kategori" name="kategori_id">
                                <option value="">-- Pilih Kategori --</option>
                                <!-- Options will be loaded here -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gallery-gambar">Gambar</label>
                            <input type="file" class="form-control" id="gallery-gambar" name="gambar" accept="image/*">
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

    <!-- Edit Gallery Modal -->
    <div class="modal fade" id="edit-gallery-modal" tabindex="-1" role="dialog" aria-labelledby="editGalleryModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editGalleryModalLabel">Edit Gallery</h5>
                </div>
                <div class="modal-body">
                    <form id="edit-gallery-form" enctype="multipart/form-data">
                        <input type="hidden" id="edit-gallery-id" name="id">
                        <div class="form-group">
                            <label for="edit-gallery-judul">Judul</label>
                            <input type="text" class="form-control" id="edit-gallery-judul" name="judul" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-gallery-deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="edit-gallery-deskripsi" name="deskripsi" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="edit-gallery-kategori">Kategori</label>
                            <select class="form-control" id="edit-gallery-kategori" name="kategori_id">
                                <option value="">-- Pilih Kategori --</option>
                                <!-- Options will be loaded here -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit-gallery-gambar">Gambar</label>
                            <input type="file" class="form-control" id="edit-gallery-gambar" name="gambar" accept="image/*">
                            <div class="mt-2">
                                <img id="edit-gallery-gambar-preview" src="" alt="Preview" style="max-width: 100px; max-height: 100px; display: none;">
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
            fetchGallery();
            fetchKategoriForDropdown();

            // Add event listener for forms
            document.getElementById("add-gallery-form").addEventListener("submit", addGallery);
            document.getElementById("edit-gallery-form").addEventListener("submit", updateGallery);
        });

        // Fetch Gallery
        function fetchGallery() {
            fetch("/api/v1/galeri")
                .then(response => response.json())
                .then(data => {
                    const tbody = document.querySelector("#gallery-table tbody");
                    tbody.innerHTML = "";
                    data.data.forEach((gallery, index) => {
                        const row = `
                <tr>
                    <td>${index + 1}</td>
                    <td>${gallery.judul}</td>
                    <td>${gallery.deskripsi ? gallery.deskripsi.substring(0, 50) + (gallery.deskripsi.length > 50 ? '...' : '') : '-'}</td>
                    <td>${gallery.kategori ? gallery.kategori.nama : '-'}</td>
                    <td>
                        ${gallery.gambar ?
                            `<img style="width: 100px; height: auto;" src="/storage/${gallery.gambar}" alt="gallery"/>` :
                            '-'}
                    </td>
                    <td>
                        <button class="btn btn-sm btn-warning" onclick="openEditGalleryModal(${gallery.id})"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-sm btn-danger" onclick="deleteGallery(${gallery.id})"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>`;
                        tbody.innerHTML += row;
                    });
                })
                .catch(error => {
                    console.error("Error fetching gallery:", error);
                });
        }

        // Fetch Kategori for Dropdown
        function fetchKategoriForDropdown() {
            fetch("/api/v1/kategori")
                .then(response => response.json())
                .then(data => {
                    const addDropdown = document.getElementById("gallery-kategori");
                    const editDropdown = document.getElementById("edit-gallery-kategori");

                    // Clear existing options except the first one
                    addDropdown.innerHTML = '<option value="">-- Pilih Kategori --</option>';
                    editDropdown.innerHTML = '<option value="">-- Pilih Kategori --</option>';

                    // Add new options
                    data.data.forEach(kategori => {
                        const option = document.createElement("option");
                        option.value = kategori.id;
                        option.textContent = kategori.nama;

                        addDropdown.appendChild(option.cloneNode(true));
                        editDropdown.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error("Error fetching kategori for dropdown:", error);
                });
        }

        // Add Gallery
        function addGallery(e) {
            e.preventDefault();
            const form = document.getElementById("add-gallery-form");
            const formData = new FormData(form);

            fetch("/api/v1/galeri", {
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
                            text: 'Gallery added successfully.',
                        }).then(() => {
                            $("#add-gallery-modal").modal("hide");
                            form.reset();
                            fetchGallery();
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
                        text: 'Failed to add gallery. Please try again.',
                    });
                });
        }

        // Update Gallery
        function updateGallery(e) {
            e.preventDefault();
            const form = document.getElementById("edit-gallery-form");
            const formData = new FormData(form);
            const galleryId = document.getElementById("edit-gallery-id").value;

            // Add method-spoofing for Laravel to treat this as PUT request
            formData.append('_method', 'PUT');

            fetch(`/api/v1/galeri/${galleryId}`, {
                method: "POST", // Using POST with _method for Laravel
                body: formData,
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Gallery updated successfully.',
                        }).then(() => {
                            $("#edit-gallery-modal").modal("hide");
                            fetchGallery();
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
                        text: 'Failed to update gallery. Please try again.',
                    });
                });
        }

        // Delete Gallery
        function deleteGallery(id) {
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
                    fetch(`/api/v1/galeri/${id}`, {
                        method: "DELETE"
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire("Deleted!", "Gallery has been deleted.", "success");
                                fetchGallery();
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

        // Open Edit Gallery Modal
        function openEditGalleryModal(galleryId) {
            fetch(`/api/v1/galeri/${galleryId}`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const gallery = data.data;

                        document.getElementById("edit-gallery-id").value = gallery.id;
                        document.getElementById("edit-gallery-judul").value = gallery.judul;
                        document.getElementById("edit-gallery-deskripsi").value = gallery.deskripsi || '';

                        // Set kategori if exists
                        if (gallery.kategori_id) {
                            document.getElementById("edit-gallery-kategori").value = gallery.kategori_id;
                        } else {
                            document.getElementById("edit-gallery-kategori").value = '';
                        }

                        // Show current photo if exists
                        const photoPreview = document.getElementById("edit-gallery-gambar-preview");
                        if (gallery.gambar) {
                            photoPreview.src = `/storage/${gallery.gambar}`;
                            photoPreview.style.display = "block";
                        } else {
                            photoPreview.style.display = "none";
                        }

                        $("#edit-gallery-modal").modal("show");
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'Failed to load gallery data',
                        });
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Failed to load gallery data. Please try again.',
                    });
                });
        }
    </script>
@endsection
