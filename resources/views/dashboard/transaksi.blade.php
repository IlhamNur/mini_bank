@extends('layouts.admin')

@section('content')
    <div class="inner-banner"></div>
    <section class="w3l-breadcrumb">
    <div class="container"> 
        <ul class="breadcrumbs-custom-path">
        <li><a href="/index">Admin Dashboard</a></li> 
        <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span>Transaksi</li> 
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
                                <h3>Data Nasabah</h3>
                                </div>
                                <div class="col-10 offset-1">
                                <table class="table table-bordered my-5">
                                    <thead>
                                    <tr class="text-center">
                                        <th scope="col" class="col-1">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Nomor Rekening</th>
                                        <th scope="col" class="col-3 ">Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($nasabahs as $nasabah)
                                        <tr class="text-center">
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $nasabah->nama }}</td>
                                        <td>{{ $nasabah->alamat }}</td>
                                        <td>{{ $nasabah->nik }}</td>
                                        <td>{{ $nasabah->jenis_kelamin }}</td>
                                        <td>
                                            @foreach($rekenings as $rekening) 
                                                {{ $rekening->nomor_rekening }}
                                            @endforeach
                                        </td>
                                        <td>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#kredit{{ $nasabah->id }}" class="btn btn-primary">Debet</button>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#debet{{ $nasabah->id }}" class="btn btn-info">Kredit</button>
                                            <a  href="{{ url('/mutasi/'.$nasabah->id) }}" ><button type="button" class="btn btn-danger mt-1">Mutasi</button></a>
                                        </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                    </div>
                                    </div> 

                                    @foreach($nasabahs as $nasabah)
                                    <div class="modal fade" id="debet{{ $nasabah->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                        <form method="POST" enctype="multipart/form-data" action="/transaksi-debet/{{ $nasabah->id }}">
                                            @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title text-center" id="exampleModalLabel">Transaksi</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control {{$errors->has('nominal') ? 'is-invalid' : ''}}" id="nominal" name="nominal" placeholder="Nominal">
                                                @if($errors->has('nominal'))
                                                    <div class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('nominal') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    @endforeach

                                    @foreach($nasabahs as $nasabah)
                                    <div class="modal fade" id="kredit{{ $nasabah->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                        <form method="POST" enctype="multipart/form-data" action="/transaksi-kredit/{{ $nasabah->id }}">
                                            @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title text-center" id="exampleModalLabel">Transaksi</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control {{$errors->has('nominal') ? 'is-invalid' : ''}}" id="nominal" name="nominal" placeholder="Nominal">
                                                @if($errors->has('nominal'))
                                                    <div class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('nominal') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    @endforeach

                                    <!-- <div class="modal fade" id="tombol5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-center" id="exampleModalLabel">Title</h5>
                                        </div>
                                        <div class="modal-body">
                                            <p>text</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Simpan</button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="modal fade" id="tombol6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-center" id="exampleModalLabel">Title</h5>
                                        </div>
                                        <div class="modal-body">
                                            <p>text</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Simpan</button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div> -->
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