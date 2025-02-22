<div class="card mb-4" style="padding-left: 0px; padding-right: 0px;">
    <div class="card-body pt-0">
        <div class="row">
            <div class="col-12 text-center" style="color:darkgrey; font-size: 1em;">
                Kekayaan
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center mb-3">
                <h3><sup>Rp</sup> 1,456,445 </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-6 text-center" style="color:darkgrey; font-size: 1em;">
                Bulan lalu
            </div>
            <div class="col-6 text-center font-weight-bold">
                Bulan ini
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr style="margin: 0; padding: 0;">
                        <td style="margin: 0; padding: 0;">Saldo awal</td>
                        <td style="text-align: right; margin: 0; padding: 0;">213,432,122</td>
                    </tr>
                    <tr style="margin: 0; padding: 0;">
                        <td style="margin: 0; padding: 0;">Saldo akhir</td>
                        <td style="text-align: right; margin: 0; padding: 0;">432,122</td>
                    </tr>
                    <tr style="margin: 0; padding: 0;">
                        <td style="margin: 0; padding: 0;"></td>
                        <td style="width: 30%; margin: 0; padding: 0;">
                            <hr style="margin: 0; padding: 0;">
                        </td>
                    </tr>
                    <tr style="margin: 0; padding: 0;">
                        <td style="margin: 0; padding: 0;"></td>
                        <th style="text-align: right; margin: 0; padding: 0;">-213,000,000</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<div id="data-input" style="display: none;">
    <div class="card mt-2" style="padding-left: 0px; padding-right: 0px;">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link nav-input active" data-toggle="tab" href="#pengeluaran">Pengeluaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-input" data-toggle="tab" href="#pemasukan">Pemasukan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-input" data-toggle="tab" href="#topup">Top Up</a>
                </li>
            </ul>
        </div>
        <div class="card-body" id="pengeluaran">
            <div class="row">
                <div class="col-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kategori</label>
                        <select class="search-biasa" style="width: 100%;height:100px" name="category-out" id="category-out">
                        </select>
                        <span id="error-category-out" style="color: #DC3545; display: none;"><i class="fa-solid fa-circle-info"></i> Silahkan memilih kategory</span>
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <div class="form-group input-group-sm">
                        <label for="exampleInputEmail1">Anggaran</label>
                        <input class="form-control text-danger" disabled type="text" value="-350,000" name="budget" id="budget">
                        <span id="error-start-hat" style="color: #DC3545; display: none;"><i class="fa-solid fa-circle-info"></i> Silahkan memasukkan waktu start</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Metode</label>
                        <select class="search-biasa" style="width: 100%;" name="method-out" id="method-out">
                        </select>
                        <span id="error-start-hat" style="color: #DC3545; display: none;"><i class="fa-solid fa-circle-info"></i> Silahkan memasukkan waktu start</span>
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <div class="form-group input-group-sm">
                        <label for="exampleInputEmail1">Saldo</label>
                        <input class="form-control text-danger" disabled type="text" value="-350,000" name="saldo" id="saldo">
                        <span id="error-start-hat" style="color: #DC3545; display: none;"><i class="fa-solid fa-circle-info"></i> Silahkan memasukkan waktu start</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="basic-url" class="form-label">Nominal</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">Rp</span>
                            <input type="number" class="form-control" oninput="validateInputJustNumber(event)" id="nominal-input" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Detail</label>
                        <textarea name="detail" id="detail" class="form-control"></textarea>
                        <span id="error-start-hat" style="color: #DC3545; display: none;"><i class="fa-solid fa-circle-info"></i> Silahkan memasukkan waktu start</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Waktu</label>
                        <input class="form-control" type="datetime-local" name="time-out" id="time-out">
                        <span id="error-time-out" style="color: #DC3545; display: none;"><i class="fa-solid fa-circle-info"></i> Silahkan memasukkan waktu start</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 text-center">
                    <button class="btn btn-secondary btn-sm btn-cancel" style="width: 80%;">Cancel</button>
                </div>
                <div class="col-6 text-center">
                    <button class="btn btn-primary btn-sm" style="width: 80%;">Save</button>
                </div>
            </div>
        </div>
        <div class="card-body" id="pemasukan" style="display: none;">
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kategori</label>
                        <select class="search-biasa" style="width: 100%;" name="category-in" id="category-in">
                        </select>
                        <span id="error-category-in" style="color: #DC3545; display: none;"><i class="fa-solid fa-circle-info"></i> Silahkan memasukkan waktu start</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Metode</label>
                        <select class="search-biasa" style="width: 100%;" name="method-in" id="method-in">
                        </select>
                        <span id="error-method-in" style="color: #DC3545; display: none;"><i class="fa-solid fa-circle-info"></i> Silahkan memilih metode</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="basic-url" class="form-label">Nominal</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">Rp</span>
                            <input type="number" class="form-control" oninput="validateInputJustNumber(event)" id="nominal-input" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Detail</label>
                        <textarea name="detail" id="detail" class="form-control"></textarea>
                        <span id="error-start-hat" style="color: #DC3545; display: none;"><i class="fa-solid fa-circle-info"></i> Silahkan memasukkan waktu start</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Waktu</label>
                        <input class="form-control" type="datetime-local" name="time-in" id="time-in">
                        <span id="error-time-in" style="color: #DC3545; display: none;"><i class="fa-solid fa-circle-info"></i> Silahkan memasukkan waktu start</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 text-center">
                    <button class="btn btn-secondary btn-sm btn-cancel" style="width: 80%;">Cancel</button>
                </div>
                <div class="col-6 text-center">
                    <button class="btn btn-primary btn-sm" style="width: 80%;">Save</button>
                </div>
            </div>
        </div>
        <div class="card-body" id="topup" style="display: none;">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Dari</label>
                        <select class="search-biasa" style="width: 100%;" name="topup-from" id="topup-from" onchange="getMethodWithException(this.value)">
                        </select>
                        <span id="error-start-hat" style="color: #DC3545; display: none;"><i class="fa-solid fa-circle-info"></i> Silahkan memasukkan waktu start</span>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group input-group-sm">
                        <label for="exampleInputEmail1">Saldo</label>
                        <input class="form-control text-danger" disabled type="text" value="-350,000" name="saldo" id="saldo1">
                        <span id="error-start-hat" style="color: #DC3545; display: none;"><i class="fa-solid fa-circle-info"></i> Silahkan memasukkan waktu start</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ke</label>
                        <select disabled class="search-biasa" style="width: 100%;" name="topup-to" id="topup-to">
                        </select>
                        <span id="error-start-hat" style="color: #DC3545; display: none;"><i class="fa-solid fa-circle-info"></i> Silahkan memasukkan waktu start</span>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group input-group-sm">
                        <label for="exampleInputEmail1">Saldo</label>
                        <input class="form-control text-danger" disabled type="text" value="-350,000" name="saldo" id="saldo2">
                        <span id="error-start-hat" style="color: #DC3545; display: none;"><i class="fa-solid fa-circle-info"></i> Silahkan memasukkan waktu start</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="basic-url" class="form-label">Nominal</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">Rp</span>
                            <input type="number" class="form-control" oninput="validateInputJustNumber(event)" id="nominal-input" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Detail</label>
                        <textarea name="detail" id="detail" class="form-control"></textarea>
                        <span id="error-start-hat" style="color: #DC3545; display: none;"><i class="fa-solid fa-circle-info"></i> Silahkan memasukkan waktu start</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Waktu</label>
                        <input class="form-control" type="datetime-local" name="start" id="start-hat">
                        <span id="error-start-hat" style="color: #DC3545; display: none;"><i class="fa-solid fa-circle-info"></i> Silahkan memasukkan waktu start</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 text-center">
                    <button class="btn btn-secondary btn-sm btn-cancel" style="width: 80%;">Cancel</button>
                </div>
                <div class="col-6 text-center">
                    <button class="btn btn-primary btn-sm" style="width: 80%;">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="data-report">
    <?php
    for ($i = 30; $i > 0; $i--) {
    ?>
        <div class="card mt-2" style="padding-left: 0px; padding-right: 0px;">
            <div class="card-body">
                <table style="width: 100%;">
                    <tr>
                        <th class="align-middle" style="font-size: 2em; padding-left: 0px; padding-right: 10px; width: 5%; text-align: center;">
                            <?= $i ?>
                        </th>
                        <td class="align-middle" style="padding-left: 10px; padding-right: 0px;">
                            <div class="row">
                                <div class="col-12" style="font-size: 0.8em; color: darkgrey;">
                                    Monday
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12" style="font-size: 0.8em; color: darkgrey;">
                                    Juni 2024
                                </div>
                            </div>
                        </td>
                        <th class="align-top" style="text-align: right; padding-left: 0px; padding-right: 0px;">
                            -723,000
                        </th>
                    </tr>

                    <tr>
                        <th class="align-middle" style="font-size: 2em; padding-left: 0px; padding-right: 10px; width: 5%; text-align: center">
                            <i class="fa-solid fa-bus"></i>
                        </th>
                        <td class="align-top" style="padding-left: 10px; padding-right: 0px;">
                            <div class="row">
                                <div class="col-12" style="font-size: 0.8em;">
                                    Transportasi
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12" style="font-size: 0.8em; color: darkgrey;">
                                    Perjalanan ke kantor
                                </div>
                            </div>
                        </td>
                        <th class="align-top text-danger" style="text-align: right; padding-left: 0px; padding-right: 0px; font-size: 0.8em;">
                            3,000
                        </th>
                    </tr>

                    <tr>
                        <th class="align-middle" style="font-size: 2em; padding-left: 0px; padding-right: 10px; width: 5%; text-align: center">
                            <i class="fa-solid fa-utensils"></i>
                        </th>
                        <td class="align-top" style="padding-left: 10px; padding-right: 0px;">
                            <div class="row">
                                <div class="col-12" style="font-size: 0.8em;">
                                    Makan
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12" style="font-size: 0.8em; color: darkgrey;">
                                    Warteg kharisma bahari
                                </div>
                            </div>
                        </td>
                        <th class="align-top text-danger" style="text-align: right; padding-left: 0px; padding-right: 0px; font-size: 0.8em;">
                            20,000
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    <?php
    }
    ?>
