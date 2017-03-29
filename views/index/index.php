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
                    <form action = 'add' id = 'form' method = "POST" class = 'form-group'>
                        <div class="form-group">
                        <p><input type = 'text' value = '' name = "user_name" placeholder = "User Name"> *</p>
                        <p><input type = 'text' value = '' name = "email" placeholder = "E-mail"> *</p>
                        <p><input type = 'text' value = '' name = "homepage" placeholder = "Homepage"></p>
                        <p><img src = "/image/captcha/cap.png" /></p>
                        <p><input type = 'text' value = '' name = "captcha" placeholder = "Captcha"> *</p>
                        <p><input type = 'textarea' value = '' name = "text" placeholder = "Text"> *</p>
                        </div>
                        <input type = "submit" id ='submit' value = 'записать'>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>