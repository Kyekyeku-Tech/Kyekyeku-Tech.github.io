<style>
    #appCapsule{
        padding-top: 56px;
    }
</style>
<nav class="navbar fixed-top navbar-dark bg-dark" style="min-height: 56px;">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div onclick="history.back()" class="col-auto btn">
                <i class="fas fa-angle-left text-light" style="font-size: 20px"></i>
            </div>
            <div class="col text-center">
                <a class="navbar-brand me-0" href="{{ route('home') }}">
                    <h5 class="mb-0 small-font-lg text-light">{{@$pageTitle}}</h5>
                </a>
            </div>
            <div onclick="location.reload();" class="col-auto btn">
                <i class="fas fa-sync-alt text-light"></i>
            </div>
        </div>
    </div>
</nav>