</div>

<hr style="margin-bottom: 50px;">

<button class="btn btn-primary btn-floating" id="add-data" style="position: fixed; bottom: 80px; right: 20px;">
    <i class="fa fa-plus"></i>
</button>

<script>
    $(document).ready(function() {
        $('#add-data').click(function() {
            $('#data-input').toggle();
            $('#data-report').toggle();
            $('#add-data').toggle();
            getCategory('pengeluaran');
            getCategory('pemasukan');
            getMethod();
        });

        $('.btn-cancel').click(function() {
            $('#data-input').toggle();
            $('#data-report').toggle();
            $('#add-data').toggle();
        });

        $('.nav-link.nav-input').click(function() {
            $('.nav-link.nav-input').removeClass('active');
            $(this).addClass('active');
            var target = $(this).attr('href').substring(1);
            $('#data-input .card-body').hide();
            $('#' + target).show();

            // getCategory('pengeluaran');
            // getCategory('pemasukan');
            // getMethod();
        });
    });

    // function to get list of category
    function getCategory(type) {
        $.ajax({
            url: '1_data/get_category.php',
            type: 'POST',
            data: {
                type: type
            },
            success: function(response) {
                if (type == 'pengeluaran') {
                    $('#category-out').html(response);
                } else {
                    $('#category-in').html(response);
                };
            }
        });
    }

    // function to get list of method
    function getMethod() {
        $.ajax({
            url: '1_data/get_method.php',
            type: 'POST',
            success: function(response) {
                $('#method-out').html(response);
                $('#method-in').html(response);
                $('#topup-from').html(response);
            }
        });
    }

    // function to get list of method with exception
    function getMethodWithException(exception) {
        $('#topup-to').prop('disabled', true);
        $.ajax({
            url: '1_data/get_method.php',
            type: 'POST',
            data: {
                exception: exception
            },
            success: function(response) {
                $('#topup-to').prop('disabled', false);
                $('#topup-to').html(response);
            }
        });
    }

    // function to get actual date and time
    function getDateTime() {
        var date = new Date();
        var year = date.getFullYear();
        var month = date.getMonth() + 1;
        var day = date.getDate();
        var hour = date.getHours();
        var minute = date.getMinutes();
        var second = date.getSeconds();
        var dateTime = year + '-' + month + '-' + day + 'T' + hour + ':' + minute + ':' + second;
        return dateTime;
    }
</script>