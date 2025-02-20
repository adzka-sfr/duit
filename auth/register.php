<div class="card mt-5">
    <div class="card-header text-center">
        <h4>Register</h4>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" required>
            <small class="text-danger" id="username-error" style="display: none;">Username wajib diisi</small>
            <small class="text-danger" id="username-exist" style="display: none;">Username sudah ada, coba yang lain</small>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
            <small class="text-danger" id="email-error" style="display: none;">Email wajib diisi</small>
            <small class="text-danger" id="email-exist" style="display: none;">Email sudah ada, coba yang lain</small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
            <small class="text-danger" id="password-error" style="display: none;">Password wajib diisi</small>
        </div>
        <button class="btn btn-primary btn-block" id="register">Register</button>
        <div class="form-group text-center mt-3">
            <a href="main.php?page=login">Already account ? Login here</a>
        </div>
    </div>
</div>