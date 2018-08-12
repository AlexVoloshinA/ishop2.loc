<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="<?= PATH ?>">Главная</a></li>
                <li>Регистрация</li>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<!--prdt-starts-->
<div class="prdt">
    <div class="container">
        <div class="prdt-top">
            <div class="col-md-12">
                <div class="product-one signup">
                    <div class="register-top heading">
                        <h2>REGISTER</h2>
                    </div>

                    <div class="register-main">
                        <div class="col-md-6 account-left">
                            <form data-toggle="validator" method="post" action="user/signup" id="signup" role="form">
                                <div class="form-group has-feedback">
                                    <label for="login">Login</label>
                                    <input required value="<?=isset($_SESSION['form-data']['login']) ? h($_SESSION['form-data']['login']) : ''; ?>" type="text" name="login" class="form-control" id="login" placeholder="Login">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="pasword">Password</label>
                                    <input required value="<?=isset($_SESSION['form-data']['password']) ? h($_SESSION['form-data']['password']) : ''; ?>" data-error="Пароль должен включать не менее 6 символов" data-minlength="6" type="password" name="password" class="form-control" id="pasword" placeholder="Password">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="name">Имя</label>
                                    <input required value="<?=isset($_SESSION['form-data']['name']) ? h($_SESSION['form-data']['name']) : ''; ?>" type="text" name="name" class="form-control" id="name" placeholder="Имя">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="email">Email</label>
                                    <input required value="<?=isset($_SESSION['form-data']['email']) ? h($_SESSION['form-data']['email']) : ''; ?>" type="email" name="email" class="form-control" id="email" placeholder="Email">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="address">Address</label>
                                    <input required value="<?=isset($_SESSION['form-data']['address']) ? h($_SESSION['form-data']['address']) : ''; ?>" type="text" name="address" class="form-control" id="address" placeholder="Address">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <button type="submit" class="btn btn-default">Зарегистрировать</button>
                            </form>
                            <?php if(isset($_SESSION['form-data'])) unset($_SESSION['form-data']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--product-end-->