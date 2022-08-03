@extends('admin.base')

@section('content')
    <div>


        <div class="row">
          

                <div class="panel">
                    <div class="title">
                        <p>Data Transaksi</p>
                      
                    </div>

                    <div class="isi">
                        <div class="table ">
                            <table id="table_stock" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Bukti Pembayaran</th>
                                        <th>Status Pembayaran</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="select">
                                    <tr>
                                        <td>1</td>
                                        <td>12 Juni 2022</td>
                                        <td>Paket Saldo 200.000</td>
                                        <td>180.000</td>
                                        <td>Taufiq Muhajir</td>
                                        <td><a href="{{asset ('images/local/bukti.jpg')}}" target="_blank" ><img src="{{asset ('images/local/bukti.jpg')}}"/></a></td>
                                        <td>diterima</td>
                                        <td class="d-flex">
                                            <a class="btn-success sml rnd me-1">Terima <i
                                                    class="material-icons menu-icon ms-2">check</i></a>
                                            <a class="btn-danger sml rnd ">Tolak <i
                                                    class="material-icons menu-icon ms-2">cross</i></a>
                                        </td>
                                    </tr>
                                  

                                </tbody>

                            </table>
                        </div>
                    </div>

            </div>
        </div>


        <!-- Modal TAMBAH BARANG-->
        <div class="modal fade" id="modaltambahbarang" tabindex="-1" aria-labelledby="modaltambahbarang"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="titlemodaltambahbarang">Tambah Master Barang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="namabarang" name="namabarang"
                                placeholder="namabarang">
                            <label for="namabarang" class="form-label">Nama Barang</label>
                        </div>

                        <div class="mb-3">
                            <label for="fotobarang" class="form-label">Foto Barang</label>
                            <input class="form-control" type="file" id="fotobarang">
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
