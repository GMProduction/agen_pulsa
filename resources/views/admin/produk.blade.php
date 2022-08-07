@extends('admin.base')

@section('content')


    <div class="row">
        <div class="panel">
            <div class="title">
                <p>Data Produk</p>
                <a class="btn-utama-soft  rnd " id="addData">Tambah
                    Produk
                    <i class="material-icons menu-icon ms-2">add_circle</i></a>
            </div>

            <div class="isi">
                <div class="table">
                    <table id="table_id" class="table table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Nominal Saldo</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody class="select">
                        @forelse($data as $d)
                            <tr>
                                <td>{{$d->nama_produk}}</td>
                                <td>{{number_format($d->harga)}}</td>
                                <td>{{number_format($d->nilai)}}</td>
                                <td><img class="" src="{{ asset($d->gambar) }}"/></td>
                                <td>
                                    <div class="d-flex">
                                        <a class="btn-success sml rnd me-1" id="editData" data-id="{{$d->id}}" data-gambar="{{$d->gambar}}" data-harga="{{$d->harga}}" data-nama="{{$d->nama_produk}}">Edit
                                            <i
                                                class="material-icons menu-icon ms-2">edit</i></a>
                                        {{-- <a class="btn-accent sml rnd ">Tambah Stock <i
                                                class="material-icons menu-icon ms-2">note_add</i></a> --}}
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Tidak ada data</td>
                            </tr>
                        @endforelse


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
                <form id="form" onsubmit="return Simpan()" enctype="multipart/form-data">
                    @csrf
                    <input name="id" id="id" hidden>
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control textForm" id="nama_produk" name="nama_produk"
                                   placeholder="namaproduk">
                            <label for="namaproduk" class="form-label">Nama Produk</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control textForm" id="nilai" name="nilai"
                                   placeholder="Nominal Saldo">
                            <label for="harga" class="form-label">Nominal Saldo</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="number" class="form-control textForm" id="harga" name="harga"
                                   placeholder="harga">
                            <label for="harga" class="form-label">Harga</label>
                        </div>

                        <div class="mb-3">
                            <label for="gambar" class="form-label ">Gambar Produk</label>
                            <input class="form-control textForm" type="file" id="gambar" name="gambar">
                        </div>
                    </div>
                    <div class=" m-3">
                        <div class="text-center">
                            <button type="submit" class="btn-utama">Simpan</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>


@endsection

@section('morejs')

    <script>
        $(document).ready(function () {
            $('#table_id').DataTable();

        });

        $(document).on('click', '#addData, #editData', function () {
            let row = $(this).data('row');
            $('.textForm').val('');
            $('#modaltambahproduk #id').val($(this).data('id'));
            $('#modaltambahproduk #nama_produk').val($(this).data('nama'));
            $('#modaltambahproduk #harga').val($(this).data('harga'));
            $('#modaltambahproduk').modal('show');
        })

        function Simpan() {
            saveData('Simpan Data', 'form', window.location.pathname);
            return false;
        }

        function afterSave() {

        }
    </script>
@endsection


