@extends('admin.base')

@section('content')
    <div>


        <div class="row">
                <div class="panel">
                    <div class="title">
                        <p>Data Produk</p>
                        <a class="btn-utama-soft  rnd " data-bs-toggle="modal" data-bs-target="#modaltambahproduk">Tambah
                            Produk
                            <i class="material-icons menu-icon ms-2">add_circle</i></a>
                    </div>

                    <div class="isi">
                        <div class="table">
                            <table id="table_produk" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th>Gambar</th>
                                        <th>Provider</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="select">
                                    <tr>
                                        <td>Bed</td>
                                        <td>10000</td>
                                        <td><img class="" src="{{ asset('images/local/klinik.png') }}" /></td>
                                        <td>XL</td>
                                        <td class="d-flex">
                                            <a class="btn-success sml rnd me-1">Edit <i
                                                    class="material-icons menu-icon ms-2">edit</i></a>
                                            {{-- <a class="btn-accent sml rnd ">Tambah Stock <i
                                                    class="material-icons menu-icon ms-2">note_add</i></a> --}}
                                        </td>
                                    </tr>


                                </tbody>

                            </table>
                        </div>

                </div>


            </div>

          
        </div>


        <!-- Modal TAMBAH BARANG-->
        <div class="modal fade" id="modaltambahproduk" tabindex="-1" aria-labelledby="modaltambahproduk"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="titlemodaltambahproduk">Tambah Master Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="namaproduk" name="namaproduk"
                                placeholder="namaproduk">
                            <label for="namaproduk" class="form-label">Nama Produk</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="harga" name="harga"
                                placeholder="harga">
                            <label for="harga" class="form-label">Harga</label>
                        </div>

                        <select class="form-select mb-3" >
                            <option selected>Pilih Provider</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>

                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar Produk</label>
                            <input class="form-control" type="file" id="gambar">
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

        <script>
            $(document).ready(function() {
                $('#table_id').DataTable();
                
            });
        </script>
    @endsection


    </body>

    </html>
