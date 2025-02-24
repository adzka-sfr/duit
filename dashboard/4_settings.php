<div class="card mb-3 mt-3" style="padding-left: 0px; padding-right: 0px;">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h5 class="card-title">Pengaturan</h5>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12 mt-1">
                <div class="form-group">
                    <label for="colorInput">Tema aplikasi</label>
                    <input type="color" class="form-control" id="colorInput" name="color">
                    <span id="error-cat-budget" style="font-size:0.7em"><i class="fa-solid fa-circle-info"></i> Tema akan berdampak setelah login ulang</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="text-align: right;">
                <button class="btn btn-sm btn-primary" style="font-size: 0.7em;" id="save-theme">Update</button>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="colorInput">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                    <span id="error-email" style="font-size:0.7em"><i class="fa-solid fa-circle-info"></i> Username dan Password akan dikirim ke email jika lupa</span>
                    <span id="error-email-empty" style="color: #DC3545; display: none; font-size:0.7em"><i class="fa-solid fa-circle-info"></i> Masukkan email jika mau update</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="text-align: right;">
                <button class="btn btn-sm btn-primary" style="font-size: 0.7em;" id="save-email">Update</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        getEmail();
    });

    $('#save-theme').click(function() {
        var color = $('#colorInput').val();
        $.ajax({
            url: '4_data/act_set_theme.php',
            type: 'POST',
            data: {
                color: color
            },
            success: function(data) {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: 'Tema berhasil diperbarui',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    });

    // function to get email
    function getEmail() {
        $.ajax({
            url: '4_data/act_get_email.php',
            type: 'GET',
            success: function(data) {
                $('#email').val(data);
            }
        });
    }

    // function to save email
    $('#save-email').click(function() {
        var email = $('#email').val();
        var emailPattern = /^[a-zA-Z0-9._%+-]+@(gmail\.com|outlook\.com|yahoo\.com)$/;
        if (email == "") {
            $('#error-email-empty').show();
        } else if (!emailPattern.test(email)) {
            Swal.fire({
                icon: 'error',
                title: 'Email tidak valid',
                text: 'Harap masukkan email yang valid (@gmail.com, @outlook.com, @yahoo.com)',
                showConfirmButton: true
            });
        } else {
            $.ajax({
                url: '4_data/act_set_email.php',
                type: 'POST',
                data: {
                    email: email
                },
                success: function(data) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Email berhasil diperbarui',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            });
        }
    });
</script>