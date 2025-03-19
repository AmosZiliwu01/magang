@extends('layouts.main')
@section('title', 'Activity')
@section('content')
    <div class="row">
        <!-- Activity Table -->
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Daftar Kegiatan</h5>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-activity-modal">
                                <i class="fa fa-plus"></i> Tambah
                            </a>
                    </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="activity-table" class="table text-center">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
                                        <th>Lokasi</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-- Activity data will be loaded here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <!-- Activity Type List -->
            <div class="col-12 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">Daftar Jenis Kegiatan</h5>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-activity-type-modal">
                                    <i class="fa fa-plus"></i> Tambah
                                </a>
                            </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="activity-type-table" class="table text-center">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-- Activity Type data will be loaded here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Add Activity Modal -->
    <div class="modal fade" id="add-activity-modal" tabindex="-1" role="dialog" aria-labelledby="addActivityModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addActivityModalLabel">Tambah Kegiatan</h5>
                </div>
                <div class="modal-body">
                    <form id="add-activity-form">
                        <div class="form-group">
                            <label for="activity-type">Jenis Kegiatan</label>
                            <select class="form-control" id="activity-type" name="jenis_kegiatan_id" required>
                                <option value="">-- Pilih Jenis Kegiatan --</option>
                                <!-- Options will be loaded here -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="activity-category">Kategori</label>
                            <select class="form-control" id="activity-category" name="kategori_id" required>
                                <option value="">-- Pilih Kategori --</option>
                                <!-- Options will be loaded here -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="activity-title">Judul</label>
                            <input type="text" class="form-control" id="activity-title" name="judul" required>
                        </div>
                        <div class="form-group">
                            <label for="activity-description">Deskripsi</label>
                            <textarea class="form-control" id="activity-description" name="deskripsi" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="activity-start-date">Tanggal Mulai</label>
                            <input type="date" class="form-control" id="activity-start-date" name="tanggal_mulai" required>
                        </div>
                        <div class="form-group">
                            <label for="activity-end-date">Tanggal Selesai</label>
                            <input type="date" class="form-control" id="activity-end-date" name="tanggal_selesai" required>
                        </div>
                        <div class="form-group">
                            <label for="activity-location">Lokasi</label>
                            <input type="text" class="form-control" id="activity-location" name="lokasi" required>
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

    <!-- Edit Activity Modal -->
    <div class="modal fade" id="edit-activity-modal" tabindex="-1" role="dialog" aria-labelledby="editActivityModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editActivityModalLabel">Edit Kegiatan</h5>
                </div>
                <div class="modal-body">
                    <form id="edit-activity-form">
                        <input type="hidden" id="edit-activity-id" name="id">
                        <div class="form-group">
                            <label for="edit-activity-type">Jenis Kegiatan</label>
                            <select class="form-control" id="edit-activity-type" name="jenis_kegiatan_id" required>
                                <option value="">-- Pilih Jenis Kegiatan --</option>
                                <!-- Options will be loaded here -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit-activity-category">Kategori</label>
                            <select class="form-control" id="edit-activity-category" name="kategori_id" required>
                                <option value="">-- Pilih Kategori --</option>
                                <!-- Options will be loaded here -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit-activity-title">Judul</label>
                            <input type="text" class="form-control" id="edit-activity-title" name="judul" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-activity-description">Deskripsi</label>
                            <textarea class="form-control" id="edit-activity-description" name="deskripsi" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="edit-activity-start-date">Tanggal Mulai</label>
                            <input type="date" class="form-control" id="edit-activity-start-date" name="tanggal_mulai" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-activity-end-date">Tanggal Selesai</label>
                            <input type="date" class="form-control" id="edit-activity-end-date" name="tanggal_selesai" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-activity-location">Lokasi</label>
                            <input type="text" class="form-control" id="edit-activity-location" name="lokasi" required>
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

    <!-- Add Activity Type Modal -->
    <div class="modal fade" id="add-activity-type-modal" tabindex="-1" role="dialog" aria-labelledby="addActivityTypeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addActivityTypeModalLabel">Tambah Jenis Kegiatan</h5>
                </div>
                <div class="modal-body">
                    <form id="add-activity-type-form">
                        <div class="form-group">
                            <label for="activity-type-name">Nama</label>
                            <input type="text" class="form-control" id="activity-type-name" name="nama" required>
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

    <!-- Edit Activity Type Modal -->
    <div class="modal fade" id="edit-activity-type-modal" tabindex="-1" role="dialog" aria-labelledby="editActivityTypeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editActivityTypeModalLabel">Edit Jenis Kegiatan</h5>
                </div>
                <div class="modal-body">
                    <form id="edit-activity-type-form">
                        <input type="hidden" id="edit-activity-type-id" name="id">
                        <div class="form-group">
                            <label for="edit-activity-type-name">Nama</label>
                            <input type="text" class="form-control" id="edit-activity-type-name" name="nama" required>
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
            fetchActivities();
            fetchActivityTypes();
            fetchActivityTypesForDropdown();
            fetchCategoriesForDropdown();

            // Add event listener for forms
            document.getElementById("add-activity-form").addEventListener("submit", addActivity);
            document.getElementById("add-activity-type-form").addEventListener("submit", addActivityType);
            document.getElementById("edit-activity-form").addEventListener("submit", updateActivity);
            document.getElementById("edit-activity-type-form").addEventListener("submit", updateActivityType);
        });

        // Fetch Activities
        function fetchActivities() {
            fetch("/api/v1/kegiatan")
                .then(response => response.json())
                .then(data => {
                    const tbody = document.querySelector("#activity-table tbody");
                    tbody.innerHTML = "";
                    data.data.forEach((activity, index) => {
                        const row = `
                <tr>
                    <td>${index + 1}</td>
                    <td>${activity.judul}</td>
                    <td>${activity.deskripsi.substring(0, 50)}${activity.deskripsi.length > 50 ? '...' : ''}</td>
                    <td>${new Date(activity.tanggal_mulai).toLocaleDateString()}</td>
                    <td>${new Date(activity.tanggal_selesai).toLocaleDateString()}</td>
                    <td>${activity.lokasi}</td>
                    <td>
                        <button class="btn btn-sm btn-warning" onclick="openEditActivityModal(${JSON.stringify(activity).replace(/"/g, '&quot;')})"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-sm btn-danger" onclick="deleteActivity(${activity.id})"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>`;
                        tbody.innerHTML += row;
                    });
                })
                .catch(error => {
                    console.error("Error fetching activities:", error);
                });
        }

        // Fetch Activity Types
        function fetchActivityTypes() {
            fetch("/api/v1/jenis_kegiatan")
                .then(response => response.json())
                .then(data => {
                    const tbody = document.querySelector("#activity-type-table tbody");
                    tbody.innerHTML = "";
                    data.data.forEach((type, index) => {
                        const row = `
                <tr>
                    <td>${index + 1}</td>
                    <td>${type.nama}</td>
                    <td>
                        <button class="btn btn-sm btn-warning" onclick="openEditActivityTypeModal(${JSON.stringify(type).replace(/"/g, '&quot;')})"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-sm btn-danger" onclick="deleteActivityType(${type.id})"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>`;
                        tbody.innerHTML += row;
                    });
                })
                .catch(error => {
                    console.error("Error fetching activity types:", error);
                });
        }

        // Fetch Activity Types for Dropdown
        function fetchActivityTypesForDropdown() {
            fetch("/api/v1/jenis_kegiatan")
                .then(response => response.json())
                .then(data => {
                    const dropdown = document.getElementById("activity-type");
                    const editDropdown = document.getElementById("edit-activity-type");
                    dropdown.innerHTML = '<option value="">-- Pilih Jenis Kegiatan --</option>';
                    editDropdown.innerHTML = '<option value="">-- Pilih Jenis Kegiatan --</option>';
                    data.data.forEach(type => {
                        const option = document.createElement("option");
                        option.value = type.id;
                        option.textContent = type.nama;
                        dropdown.appendChild(option.cloneNode(true));
                        editDropdown.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error("Error fetching activity types for dropdown:", error);
                });
        }

        // Fetch Categories for Dropdown
        function fetchCategoriesForDropdown() {
            fetch("/api/v1/kategori")
                .then(response => response.json())
                .then(data => {
                    const dropdown = document.getElementById("activity-category");
                    const editDropdown = document.getElementById("edit-activity-category");
                    dropdown.innerHTML = '<option value="">-- Pilih Kategori --</option>';
                    editDropdown.innerHTML = '<option value="">-- Pilih Kategori --</option>';
                    data.data.forEach(category => {
                        const option = document.createElement("option");
                        option.value = category.id;
                        option.textContent = category.nama;
                        dropdown.appendChild(option.cloneNode(true));
                        editDropdown.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error("Error fetching categories for dropdown:", error);
                });
        }

        // Add Activity
        function addActivity(e) {
            e.preventDefault();
            const formData = new FormData(document.getElementById("add-activity-form"));
            console.log("Form Add Activity Submitted"); // Debugging
            console.log("Form Data:", Array.from(formData.entries())); // Debugging

            fetch("/api/v1/kegiatan", {
                method: "POST",
                body: new URLSearchParams(formData),
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
            })
                .then(response => {
                    console.log("Raw Response:", response); // Debugging
                    if (!response.ok) {
                        throw new Error("Network response was not ok.");
                    }
                    return response.json();
                })
                .then(data => {
                    console.log("Parsed Data:", data); // Debugging
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Activity added successfully.',
                        }).then(() => {
                            $("#add-activity-modal").modal("hide"); // Close modal after SweetAlert is closed
                            document.getElementById("add-activity-form").reset();
                            fetchActivities(); // Refresh Activity table
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
                    console.error("Error:", error); // Debugging
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Failed to add activity. Please try again.',
                    });
                });
        }

        // Add Activity Type
        function addActivityType(e) {
            e.preventDefault();
            const formData = new FormData(document.getElementById("add-activity-type-form"));
            console.log("Form Data:", Array.from(formData.entries())); // Debugging

            fetch("/api/v1/jenis_kegiatan", {
                method: "POST",
                body: new URLSearchParams(formData),
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
            })
                .then(response => {
                    console.log("Raw Response:", response); // Debugging
                    if (!response.ok) {
                        throw new Error("Network response was not ok.");
                    }
                    return response.json();
                })
                .then(data => {
                    console.log("Parsed Data:", data); // Debugging
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Activity Type added successfully.',
                        }).then(() => {
                            $("#add-activity-type-modal").modal("hide"); // Close modal after SweetAlert is closed
                            document.getElementById("add-activity-type-form").reset();
                            fetchActivityTypes(); // Refresh Activity Type table
                            fetchActivityTypesForDropdown(); // Refresh dropdown options
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
                    console.error("Error:", error); // Debugging
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Failed to add activity type. Please try again.',
                    });
                });
        }

        // Update Activity
        function updateActivity(e) {
            e.preventDefault();
            const formData = new FormData(document.getElementById("edit-activity-form"));
            const activityId = document.getElementById("edit-activity-id").value;
            console.log("Form Edit Activity Submitted"); // Debugging

            fetch(`/api/v1/kegiatan/${activityId}`, {
                method: "PUT",
                body: new URLSearchParams(formData),
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
            })
                .then(response => response.json())
                .then(data => {
                    console.log("Response Data:", data); // Debugging
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Activity updated successfully.',
                        });
                        fetchActivities();
                        $("#edit-activity-modal").modal("hide");
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
                    console.error("Error:", error); // Debugging
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Failed to update activity. Please try again.',
                    });
                });
        }

        // Update Activity Type
        function updateActivityType(e) {
            e.preventDefault();
            const formData = new FormData(document.getElementById("edit-activity-type-form"));
            const activityTypeId = document.getElementById("edit-activity-type-id").value;
            console.log("Form Edit Activity Type Submitted"); // Debugging

            fetch(`/api/v1/jenis_kegiatan/${activityTypeId}`, {
                method: "PUT",
                body: new URLSearchParams(formData),
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
            })
                .then(response => response.json())
                .then(data => {
                    console.log("Response Data:", data); // Debugging
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Activity Type updated successfully.',
                        });
                        fetchActivityTypes();
                        $("#edit-activity-type-modal").modal("hide");
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
                    console.error("Error:", error); // Debugging
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Failed to update activity type. Please try again.',
                    });
                });
        }

        // Delete Activity
        function deleteActivity(id) {
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
                    fetch(`/api/v1/kegiatan/${id}`, {
                        method: "DELETE"
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire("Deleted!", "Activity has been deleted.", "success");
                                fetchActivities();
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

        // Delete Activity Type
        function deleteActivityType(id) {
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
                    fetch(`/api/v1/jenis_kegiatan/${id}`, {
                        method: "DELETE"
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire("Deleted!", "Activity Type has been deleted.", "success");
                                fetchActivityTypes();
                                fetchActivityTypesForDropdown(); // Refresh dropdown options after deletion
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

        // Open Edit Activity Modal
        function openEditActivityModal(activity) {
            if (typeof activity === 'string') {
                activity = JSON.parse(activity);
            }

            document.getElementById("edit-activity-id").value = activity.id;
            document.getElementById("edit-activity-type").value = activity.jenis_kegiatan_id;
            document.getElementById("edit-activity-category").value = activity.kategori_id;
            document.getElementById("edit-activity-title").value = activity.judul;
            document.getElementById("edit-activity-description").value = activity.deskripsi;
            document.getElementById("edit-activity-start-date").value = activity.tanggal_mulai;
            document.getElementById("edit-activity-end-date").value = activity.tanggal_selesai;
            document.getElementById("edit-activity-location").value = activity.lokasi;

            $("#edit-activity-modal").modal("show");
        }

        // Open Edit Activity Type Modal
        function openEditActivityTypeModal(activityType) {
            if (typeof activityType === 'string') {
                activityType = JSON.parse(activityType);
            }

            document.getElementById("edit-activity-type-id").value = activityType.id;
            document.getElementById("edit-activity-type-name").value = activityType.nama;

            $("#edit-activity-type-modal").modal("show");
        }
    </script>
@endsection
