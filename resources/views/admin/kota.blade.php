@extends('admin.base')

@section('content')
    <div>



        <div class="row">
            <div class="col-4">
                <div class="panel">
                    <div class="title">
                        <p>Data Negara</p>
                        <a class="btn-utama-soft sml rnd " data-bs-toggle="modal" data-bs-target="#modaltambahnegara">Data
                            Negara Baru
                            <i class="material-icons menu-icon ms-2">add_circle</i></a>
                    </div>

                    <div class="isi">
                        <div class="table">
                            <table id="table_negara" class="table table-striped enselect" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nama Negara</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Indonesia</td>
                                        <td class="d-flex">
                                            <a class="btn-success sml rnd me-1">Edit <i
                                                    class="material-icons menu-icon ms-2">edit</i></a>
                                            <a class="btn-danger sml rnd ">Hapus <i
                                                    class="material-icons menu-icon ms-2">delete</i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Mamarika</td>
                                        <td class="d-flex">
                                            <a class="btn-success sml rnd me-1">Edit <i
                                                    class="material-icons menu-icon ms-2">edit</i></a>
                                            <a class="btn-danger sml rnd ">Hapus <i
                                                    class="material-icons menu-icon ms-2">delete</i></a>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-4">
                <div class="panel">
                    <div class="title">
                        <p>Data Provinsi</p>
                        <a class="btn-utama-soft sml rnd " data-bs-toggle="modal" data-bs-target="#modaltambahprovinsi">Data
                            Provinsi
                            Baru <i class="material-icons menu-icon ms-2">add_circle</i></a>
                    </div>

                    <div class="isi">
                        <div class="table">
                            <table id="table_provinsi" class="table table-striped enselect" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Provinsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Jawa Tengah</td>
                                        <td class="d-flex">
                                            <a class="btn-success sml rnd me-1">Edit <i
                                                    class="material-icons menu-icon ms-2">edit</i></a>
                                            <a class="btn-danger sml rnd ">Hapus <i
                                                    class="material-icons menu-icon ms-2">delete</i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="panel">
                    <div class="title">
                        <p>Data Kota</p>
                        <a class="btn-utama-soft sml rnd " data-bs-toggle="modal" data-bs-target="#modaltambahkota">Data
                            Kota
                            Baru <i class="material-icons menu-icon ms-2">add_circle</i></a>
                    </div>

                    <div class="isi">
                        <div class="table">
                            <table id="table_kota" class="table table-striped " style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nama Kota</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Solo</td>
                                        <td class="d-flex">
                                            <a class="btn-success sml rnd me-1">Edit <i
                                                    class="material-icons menu-icon ms-2">edit</i></a>
                                            <a class="btn-danger sml rnd ">Hapus <i
                                                    class="material-icons menu-icon ms-2">delete</i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="modaltambahnegara" tabindex="-1" aria-labelledby="modaltambahnegara"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="titlemodaltambahnegara">Tambah Negara</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Jhony">
                            <label for="nama" class="form-label">Nama Negara</label>
                        </div>

                    </div>

                    <div class=" m-3">

                        <div class="text-center">
                            <a class="btn-utama">Simpan</a>
                        </div>


                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="modaltambahprovinsi" tabindex="-1" aria-labelledby="modaltambahprovinsi"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="titlemodaltambahprovinsi">Tambah Provinsi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>Pilih Negara</option>
                            <option value="1">Indonesia</option>
                            <option value="2">Mamarika</option>
                        </select>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Jhony">
                            <label for="nama" class="form-label">Nama Provinsi</label>
                        </div>

                    </div>

                    <div class=" m-3">

                        <div class="text-center">
                            <a class="btn-utama">Simpan</a>
                        </div>


                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="modaltambahkota" tabindex="-1" aria-labelledby="modaltambahkota"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="titlemodaltambahkota">Tambah Provinsi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>Pilih Negara</option>
                            <option value="1">Indonesia</option>
                            <option value="2">Mamarika</option>
                        </select>

                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>Pilih Provinsi</option>
                            <option value="1">Jawa Tengah</option>
                            <option value="2">Jawa Barat</option>
                        </select>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Jhony">
                            <label for="nama" class="form-label">Nama Provinsi</label>
                        </div>

                    </div>

                    <div class=" m-3">

                        <div class="text-center">
                            <a class="btn-utama">Simpan</a>
                        </div>


                    </div>

                </div>
            </div>
        </div>

    @endsection

    @section('morejs')
        <script src="{{ asset('js/number_formater.js') }}"></script>

        <script>
            $(document).ready(function() {
                $('#table_negara').DataTable({
                    select: {
                        style: 'single'
                    }
                });
                $('#table_provinsi').DataTable({
                    select: {
                        style: 'single'
                    }
                });
                $('#table_kota').DataTable();
            });
        </script>
    @endsection


    </body>

    </html>
