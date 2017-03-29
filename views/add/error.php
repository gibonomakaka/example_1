<?php include ROOT . '/views/layouts/header.php'; ?>
    <body>
        <div class = 'container'>
            <div class = 'row'>
                <div class = 'col-md-2'>
                    <h4>Menu:</h4>
                    <ul class = "list-unstyled mycolor">
                        <li class = 'btn btn-success  btn-xs btn-block disabled'>Add new user</li>
                        <li class = 'btn btn-success  btn-xs btn-block'><a href = "/list/asc/user_name/page-1/">View user list</a></li>
                    </ul>
                </div>
                <div class = 'col-md-10'>
                    <form action = 'add' id = 'form' method = "POST">
                        <p><input type = 'text' value = '<?= $_SESSION['user_name'] ?>' name = "user_name" placeholder = "User Name"> *
                            <span class="text-danger"><?= $errors['user_name']; ?></span>
                        </p>
                        <p><input type = 'text' value = '<?= $_SESSION['email'] ?>' name = "email" placeholder = "E-mail"> *
                            <span class="text-danger"><?= $errors['email']; ?></span>
                        </p>
                        <p><input type = 'text' value = '<?= $_SESSION['homepage'] ?>' name = "homepage" placeholder = "Homepage"></p>
                        <p><img src = "/image/captcha/cap.png" /><p>
                        <p><input type = 'text' value = '' name = "captcha" placeholder = "Captcha"> *
                            <span class="text-danger"><?= $errors['captcha'] ?></span>
                        </p>
                        <p><input type = 'textarea' value = '<?= $_SESSION['text'] ?>' name = "text" placeholder = "Text"> *
                            <span class="text-danger"><?= $errors['text']; ?></span>
                        </p>
                        <input type = "submit" id ='submit' value = 'записать'>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>