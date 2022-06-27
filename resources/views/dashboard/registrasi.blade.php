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
                                <div class="row">
                                <div class="col-12 text-center mt-5">
                                <h3>Registrasi</h3>
                                </div>
                                <div class="col-10 offset-1">
                                <table class="table table-bordered my-5">
                                    <thead>
                                    <tr class="text-center">
                                        <th scope="col" class="col-1">No</th>
                                        <th scope="col"> </th>
                                        <th scope="col"></th>
                                        <th scope="col" class="col-3 "></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                        <th scope="row">1</th>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#tombol2" class="btn btn-info">Tombol2</button>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#tombol3" class="btn btn-danger">Tombol3</button>
                                        </td>
                                        </tr>
                                        <tr class="text-center">
                                        <th scope="row">2</th>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#tombol2" class="btn btn-info">Tombol2</button>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#tombol3" class="btn btn-danger">Tombol3</button>
                                        </td>
                                        </tr>
                                        <tr class="text-center">
                                        <th scope="row">3</th>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#tombol2" class="btn btn-info">Tombol2</button>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#tombol3" class="btn btn-danger">Tombol3</button>
                                        </td>
                                        </tr>
                                    </tbody>
                                    </table>
                                    </div>
                                    </div> 

                                    <div class="modal fade" id="tombol2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                    <div class="modal fade" id="tombol3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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