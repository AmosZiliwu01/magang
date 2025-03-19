@extends('layouts.main')
@section('title', 'Category')
@section('content')
    <div class="row">
        <!-- Category Table -->
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Category</h5>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-category-modal">
                            <i class="fa fa-plus"></i> Tambah
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-center" id="category-table">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- Data will be populated by JavaScript -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Category Type Table -->
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Category Type</h5>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-category-type-modal">
                            <i class="fa fa-plus"></i> Tambah
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-center" id="category-type-table">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Category -->
    <div class="modal fade" id="add-category-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Category</h5>
                </div>
                <div class="modal-body">
                    <form id="add-category-form">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="category-name">Name</label>
                            <input type="text" class="form-control" id="category-name" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="category-type">Category Type</label>
                            <select class="form-control" id="category-type" name="jenis_kategori_id" required>
                                <option value="">-- Pilih Category Type --</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Category Type -->
    <div class="modal fade" id="add-category-type-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Category Type</h5>
                </div>
                <div class="modal-body">
                    <form id="add-category-type-form">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="category-type-name">Name</label>
                            <input type="text" class="form-control" id="category-type-name" name="nama" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Category -->
    <div class="modal fade" id="edit-category-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                </div>
                <div class="modal-body">
                    <form id="edit-category-form">
                        @csrf
                        <input type="hidden" id="edit-category-id" name="id">
                        <div class="form-group mb-3">
                            <label for="edit-category-name">Name</label>
                            <input type="text" class="form-control" id="edit-category-name" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-category-type">Category Type</label>
                            <select class="form-control" id="edit-category-type" name="jenis_kategori_id" required>
                                <option value="">-- Pilih Category Type --</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Category Type -->
    <div class="modal fade" id="edit-category-type-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Category Type</h5>
                </div>
                <div class="modal-body">
                    <form id="edit-category-type-form">
                        @csrf
                        <input type="hidden" id="edit-category-type-id" name="id">
                        <div class="form-group mb-3">
                            <label for="edit-category-type-name">Name</label>
                            <input type="text" class="form-control" id="edit-category-type-name" name="nama" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            fetchCategories();
            fetchCategoryTypes();
            fetchCategoryTypesForDropdown();

            // Add event listener for forms
            document.getElementById("add-category-form").addEventListener("submit", addCategory);
            document.getElementById("add-category-type-form").addEventListener("submit", addCategoryType);
            document.getElementById("edit-category-form").addEventListener("submit", updateCategory);
            document.getElementById("edit-category-type-form").addEventListener("submit", updateCategoryType);
        });

        // Fetch Categories
        function fetchCategories() {
            fetch("/api/v1/kategori")
                .then(response => response.json())
                .then(data => {
                    const tbody = document.querySelector("#category-table tbody");
                    tbody.innerHTML = "";
                    data.data.forEach((category, index) => {
                        const row = `
                <tr>
                    <td>${index + 1}</td>
                    <td>${category.nama}</td>
                    <td>${category.jenis_kategori.nama}</td>
                    <td>
                        <button class="btn btn-sm btn-warning" onclick="openEditCategoryModal(${JSON.stringify(category).replace(/"/g, '&quot;')})"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-sm btn-danger" onclick="deleteCategory(${category.id})"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>`;
                        tbody.innerHTML += row;
                    });
                })
                .catch(error => {
                    console.error("Error fetching categories:", error);
                });
        }

        // Fetch Category Types
        function fetchCategoryTypes() {
            fetch("/api/v1/jenis_kategori")
                .then(response => response.json())
                .then(data => {
                    const tbody = document.querySelector("#category-type-table tbody");
                    tbody.innerHTML = "";
                    data.data.forEach((type, index) => {
                        const row = `
                <tr>
                    <td>${index + 1}</td>
                    <td>${type.nama}</td>
                    <td>
                        <button class="btn btn-sm btn-warning" onclick="openEditCategoryTypeModal(${JSON.stringify(type).replace(/"/g, '&quot;')})"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-sm btn-danger" onclick="deleteCategoryType(${type.id})"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>`;
                        tbody.innerHTML += row;
                    });
                })
                .catch(error => {
                    console.error("Error fetching category types:", error);
                });
        }

        // Fetch Category Types for Dropdown
        function fetchCategoryTypesForDropdown() {
            fetch("/api/v1/jenis_kategori")
                .then(response => response.json())
                .then(data => {
                    const dropdown = document.getElementById("category-type");
                    const editDropdown = document.getElementById("edit-category-type");
                    dropdown.innerHTML = '<option value="">-- Pilih Category Type --</option>';
                    editDropdown.innerHTML = '<option value="">-- Pilih Category Type --</option>';
                    data.data.forEach(type => {
                        const option = document.createElement("option");
                        option.value = type.id;
                        option.textContent = type.nama;
                        dropdown.appendChild(option.cloneNode(true));
                        editDropdown.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error("Error fetching category types for dropdown:", error);
                });
        }

        // Add Category
        function addCategory(e) {
            e.preventDefault();
            const formData = new FormData(document.getElementById("add-category-form"));
            console.log("Form Add Category Submitted"); // Debugging
            console.log("Form Data:", Array.from(formData.entries())); // Debugging

            fetch("/api/v1/kategori", {
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
                            text: 'Category added successfully.',
                        }).then(() => {
                            $("#add-category-modal").modal("hide"); // Close modal after SweetAlert is closed
                            document.getElementById("add-category-form").reset();
                            fetchCategories(); // Refresh Category table
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
                        text: 'Failed to add category. Please try again.',
                    });
                });
        }

        // Add Category Type
        function addCategoryType(e) {
            e.preventDefault();
            const formData = new FormData(document.getElementById("add-category-type-form"));
            console.log("Form Data:", Array.from(formData.entries())); // Debugging

            fetch("/api/v1/jenis_kategori", {
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
                            text: 'Category Type added successfully.',
                        }).then(() => {
                            $("#add-category-type-modal").modal("hide"); // Close modal after SweetAlert is closed
                            document.getElementById("add-category-type-form").reset();
                            fetchCategoryTypes(); // Refresh Category Type table
                            fetchCategoryTypesForDropdown(); // Refresh dropdown options
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
                        text: 'Failed to add category type. Please try again.',
                    });
                });
        }

        // Update Category
        function updateCategory(e) {
            e.preventDefault();
            const formData = new FormData(document.getElementById("edit-category-form"));
            const categoryId = document.getElementById("edit-category-id").value;
            console.log("Form Edit Category Submitted"); // Debugging

            fetch(`/api/v1/kategori/${categoryId}`, {
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
                            text: 'Category updated successfully.',
                        });
                        fetchCategories();
                        $("#edit-category-modal").modal("hide");
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
                        text: 'Failed to update category. Please try again.',
                    });
                });
        }

        // Update Category Type
        function updateCategoryType(e) {
            e.preventDefault();
            const formData = new FormData(document.getElementById("edit-category-type-form"));
            const categoryTypeId = document.getElementById("edit-category-type-id").value;
            console.log("Form Edit Category Type Submitted"); // Debugging

            fetch(`/api/v1/jenis_kategori/${categoryTypeId}`, {
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
                            text: 'Category Type updated successfully.',
                        });
                        fetchCategoryTypes();
                        $("#edit-category-type-modal").modal("hide");
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
                        text: 'Failed to update category type. Please try again.',
                    });
                });
        }

        // Delete Category
        function deleteCategory(id) {
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
                    fetch(`/api/v1/kategori/${id}`, {
                        method: "DELETE"
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire("Deleted!", "Category has been deleted.", "success");
                                fetchCategories();
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

        // Delete Category Type
        function deleteCategoryType(id) {
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
                    fetch(`/api/v1/jenis_kategori/${id}`, {
                        method: "DELETE"
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire("Deleted!", "Category Type has been deleted.", "success");
                                fetchCategoryTypes();
                                fetchCategoryTypesForDropdown(); // Refresh dropdown options after deletion
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

        // Open Edit Category Modal
        function openEditCategoryModal(category) {
            if (typeof category === 'string') {
                category = JSON.parse(category);
            }

            document.getElementById("edit-category-id").value = category.id;
            document.getElementById("edit-category-name").value = category.nama;
            document.getElementById("edit-category-type").value = category.jenis_kategori_id;

            $("#edit-category-modal").modal("show");
        }

        // Open Edit Category Type Modal
        function openEditCategoryTypeModal(categoryType) {
            if (typeof categoryType === 'string') {
                categoryType = JSON.parse(categoryType);
            }

            document.getElementById("edit-category-type-id").value = categoryType.id;
            document.getElementById("edit-category-type-name").value = categoryType.nama;

            $("#edit-category-type-modal").modal("show");
        }
    </script>
@endsection
