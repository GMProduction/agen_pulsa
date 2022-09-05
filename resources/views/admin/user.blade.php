@extends('admin.base')

@section('content')
    <div class="panel">
        <div class="title">
            <p>Data User</p>
            <a class="btn-utama-soft sml rnd " id="addData">User Baru <i
                    class="material-icons menu-icon ms-2">add_circle</i></a>
        </div>

        <div class="isi">
            <div class="table">
                <table id="table_id" class="table table-striped" style="width:100%">
                    <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No_HP</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($data as $key => $d)
                        <tr>
                            <td>{{$d->nama}}</td>
                            <td>{{$d->agen ? $d->agen->alamat : ''}}</td>
                            <td>{{$d->agen ? $d->agen->no_hp : ''}}</td>
                            <td>{{$d->username}}</td>
                            <td class="d-flex">
                                <a class="btn-success sml rnd me-1" id="editData" data-row='{{$d}}'>Edit <i
                                        class="material-icons menu-icon ms-2">edit</i></a>
                                <a class="btn-danger sml rnd " id="deleteData" data-id="{{$d->id}}" data-nama="{{$d->nama}}">Hapus <i
                                        class="material-icons menu-icon ms-2">delete</i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Tidak ada data</td>
                        </tr>
                    @endforelse


                    </tbody>

                </table>
            </div>
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="modaltambahuser" tabindex="-1" aria-labelledby="modaltambahuser" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modaltambahuser">Tambah User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="form" onsubmit="return Simpan()">
                    @csrf
                    <input name="id" id="id" class="textForm" hidden>
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control textForm" id="nama" name="nama" required>
                            <label for="nama" class="form-label">Nama</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control textForm" id="alamat" name="alamat" required>
                            <label for="alamat" class="form-label">Alamat</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control textForm" id="no_hp" name="no_hp" required>
                            <label for="no_hp" class="form-label">No Hp</label>
                        </div>


                        <hr>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control textForm" id="username" name="username" required>
                            <label for="username" class="form-label">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control textForm " id="password" name="password" required>
                            <label for="password" class="form-label">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control textForm" id="password_confirmation"
                                   name="password_confirmation">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
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
    <script src="{{ asset('js/number_formater.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('#table_id').DataTable();
        });

        $(document).on('click', '#addData, #editData', function () {
            let row = $(this).data('row');
            console.log(row);
            $('.textForm').val('');
            if (row) {
                $.each(row, function (v, k) {
                        if (row[v] && typeof row[v] === 'object') {
                            $.each(row[v], function (val, key) {
                                if (val != 'id'){
                                    $('#' + [val]).val(row[v][val])
                                }
                            })
                        }else{
                            $('#' + v).val(row[v])
                        }
                    }
                )
                $('#password').val('*******');
                $('#password_confirmation').val('*******');
            }
            $('#modaltambahuser').modal('show');
        })

        function Simpan() {
            saveData('Simpan Data','form', window.location.pathname );
            return false;
        }

        function afterSave() {

        }

        function deleteUser(a) {


        }

        $(document).on('click','#deleteData', function () {
            let data = {
                '_token': '{{csrf_token()}}',
                'id':$(this).data('id')
            }
            deleteData('Hapus Data User '+$(this).data('nama')+' ?','/user/delete', data)
            return false;
        })
    </script>
@endsection


