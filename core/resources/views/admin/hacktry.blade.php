@extends('admin.layouts.master')
@section('content')
<div class="login-main"
    {{-- style="background-image: url('{{ asset('assets/admin/images/login.jpg') }}'); opacity: 0.5;" --}}
    >
    <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-8 col-sm-11">
                <div class="login-area class="text-white text-center">
                   <h3 class="text-white text-center">you dont try to hack admin dashboard <br>আমি তোর বাপ আর একবার হ্যাক করার ট্রাই করলে তোর পাছায় দিব লাথি।</h3>
                   
                  <h2 class="text-white text-center mt-5 mb-3">Admin Login</h2>
                 <a class="btn btn-lg btn-primary w-100 rounded-pill" href="{{route('admin.login')}}" >Login now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection