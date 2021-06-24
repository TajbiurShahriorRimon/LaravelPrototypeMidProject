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
        a{
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            width: 100px;
            background: #a7d0e3;
            border-radius: 20px;
            cursor: pointer;
        }

        a:hover, a:active {
            background-color: #c60e2e;
        }
        textarea {
            resize: none;
        }
    </style>
</head>
<body>

<div class="container">
    <br><br><br>
    <table class="table">
        <tbody>
        <tr class="success">
            <td>Manager Name</td>
            <td>Asif</td>
        </tr>
        <tr class="danger">
            <td>Event Name</td>
            <td>Donate for Somalia!</td>
        </tr>
        <tr class="info">
            <td>Organizer</td>
            <td>Dooley</td>
        </tr>
        <tr class="warning">
            <td>Target Amount</td>
            <td>4000</td>
        </tr>
        <tr class="active">
            <td>Raised Amount</td>
            <td>3000</td>
        </tr>
        <tr class="info">
            <td>Event Started</td>
            <td>2021-05-05</td>
        </tr>
        <tr class="warning">
            <td>Event Ends</td>
            <td>2021-07-05</td>
        </tr>
        <tr class="success">
            <td>Status</td>
            <td>Active</td>
        </tr>
        <tr class="info">
            <td>Details</td>
            <td>Save people..............................................</td>
        </tr>
        </tbody>
    </table>
</div>

<div align="center">
    <h2>Comments</h2>
</div>

<div class="container">
    <strong>Jarif</strong>
    <br>
    <textarea rows="1" cols="100" readonly>
        lorem ipsum lo rem ipsum lorem ipsum lorem ipsum lo rem ipsum lorem ipsum lorem ipsum lo rem ipsum lorem ipsum lorem ipsum lo rem ipsum lorem ipsum
    </textarea>
    <a href="">Remove</a>
    <hr>
    <br>

    <strong>Yusuf</strong>
    <br>
    <textarea rows="1" cols="100" readonly>
        lorem ipsum lo rem ipsum lorem ipsum lorem ipsum lo rem ipsum lorem ipsum lorem ipsum lo rem ipsum lorem ipsum lorem ipsum lo rem ipsum lorem ipsum
    </textarea>
    <a href="">Remove</a>
    <hr>
    <br>

    <strong>Kaif</strong>
    <br>
    <textarea rows="1" cols="100" readonly>
        lorem ipsum lo rem ipsum lorem ipsum lorem ipsum lo rem ipsum lorem ipsum lorem ipsum lo rem ipsum lorem ipsum lorem ipsum lo rem ipsum lorem ipsum
    </textarea>
    <a href="">Remove</a>
    <hr>
    <br>
</div>

</body>
</html>

