<body class="ver1">
    <div class="container">
        <div class="signup__container">
            <div class="container__child signup__form">
                <form method="post" action="">
                    <div class="form-group0">
                        <h1><b>Регістрація</b></br></br></h1>
                        <p>Створіть свій аккаунт</p>
                        <hr>
                    </div>
                    <div class="form-group">
                        <label for="name"><b>Як вас звати?*</b></label>
                    </div>
                    <div lass="form-group">
                        <input class="form-control" type="text" name="firstname" value="<?=$_POST['firstname']?>" id="firstname" placeholder="Дмитро" required />
                    </div>
                    <div class="form-group">
                        <label for="surname"><b>Яка ваша фамілія?*</b></label>
                    </div>
                    <div lass="form-group">
                        <input class="form-control" type="text" name="lastname" value="<?=$_POST['lastname']?>" id="lastname" placeholder="Бойко" required />
                    </div>
                    <div class="form-group">
                        <label for="email"><b>Яка ваша ел.адреса?*</b></label>
                    </div>
                    <div lass="form-group">
                        <input class="form-control" type="email" name="login" value="<?=$_POST['login']?>" id="exampleInputEmail1" placeholder="dmrboyko@gmail.com" required />
                    </div>
                    <div class="form-group">
                        <label for="password"><b>Введіть пароль:*</b></label>
                    </div>
                    <div lass="form-group">
                        <input class="form-control" type="password" name="password" class="form-control" id="password1" placeholder="Вигадайте безпечний!" required />
                    </div>
                    <div class="form-group">
                        <label for="password"><b>Введіть пароль ще раз:*</b></label>
                    </div>
                    <div lass="form-group">
                        <input class="form-control" type="password" name="password2" class="form-control" id="password2" placeholder="Паролі мають співпадати!" required />
                    </div>
                    <table>
                        <tr>
                            <td rowspan="">
                                <button type="submit" class="floating-button">ЗБЕРЕГТИ</button>
                            </td>
                            <td>
                                <a href="http://lucia/news/users/login" class="link">Увійдіть тут!</a>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="container__child signup__thumbnail">
                <div class="signup__overlay"></div>
            </div>
        </div>
    </div>
</body>