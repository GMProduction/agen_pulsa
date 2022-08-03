@extends('admin.base')

@section('content')
    <div>



        <div class="panel">
            <div class="title">
                <p>Data Tipe</p>
                <a class="btn-utama-soft sml rnd " data-bs-toggle="modal" data-bs-target="#modaltambahtipe">Tipe Baru <i
                        class="material-icons menu-icon ms-2">add_circle</i></a>
            </div>

            <div class="isi">
                <div class="table">
                    <table id="table_id" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama Tipe</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="select">
                            <tr>
                                <td>Bed</td>
                                <td><img class="" src="{{ asset('images/local/klinik.png') }}" /></td>
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
        <div class="modal fade" id="modaltambahtipe" tabindex="-1" aria-labelledby="modaltambahtipe" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="titlemodaltambahtipe">Tambah Master Tipe</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="namatipe" name="namatipe"
                                placeholder="namatipe">
                            <label for="namatipe" class="form-label">Nama Tipe</label>
                        </div>

                        <div class="mb-3">
                            <label for="fototipe" class="form-label">Foto Tipe</label>
                            <input class="form-control" type="file" id="fototipe">
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
            });
        </script>
    @endsection


    </body>

    </html>
