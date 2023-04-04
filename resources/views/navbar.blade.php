<!-- NAVBAR -->
<div class="container-fluid d-flex-row bg-dark" >
    <div class="row align-items-center justify-content-between py-2">

        <!-- LOGO -->
        <div class="col-4 align-items center px-5">
            <img src="{{asset('images/logo_switch.png')}}" alt="" id="image-logo">
        </div>

        <!-- SEARCH -->
        <div class="col-4 py-3">
            <form class="form-inline">
                <input type="search" placeholder="Search for dota 2 items" aria-label="Search"
                    id="search-navbar" class="form-control mr-sm-2" onkeyup="search_home()">
            </form>

        </div>

        <!-- BUTTONS -->
        <div class="col-4 align-items-center py-3">
            <div class="d-flex justify-content-end" id="buttons">
                <button class="btn success px-3" id="sign-in-button" data-bs-toggle="modal" data-bs-target="#loginModal">Sign in</button>

                <input class="btn btn-outline rounded" type="button" value="Sign up" id="sign-up-button" data-bs-toggle="modal" data-bs-target="#regisModal">
            </div>
        </div>
    </div>
</div>
