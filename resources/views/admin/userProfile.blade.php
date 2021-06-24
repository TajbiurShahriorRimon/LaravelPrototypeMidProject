<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        input[type=button], a{
            background-color: #532b0d;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 15%;
            opacity: 0.5;
        }
    </style>
</head>
<body>

<div class="container">
    <br><br><br>
    <table class="table">
        <tbody>
        <tr class="success">
            <td>Name</td>
            <td>Asif</td>
        </tr>
        <tr class="danger">
            <td>Email</td>
            <td>asif@gmail.com</td>
        </tr>
        <tr class="warning">
            <td>Amount Donated</td>
            <td>4000</td>
        </tr>
        <tr class="active">
            <td>Events Created</td>
            <td>4</td>
        </tr>
        <tr class="warning">
            <td>Account Created</td>
            <td>2021-07-05</td>
        </tr>
        <tr class="success">
            <td>Status</td>
            <td>Active &nbsp;&nbsp;
                <a href="">Change Status</a>
            </td>
        </tr>
        </tbody>
    </table>
</div>

</body>
</html>

