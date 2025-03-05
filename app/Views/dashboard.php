

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        
        li {
            &:hover {
                background-color: rgb(146, 202, 255);
            }
            height: 20px;
            text-align: center;
            padding: 9px 0;
            border-radius: 1rem;
            margin: 10px;
            background-color: rgb(255, 255, 255);
            cursor: pointer;
        }
        * {
            margin: 0;
            padding: 0;
        }
        .main {
            display: flex;
        }
        body {
            font-family: 'Poppins';
            background-color: lightgrey;
        }
        .left {
            height: 100vh;
            width: 20vw;
        }
        .tab {
            table {
                padding: 0;
                border: none;
                th {
                    margin: 0;
                    border: none;
                    background-color: lightgray;
                }
                td {
                    background-color: rgb(255, 255, 255);
                    border: none;
                    padding: 10px 15px;
                }
            }
        }
        .right {
            flex-direction: column;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 80vw;
            background-color: rgb(240, 240, 240);
        }
    </style>
</head>
<body>
    
    <div class="main">
        <div class="left">
            <h1>Dashboard</h1>
            <ul>
                <li onclick="window.location.href='/emp';">Add</li>
                <li onclick="window.location.href='/logout';">Logout</li>
            </ul>
        </div>
        <div class="right">
            
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
            
            <h1>Welcome, <?= esc($username) ?></h1>
            <br>
            <h1>Employee List</h1>
            <div class="tab">
                <table border="1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Salary</th>
                            <th>Actions</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($employees as $employee): ?>
                            <tr>
                                <td><?= esc($employee['name']) ?></td>
                                <td><?= esc($employee['email']) ?></td>
                                <td><?= esc($employee['phone']) ?></td>
                                <td><?= esc($employee['salary']) ?></td>
                                <td>
                                    <a href="/emp/edit/<?= $employee['id'] ?>">Edit</a>
                                </td>
                                <td>
                                    <a href="/emp/delete/<?= $employee['id'] ?>" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
