<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body{
            background-color:gray;
            font-family:'Poppins', system-ui;
            height:100vh;
            width: 100vw;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .frm{
            background-color:white;
            box-shadow:2px 2px 20px white;
            border-radius:1rem;
            
            width: fit-content;
            height:fit-content;
            padding:50px 30px;
        }
        .headers{
            text-align:center;
        }
        .xz{
            margin:0 auto;
        }
        button{
            transition:all 0.3s;
            &:hover{

                transform:scale(1.1);
            }
            border:none;
            border-radius:1rem;
            width: 250px;
            padding:10px 40px;
            background-color:skyblue;
        }

        input{
            text-align:center;
            width: 250px;
            background-color:white !important;
            outline:none;
            border:1px solid grey;
            height:30px;
            border-radius:1rem;

        }
    </style>
</head>
<body>
    
    
    
    <div class="frm">
    <?php if (session()->has('error')): ?>
        <p><?= session()->get('error') ?></p>
    <?php endif; ?>
    <h1 class="headers">Login Form</h1>
    <form class="xz" action="<?= base_url('login'); ?>" method="post">
        <label  for="username">Username</label>
        <br>
        <input type="text" name="username" value="<?= old('username'); ?>"><br><br>
        <label for="password">Password</label>
        <br>    
        <input type="password" name="password"><br><br>
        <button value="Login" type="submit">Login</button>
    </form>
    </div>
</body>
</html>
