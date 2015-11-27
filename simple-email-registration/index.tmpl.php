<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    add_registered_user($name, $email);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Mailing List</title>
        <style>
            ul, li { margin: 0; padding: 0;
            }
            li { list-style:none;
            }
            .notice { color:red; font-style:italic;
            }
        </style>
    </head>
    <body>
        <h1>Join the Mailing List</h1>

        <form action="" method="post">
            <?php if(isset($status)) : ?>
            <p class="notice"><?php echo $status; ?></p>
            <?php endif;?>
            <ul>
                <li>
<label for="name">Your Name:</label>
<input type="text" name="name" value="<?= old('name');?>" />
                </li>
                <li>
<label for="name">Email Address:</label>
<input type="text" name="email" value="<?= old('email');?>" />
                </li>
                <li>
<input type="submit" value="sign up" />
                </li>
            </ul>
        </form>
    </body>
</html>