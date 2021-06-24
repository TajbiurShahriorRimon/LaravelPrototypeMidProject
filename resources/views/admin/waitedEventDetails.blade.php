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
        input[type=button]{
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 30%;
            opacity: 0.9;
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
        <tr class="danger">
            <td>Select A Manager</td>
            <td>
                <div class="box">
                    <select>
                        <option disabled="disabled">Select Manager</option>
                        <option>Asif</option>
                        <option>Kamal</option>
                        <option>Nehal</option>
                    </select>
                </div>
            </td>
        </tr>
        <td></td>
        <td>
            <input type="button" value="Approve Event!!!">
        </td>
        </tbody>
    </table>
</div>

</body>
</html>

