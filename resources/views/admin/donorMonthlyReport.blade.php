<!DOCTYPE HTML>
<html>
<head>
    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "Donation in 12 Months"
                },
                axisY: {
                    title: "Currency in TK",
                    suffix: "tk"
                },
                axisX: {
                    title: "Months"
                },
                data: [{
                    type: "column",
                    yValueFormatString: "",
                    dataPoints: [
                        { label: "Jan", y: 0 },
                        { label: "Feb", y: 200 },
                        { label: "March", y: 1000 },
                        { label: "April", y: 0 },
                        { label: "May", y: 200 },
                        { label: "June", y: 500 },
                        { label: "July", y: 100 },
                        { label: "Aug", y: 1500 },
                        { label: "Sept", y: 0 },
                        { label: "Oct", y: 200 },
                        { label: "Nov", y: 0 },
                        { label: "Dec", y: 500 },

                    ]
                }]
            });
            chart.render();

        }
    </script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
