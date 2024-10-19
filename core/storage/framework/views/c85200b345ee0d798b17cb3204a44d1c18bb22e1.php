<?php $__env->startSection('content'); ?>
		

			
			
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    
    <link rel="icon" type="image/png" href="/media/company_logo/Screenshot_20230923-003645_1.png">
    

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

    <!-- Font Awesome  css-->
    <link href="/static/fontawesomefree/css/fontawesome.css" rel="stylesheet" type="text/css">
    <link href="/static/fontawesomefree/css/brands.css" rel="stylesheet" type="text/css">
    <link href="/static/fontawesomefree/css/solid.css" rel="stylesheet" type="text/css">

    <!-- Custom style  -->
    <!-- <link rel="stylesheet" href="/static/css/responsives.css"> -->
    <link rel="stylesheet" href="/static/css/styles.css">
    <link rel="stylesheet" href="/static/css/snackbar.css">


    <!-- style.css -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700');
        @import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
        @import url('https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
        @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,600,600i,700,700i,800,800i&display=swap');
        @import url("/static/css/owl.carousel.min.css");

        body {
            /* background-color: #FFF18D; */
        }

        * {
            font-family: Montserrat;
        }

        .bottom-navbar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: whitesmoke;
            /* color: #333; */
            padding: 10px;
            border-radius: 15px 15px 0px 0px;
        }

        .scrollable-div {
            max-height: 40vh;
            overflow-y: auto;
        }

        .badge-notification {
            position: relative;
            top: -8px;
            left: -47px;
            border: 1px solid black;
            border-radius: 50%;
            font-size: 9px;
        }

        /* Styles for the preloader */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            backdrop-filter: blur(10px);
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
            color: black
        }

        /* Styles for the blurred background */
        #blurred-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            backdrop-filter: blur(2px);
            z-index: 9998;
        }


        nav {
            position: fixed;
            bottom: 0;
            width: 100%;

            margin: 0 auto;
            left: 0;
            right: 0;
        }

        .nav-box {
            display: flex;
            padding: 8px;
            background-color: rgba(63, 63, 63, 1);
            box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.25);
            border-radius: 29px 29px 27px 27px;
        }

        .nav-container {
            display: flex;
            width: 100%;
            list-style: none;
            justify-content: space-around;
        }

        .nav__item {
            display: flex;
            position: relative;
            padding: 2px;
        }

        .nav__item.active .nav__item-icon {
      border-radius: 50%;
      background-color: #3F3F3F;
      display: flex;
      justify-content: center;
      align-items: center;
     padding: 26px;
      color: #fff;
      position: absolute;
      transform: translate(2px, -60%);
      border: 3px solid white;
        }

        .nav__item.active .nav__item-text {
            transform: scale(1);
        }

        .nav__item-link {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #FFFFFF;
            text-decoration: none;
        }

        .nav__item-icon {
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6em;
            /* background-color: #fff; */
            border-radius: 50%;
            height: 20px;
            width: 20px;
            transition: margin-top 250ms ease-in-out, box-shadow 250ms ease-in-out;
        }

        .nav__item-text {
            position: absolute;
            bottom: 0;
            transition: transform 250ms ease-in-out;
            color: #FFFFFF;
            font-size: 7px;
            font-weight: 400;
        }

        .nav__item:hover .nav__item-icon:hover,
        .nav__item-text:hover,
        .nav__item-link:hover {
            color: #FFFFFF;
        }
    </style>

    <style>
        #snackbar {
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: rgba(31, 28, 28, 0.5);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            color: white;
            text-align: center;
            border-radius: 10px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 50%;
            font-size: 17px;
        }

        #snackbar.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        #snackbar_error {
            visibility: hidden;
            width: 40%;
            margin-left: 5px;
            background-color: rgba(31, 28, 28, 0.5);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            color: white;
            text-align: center;
            border-radius: 10px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 30%;
            bottom: 50%;
            font-size: 17px;
        }

        #snackbar_error.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {
                bottom: 50%;
                opacity: 0;
            }

            to {
                bottom: 50%;
                opacity: 1;
            }
        }

        @keyframes fadeout {
            from {
                bottom: 50%;
                opacity: 1;
            }

            to {
                bottom: 50%;
                opacity: 0;
            }
        }

        @media (min-width: 576px) and (max-width: 767px) {
            #snackbar_error {
                width: 60%;
                left: 20%;
                bottom: 70px;
                font-size: 12px;
            }

            #snackbar {
                width: 50%;
                left: 25%;
                bottom: 70px;
                font-size: 12px;
            }
        }

        @media (max-width: 575.99px) {
            #snackbar_error {
                width: 80%;
                margin-left: 5px;
                left: 10%;
                font-size: 12px;
            }

            #snackbar {
                width: 80%;
                margin-left: 5px;
                left: 10%;
                font-size: 12px;
            }
        }
    </style>

    <script>
        document.onreadystatechange = function () {
            var state = document.readyState;
            if (state == "interactive") {
                // Show the preloader when the page starts loading
                showPreloader();
            } else if (state == "complete") {
                // Hide the preloader when the page finishes loading
                hidePreloader();
            }
        };

        function showPreloader() {
            document.getElementById("preloader").style.display = "flex";
            document.getElementById("blurred-background").style.display = "block";
        }

        function hidePreloader() {
            document.getElementById("preloader").style.display = "none";
            document.getElementById("blurred-background").style.display = "none";
        }

    </script>

    <title>
         one-pay
    </title>
    <script>
        document.onreadystatechange = function () {
            var state = document.readyState;
            if (state == "interactive") {
                // Show the preloader when the page starts loading
                showPreloader();
            } else if (state == "complete") {
                // Hide the preloader when the page finishes loading
                hidePreloader();
            }
        };

        function showPreloader() {
            document.getElementById("preloader").style.display = "flex";
            document.getElementById("blurred-background").style.display = "block";
        }

        function hidePreloader() {
            document.getElementById("preloader").style.display = "none";
            document.getElementById("blurred-background").style.display = "none";
        }

    </script>
