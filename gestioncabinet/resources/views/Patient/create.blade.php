@extends('Patient.layout')
@section('content')
 <!-- MENU LEFT-->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
<div class="sidenav-header">
<i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>



</a>
</div>

<hr class="horizontal light mt-0 mb-2">
<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link text-white active bg-gradient-primary" href="../pages/dashboard.html">
<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
<i class="material-icons opacity-10">dashboard</i>
</div>

<span class="nav-link-text ms-1">Tableau de bord</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link text-white " href="../patient" style="background-color:#1be5e8;">
<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
<i class="material-icons opacity-10">table_view</i>
</div>
<span class="nav-link-text ms-1">Patients</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link text-white " href="../pages/billing.html">
<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
<i class="material-icons opacity-10">receipt_long</i>
</div>
<span class="nav-link-text ms-1">Rendez-vous</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link text-white " href="../pages/virtual-reality.html">
<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
<i class="material-icons opacity-10">view_in_ar</i>
</div>
<span class="nav-link-text ms-1">Ordonnances</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link text-white " href="../pages/rtl.html">
<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
<i class="material-icons opacity-10">format_textdirection_r_to_l</i>
</div>
<span class="nav-link-text ms-1">Anamnese</span>
</a>
</li>

<li class="nav-item mt-3">
<h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
</li>
<li class="nav-item">
<a class="nav-link text-white " href="../pages/profile.html">
<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
<i class="material-icons opacity-10">person</i>
</div>
<span class="nav-link-text ms-1">Profile</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link text-white " href="../pages/sign-in.html">
<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
<i class="material-icons opacity-10">login</i>
</div>
<span class="nav-link-text ms-1">log out</span>
</a>
</li>

</ul>
</div>
<div class="sidenav-footer position-absolute w-100 bottom-0 ">
<div class="mx-3">
<a class="btn  mt-4 w-100" href="{{ url('/login') }}" type="button" style="background-color:#1be5e8;">Cabinet</a>
</div>
</div>
</aside>
<!-- END MENU LEFT-->
<div class="row">
    <div class="col-md-6 col-lg-4">
        <form action="{{url('patient')}}" method="post" class="card" style="width:700px;margin-left:700px;height: 859px;margin-top:50px;margin-bottom:50px;">
        {!! csrf_field() !!}
            <div class="card-header" style="/* border-radius:100px; */background-color: #9c27b0;">
                <i class="fas fa-circle-plus" ></i> <center style="color: #f1ecee;font-family: fantasy;font-size:20px;">Nouveau Patient</center>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="" class="form-label">CIN</label>
                    <input type="text" class="form-control " name="cin" id="cin" required placeholder="CIN Patient...">
                </div>


                <div class="mb-3">
                    <label for="" class="form-label">Nom</label>
                    <input type="text" class="form-control " name="nom" id="nom" required placeholder="Nom Patient..." >
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Prénom</label>
                    <input type="text" class="form-control " name="prenom" id="prenom" required placeholder="Prénom Patient..." >
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Gender</label></br>
                    <input type="radio"  id="gender" name="gender" value="Femme" >
                    <label for="">Femme</label><br>
                    <input type="radio" id="gender" name="gender" value="Homme" >
                    <label for="">Homme</label><br>
                </div>


                <div class="mb-3">
                    <label for="" class="form-label">Adresse</label>
                    <input type="text" class="form-control" name="Adresse" id="Adresse" required placeholder="Adresse Patient..." >
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Téléphone </label>
                    <input type="text" class="form-control" name="telephone" id="telephone" required placeholder="Numéro de téléphone du Patient...">
                </div>

                
                <div class="mb-3">
                    <label for="" class="form-label">Date de naissance  :  </label>
                    <input type="date" name="datenaissance" required pattern="\d{4}-\d{2}-\d{2}">
                    <span class="validity"></span>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Lieu de naissance </label>
                    <input type="text" class="form-control" name="lieunaissance" id="lieunaissance" required placeholder="Lieu de naissance ...">
                </div>

               

                <div class="card-footer txt-end text-center" style="width: 18rem;margin-left:500px;" >
                    <button class="btn btn-primary" type="submit" style="margin-right:129px;margin-top: -64px;background-color: #9c27b0;">
                        <i class="fas fa-datebase"></i> Ajouter
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>

@endsection






