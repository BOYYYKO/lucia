<body class="body ver2">
    <div class="container">
        <div class="signup__container v2">
            <div class="container__child signup__form">
                <form method="post" action="">
                    <div class="form-group0">
                        <h1><b>Увійти</b></br></br></h1>
                        <p>Зайдіть на свій аккаунт</p>
                        <hr class="hr2">
                    </div>
                    <div class="form-group">
                        <label for="email"><b>Ваша ел.адреса:*</b></label>
                    </div>
                    <div lass="form-group">
                        <input class="form-control" type="email" name="login" value="<?=$_POST['login']?>" id="exampleInputEmail1" placeholder="mail@gmail.com" required />
                    </div>
                    <div class="form-group">
                        <label for="password"><b>Введіть пароль:*</b></label>
                    </div>
                    <div lass="form-group">
                        <input class="form-control" type="password" name="password" id="password1" placeholder="Не забудьте пароль!" required />
                    </div>
                    <table>
                        <tr>
                            <td></br></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td rowspan="2">
                                <button type="submit" class="floating-button">Увійти</button>
                            </td>
                            <td>
                                <a href="http://lucia/users/register" class="link">Зарегіструватись!</a>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="container__child signup__thumbnailv2">
                <div class="signup__overlay"></div>
            </div>
        </div>
    </div>
</body>