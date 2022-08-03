@extends('admin.base')

@section('content')
    <div>



        <div class="panel">
            <div class="title">
                <p>Data Harga</p>
                <a class="btn-utama-soft sml rnd " data-bs-toggle="modal" data-bs-target="#modaltambahharga">Harga Baru <i
                        class="material-icons menu-icon ms-2">add_circle</i></a>
            </div>

            <div class="isi">
                <div class="table">
                    <table id="table_piutang" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Asal Kota</th>
                                <th>Ke Kota</th>
                                <th>Harga Per 10Kg</th>
                                <th>Selanjutnya Per 1Kg</th>
                                <th>Estimasi Waktu</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Jakarta</td>
                                <td>Solo</td>
                                <td>10.000</td>
                                <td>2.000</td>
                                <td>2 - 3 Hari</td>
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

        <!-- Modal -->
        <div class="modal fade" id="modaltambahharga" tabindex="-1" aria-labelledby="modaltambahharga" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modaltambahharga">Tambah Harga</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-5 panel">
                                <div class="title">
                                    <p>Kota Asal</p>
                                </div>
                                <div class="isi">
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

                                    <select class="form-select mb-3" aria-label="Default select example">
                                        <option selected>Pilih Kota</option>
                                        <option value="1">Solo</option>
                                        <option value="2">Sukoharjo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center">
                                <i class="material-icons menu-icon">east</i>
                            </div>
                            <div class="col-5 panel">
                                <div class="title">
                                    <p>Kota Tujuan</p>
                                </div>
                                <div class="isi">
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

                                    <select class="form-select mb-3" aria-label="Default select example">
                                        <option selected>Pilih Kota</option>
                                        <option value="1">Solo</option>
                                        <option value="2">Sukoharjo</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="harga10kg" name="harga10kg" placeholder="Jhony">
                            <label for="harga10kg" class="form-label">Harga Per 10Kg</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="harganext" name="harganext" placeholder="Jhony">
                            <label for="harganext" class="form-label">Harga Selanjutnya Per 1Kg</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="estimasi" name="estimasi" placeholder="Jhony">
                            <label for="estimasi" class="form-label">Estimasi Waktu</label>
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
                $('#table_id').DataTable();
                $('#table_piutang').DataTable();
            });
        </script>
    @endsection


    </body>

    </html>
