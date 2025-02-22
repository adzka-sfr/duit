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

<div id="data-input">
    <div class="card mt-2" style="padding-left: 0px; padding-right: 0px;">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#pemasukan" data-toggle="tab">Pengeluaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pengeluaran" data-toggle="tab">Pemasukan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#topup" data-toggle="tab">Top Up</a>
                </li>
            </ul>
        </div>
        <div class="card-body" id="pengeluaran">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kategori</label>
                        <select class="search-biasa" style="width: 100%;height:100px" name="category-out" id="category-out">
                            <option value=""></option>
                            <option value="40300">Transportasi</option>
                            <option value="40600">Makan</option>
                            <option value="40500">Hiburan</option>
                            <option value="40400">Jajan</option>
                            <option value="30300">Listrik</option>
                            <option value="40300">Transportasi</option>
                            <option value="40600">Makan</option>
                            <option value="40500">Hiburan</option>
                            <option value="40400">Jajan</option>
                            <option value="30300">Listrik</option>
                            <option value="40300">Transportasi</option>
                            <option value="40600">Makan</option>
                            <option value="40500">Hiburan</option>
                            <option value="40400">Jajan</option>
                            <option value="30300">Listrik</option>
                        </select>
                        <span id="error-start-hat" style="color: #DC3545; display: none;"><i class="fa-solid fa-circle-info"></i> Silahkan memasukkan waktu start</span>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group input-group-sm">
                        <label for="exampleInputEmail1">Anggaran</label>
                        <input class="form-control text-danger" disabled type="text" value="-350,000" name="budget" id="budget">
                        <span id="error-start-hat" style="color: #DC3545; display: none;"><i class="fa-solid fa-circle-info"></i> Silahkan memasukkan waktu start</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Metode</label>
                        <select class="search-biasa" style="width: 100%;" name="method-out" id="method-out">
                            <option value=""></option>
                            <option value="cash">Cash</option>
                            <option value="credit_card">Credit Card</option>
                            <option value="debit_card">Debit Card</option>
                            <option value="bank_transfer">Bank Transfer</option>
                            <option value="ewallet">E-Wallet</option>
                        </select>
                        <span id="error-start-hat" style="color: #DC3545; display: none;"><i class="fa-solid fa-circle-info"></i> Silahkan memasukkan waktu start</span>
                    </div>
                </div>
                <div class="col-6">
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
                    <button class="btn btn-secondary btn-sm" style="width: 80%;">Cancel</button>
                </div>
                <div class="col-6 text-center">
                    <button class="btn btn-primary btn-sm" style="width: 80%;">Save</button>
                </div>
            </div>
        </div>
        <div class="card-body" id="pemasukan" style="display: none;">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kategori</label>
                        <select class="search-biasa" style="width: 100%;" name="dept-set" id="dept-set">
                            <option value=""></option>
                            <option value="10100">Gaji</option>
                            <option value="10200">Bonus</option>
                            <option value="10300">Investasi</option>
                            <option value="10400">Lain-lain</option>
                        </select>
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
                    <button class="btn btn-secondary btn-sm" style="width: 80%;">Cancel</button>
                </div>
                <div class="col-6 text-center">
                    <button class="btn btn-primary btn-sm" style="width: 80%;">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="data-report" style="display: none;">
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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="exampleModalLabel">Modal title</h5>

            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm" style="background-color: <?= $user['theme'] ?>; border-color: <?= $user['theme'] ?>;">Save</button>
            </div>
        </div>
    </div>
</div>

<hr style="margin-bottom: 50px;">

<button class="btn btn-primary btn-floating" id="add-data" style="position: fixed; bottom: 80px; right: 20px;">
    <i class="fa fa-plus"></i>
</button>

<script>
    $(document).ready(function() {
        $('#add-data').click(function() {
            $('#exampleModal').modal('show');
        });
    });
</script>