<!doctype html>
<html lang="en">

<head>
  <title>Pay Taka Deposit</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
  <style>
    .bg-light {
        background-color: #ebebeb !important;
    }
    .text-primary {
        color: #00c0ff !important;
    }
    .btn-primary {
        border: #00c0ff !important;
        background: #00c0ff !important;
    }
    .form-control::placeholder {
        font-size: 10px;
        overflow: hidden;
    }
  </style>

</head>

<body>
    <div class="container">
        <div class="text-center mt-4">
            <img height="60px" src="https://seeklogo.com/images/B/bkash-logo-FBB258B90F-seeklogo.com.png" alt="">
            <h1 class="mb-3 mt-2 fw-bold" style="color: #707070">
                উত্তোলন
            </h1>
            <p class="mb-0 text-primary" style="font-size: 12px">
                সময়সীমা 05:00
            </p>
        </div>
        <div class="card my-4"></div>

        <div class="row align-items-center">
            <div class="col-5">
                <p class="mb-0 fw-bold text-secondary" style="font-size: 12px">ডিপোজিট পরিমান:</p>
            </div>
            <div class="col-7">
                <div class="bg-light rounded p-2">
                    <div class="row">
                        <div class="col pe-0">
                            <span class="mb-0 fw-bold text-secondary">{{$general->cur_sym}}</span>
                            <span class="mb-0 text-secondary">500.00</span>
                        </div>
                        <div class="col-auto ps-1">
                            <i class="fa-regular fa-copy text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center mt-3">
            <div class="col-5">
                <p class="mb-0 fw-bold text-secondary" style="font-size: 12px">এজেন্ট নম্বর:</p>
            </div>
            <div class="col-7">
                <div class="bg-light rounded p-2">
                    <div class="row">
                        <div class="col pe-0">
                            <span class="mb-0 text-secondary">01700000000</span>
                        </div>
                        <div class="col-auto ps-1">
                            <i class="fa-regular fa-copy text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card my-4"></div>

        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row align-items-center mt-3">
                <div class="col-5">
                    <p class="mb-0 fw-bold text-secondary" style="font-size: 12px">সেন্ড মানি ফ্রম:</p>
                </div>
                <div class="col-7">
                    <input type="text" name="send_money_form" class="form-control" placeholder="যে নাম্বারে সেন্ড মানি করবেন" required>
                    <div class="invalid-feedback">নগদ থেকে উত্তোলন বাধ্যতামূলক।</div>
                </div>
            </div>
            <div class="row align-items-center mt-3">
                <div class="col-5">
                    <p class="mb-0 fw-bold text-secondary" style="font-size: 12px">ট্রানজেকশন আইডি:</p>
                </div>
                <div class="col-7">
                    <input type="text" name="transaction_id" class="form-control" placeholder="এখানে আপনার ট্রানজেকশন আইডিটা লিখুন।" required>
                    <div class="invalid-feedback">ট্রানজেকশন আইডি বাধ্যতামূলক।</div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-5">নিশ্চিত করুন</button>
        </form>
    </div>
  <!-- Bootstrap JavaScript Libraries 5.2.3 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
  </script>
  <script>
    // window.history.replaceState("", "", 'https://checkout');
    window.history.pushState("object or string", "Title 2", "new-url");
  </script>
  <script>
    (() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
        }

        form.classList.add('was-validated')
        }, false)
    })
    })()
  </script>
</body>

</html>
