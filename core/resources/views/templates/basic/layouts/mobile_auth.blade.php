<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $general->siteName(__($pageTitle)) }}</title>
    @include('partials.seo')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    @include('templates.basic.layouts.custom.mobile_css')
    <style>
        .form-control{
            border-radius: 20px !important;
            background: #2fcc57 !important;
            border: 1px solid #939393 !important;
            color: #fff !important;
            padding-left: 48px !important;
        }
        .form-login p.icon{
            color: #2fcc57;
            margin-bottom: -36px;
            margin-left: 8px;
            width: fit-content;
        }
        .form-login p.icon>i{
            color: #fff;
            margin-bottom: -36px;
            margin-left: 10px;
            width: fit-content;
        }
        .form-control:focus{
            border-radius: 20px !important;
            background: #2fcc3b85 !important;
            border: 1px solid #939393 !important;
            color: #fff !important;
            padding-left: 48px !important;
        }
        .form-login p.icon:focus{
            color: #fff;
            margin-bottom: -36px;
            margin-left: 8px;
            width: fit-content;
        }
        .form-login p.icon>i:focus{
            color: #fff;
            margin-bottom: -36px;
            margin-left: 10px;
            width: fit-content;
        }
    </style>
    @stack('style')

</head>



<body>

    @yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script>
    const Spiner = `<div class="spinner-border spinner-border-sm" role="status"></div>`;
    //-- Notify --//
    const notifyMsgBig = (headline, msg, cls) => {
        Swal.fire(
            headline,msg,cls
        )
    }
    const notifyMsg = (msg,cls) => {
        Swal.fire({
            position: 'top-end',
            icon: cls,
            title: msg,
            toast:true,
            showConfirmButton: false,
            timer: 2500
        })
    }

    const userDataApi = () => {
        $.ajax({
            type: "get",
            url: "{{route('user.data.api')}}",
            success: function (res) {
                $('.userBalance').html('{{ $general->cur_sym }}'+(parseFloat(res.user.balance).toFixed(2)))
            }
        });
    }
    userDataApi()

</script>

<script>
    const currentUrl = $(location).attr('href');
    // active Class System Jquery
    $('.nav-icon a').each(function(index,item){
        let navLink = item['href'];
        if (currentUrl == navLink){
            $('.nav-icon').removeClass('active');
            $(this).addClass('active');
        }
    });

</script>

@stack('script')
@include('partials.plugins')
@include('partials.notify')

</body>

</html>
