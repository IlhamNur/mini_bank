@extends('layouts.admin')

@section('content')
<div class="inner-banner"></div>
    <section class="w3l-breadcrumb">
    <div class="container"> 
        <ul class="breadcrumbs-custom-path">
        <li><a href="/index">Admin Dashboard</a></li> 
        <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span>Mutasi</li> 
        </ul>
    </div> 
    </section>
<section class="w3l-mobile-content-6 py-5 bg-light">
    <div class="mobile-info py-lg-2 py-md-4 py-2">
        <div class="container">
            <h3 class="title mb-5 text-center">Mutasi</h3>
            <table class="table title col-8 offset-2">
            <tbody>
                <tr>
                    <td>
                        <h4>a.n Farrell Naufal to Kristian</h4>
                        <p>18-06-2022</p>
                    </td>
                    <td class="text-right">
                        <h4>-Rp200.000</h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>a.n Farrell Naufal to Ilham Nur</h4>
                        <p>18-06-2022</p>
                    </td>
                    <td class="text-right">
                        <h4>-Rp500.000</h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Biaya Administrasi</h4>
                        <p>18-06-2022</p>
                    </td>
                    <td class="text-right">
                        <h4>-Rp5.500</h4>
                    </td>
                </tr>
                
            </tbody>
            </table>
        </div>
    </div>
</section>



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