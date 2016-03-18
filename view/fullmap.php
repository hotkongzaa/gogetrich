<?php
$lat = (string) filter_input(INPUT_GET, 'lat');
$lng = (string) filter_input(INPUT_GET, 'lng');
$name = (string) filter_input(INPUT_GET, 'name');
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Go Get Rich.net</title>
        <meta name="description" content="Go get rich">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include './assets/css_incl.php'; ?>
        <?php include './assets/javascript_incl.php'; ?>
    </head>
    <body>

        <div style="padding:20px 0px;">
            <div class="tg-map" style="height:100vh;"></div>
        </div>

    </body>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".tg-map").gmap3({
                map: {
                    options: {
                        center: [<?= $lat ?>, <?= $lng ?>],
                        zoom: 16,
                        scrollwheel: true,
                        navigationControl: true,
                        mapTypeControl: false,
                        scaleControl: true,
                        draggable: true
                    }
                },
                marker: {
                    values: [
                        {latLng: [<?= $lat ?>, <?= $lng ?>], data: "<?= $name ?>"}
                    ],
                    options: {
                        draggable: false
                    },
                    events: {
                        click: function (marker, event, context) {
                            var map = $(this).gmap3("get"),
                                    infowindow = $(this).gmap3({get: {name: "infowindow"}});
                            if (infowindow) {
                                infowindow.open(map, marker);
                                infowindow.setContent(context.data);
                            } else {
                                $(this).gmap3({
                                    infowindow: {
                                        anchor: marker,
                                        options: {content: context.data}
                                    }
                                });
                            }
                        }
                    }
                }
            });
        });
    </script>
</html>
