<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background:rgb(46, 230, 230);
            text-align:center;
        }
        h1{
            font-size:60px;
            color:#fff;
            margin-top:200px;
        }
        .user{
            width: 300px;
            padding: 1rem;
            font-size: 1rem;
            color: #333;
            margin: 0.6rem 0;
            border: 0.1rem solid rgba(0,0,0,0.3);
            text-transform: none;
        }
        .psswd{
            width: 300px;
            padding: 1rem;
            font-size: 1rem;
            color: #333;
            margin: 0.6rem 0;
            border: 0.1rem solid rgba(0,0,0,0.3);
            text-transform: none;
        }
        .btn{
            display: inline-block;
            margin-top: 1.1rem;
            background:#fff ;
            color: rgb(46, 230, 230);
            padding: 1rem 2rem;
            cursor: pointer;
            font-size: 25px;
            border:rgb(46, 230, 230);
        }

    </style>
</head>
<body>
    <form action="index.html" method="POST">
        <h1>LOGIN</h1>
        <input type="text" name="username" class="user" placeholder="enter username"><br>
        <input type="text" name="password" class="psswd" placeholder="enter your password"><br>
        <input type="submit" name="submit" class="btn">
    </form>
        <?php
            include('db.php');
            if(isset($_POST['submit']))
            {
                $n = $_POST['username'];
                $c = $_POST['password'];
                $r = mysqli_query($con,"INSERT INTO travel2 (username,password) VALUES('$n','$c')");
                if($r)
                {
                    echo "done";
                }
                else
                {
                    echo "undone";
                }
            }

        ?>
</body>
</html>