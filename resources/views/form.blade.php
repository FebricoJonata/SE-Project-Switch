
<!-- Modal Sign Up -->
<div class="modal fade" id="regisModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" id="content">
            <div id="modal-header">
                <h1>Switch</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div>

                <form action="/register" id="form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Email</label>
                    <input type="text" name="email" >
                    @error('email')
                    <div class="alert alert-danger">
                    {{ $message }}
                    </div>
                    @enderror
                    
                    <label for="">Username</label>
                    <input type="text" name="nama">
                    @error('nama')
                    <div class="alert alert-danger">
                    {{ $message }}
                    </div>
                    @enderror
                    <label for="">Password</label>
                    <input type="password" name="password">
                    @error('password')
                    <div class="alert alert-danger">
                    {{ $message }}
                    </div>
                    @enderror
                    <label for="">Telephone</label>
                    <input type="text" name="telphone">
                    @error('telphone')
                    <div class="alert alert-danger">
                    {{ $message }}
                    </div>
                    @enderror
                    <hr>
                    <button type="submit" id="login-btn">Sign Up</button>
                </form>
            </div>
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
            <form action="/login" id="form" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="">Username</label>
                <input type="text" name="nama">
                @error('nama')
                <div class="alert alert-danger">
                {{ $message }}
                </div>
                @enderror
                <label for="">Password</label>
                <input type="password" name="password">
                @error('password')
                <div class="alert alert-danger">
                {{ $message }}
                </div>
                @enderror
                <hr>
                <button value="Login" id="login-btn">Sign In</button>
            </form>
        </div>
    </div>
</div>


