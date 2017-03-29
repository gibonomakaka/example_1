<?php include ROOT . '/views/layouts/header.php'; ?>
    <body>
        <div class = 'container'>
            <div  class = 'row'>
                <div class = 'col-md-12 text-center'>
                    <?php echo $pagination->get(); ?>
                </div>
            </div>
            <div class = 'row'>
                <div class = 'col-md-2'>
                    <h4>Sort by:</h4>
                    <ul class = "list-unstyled mycolor">
                        <li class = 'btn btn-primary  btn-xs btn-block'><a href = '/list/asc/user_name/page-<?=$page; ?>'>user name ASC</a></li>
                        <li class = 'btn btn-primary  btn-xs btn-block'><a href = '/list/desc/user_name/page-<?=$page; ?>'>user name DESC</a></li>
                        <li class = 'btn btn-primary  btn-xs btn-block'><a href = '/list/asc/email/page-<?=$page; ?>'>e-mail ASC</a></li>
                        <li class = 'btn btn-primary  btn-xs btn-block'><a href = '/list/desc/email/page-<?=$page; ?>'>e-mail DESC</a></li>
                        <li class = 'btn btn-primary  btn-xs btn-block'><a href = '/list/asc/add_date/page-<?=$page; ?>'>add date ASC</a></li>
                        <li class = 'btn btn-primary  btn-xs btn-block'><a href = '/list/desc/add_date/page-<?=$page; ?>'>add date DESC</a></li>
                    </ul>
                    
                    <h4>Menu:</h4>
                    <ul class = "list-unstyled mycolor">
                        <li class = 'btn btn-primary  btn-xs btn-block'><a href = "/">Add new user</a></li>
                        <li class = 'btn btn-primary  btn-xs btn-block disabled'>User list</li>
                    </ul>
                </div>
                <div class = 'col-md-10'>
                    <table class = 'table'>
                        <tr>
                            <!--th>id</th-->
                            <th>user name</th>
                            <th>e-mail</th>
                            <th>homepage</th>
                            <th>captcha</th>
                            <th>text</th>
                            <th>ip</th>
                            <th>browser</th>
                            <th>add date</th>
                        </tr>
                        <?php foreach ($listUserData as $k): ?>
                            <tr>
                                <!--td><?php echo $k['id'];?></td-->
                                <td><?php echo $k['user_name'];?></td>
                                <td><?php echo $k['email'];?></td>
                                <td><?php echo $k['homepage'];?></td>
                                <td><?php echo $k['captcha'];?></td>
                                <td><?php echo $k['text'];?></td>
                                <td><?php echo $k['ip'];?></td>
                                <td><?php echo $k['browser'];?></td>
                                <td><?php echo $k['add_date'];?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    
                </div>
            </div><!--end row -->
            
        </div> <!--end conteiner -->
    </body>
</html>