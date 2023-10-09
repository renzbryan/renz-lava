<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Student Registration</title>
    <style>
        
        body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    margin-top: 20px;
    color: #007BFF;
}

.container {
    display: flex;
    justify-content: space-between;
}

form {
    background-color: #fff;
    max-width: 400px;
    margin: 0 auto;
    padding: 60px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    margin-right: 20px; /* Adjust this value as needed */
}

label {
    display: block;
    margin-bottom: 20px;
    font-weight: bold;
}

input[type="text"] {
    width: 89%; /*liit ng textbox*/
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.btn {
    width: 100%;
    background-color: #007BFF;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

.btn:hover {
    background-color: #0056b3;
}

table {
    width: 85%;
    border-collapse: collapse;
    margin-top: 3px; /* pantay sa form */
    margin-bottom: 50vh;
    border: 1px solid #000;
}

th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #007BFF;
    color: #fff;
}

tr:hover {
    background-color: #f5f5f5;
}

a {
    text-decoration: none;
    margin-right: 10px;
}

.edit-btn, .delete-btn {
    background-color: #007BFF;
    color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
    text-align: center;
    display: inline-block;
    margin-right: 5px;
}

.edit-btn:hover, .delete-btn:hover {
    background-color: #0056b3;
}
</style>
    
    </style>
</head>
<body>
    <br>
    <br>
    <h1>Student Registration</h1>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
    <form action="/<?=(isset($edit['id']))? "submitedit/" . $edit['id']: "submit" ?>" method="post">
        <label>StudentID:</label>
        <input type="text"  name="studentID" required value="<?=(isset($edit['id']))? $edit['studentID']: ""?>">
        <label>FullName:</label>
        <input type="text" name="FullName" required value="<?=(isset($edit['id']))? $edit['FullName']: ""?>">
        <label>YearLevel:</label>
        <input type="text" name="YearLevel" required value="<?=(isset($edit['id']))? $edit['YearLevel']: ""?>">
        <label>Course:</label>
        <input type="text" name="Course" required value="<?=(isset($edit['id']))? $edit['Course']: ""?>">
        <br>
        <br>
        <div style="text-align: center;">
        <input class="btn" type="submit" value="<?=(isset($edit['id']))? "Edit" : "Insert" ?>">
        </div>

    <style>
  th.actions-header {
    text-align: center;
  }
</style>
    </form>

    <table border="1">
    <thead>
            <th class="actions-header">Student ID</th>
            <br>
            <th class="actions-header">Full Name</th>
            <br>
            <th class="actions-header">Year Level</th>
            <br>
            <th class="actions-header">Course</th>
            <br>
            <th class="actions-header">Controls</th>
        </thead>
        <tbody>
            <?php foreach($info as $i): ?>
        <tr>
            <td><?= $i['studentID']?></td>
            <td><?= $i['FullName']?></td>
            <td><?= $i['YearLevel']?></td>
            <td><?= $i['Course']?></td>
            <td style="text-align: center;">
    <a href="/edit/<?= $i['id'] ?>" class="edit-button">
        <i class="fas fa-edit"></i>Edit
    </a>||  &#160;
    <a href="/delete/<?= $i['id'] ?>" class="delete-button">
        <i class="fas fa-trash-alt"></i>Delete
    </a>
</td>
        </tr>
        <?php endforeach ?>
        </tbody>
    <div class="container">
    </div>
</body>
</html>