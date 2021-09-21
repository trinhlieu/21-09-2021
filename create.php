<?php include_once 'function.php';
include_once 'Customer.php';?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="email" placeholder="email">
    <select name="role" >
        <option value="1">Admin</option>
        <option value="2">User</option>
    </select>
    <button type="submit">SUBMIT</button>
    <a href="index.php"><button type="button">CANCEL</button></a>
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $customer = new Customer($name, $email, $role);
//    $customer = [$name, $email, $role];
//    var_dump($customer);
    addNewCustomer($customer);
    header('location:index.php');
}
?>