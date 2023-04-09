
<!-- Modal Sign Up -->
<div class="modal fade" id="regisModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" id="content">
            <div id="modal-header">
                <h1>Switch</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/register" id="form" method="POST">
                @csrf
                {{-- <div class="mb-8"> --}}
                    <label for="">Email</label>
                    <input type="text" name="email" >
                    @error('email')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                {{-- </div> --}}
                <label for="">Username</label>
                <input type="text" name="nama">
                <label for="">Password</label>
                <input type="text" name="password">
                <label for="">Telephone</label>
                <input type="text" name="telephon">
                <hr>
                <button type="submit" id="login-btn">Sign Up</button>
            </form>
        </div>
    </div>
</div>

<!-- Modal Login -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" id="content">
            <div id="modal-header">
                <h1>Switch</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" id="form">
                <label for="">Username</label>
                <input type="text">
                <label for="">Password</label>
                <input type="text">
                {{-- <div id="error-msg">
                    <p id="msg">Error</p>
                </div> --}}
                <button value="Login" id="login-btn">Sign In</button>
            </form>
        </div>
    </div>
</div>


