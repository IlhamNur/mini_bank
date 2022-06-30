@extends('layouts.admin')

@section('content')
    <div class="inner-banner"></div>
    <section class="w3l-breadcrumb">
    <div class="container"> 
        <ul class="breadcrumbs-custom-path">
        <li><a href="/index">Admin Dashboard</a></li> 
        <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span>Registrasi</li> 
        </ul>
    </div> 
    </section>
    <div class="item bg-light">
                <li>
                    <div class="slider-info banner-view bg bg2">
                        <div class="banner-info">
                            <div class="container">
                            @if ($message = Session::get('success'))
                                <br>
                                <div class="alert alert-success">
                                    {{ $message }}
                                </div>
                                <br>
                            @endif
                                <div class="row">
                                <div class="col-12 text-center mt-5">
                                <h3>Registrasi</h3>
                                </div>
                                <div class="col-6 offset-1">
                                <table class="table table-bordered my-5">
                                    <thead>
                                    <tr class="text-center">
                                        <th scope="col" class="col-1">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col" class="col-4 ">Berkas Bukti</th>
                                        <th scope="col" class="col-3 "></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($sign_ups as $sign_up)
                                        <tr class="text-center">
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $sign_up->name}}</td>
                                        <td>{{ $sign_up->email}}</td>
                                        <td>{{ $sign_up->password}}</td>
                                        <td>{{ $sign_up->address}}</td>
                                        <td>{{ $sign_up->nik}}</td>
                                        <td>{{ $sign_up->jenis_kelamin}}</td>
                                        <td><img src="{{Storage::url($sign_up->berkas_bukti)}}" alt="foto" style="width: 200px; height:auto;"></td>
                                        <td>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#nasabah{{$sign_up->id}}" class="btn btn-info">Daftar Nasabah</button>
                                            <!-- <button type="button" data-bs-toggle="modal" data-bs-target="#akun{{$sign_up->id}}" class="btn btn-danger">Daftar Akun</button> -->
                                        </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    </table>
                                    </div>
                                    </div> 

                                    @foreach ($sign_ups as $sign_up)
                                    <div class="modal fade" id="nasabah{{$sign_up->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <form method="POST" enctype="multipart/form-data" action="{{route('nasabah.store')}}">
                                            @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title text-center" id="exampleModalLabel">Daftar Nasabah</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control {{$errors->has('nama') ? 'is-invalid' : ''}}" id="nama" name="nama" value="{{ $sign_up->name}}">
                                                @if($errors->has('name'))
                                                    <div class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('nama') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control {{$errors->has('alamat') ? 'is-invalid' : ''}}" id="alamat" name="alamat" value="{{ $sign_up->address}}">
                                                @if($errors->has('alamat'))
                                                    <div class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('alamat') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control {{$errors->has('nik') ? 'is-invalid' : ''}}" id="nik" name="nik" value="{{ $sign_up->nik}}">
                                                @if($errors->has('nik'))
                                                    <div class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('nik') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control {{$errors->has('jenis_kelamin') ? 'is-invalid' : ''}}" id="jenis_kelamin" name="jenis_kelamin" value="{{ $sign_up->jenis_kelamin}}">
                                                @if($errors->has('jenis_kelamin'))
                                                    <div class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control {{$errors->has('nomor_rekening') ? 'is-invalid' : ''}}" id="nomor_rekening" name="nomor_rekening" value="{{ rand(1000000000000, 9999999999999) }}">
                                                @if($errors->has('nomor_rekening'))
                                                    <div class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('nomor_rekening') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                        </div>
                                        </form>
                                        </div>
                                    </div>
                                    </div>
                                    @endforeach

                                    <!-- @foreach ($sign_ups as $sign_up)
                                    <div class="modal fade" id="akun{{$sign_up->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title text-center" id="exampleModalLabel">Daftar Akun</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $sign_up->name}}">
                                                @if($errors->has('name'))
                                                    <div class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" id="email" name="email" value="{{ $sign_up->email}}">
                                                @if($errors->has('email'))
                                                    <div class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" id="password" name="password" value="{{ $sign_up->password}}">
                                                @if($errors->has('password'))
                                                    <div class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                        </div>
                                        </form>
                                        </div>
                                    </div>
                                    </div>
                                    @endforeach -->
                            </div>
                        </div>
                    </div>
                </li>
    </div>



<script>
    var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 
    @endsection