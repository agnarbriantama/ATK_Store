<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit Data User</h1>
                            </div>
                            <form method="post" action="<?= base_url('user/edit_regis/' . $item->id_login) ?>" enctype="multipart/form-data" autocomplete="off">
                                <div class="form-group">
                                    <label>Username</label><br>
                                    <input type="text" name="username" class="form-control form-control-user" value="<?= $item->username ?>" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Email</label><br>
                                    <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= $item->email ?>" required="">
                                </div>
                                <div class="form-group">
                                    <label>Password</label><br>
                                    <input type="password" class="form-control form-control-user" value="<?= $item->username ?>" name="password" placeholder="Password">
                                 </div>
                                <div class="form-group">
                                    <input type="radio" name="jenis_kelamin"  <?php if ($item->{'jenis_kelamin'} == 'Laki-Laki') echo 'checked' ?> value="Laki-Laki">Laki-Laki &emsp;
                                    <input type="radio" name="jenis_kelamin"  <?php if ($item->{'jenis_kelamin'} == 'Perempuan') echo 'checked' ?> value="Perempuan">Perempuan
                                </div>
                                <div class="form-group">
                                    <label>Agama</label><br>
                                    <select name="agama" class="form-control">
                                        <option value="Islam" <?php if ($item->{'agama'} == 'Islam') echo 'selected' ?>>Islam</option>
                                        <option value="Kristen" <?php if ($item->{'agama'} == 'Kristen') echo 'selected' ?>>Kristen</option>
                                        <option value="Katholik" <?php if ($item->{'agama'} == 'Katholik') echo 'selected' ?>>Katholik</option>
                                        <option value="Buddha" <?php if ($item->{'agama'} == 'Buddha') echo 'selected' ?>>Buddha</option>
                                        <option value="Khonghucu" <?php if ($item->{'agama'} == 'Khonghucu') echo 'selected' ?>>Khonghucu</option>
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label>Posisi</label><br>
                                    <select name="role_id" class="form-control">
                                        <option value="1" <?php if ($item->{'role_id'} == '1') echo 'selected' ?>>Admin</option>
                                        <option value="2" <?php if ($item->{'role_id'} == '2') echo 'selected' ?>>Member</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label><br>
                                    <input type="date" class="form-control form-control-user" name="tgl_lahir" value="<?= $item->tgl_lahir ?>" required="">
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Edit Account
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>