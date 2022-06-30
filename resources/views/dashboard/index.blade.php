@extends('layouts.admin')

@section('content')
    <div class="inner-banner"></div>
    <!-- <section class="w3l-breadcrumb"> -->
      <!-- <div class="container">
        <ul class="breadcrumbs-custom-path">
          <li><a href="/index">Admin Dashboard</a></li> -->
          <!-- <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span></li> -->
        <!-- </ul>
      </div> --> 
    </section>
    <div class="item bg-admindb">
                <li>
                    <div class="slider-info banner-view bg bg2">
                        <div class="banner-info">
                        <div class="container">
                            <div class="row">
                                    <div class="col-2 rounded mt-5 mx-auto">
                                            <img src="assets/images/fotoprofil.png" alt="img" class="img-fluid"/>
                                    </div>  
                                    <div class="col-12 text-center my-3 mb-4">
                                      <h2 class="text-light">
                                      Welcome Back, {{ Auth::user()->name }}!!
                                      </h2>
                                    </div>
                            </div> 
                        </div>
                        </div>
                    </div>
                </li>
    </div>
      <div class="item bg-light">
                <li>
                    <div class="slider-info banner-view bg bg2">
                        <div class="banner-info">
                        <div class="container">
                            <div class="row">
                            <div class="col-12 text-center mt-5">
                            <h3>Konfigurasi</h3>
                            </div>
                            <div class="col-8 offset-2">
                            <table class="table table-bordered my-5">
                              <thead>
                                <tr class="text-center">
                                  <th scope="col" class="col-1">No</th>
                                  <th scope="col">Code</th>
                                  <th scope="col">Value</th>
                                  <th scope="col" class="col-2 ">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                              @foreach ($konfigurasis as $konfigurasi) 
                                <tr class="text-center">
                                  <th scope="row">{{ $loop->iteration }}</th>
                                  <td>{{ $konfigurasi->code }}</td>
                                  <td>{{ $konfigurasi->value }}</td>
                                  <td><button type="button" data-bs-toggle="modal" data-bs-target="#tombol{{$loop->iteration}}" class="btn btn-primary">Ubah</button></td>
                                </tr>
                              @endforeach
                              </tbody>
                            </table>
                            </div>
                            </div> 
                        </div>

                        @foreach ($konfigurasis as $konfigurasi)
                        <div class="modal fade" id="tombol{{$loop->iteration}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <form method="POST" enctype="multipart/form-data" action="{{url('/konfigurasi-form/'.$konfigurasi->id)}}">
                              @csrf
                            <div class="modal-header">
                                <h5 class="modal-title text-center" id="exampleModalLabel">Konfigurasi</h5>
                            </div>
                            <div class="modal-body">

                              <input type="text" class="form-control {{$errors->has('value') ? 'is-invalid' : ''}}" id="value" name="value">
                              @if($errors->has('value'))
                                  <div class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('value') }}</strong>
                                  </div>
                              @endif
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