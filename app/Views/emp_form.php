

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Emoloyee</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        
        li{
            &:hover{
                background-color: rgb(146, 202, 255);
            }
            height: 20px;
            text-align: center;
            padding:9px 0;
            border-radius: 1rem;
            margin:10px;
            background-color: rgb(255, 255, 255);
            cursor: pointer;
        }
        *{
            font-family: 'Poppins';
            margin: 0;
            padding: 0;
        }
        .main{
            display: flex;
        }
        body{
            
        background-color: lightgrey;
        }
        .left{
            height: 100vh;
            width: 20vw;

        }
        .right{
            display:flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 80vw;
            background-color: rgb(240, 240, 240);
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
    
    <div class="main">
        <div class="left">
            <h1>Dashboard</h1>
            <ul>
                <li onclick="window.location.href='/dashboard';">Home</li>
                <li onclick="window.location.href='/logout';">Logout</li>

            </ul>
        </div>
        <div class="right">
        

    <div class="frm">
        <?php if (session()->getFlashdata('errors')): ?>
        <ul>
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
        <?php if (session()->getFlashdata('success')): ?>
        <br>

        <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>
        <form action="/emp/store" method="post">
            <?= csrf_field() ?>
    
            <label for="name">Name:</label>
            <br>
            <input type="text" id="name" name="name" value="<?= old('name') ?>"><br>
            <br>
            <label for="email">Email:</label>
            <br>
            <input type="text" id="email" name="email" value="<?= old('email') ?>"><br>
            <br>
            <label for="phone">Phone:</label>
            <br>
            <input type="text" id="phone" name="phone" value="<?= old('phone') ?>"><br>
            <br>
            <label for="salary">Salary:</label>
            <br>
            <input type="text" id="salary" name="salary" value="<?= old('salary') ?>"><br>
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>
        </div>
    </div>
</body>
</html>

