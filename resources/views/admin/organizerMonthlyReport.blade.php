<!DOCTYPE HTML>
<html>
<head>
    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "Events in 12 Months"
                },
                axisY: {
                    title: "Number in Unit",
                    suffix: ""
                },
                axisX: {
                    title: "Months"
                },
                data: [{
                    type: "column",
                    yValueFormatString: "",
                    dataPoints: [
                        { label: "Jan", y: 0 },
                        { label: "Feb", y: 2 },
                        { label: "March", y: 1 },
                        { label: "April", y: 0 },
                        { label: "May", y: 0 },
                        { label: "June", y: 1 },
                        { label: "July", y: 0 },
                        { label: "Aug", y: 0 },
                        { label: "Sept", y: 0 },
                        { label: "Oct", y: 0 },
                        { label: "Nov", y: 0 },
                        { label: "Dec", y: 1 },

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
