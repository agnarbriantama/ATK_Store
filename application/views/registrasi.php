<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="post" action="<?= base_url('auth/regis'); ?>">
                                <div class="form-group">
                                    <label>Username</label><br>
                                    <input type="text" name="username" class="form-control form-control-user" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Email</label><br>
                                    <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" required="">
                                </div>
                                <div class="form-group">
                                    <label>Password</label><br>
                                    <div class="row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki &emsp;
                                    <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                                </div>
                                <div class="form-group">
                                    <label>Agama</label><br>
                                    <select name="agama" class="form-control">
                                        <option selected="true" disabled="disabled">----------------- Agama -----------------</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katholik">Katholik</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Khonghucu">Khonghucu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label><br>
                                    <input type="date" class="form-control form-control-user" name="tgl_lahir" required="">
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>

                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url('auth/login'); ?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>