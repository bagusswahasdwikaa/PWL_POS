@extends('layout.app')

@section('subtitle', 'User')
@section('content_header_title', 'User')
@section('content_header_subtitle', 'Ubah user')
{{-- Content body: main page content --}}
@section('content')
    <div class="container">
        <div class="card card-info">
            <div class="card-header bg-primary">
              <h3 class="card-title">Ubah User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/user/ubah_simpan/{{$data->user_id}}" class="form-horizontal" method="POST">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
              <div class="card-body">
                <div class="form-group row">
                  <label for="username" class="col-sm-2 col-form-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{$data->username}}" class="form-control" id="username" name="username" placeholder="Username">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{$data->nama}}" class="form-control" id="nama" name="nama" placeholder="Nama">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="password" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="text" value="" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="level_id" class="col-sm-2 col-form-label">Level ID</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{$data->level_id}}" class="form-control" id="level_id" name="level_id" placeholder="Masukkan ID Level">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
    </div>
@endsection