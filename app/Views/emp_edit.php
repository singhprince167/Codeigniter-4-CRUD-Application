

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

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
            margin: 0;
            padding: 0;
        }
        .main{
            display: flex;
        }
        body{
            font-family: 'Poppins';
        background-color: lightgrey;
        }
        .left{
            height: 100vh;
            width: 20vw;

        }
        .tab{
            table{
                padding: 0;
                border: none;
                th{
                    margin: 0;
                    border:none;
                    background-color: lightgray;
                }
                td{background-color: rgb(255, 255, 255);
                    border:none;
                    padding:10px 15px;
                }
            }
        }
        .right{
            flex-direction: column;
            display: flex;
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
            <li onclick="window.location.href='/dashboard';" >Home</li> 
                <li onclick="window.location.href='/emp';" >Add</li>
                <li onclick="window.location.href='/logout';">Logout</li>
            </ul>
        </div>
        <div class="right">
            
            <div class="frm">
            <h1>Edit Employee</h1>

<?php if (session()->getFlashdata('success')): ?>
    <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
<?php endif; ?>

<?php if (session()->getFlashdata('errors')): ?>
    <ul>
        <?php foreach (session()->getFlashdata('errors') as $error): ?>
            <li style="color: red;"><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form action="/emp/update" method="post">
    <?= csrf_field() ?>

    <input type="hidden" name="id" value="<?= $employee['id'] ?>">

    <label for="name">Name:</label>
    <br>
    <input type="text" id="name" name="name" value="<?= old('name', $employee['name']) ?>"><br>

    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email" value="<?= old('email', $employee['email']) ?>">
    <br>
    <label for="phone">Phone:</label><br>
    <input type="text" id="phone" name="phone" value="<?= old('phone', $employee['phone']) ?>"><br>

    <label for="salary">Salary:</label><br>
    <input type="text" id="salary" name="salary" value="<?= old('salary', $employee['salary']) ?>"><br>
    <br>
    <button type="submit">Update</button>
</form>
            </div>
        </div>
    </div>
</body>
</html>

<body>
    
</body>
</html>
