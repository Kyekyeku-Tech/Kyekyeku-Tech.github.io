<style>
    a {
        color: rgba(7,141,60,1);
    }
    a span {
        color: rgba(7,141,60,1);
    }
    .text-primary {
        color: rgba(7,141,60,1) !important;
    }
    .login-main::before {
        background-color: #e9ecef00;
        background-image: url("https://img.freepik.com/free-photo/wide-angle-shot-single-tree-growing-clouded-sky-during-sunset-surrounded-by-grass_181624-22807.jpg?size=626&ext=jpg&ga=GA1.1.1413502914.1696809600&semt=sph");

        /* Full height */
        height: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        opacity: 100;
    }
    .login-area::after {
        position: absolute;
        content: '';
        width: 47px;
        height: 47px;
        right: -80px;
        top: -100px;
        border: 40px solid rgb(52 34 229 / 0%);
        box-sizing: border-box;
        filter: blur(2px);
        border-radius: 50%;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        -o-border-radius: 50%;
    }
    .login-wrapper__top {
        background-color: #00000000;
    }
    .login-wrapper__top::after {
        border-color: #3d2bfb00 transparent transparent transparent;
    }
    .login-wrapper {
        background-color: #1e157d00;
        background: rgb(28 220 248 / 5%);
        box-shadow: 0 8px 32px 0 #ffc1074a;
        backdrop-filter: blur( 8px );
        -webkit-backdrop-filter: blur( 8px );
        border-radius: 10px;
        border: 1px solid rgba( 255, 255, 255, 0.18 );
        border-radius: 10px;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        -ms-border-radius: 10px;
        -o-border-radius: 10px;
        overflow: hidden;
    }
</style>

<style>
    /* all */
    .bg--dark {
        background-color: #00000000 ;
        background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(14,174,87,1) 0%, rgba(12,116,117,1) 90% ) ;
    }
    .bg--primary {
        background-color: #00000000 !important;
        background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(14,174,87,1) 0%, rgba(12,116,117,1) 90% ) !important;
    }
    .bg--success {
        background-color: #00000000 !important;
        background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgb(14, 174, 83) 0%, rgb(12, 117, 44) 90% ) !important;
    }
    .bg--warning {
        background-color: #00000000 !important;
        background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgb(255, 211, 80) 0%, rgb(207, 152, 0) 90% ) !important;
    }
    .btn--primary {
        background-color: #00000000 !important;
        background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(14,174,87,1) 0%, rgba(12,116,117,1) 90% ) !important;
    }
    .btn--primary:hover {
        background-color: #00000000 !important;
        background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(12,116,117,1) 0%, rgba(14,174,87,1) 90% ) !important;
    }
    .btn-danger, .btn--danger, .bg-danger, .bg--danger {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
        background-image: radial-gradient( circle farthest-corner at 10% 20%,  #f4727f 0%, #dc3545 90% ) !important;
    }
    .btn-danger:hover, .btn--danger:hover, .bg-danger:hover, .bg--danger:hover {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
        background-image: radial-gradient( circle farthest-corner at 10% 20%,  #dc3545 0%, #f4727f 90% ) !important;
    }
    .border--primary {
        border-color: #0a9364 !important;
    }
    .btn-outline--primary {
        color: #0a9364;
        border-color: #0a9364;
        background-color: #00000000 !important;
    }
    .btn-outline--primary:hover {
        color: #ffffff;
        border-color: #0a9364;
        background-color: #00000000 !important;
        background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(14,174,87,1) 0%, rgba(12,116,117,1) 90% ) !important;
    }
    .btn-outline--danger {
        color: #d00202;
        border-color: #d00202;
        background-color: #00000000 !important;
    }
    .btn-outline--danger:hover {
        color: #ffffff;
        border-color: #d00202;
        background-color: #00000000 !important;
        background-image: radial-gradient( circle farthest-corner at 10% 20%,  #ec4a4a 0%, #d00202 90% ) !important;
    }
    .sidebar__menu .sidebar-menu-item .side-menu--open, .sidebar__menu .sidebar-menu-item.active > a {
        background-color: #00000000 !important;
        background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(14,174,87,1) 0%, rgba(12,116,117,1) 90% ) !important;
    }
    .sidebar__menu .sidebar-menu-item .side-menu--open:hover, .sidebar__menu .sidebar-menu-item > a:hover {
        background-color: rgba(12,116,117,1) !important;
    }
    .sidebar .slimScrollDiv .slimScrollBar {
        background-color: rgba(12,116,117,1) !important;
        width: 5px !important;
        opacity: 1 !important;
    }
    table.table--light thead th {
        background-color: #00000000;
    }
    table.table--light thead {
        background-color: #00000000;
        background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(14,174,87,1) 0%, rgba(12,116,117,1) 90% ) !important;
    }
    .file-upload-wrapper:before {
        background: #4534ff00;
        background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(14,174,87,1) 0%, rgba(12,116,117,1) 90% ) !important;
    }
    .card {
        border-radius: 20px 5px 20px 5px;
        -webkit-border-radius: 20px 5px 20px 5px;
    }
    .card-header:first-child {
        border-radius: calc(1.25rem - 1px) calc(.25rem - 1px) 0 0;
    }
    .box--shadow2 {
        box-shadow: 2px 1px 5px 2px #be88054f !important;
    }
    .widget-two {
        padding: 15px 15px;
        border-radius: 20px 5px 20px 5px !important;
        -webkit-border-radius: 20px 5px 20px 5px !important;
    }
    .pagination .page-item.active .page-link {
        background-color: #4534ff00;
        border-color: #0a9364;
        background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(14,174,87,1) 0%, rgba(12,116,117,1) 90% ) !important;
        color: #ffffff;
        box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.25);
    }
    .form-control:focus, .form-control:active, .form-control:visited, .form-control:focus-within, input:focus, input:active, input:visited, input:focus-within, textarea:focus, textarea:active, textarea:visited, textarea:focus-within, select:focus, select:active, select:visited, select:focus-within {
    border-color: #05af4f;
        box-shadow: 0 3px 9px rgba(2, 185, 85, 0.47), 3px 4px 8px rgba(115, 103, 240, 0.1);
    }
</style>
<?php /**PATH /home/afearnin/skymarketingpk.online/core/resources/views/admin/layouts/css.blade.php ENDPATH**/ ?>