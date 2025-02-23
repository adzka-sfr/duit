<div class="card mb-4" style="padding-left: 0px; padding-right: 0px;">
    <div class="card-body pt-0">
        <div class="row">
            <div class="col-12 text-center" style="color:darkgrey; font-size: 1em;">
                Kekayaan
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center mb-3">
                <h3 id='kekayaan'><sup>Rp</sup> 0 </h3>
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
                        <td style="text-align: right; margin: 0; padding: 0;" id="last-month-balance"></td>
                    </tr>
                    <tr style="margin: 0; padding: 0;">
                        <td style="margin: 0; padding: 0;">Saldo akhir</td>
                        <td style="text-align: right; margin: 0; padding: 0;" id="this-month-balance"></td>
                    </tr>
                    <tr style="margin: 0; padding: 0;">
                        <td style="margin: 0; padding: 0;"></td>
                        <td style="width: 30%; margin: 0; padding: 0;">
                            <hr style="margin: 0; padding: 0;">
                        </td>
                    </tr>
                    <tr style="margin: 0; padding: 0;">
                        <td style="margin: 0; padding: 0;"></td>
                        <th style="text-align: right; margin: 0; padding: 0;" id="difference-balance"></th>
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
                        <select class="search-biasa" style="width: 100%;height:100px" onchange="getBudget()" name="category-out" id="category-out">
                        </select>
                        <span id="error-category-out" style="color: #DC3545; display: none; font-size:0.7em"><i class="fa-solid fa-circle-info"></i> Silahkan memilih kategory</span>
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <div class="form-group input-group-sm">
                        <label for="exampleInputEmail1">Sisa anggaran</label>
                        <input class="form-control" disabled type="text" name="budget" id="budget" style="text-align: right;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Metode</label>
                        <select class="search-biasa" style="width: 100%;" onchange="getSaldo()" name="method-out" id="method-out">
                        </select>
                        <span id="error-method-out" style="color: #DC3545; display: none; font-size:0.7em"><i class="fa-solid fa-circle-info"></i> Silahkan memilih metode</span>
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <div class="form-group input-group-sm">
                        <label for="exampleInputEmail1">Saldo</label>
                        <input class="form-control" disabled type="text" name="saldo" id="saldo" style="text-align: right;">
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
                            <input type="number" class="form-control" oninput="validateInputJustNumber(event)" id="nominal-out" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                        <span id="error-nominal-out" style="color: #DC3545; display: none; font-size:0.7em"><i class="fa-solid fa-circle-info"></i> Silahkan memasukkan nominal</span>
                        <span id="error-nominal-out2" style="color: #DC3545; display: none; font-size:0.7em"><i class="fa-solid fa-circle-info"></i> Nominal harus lebih dari 0</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Detail</label>
                        <textarea name="detail" id="detail-out" class="form-control"></textarea>
                        <span id="error-detail-out" style="color: #DC3545; display: none; font-size:0.7em"><i class="fa-solid fa-circle-info"></i> Detail wajib diisi</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Waktu</label>
                        <input class="form-control" type="datetime-local" onchange="getBudget()" name="time-out" id="time-out">
                        <span id="error-time-out" style="color: #DC3545; display: none; font-size:0.7em"><i class="fa-solid fa-circle-info"></i> Silahkan memasukkan waktu</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 text-center">
                    <button class="btn btn-secondary btn-sm btn-cancel" style="width: 80%;">Cancel</button>
                </div>
                <div class="col-6 text-center">
                    <button class="btn btn-primary btn-sm" style="width: 80%;" id="save-out">Save</button>
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
                        <span id="error-category-in" style="color: #DC3545; display: none; font-size:0.7em"><i class="fa-solid fa-circle-info"></i> Silahkan memilih kategori</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Metode</label>
                        <select class="search-biasa" style="width: 100%;" name="method-in" id="method-in">
                        </select>
                        <span id="error-method-in" style="color: #DC3545; display: none; font-size:0.7em"><i class="fa-solid fa-circle-info"></i> Silahkan memilih metode</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="basic-url" class="form-label">Nominal</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">Rp</span>
                            <input type="number" class="form-control" oninput="validateInputJustNumber(event)" id="nominal-in" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                        <span id="error-nominal-in" style="color: #DC3545; display: none; font-size:0.7em"><i class="fa-solid fa-circle-info"></i> Silahkan memasukkan nominal</span>
                        <span id="error-nominal-in2" style="color: #DC3545; display: none; font-size:0.7em"><i class="fa-solid fa-circle-info"></i> Nominal harus lebih dari 0</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Detail</label>
                        <textarea name="detail" id="detail-in" class="form-control"></textarea>
                        <span id="error-detail-in" style="color: #DC3545; display: none; font-size:0.7em"><i class="fa-solid fa-circle-info"></i> Silahkan memasukkan detail</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Waktu</label>
                        <input class="form-control" type="datetime-local" name="time-in" id="time-in">
                        <span id="error-time-in" style="color: #DC3545; display: none; font-size:0.7em"><i class="fa-solid fa-circle-info"></i> Silahkan memasukkan waktu</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 text-center">
                    <button class="btn btn-secondary btn-sm btn-cancel" style="width: 80%;">Cancel</button>
                </div>
                <div class="col-6 text-center">
                    <button class="btn btn-primary btn-sm" style="width: 80%;" id="save-in">Save</button>
                </div>
            </div>
        </div>
        <div class="card-body" id="topup" style="display: none;">
            <div class="row">
                <div class="col-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Dari</label>
                        <select class="search-biasa" style="width: 100%;" name="topup-from" id="topup-from" onchange="getMethodWithException(this.value),getSaldoTopup(this.value,'from')">
                        </select>
                        <span id="error-topup-from" style="color: #DC3545; display: none; font-size:0.7em"><i class="fa-solid fa-circle-info"></i> Dari mana</span>
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <div class="form-group input-group-sm">
                        <label for="exampleInputEmail1">Saldo</label>
                        <input class="form-control" disabled type="text" name="saldo-from" id="saldo-from">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ke</label>
                        <select disabled class="search-biasa" style="width: 100%;" name="topup-to" id="topup-to" onchange="getSaldoTopup(this.value,'to')">
                        </select>
                        <span id="error-topup-to" style="color: #DC3545; display: none; font-size:0.7em"><i class="fa-solid fa-circle-info"></i> Ke mana</span>
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <div class="form-group input-group-sm">
                        <label for="exampleInputEmail1">Saldo</label>
                        <input class="form-control" disabled type="text" name="saldo-to" id="saldo-to">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="basic-url" class="form-label">Nominal</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">Rp</span>
                            <input type="number" class="form-control" oninput="validateInputJustNumber(event)" id="nominal-topup" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                        <span id="error-nominal-topup" style="color: #DC3545; display: none; font-size:0.7em"><i class="fa-solid fa-circle-info"></i> Nominal wajib diisi</span>
                        <span id="error-nominal-topup2" style="color: #DC3545; display: none; font-size:0.7em"><i class="fa-solid fa-circle-info"></i> Nominal wajib diisi</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Waktu</label>
                        <input class="form-control" type="datetime-local" name="time-topup" id="time-topup">
                        <span id="error-time-topup" style="color: #DC3545; display: none;"><i class="fa-solid fa-circle-info"></i> Silahkan memasukkan waktu start</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 text-center">
                    <button class="btn btn-secondary btn-sm btn-cancel" style="width: 80%;">Cancel</button>
                </div>
                <div class="col-6 text-center">
                    <button class="btn btn-primary btn-sm" style="width: 80%;" id="save-topup">Save</button>
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
        getKekayaan();

        $('#add-data').click(function() {
            $('#data-input').toggle();
            $('#data-report').toggle();
            $('#add-data').toggle();
            getCategory('pengeluaran');
            getCategory('pemasukan');
            getMethod();
            getDateTime();
        });

        $('.btn-cancel').click(function() {
            $('#data-input').toggle();
            $('#data-report').toggle();
            $('#add-data').toggle();

            // clear all field
            $('#budget').val('');
            $('#saldo').val('');
            $('#nominal-out').val('');
            $('#detail-out').val('');
            $('#time-out').val('');
            $('#nominal-in').val('');
            $('#detail-in').val('');
            $('#time-in').val('');
            $('#nominal-topup').val('');
            $('#time-topup').val('');
            $('#saldo-from').val('');
            $('#saldo-to').val('');
            $('#topup-to').html('<option value="">Pilih metode</option>');
            $('#topup-to').prop('disabled', true);
        });

        $('.nav-link.nav-input').click(function() {
            $('.nav-link.nav-input').removeClass('active');
            $(this).addClass('active');
            var target = $(this).attr('href').substring(1);
            $('#data-input .card-body').hide();
            $('#' + target).show();
            getDateTime();
        });
    });

    // function to get kekayaan
    function getKekayaan() {
        $.ajax({
            url: '1_data/get_kekayaan.php',
            type: 'POST',
            success: function(response) {
                var response = JSON.parse(response);
                var formattedKekayaan = parseInt(response.kekayaan).toLocaleString('en-US');
                $('#kekayaan').html('<sup>Rp</sup> ' + formattedKekayaan);
                $('#last-month-balance').html('<sup>Rp</sup> ' + parseInt(response.last_month_balance).toLocaleString('en-US'));
                $('#this-month-balance').html('<sup>Rp</sup> ' + parseInt(response.this_month_balance).toLocaleString('en-US'));
                var difference = parseInt(response.this_month_balance) - parseInt(response.last_month_balance);
                if (difference > 0) {
                    $('#difference-balance').html('<sup>Rp</sup> ' + difference.toLocaleString('en-US')).addClass('text-success').removeClass('text-danger');
                } else if (difference < 0) {
                    $('#difference-balance').html('<sup>Rp</sup> ' + difference.toLocaleString('en-US')).addClass('text-danger').removeClass('text-success');
                } else {
                    $('#difference-balance').html('<sup>Rp</sup> ' + difference.toLocaleString('en-US')).removeClass('text-success text-danger');
                }
            }
        });
    }

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
        $('#saldo-to').val('');
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
        var month = String(date.getMonth() + 1).padStart(2, '0');
        var day = String(date.getDate()).padStart(2, '0');
        var hour = String(date.getHours()).padStart(2, '0');
        var minute = String(date.getMinutes()).padStart(2, '0');
        var second = String(date.getSeconds()).padStart(2, '0');
        var dateTime = year + '-' + month + '-' + day + 'T' + hour + ':' + minute + ':' + second;

        $('#time-out').val(dateTime);
        $('#time-in').val(dateTime);
        $('#time-topup').val(dateTime);
    }

    // function to get budget
    function getBudget() {
        var category = $('#category-out').val();
        var time = $('#time-out').val();
        $.ajax({
            url: '1_data/get_budget.php',
            type: 'POST',
            data: {
                category: category,
                time: time
            },
            success: function(response) {
                if (!isNaN(response)) {
                    response = parseInt(response);
                    if (response > 0) {
                        $('#budget').addClass('text-success').removeClass('text-danger');
                    } else if (response < 0) {
                        $('#budget').addClass('text-danger').removeClass('text-success');
                    } else {
                        $('#budget').removeClass('text-success text-danger');
                    }
                    response = response.toLocaleString('en-US');
                }
                $('#budget').val(response);
            }
        });
    }

    // function to get saldo
    function getSaldo() {
        var methode = $('#method-out').val();
        $.ajax({
            url: '1_data/get_saldo.php',
            type: 'POST',
            data: {
                methode: methode
            },
            success: function(response) {
                if (!isNaN(response)) {
                    response = parseInt(response);
                    if (response > 0) {
                        $('#saldo').addClass('text-success').removeClass('text-danger');
                    } else if (response < 0) {
                        $('#saldo').addClass('text-danger').removeClass('text-success');
                    } else {
                        $('#saldo').removeClass('text-success text-danger');
                    }
                    response = response.toLocaleString('en-US');
                }
                $('#saldo').val(response);
            }
        });
    }

    // function to get saldo topup
    function getSaldoTopup(id, type) {
        var methode = $('#topup-' + type).val();
        $.ajax({
            url: '1_data/get_saldo.php',
            type: 'POST',
            data: {
                methode: id
            },
            success: function(response) {
                if (!isNaN(response)) {
                    response = parseInt(response);
                    if (response > 0) {
                        $('#saldo-' + type).addClass('text-success').removeClass('text-danger');
                    } else if (response < 0) {
                        $('#saldo-' + type).addClass('text-danger').removeClass('text-success');
                    } else {
                        $('#saldo-' + type).removeClass('text-success text-danger');
                    }
                    response = response.toLocaleString('en-US');
                }
                $('#saldo-' + type).val(response);
            }
        });
    }

    // function to save outcome
    $('#save-out').click(function() {
        var category = $('#category-out').val();
        var methode = $('#method-out').val();
        var nominal = $('#nominal-out').val();
        var detail = $('#detail-out').val();
        var time = $('#time-out').val();
        if (!category) {
            $('#error-category-out').show();
            return;
        } else {
            $('#error-category-out').hide();
        }

        if (!methode) {
            $('#error-method-out').show();
            return;
        } else {
            $('#error-method-out').hide();
        }

        if (!nominal) {
            $('#error-nominal-out').show();
            return;
        } else {
            $('#error-nominal-out').hide();
        }

        if (nominal <= 0) {
            $('#error-nominal-out2').show();
            return;
        } else {
            $('#error-nominal-out2').hide();
        }

        if (!detail) {
            $('#error-detail-out').show();
            return;
        } else {
            $('#error-detail-out').hide();
        }

        if (!detail.trim()) {
            $('#error-detail-out').show();
            return;
        } else {
            $('#error-detail-out').hide();
        }

        if (!time) {
            $('#error-time-out').show();
            return;
        } else {
            $('#error-time-out').hide();
        }

        var saldo = parseInt($('#saldo').val().replace(/,/g, ''));
        if (saldo - nominal < 0) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                html: 'Saldo tidak mencukupi!',
            });
            return;
        }

        $.ajax({
            url: '1_data/save_outcome.php',
            type: 'POST',
            data: {
                category: category,
                methode: methode,
                nominal: nominal,
                detail: detail,
                time: time
            },
            success: function(response) {
                if (response == 'success') {
                    $('#budget').val('');
                    $('#saldo').val('');
                    $('#nominal-out').val('');
                    $('#detail-out').val('');
                    $('#time-out').val('');
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data berhasil disimpan',
                    });
                    $('#data-input').toggle();
                    $('#data-report').toggle();
                    $('#add-data').toggle();
                    getKekayaan();
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Data gagal disimpan',
                    });
                }
            }
        });
    });

    // function to save income
    $('#save-in').click(function() {
        var category = $('#category-in').val();
        var methode = $('#method-in').val();
        var nominal = $('#nominal-in').val();
        var detail = $('#detail-in').val();
        var time = $('#time-in').val();
        if (!category) {
            $('#error-category-in').show();
            return;
        } else {
            $('#error-category-in').hide();
        }

        if (!methode) {
            $('#error-method-in').show();
            return;
        } else {
            $('#error-method-in').hide();
        }

        if (!nominal) {
            $('#error-nominal-in').show();
            return;
        } else {
            $('#error-nominal-in').hide();
        }

        if (nominal <= 0) {
            $('#error-nominal-in2').show();
            return;
        } else {
            $('#error-nominal-in2').hide();
        }

        if (!detail) {
            $('#error-detail-in').show();
            return;
        } else {
            $('#error-detail-in').hide();
        }

        if (!detail.trim()) {
            $('#error-detail-in').show();
            return;
        } else {
            $('#error-detail-in').hide();
        }

        if (!time) {
            $('#error-time-in').show();
            return;
        } else {
            $('#error-time-in').hide();
        }

        $.ajax({
            url: '1_data/save_income.php',
            type: 'POST',
            data: {
                category: category,
                methode: methode,
                nominal: nominal,
                detail: detail,
                time: time
            },
            success: function(response) {
                if (response == 'success') {
                    $('#nominal-in').val('');
                    $('#detail-in').val('');
                    $('#time-in').val('');
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data berhasil disimpan',
                    });
                    $('#data-input').toggle();
                    $('#data-report').toggle();
                    $('#add-data').toggle();
                    getKekayaan();
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Data gagal disimpan',
                    });
                }
            }
        });
    });

    // function to save topup
    $('#save-topup').click(function() {
        var from = $('#topup-from').val();
        var to = $('#topup-to').val();
        var nominal = $('#nominal-topup').val();
        var time = $('#time-topup').val();
        if (!from) {
            $('#error-topup-from').show();
            return;
        } else {
            $('#error-topup-from').hide();
        }

        if (!to) {
            $('#error-topup-to').show();
            return;
        } else {
            $('#error-topup-to').hide();
        }

        if (!nominal) {
            $('#error-nominal-topup').show();
            return;
        } else {
            $('#error-nominal-topup').hide();
        }

        if (nominal <= 0) {
            $('#error-nominal-topup2').show();
            return;
        } else {
            $('#error-nominal-topup2').hide();
        }

        if (!time) {
            $('#error-time-topup').show();
            return;
        } else {
            $('#error-time-topup').hide();
        }

        $.ajax({
            url: '1_data/save_topup.php',
            type: 'POST',
            data: {
                from: from,
                to: to,
                nominal: nominal,
                time: time
            },
            success: function(response) {
                if (response == 'success') {
                    $('#nominal-topup').val('');
                    $('#time-topup').val('');
                    $('#saldo-from').val('');
                    $('#saldo-to').val('');
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data berhasil disimpan',
                    });

                    $('#topup-to').html('<option value="">Pilih metode</option>');
                    $('#topup-to').prop('disabled', true);
                    $('#data-input').toggle();
                    $('#data-report').toggle();
                    $('#add-data').toggle();
                    getKekayaan();
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Data gagal disimpan',
                    });
                }
            }
        });
    });
</script>