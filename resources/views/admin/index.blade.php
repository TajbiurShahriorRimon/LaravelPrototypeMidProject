<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">

    <style>
        body{
            background-repeat: no-repeat, repeat;
            background-color: #cccccc;
        }
        input[type=button], a{
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
            cursor: pointer;
        }
        input[type=submit]{
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            width: 250px;
            background: #242323;
            border-radius: 20px;
            cursor: pointer;
        }
        input[type=submit]:hover, input[type=submit]:active{
            background-color: #263485;
        }
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }
        input[type=button]:hover, input[type=button]:active, a:hover {
            background-color: #04AA6D;
        }
    </style>

</head>
<body class="w3-container w3-center w3-animate-opacity">
<div align="left"  class="w3-bar w3-border w3-black">
    <a href="/addManager" class="w3-bar-item w3-button">Add Manager</a>
    <a href="/transaction" class="w3-bar-item w3-button">Transaction</a>
    <a href="/createEvent" class="w3-bar-item w3-button">Create Event</a>
    <a href="/removedEvents" class="w3-bar-item w3-button">Removed Events</a>
    <a href="/managerList" class="w3-bar-item w3-button">Manager List</a>
    <a href="/donorList" class="w3-bar-item w3-button">Donor List</a>
    <a href="/organizerList" class="w3-bar-item w3-button">Organizer List</a>
    <a href="/approvalEventList" class="w3-bar-item w3-button">Approve Event</a>
    <a href="/userProfile" class="w3-bar-item w3-button">Top Organizer</a>
    <a href="/userProfile" class="w3-bar-item w3-button">Top Donor</a>
</div>
<br> <br> <br>
<div align="center">
    <form action="">
        <input type="text" class="w3-input w3-border w3-round-xlarge" placeholder="Search..." style="width: 50%">
        <input type="submit" class="btn btn-danger" value="Search">
    </form>
</div>
<hr>
<table align="center">
    <tr>
        <td>
            <img src="https://image.shutterstock.com/image-photo/creative-ideas-bring-money-white-260nw-1610211523.jpg" alt="" height="200" width="300">
        </td>
    </tr>
    <tr>
        <td>
            <strong>
                Event: Donate for Syria Child!
            </strong>
        </td>
    </tr>
    <tr>
        <td>
            <strong>
                Amount Donated: $2000
            </strong>

        </td>
    </tr>
    <tr>
        <td>
            <a href="/eventDetails">Check Details</a>
            <a href="/eventReport" class="w3-button w3-blue">Check Report</a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="" style="color: lightskyblue">Remove Event</a>
        </td>
    </tr>
</table>
<hr>
<br>

<table align="center">
    <tr>
        <td>
            <img src="https://image.shutterstock.com/image-photo/creative-ideas-bring-money-white-260nw-1610211523.jpg" alt="" height="200" width="300">
        </td>
    </tr>
    <tr>
        <td>
            <strong>
                Event: Donate for School!
            </strong>
        </td>
    </tr>
    <tr>
        <td>
            <strong>
                Amount Donated: $3000
            </strong>

        </td>
    </tr>
    <tr>
        <td>
            <a href="/eventDetails">Check Details</a>
            <a href="/eventReport" class="w3-button w3-blue">Check Report</a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="" style="color: lightskyblue">Remove Event</a>
        </td>
    </tr>
</table>
<hr>
<br>

<table align="center">
    <tr>
        <td>
            <img src="https://www.floship.com/wp-content/uploads/elementor/thumbs/Crowdfunding-Backers-Worldwide-1-1-p4csbu9zyzcmalqsgnfvjw9vh37fobf42c4us1jx9s.jpg" alt="" height="200" width="300">
        </td>
    </tr>
    <tr>
        <td>
            <strong>
                Event: Donate for Somalia!
            </strong>
        </td>
    </tr>
    <tr>
        <td>
            <strong>
                Amount Donated: $1500
            </strong>
        </td>
    </tr>
    <tr>
        <td>
            <a href="/eventDetails">Check Details</a>
            <a href="/eventReport" class="w3-button w3-blue">Check Report</a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="" style="color: lightskyblue">Remove Event</a>
        </td>
    </tr>
</table>
<hr>
<br>
</body>
</html>
