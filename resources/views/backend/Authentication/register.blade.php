@extends('backend.layouts.appAuth')
@section('title, Sign Up')
@section('content')
<div class="wrapper">
    <div class="section-authentication-cover"> <div class=""> <div class="row g-0"> <div class="col-12 col-xl-7
        col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex"> <div
        class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
        <div class="card-body">
        <img src="{{asset('public/assets/images/login-images/register-cover.svg')}}" class="img-fluid
        auth-img-cover-login"
        width="550" alt="" />
        </div>
    </div>

    </div> <div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
    <div class="card-body p-sm-5">
        <div class=""> <div class="mb-3 text-center"> <img src="{{asset('public/assets/images/logo-icon.png')}}"
            width="60" alt="" />
        </div> <div class="text-center mb-4"> <h5 class="">Pharma admin</h5>
        <p class="mb-0">Please fill the below details to create your account</p> </div> <div class="form-body">
            
        <form class="row g-3" action="{{route('register.store')}}" method="POST">
            @csrf
            <div class="col-12">
            <label for="FullName" class="form-label">Full name</label>
            <input type="text" class="form-control" value="{{old('FullName')}}" name="FullName" id="FullName"
            placeholder="Jhon">

            @if($errors->has('FullName'))
            <small class="d-block text-danger">
            {{$errors->first('FullName')}}
            </small>
            @endif

            </div> <div class="col-12">
            <label for="EmailAddress" class="form-label">Email Address</label>
            <input type="text" value="{{old('EmailAddress')}}" class="form-control" id="EmailAddress" name="EmailAddress"
            placeholder="example@user.com">


         @if($errors->has('EmailAddress'))
            <small class="d-block text-danger">
                {{$errors->first('EmailAddress')}}
            </small>
            @endif



    </div>
    <div class="col-12">
        <label for="inputChoosePassword" class="form-label">Contact number</label>
        <div class="input-group">
            <input type="text" id="contact_no_en" value="{{old('contact_no_en')}}" class="form-control border-end-0"
                name="contact_no_en" value="12345678" placeholder="Enter contact number">

            @if($errors->has('contact_no_en'))
            <small class="d-block text-danger">
                {{$errors->first('contact_no_en')}}
            </small>
            @endif



        </div>
    </div>
    <div class="col-12">
        <label for="inputChoosePassword" class="form-label">Password</label>
        <div class="input-group" id="show_hide_password">
            <input type="password" class="form-control border-end-0" id="password" name="password" value="12345678"
                placeholder="Enter Password"> <a href=" javascript:;" class="input-group-text bg-transparent"><i
                    class='bx bx-hide'></i></a>

            @if($errors->has('password'))
            <small class="d-block text-danger">
                {{$errors->first('password')}}
            </small>
            @endif

        </div>
    </div>
    <div class="col-12">
        <label for="password_confirmation" class="form-label">confirm Password</label>
        <div class="input-group" id="show_hide_password">
            <input type="password" class="form-control border-end-0" id="password_confirmation"
                name="password_confirmation" value="12345678" placeholder="Enter Password"> <a href="javascript:;"
                class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
        </div>
    </div>

    <div class="col-12">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
            <label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to
                Terms & Conditions</label>
        </div>
    </div>
    <div class="col-12">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Sign up</button>
        </div>
    </div>
    <div class="col-12">
        <div class="text-center ">
            <p class="mb-0">Already hgg67ave an account? <a href="{{route('login')}}">Sign
                    in here</a></p>
        </div>
    </div>
    </form>
</div>
<div class="login-separater text-center mb-5"> <span>OR SIGN UP WITH EMAIL</span>
    <hr />
</div>
<div class="list-inline contacts-social text-center">
    <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0 rounded-3"><i
            class="bx bxl-facebook"></i></a>
    <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0 rounded-3"><i
            class="bx bxl-twitter"></i></a>
    <a href="javascript:;" class="list-inline-item bg-google text-white border-0 rounded-3"><i
            class="bx bxl-google"></i></a>
    <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0 rounded-3"><i
            class="bx bxl-linkedin"></i></a>
</div>

</div>
</div>
</div>
</div>

</div>
<!--end row-->
</div>
</div>
</div>
@endsection