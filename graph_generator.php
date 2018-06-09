<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 06-Jan-18
 * Time: 12:43 PM
 */
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Graph Generator using Canvas JS</title>
    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",
                title:{
                    text: "<?php echo $_POST['title']?>"
                },
                axisY: {
                    title: "<?php echo $_POST['yaxis']?>"
                },
                data: [{
                    type: "column",
                    showInLegend: true,
                    legendMarkerColor: "grey",
                    legendText: "<?php echo $_POST['unit']?>",
                    dataPoints: [
                        <?php
                        $label = $_POST['label'];
                        $value = $_POST['value'];

                        foreach( $label as $key => $n ) {
                            echo "{ y:$value[$key], label: \"$n\" },";
                        }
                        ?>
                    ]
                }]
            });
            chart.render();

        }
    </script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 50%; margin-left: 25%"></div>

<script src="js/canvasjs.min.js"></script>
</body>
</html>
