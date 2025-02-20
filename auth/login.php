<div class="card mt-5">
    <div class="card-header text-center">
        <h4>Login</h4>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" required>
            <small class="text-danger" id="username-error" style="display: none;">Username wajib diisi</small>
            <small class="text-danger" id="username-not-exist" style="display: none;">Username tidak terdaftar</small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
            <small class="text-danger" id="password-error" style="display: none;">Password salah</small>
        </div>
        <button class="btn btn-primary btn-block" id="login">Login</button>
        <div class="form-group text-center mt-3">
            <a href="main.php?page=register">New user? Register here</a>
        </div>
    </div>
</div>