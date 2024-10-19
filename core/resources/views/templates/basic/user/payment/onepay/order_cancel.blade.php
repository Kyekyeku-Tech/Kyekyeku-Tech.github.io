<!DOCTYPE html>
<html lang="en">
    <!-- Include Head -->
    @include('templates.basic.includes.frontend.head')
<body>
    <!-- App Capsule -->
    <div id="appCapsule">
        <div class="container">
            <h2 class="mb-4 text-center fw-bold">আদেশের সময় শেষ হয়েছে৷</h2>
            <a href="{{route('home')}}" class="btn btn-lg btn-dark w-100 fw-bold">অর্ডার বন্ধ করুন</a>
        </div>
    </div>
    <!-- Include Script -->
    @include('templates.basic.includes.frontend.script')
</body>
