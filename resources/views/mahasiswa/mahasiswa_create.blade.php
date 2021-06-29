@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">Tambah Data Mahasiwa
                <a href="mahasiswa" class="btn btn-sm btn-primary float-right">Data Mahasiswa</a></div>
               
                <div class="card-body">
              <form>
              <div class="form-group row">
              <label class="col-md-4 text-md-right">Nama Lengkap</label>
              <div class="col-md-6">
              <input type="text" name="nama" class="form-control">
              </div>
              </div>
              <div class="form-group row">
              <label class="col-md-4 text-md-right">Tempat Lahir</label>
              <div class="col-md-6">
              <input type="text" name="Tempat_lahir" class="form-control">
              </div>
              </div>
              <div class="form-group row">
              <label class="col-md-4 text-md-right">Tanggal Lahir</label>
              <div class="col-md-6">
              <input type="text" name="tanggal_lahir" class="form-control">
              </div>
              </div>
              <div class="form-group row">
              <label class="col-md-4 text-md-right">Telpon</label>
              <div class="col-md-6">
              <input type="text" name="telpon" class="form-control">
              </div>
              </div>
              <div class="form-group row">
              <label class="col-md-4 text-md-right">Alamat</label>
              <div class="col-md-6">
              <input type="text" name="alamat" class="form-control">
              </div>
              </div>
              <div class="form-group row">
              <label class="col-md-4 text-md-right">Jenis Kelamin</label>
              <div class="col-md-6">
              <input type="text" name="jk" class="form-control">
              </div>
              </div>
              <div class="form-group row">
              <label class="col-md-4 text-md-right">PHOTO</label>
              <div class="col-md-6">
              <input type="file" name="foto" class="form-control">
              </div>
              </div>
              </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection