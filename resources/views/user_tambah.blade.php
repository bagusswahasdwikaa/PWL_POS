@extends('layout.app')

@section('subtitle', 'User')
@section('content_header_title', 'User')
@section('content_header_subtitle', 'Tambah User')
{{-- Content body: main page content --}}
@section('content')
    <div class="container">
        <div class="card card-info">
            <div class="card-header bg-primary">
              <h3 class="card-title">Tambah User</h3>
            </div>
            <form action="/user/tambah_simpan" class="form-horizontal" method="POST">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="text" value="" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                      <label for="level_id">Level ID</label>
                      <input type="text" class="form-control" id="level_id" name="level_id" placeholder="Masukkan ID Level">
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
            </form>
          </div>
    </div>
@endsection