</head>

<body class="main-layout m-0 p-0">
    <!-- loader  -->
    <div id="preloader">
        <i class="fa-regular fa-loader fa-flip fa-10x"></i>
        <div class="loader"><img src="/static/images/preview2.gif" alt="" style="height: 80; width: 80px;">
        </div>
    </div>
    <!-- end loader -->

    <!-- end header -->
    

<head>
    <link rel="stylesheet" href="/static/css/account-detail.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<style>
   .image-container {
            display: flex;
            /* flex-wrap: wrap; */
            justify-content: space-between;
            margin-top: 20px;
        }
        .image-container .image-item {
            position: relative;
            max-width: 100px;
            max-height: 100px;
            margin: 10px;
            cursor: pointer;
        }
        .image-container .image-item img {
            max-width: 100%;
            max-height: 100%;
        }
        .image-container .image-item .delete-button {
            position: absolute;
            top: 0px;
            /* right: 5px; */
            background-color: transparent;
            color: black;
            border: none;
            border-radius: 50%;
            /* padding: 10px; */
            cursor: pointer;
        }

    body{
        background-color: white;
    }
    .bank-info {
        display: flex;
        align-items: center;
        justify-content: space-between;
        /* border-bottom: 1px solid #80808061; */
         padding: 15px;
        color: black;
    }

    .bank-name {
        font-size: 10px;
        font-weight: 700;
        color: #3F3F3F80;
    }

    .amount-name {
        font-size: 18px;
        /* color: rgb(255, 0, 0); */
       background: linear-gradient(to left, #FFF, #d9d7d7e5);
       color: black;
       text-align: center;
       border-radius: 10px;
    }

    .upload-button {
        display: block;
        width: 100%;
        padding: 10px;
        font-size: 13.97px;
        background: #5370e5;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 0px 23px 25px 0px;
        font-family: Abhaya Libre Medium;
        font-weight: 500;
    }
    .cancel-button {
        font-family: Abhaya Libre Medium;
        display: block;
        width: 100%;
        padding: 10px;
        font-size: 13.97px;
        background: white;
        color: #5A75E680;
        cursor: pointer;
        border-radius: 26px 0px 0px 25px;
        font-weight: 500;
        box-shadow: 0px 0px 2px 0px #00000040;

    }

    .container {
        max-width: 1200px;
        height: 100%;
        /* margin: 0 auto; */
        /* padding: 20px; */
    }
    input[type="file"]::file-selector-button {
        background: linear-gradient(to left, #FFF, #d9d7d7e5);
        border: 1px solid #bbb;
        padding: 0.5em;
        width: 60%;
        height: 4vh;
        color: black;
        margin: 5%;
        margin-left: 0%;
    }
   .account-sub-heading{
        font-size: 12px;
        font-weight: 800; 
        font-family: Abhaya Libre ExtraBold;
   }
   .custom-file-input {
    display: nones;
    }
    /* .custom-file-input::-webkit-file-upload-button {
    visibility: hidden;
    }
    .custom-file-input::before {
    content: 'Select some files';
    display: inline-block;
    background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
    border: 1px solid #999;
    border-radius: 3px;
    padding: 5px 8px;
    outline: none;
    white-space: nowrap;
    -webkit-user-select: none;
    cursor: pointer;
    text-shadow: 1px 1px #fff;
    font-weight: 700;
    font-size: 10pt;
    }
    .custom-file-input:hover::before {
    border-color: black;
    }
    .custom-file-input:active::before {
    background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
    } */
    .btn-outlined.btn-primary {
        background-color: #419EFE;
    color: white;
    background-color: #eaeaf6;
  display: block;
  width: 130px;
  margin-bottom: 10px;
  font-size: 18px;
  font-family: Montserrat;
  text-align: center;
}
*{
        font-family: Montserrat;
    }
    .btn-outlined.btn-primary:active, .btn-outlined.btn-positive:active, .btn-outlined.btn-negative:active {
        background-color: #419EFE;
    color:white;
    }
    .btn-block {
        color: white;
        background-color: #eaeaf6;
    display: block;
    width: 90px;
    height: 90px;
    margin-bottom: 10px;
    font-size: 18px;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    border: 3px dotted #cfcfee;
    }
    *{
            font-family: Arial;
        }
        .preview-image{
            width: 100px;
            height: 100px;
        }
        ::placeholder {
            font-family: Abhaya Libre;
            font-size: 9px;
            font-weight: 400;
            line-height: 11px;
            letter-spacing: 0em;
            text-align: left;
            color: #3f3f3fbd;
            }
            
        .navbar {
            position: fixed;
            top: 0;
            /*left: 0;*/
            width: 100%;
            font-size: 15px; 
            font-weight: 800; 
            font-family: Abhaya Libre ExtraBold;
            background-color: #419EFE; /* Change this to your desired background color */
            color: #fff; /* Change to your desired text color */
            text-align: center; 
             /* Adjust padding as needed */
            z-index: 100; /* Ensure it appears above other content */
        }

        /* Style for the content area to create space at the top */
        .content {
            margin-top: 60px; /* Adjust this value to match the height of your navigation bar */
            padding: 20px; /* Add padding to create space between the content and navbar */
        }

        /* Example styling for the content */
        .content p {
            margin-bottom: 20px;
        }
</style>

<body>
<div class="mx-auto text-center">
    <h4 id="snackbar_error"></h4>
    </div>
<div class="mx-auto col-sm-10">
    <h4 id="snackbar"></h4>
</div>

<div class="text-center navbar">
   <h3 class=" text-center text-white p-1 w-100" style="display: flex;
    justify-content: center;
    align-items: center;">Payment information</h3>
 </div>
<div class="text-center pb-2 pt-5 d-flex justify-content-center" style="margin-left:90px;">
    <div class="mt-4">
        <img src="<?php echo e(asset ('core/img/onepay.png')); ?>"  alt="Header Image" style="width: 65px;">
        <h3 style="font-size: 13px; font-weight: 800; font-family: Abhaya Libre ExtraBold;">One Pay</h3>

    </div>
    <div class="h-100 align-self-center ps-3">

        <span style="margin-left:0%; border: 0.5px solid rgba(0, 0, 0, 0.4); border-radius: 5px; padding: 2px; color: #3F3F3F66; font-size: 9.86px;">
            <i class="fa-solid fa-hourglass-end"></i>
            <span id="countdown"></span>
        </span>
    </div>
</div>
<div class="text-center">
</div>

<div class="w-100 mb-1 container" style="height:4vh;">
<form action="<?php echo e(route('user.deposit.manual.update')); ?>" method="POST" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
        <input type="hidden" name="csrfmiddlewaretoken" value="88FruVF20yHsBpCZdWviB0EJqw9gT610Wumou7sFm4wu5X6Kvljpnf77wV2hp4Gi">
        <input type="number" name="recharge_amount" required value="3400" hidden>
        <input name="change_number" value="8" type="number" hidden >
        <input type="text" name="payment_method" required value="onpay" hidden>
        <input type="submit" class="text-end mt-2" style="font-size: 11px; font-weight: 600; color: #FAB752; float: right; background: none; border: none;" value="Account error, click to switch>>">
 
</div>
<div class="container">
    <div class="card mt-1 mb-2" style="border: none; border-radius: 0px 0px 8px 8px; box-shadow: 0px 0px 2px 0px #0000002E;
    ">
    <div  style="background-color: #419EFE;">
<h5 class="text-white account-sub-heading p-2">Step 1. Copy payment information</h5>
</div>


<div class="bank-info" style=" border-bottom: 2.5px dotted #80808061;">
    <span class="bank-name" style="font-family: Alike;">Bank Title</span>
    <span class="bank-name referal_code" id="account_number"  onclick="copyToClipboard()" >
       
        
 
One Pay
     
</div>





<div class="bank-info" style=" border-bottom: 2.5px dotted #80808061;">
    <span class="bank-name" style="font-family: Alike;">Rechrage Details</span>
    <span class="bank-name referal_code" id="account_number"  onclick="copyToClipboard()" >
       
        
      <?php echo  $data->gateway->description ?>

     </span>
</div>














<div class="bank-info">
    <span style="font-size: 14px; font-weight: 800; font-family: Abhaya Libre ExtraBold;">Amount:</span>
    <span style="color: #F33533; font-size: 17px; font-weight: 700; font-family: Abhaya Libre ExtraBold;" id="account_title"><?php echo e(showAmount($data['final_amo']) .' '.$data['method_currency']); ?> </span>
</div>
    </div>

     <div class="card mt-1" style="border: 2.5px dotted #80808061; border-radius: 0px 0px 14px 14px;">
        <div  style="background-color: #419EFE;">
    <h5 class="text-white account-sub-heading p-2">Step 2. Transfer the amount you want to recharge to us through Easypasia Transfer.</h5>
    </div>
    <div class="bank-info">
        <span style="font-size: 10px; font-weight: 400; color: #3F3F3F80; font-family: Abhaya Libre;"><span style="color: red; font-size: 14px;">*</span>Please copy your [ID] after payment.
           </span>
        </div>
        </div>

        <div class="card mt-3" style="border: 2.5px dotted #80808061; ">
            <div class="card" style="border: 1px solid #80808075;">
                <div  style="background-color: #419EFE;">
            <h5 class="text-white account-sub-heading p-2">Step 3. Please enter the ID and upload the payment voucher to complete the recharge.</h5>
            </div>
                </div>
           
                <div class="image-uploader">
                     <div class="m-3">
                 
                                <?php if (isset($component)) { $__componentOriginale40beaa5cbfa24869bd0b7ba4d9f41184a3f12f0 = $component; } ?>
<?php $component = App\View\Components\ViserForm::resolve(['identifier' => 'id','identifierValue' => ''.e($gateway->form_id).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('viser-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ViserForm::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale40beaa5cbfa24869bd0b7ba4d9f41184a3f12f0)): ?>
<?php $component = $__componentOriginale40beaa5cbfa24869bd0b7ba4d9f41184a3f12f0; ?>
<?php unset($__componentOriginale40beaa5cbfa24869bd0b7ba4d9f41184a3f12f0); ?>
<?php endif; ?>
                </div>
                    <div class="d-flex mt-2">

                  


                           <!-- Uploaded images will be displayed here -->
                       </div>
               
                     <div class="d-flex mt-2">

                  


                           <!-- Uploaded images will be displayed here -->
                       </div>
                       
                              <div class="d-flex mt-2">

                  


                           <!-- Uploaded images will be displayed here -->
                       </div>
                       
                       
                       
                              <div class="d-flex mt-2">

                  


                           <!-- Uploaded images will be displayed here -->
                       </div>
                       
                       
                       
                       
                </div>
                <div class="d-flex mb-1" style="margin-top: -20px;">
                    <a href="<?php echo e(route ('user.home')); ?>" class="cancel-button btn" type="button" id="cancelPayment">Cancel order</a>
                    <input class="upload-button px-5" type="submit" value="Confirm payment" id="submitBtn">
               
     <button class="upload-button px-5" type="submit" value="Confirm payment"   >
         Confirm Payment</button>
         
                </div>
            </form>
        </div>

    </div>
     <script>
        const imageInput = document.getElementById('imageInput');
        const imageContainer = document.getElementById('imageContainer');
        const addImageBtn = document.getElementById('addImageBtn');

        let currentImageIndex = 0;

        imageInput.addEventListener('change', function () {
            const files = this.files;

            for (let i = 0; i < files.length; i++) {
               if (currentImageIndex >= 2) {
                    addImageBtn.style.display = 'none'; // Hide the button after adding two images
                    break; // Stop processing more files
               }


                const file = files[i];

                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        const imageItem = document.createElement('div');
                        imageItem.classList.add('image-item');
                        imageItem.dataset.index = currentImageIndex;

                        const image = document.createElement('img');
                        image.src = e.target.result;
                        image.classList.add('preview-image');

                        const deleteButton = document.createElement('button');
                        deleteButton.classList.add('delete-button');
                        deleteButton.innerHTML = '&#x2715;'; // Cross symbol
                        deleteButton.addEventListener('click', deleteImage);

                        imageItem.appendChild(image);
                        imageItem.appendChild(deleteButton);
                        imageContainer.appendChild(imageItem);
                        currentImageIndex++;

                        if (currentImageIndex >= 2) {
                            addImageBtn.style.display = 'none'; // Hide the button after adding two images
                            // imageInput.disabled = true; // Disable input after 2 images
                        }
                    };
                    reader.readAsDataURL(file);
                }
            }
            // Check the number of images displayed in the container
            const displayedImages = imageContainer.querySelectorAll('add-image-btn').length;

            if (displayedImages > 2) {
                addImageBtn.style.display = 'none'; // Hide the label if two or more images are displayed
            } else {
                addImageBtn.style.display = 'block'; // Show the label if less than two images are displayed
            }
                });

            function deleteImage() {
                const index = this.parentElement.dataset.index;
                const imageItem = document.querySelector(`[data-index="${index}"]`);
                imageItem.remove();

                currentImageIndex--;

                // Re-enable the input when an image is deleted
                imageInput.disabled = false;
                const addImageBtn = document.querySelector('.add-image-btn');

            if (currentImageIndex < 2) {
                addImageBtn.style.display = 'block'; // Show the label if less than two images are displayed
            }
        }
    </script> 

    <script>
        function copyAccountNumber2() {
            var accountNumber = document.querySelector('.referal-code').textContent;
            navigator.clipboard.writeText(accountNumber);
        }


        const toastTrigger = document.getElementById('liveToastBtn')
        const namesnackbar = document.getElementById("namesnackbar")
        var snackbar = document.getElementById("snackbar");

        if (toastTrigger) {
            toastTrigger.addEventListener('click', () => {
                snackbar.className = "show";
                snackbar.textContent = 'Copy Successfully'
                setTimeout(function(){ snackbar.className = snackbar.className.replace("show", ""); }, 3000);
            })
        }
        if (namesnackbar) {
            namesnackbar.addEventListener('click', () => {
                snackbar.className = "show";
                snackbar.textContent = 'Copy Successfully'
                setTimeout(function(){ snackbar.className = snackbar.className.replace("show", ""); }, 3000);
            })
        }
    </script>

    <script>
        function copyToClipboard() {
            const div = document.getElementById("account_number");

            // Create a temporary textarea element
            const textarea = document.createElement("textarea");

            // Set the value of the textarea to the content of the div
            textarea.value = div.innerText;

            // Append the textarea to the document
            document.body.appendChild(textarea);

            // Select the text in the textarea
            textarea.select();
            textarea.setSelectionRange(0, 99999);

            // Copy the selected text to the clipboard
            document.execCommand("copy");

            // Remove the temporary textarea
            document.body.removeChild(textarea);
        }

        function copyToClipboard2() {
            const account_title = document.getElementById("account_title");

            // Create a temporary textarea element
            const textarea = document.createElement("textarea");

            // Set the value of the textarea to the content of the div
            textarea.value = account_title.innerText;

            // Append the textarea to the document
            document.body.appendChild(textarea);

            // Select the text in the textarea
            textarea.select();
            textarea.setSelectionRange(0, 99999);

            // Copy the selected text to the clipboard
            document.execCommand("copy");

            // Remove the temporary textarea
            document.body.removeChild(textarea);
        }
        document.getElementById('rechargeForm').addEventListener('submit', function (event) {
            var submitButton = document.getElementById("submitBtn");
            submitButton.disabled = true;
            // submitButton.value = "Submitting...";


        });
    </script>



    <script>
        // Retrieve the target datetime from the Django session
        const targetDatetime = new Date("2023-09-30T18:04:22.999790");

        // Function to update the countdown timer
        function updateCountdown() {
            const now = new Date();
            const timeDifference = targetDatetime - now;
            
            if (timeDifference <= 0) {
                // Timer has expired
                document.getElementById("countdown").innerHTML = "Timer Expired!";
                document.getElementById("countdown").style.fontSize = "8px";
                document.getElementById('submitBtn').style.display = 'none';
                document.getElementById('submitBtn2').style.display = 'block';
            } else {
                const minutes = Math.floor(timeDifference / (1000 * 60));
                const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                document.getElementById("countdown").innerHTML = `${minutes}m ${seconds}s`;
            }
        }

        // Update the timer every second
        setInterval(updateCountdown, 1000);

        // Initial update
        updateCountdown();

        function timer_expired() {
            // Hide the modal popup
            var snackbar = document.getElementById("snackbar");
            snackbar.className = "show";
            snackbar.textContent = 'Timer Expired'
            setTimeout(function () {
                snackbar.className = snackbar.className.replace("show", "");
            }, 3000);
        }
    </script>
</body>

    <br><br><br>
    <script src="/static/js/jquery-3.0.0.min.js"></script>
    <script src="/static/js/custom.js"></script>


    <script>
        //     const list = document.querySelectorAll(".nav__item");
        // list.forEach((item) => {
        //   item.addEventListener("click", () => {
        //     list.forEach((item) => item.classList.remove("active"));
        //     item.classList.add("active");
        //   });
        // });
        var notification_num = document.getElementById('notification_num')

        function NotificationFunction() {
            $.ajax({
                url: '/admin_dashboard/view_notification/',
                type: 'GET',

                error: function (xhr, status, error) {
                    console.error('Error calling view function:', error);
                    // Handle the error if necessary
                }
            });
            notification_num.style.display = 'none'
        }
        $(document).ready(function () {
            // Handle pagination link clicks
            $(document).on('click', '#pagination-plan a', function (event) {
                event.preventDefault();
                var pageUrl = $(this).attr('href');

                // Make AJAX request to fetch the new page data
                $.ajax({
                    url: pageUrl,
                    type: 'GET',
                    dataType: 'html',
                    success: function (data) {
                        var result = $('<div />').append(data);
                        var newContent = result.find('#plan-container').html();
                        var newPagination = result.find('#pagination-plan').html();

                        // Update the content and pagination
                        $('#plan-container').html(newContent);
                        $('#pagination-plan').html(newPagination);
                    },
                    error: function () {
                        alert('Error occurred while fetching page.');
                    }
                });
            });
        });
    </script>
    <script src="/static/js/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

</body>
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sites/2a/9/9175d3ede1/public_html/cloudminers.site/tree/core/resources/views/templates/basic/user/payment/manual.blade.php ENDPATH**/ ?>