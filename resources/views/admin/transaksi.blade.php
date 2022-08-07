@extends('admin.base')

@section('content')


    <div class="row">


        <div class="panel">
            <div class="title">
                <p>Data Transaksi</p>

            </div>

            <div class="isi">
                <div class="table ">
                    <table id="table_id" class="table table-striped" style="width:100%">
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
                        @forelse($data as $key => $d)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{date('d F Y', strtotime($d->tanggal))}}</td>
                                <td>{{$d->produk->nama_produk}}</td>
                                <td>{{number_format($d->harga)}}</td>
                                <td>{{$d->user->nama}}</td>
                                <td><a href="{{asset ($d->bukti_pembayaran)}}" target="_blank"><img src="{{asset ($d->bukti_pembayaran)}}"/></a></td>
                                <td>{{$d->status == 1 ? 'Diterima' : ($d->status == 2 ? 'Ditolak' : 'Menunggu')}}</td>
                                <td class="">
                                    @if($d->status == 1)
                                       <label>Sudah Diterima</label>
                                    @else
                                        <div class="d-flex">
                                            <a class="btn-success sml rnd me-1" onclick="updateStatus('{{$d->id}}',1)">Terima <i
                                                    class="material-icons menu-icon ms-2">check</i></a>
                                            <a class="btn-danger sml rnd " onclick="updateStatus('{{$d->id}}',2)">Tolak <i
                                                    class="material-icons menu-icon ms-2">close</i></a>
                                        </div>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">Tidak ada data</td>
                            </tr>
                        @endforelse


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
        $(document).ready(function () {
            $('#table_id').DataTable();

        });

        function updateStatus(id, stat) {
            let data = {
                '_token': '{{csrf_token()}}',
                'id': id,
                'status': stat
            }

            let text = 'Tolak'
            if (stat == 1) {
                text = 'Terima'
            }
            saveDataObjectFormData(text + ' status transaksi', data, window.location.pathname + '/status')
            return false;
        }
    </script>
@endsection

