<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
</head>
<body>

<button class="btn_ajax1">Регистрация</button>
<script>
    //base64_encode('111222333:aaabbbccc');
    // Result: MTExMjIyMzMzOmFhYWJiYmNjYw==
    $('.btn_ajax1').click(function () {
        $.ajaxSetup({

            headers: {
                'Authorization': 'Basic MTExMjIyMzMzOmFhYWJiYmNjYw=='
            }
        });
        var main = {
            first_name: "Alex224",
            last_name: "Zwanetski",
            street_house_number: "Arnulfstraße 3, 80335 München",
            email: "info@test.de",
            telephone: "0176123456",
        };

        var contentType = "application/x-www-form-urlencoded; charset=utf-8";

        if (window.XDomainRequest) //for IE8,IE9
            contentType = "text/plain";

        $.ajax({
            url: "http://parking.imedia.in.ua/api/v1/auth/app", ///для регистрации
            type: "POST",
            data: {main: main},
            dataType: "json",
            contentType: contentType,
            success: function (data) {
                alert("Data from Server" + JSON.stringify(data));
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("You can not send Cross Domain AJAX requests: " + errorThrown);
            }
        });
    })
</script>

<button class="btn_ajax_check_in_time">Въезд на парковку</button>
<script>

    //Acess token
    //eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJpbnRlcmRvbXVzIiwic3ViIjoiMTExMjIyMzMzIiwiaWF0IjoxNDk1NTcwNzM1LCJleHAiOjE1NjE2MzA3MzV9
    //.mWs6-BqGRV-YQQg4tPO2XhxjJrzlzosOSR4sZIwcILY

    //Acess token
    $('.btn_ajax_check_in_time').click(function () {
        $.ajaxSetup({
            headers: {
                'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJpbnRlcmRvbXVzIiwic3ViIjoiMTExMjIyMzMzIiwiaWF0IjoxNDk1NTcwNzM1LCJleHAiOjE1NjE2MzA3MzV9.mWs6-BqGRV-YQQg4tPO2XhxjJrzlzosOSR4sZIwcILY'
            }
        });

        var currentDate = new Date();
        console.log(currentDate);

        //var d = new Date("October 13, 2014 11:13:00");
        var main = {
            check_in_time: currentDate,
            tradecenter_id: 1
        };

        var contentType = "application/x-www-form-urlencoded; charset=utf-8";

        if (window.XDomainRequest) { //for IE8,IE9
            contentType = "text/plain";
        }

        $.ajax({
            url: "http://parking_for_alexey.dev/api/v1/app/check_in_time",
            type: "POST",
            data: {main: main},
            dataType: "json",
            contentType: contentType,
            success: function (data) {
                //alert("Data from Server" + JSON.stringify(data));
                console.log(JSON.stringify(data));
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("You can not send Cross Domain AJAX requests: " + errorThrown);
            }
        });
    })
</script>

<button class="btn_ajax_check_out_time">Выезд с парковки</button>
<script>

    //Acess token
    //eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJpbnRlcmRvbXVzIiwic3ViIjoiMTExMjIyMzMzIiwiaWF0IjoxNDk1NTcwNzM1LCJleHAiOjE1NjE2MzA3MzV9
    //.mWs6-BqGRV-YQQg4tPO2XhxjJrzlzosOSR4sZIwcILY

    //Acess token
    $('.btn_ajax_check_out_time').click(function () {
        $.ajaxSetup({
            headers: {
                'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJpbnRlcmRvbXVzIiwic3ViIjoiMTExMjIyMzMzIiwiaWF0IjoxNDk1NTcwNzM1LCJleHAiOjE1NjE2MzA3MzV9.mWs6-BqGRV-YQQg4tPO2XhxjJrzlzosOSR4sZIwcILY'
            }
        });

        var currentDate = new Date();
        console.log(currentDate);

        //var d = new Date("October 13, 2014 11:13:00");
        var main = {
            check_out_time: currentDate,
            tradecenter_id: 1
        };

        var contentType = "application/x-www-form-urlencoded; charset=utf-8";

        if (window.XDomainRequest) { //for IE8,IE9
            contentType = "text/plain";
        }

        $.ajax({
            url: "http://parking_for_alexey.dev/api/v1/app/check_out_time",
            type: "POST",
            data: {main: main},
            dataType: "json",
            contentType: contentType,
            success: function (data) {
                //alert("Data from Server" + JSON.stringify(data));
                console.log(JSON.stringify(data));
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("You can not send Cross Domain AJAX requests: " + errorThrown);
            }
        });
    })
</script>

</body>
</html>
