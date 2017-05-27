<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
</head>
<body>

<script>
    var domain = 'http://parking_for_alexey.dev';
</script>

<button class="btn_ajax_auth_app">Auth App</button>
<script>

    // base64_encode('111222333:aaabbbccc');
    // Result: MTExMjIyMzMzOmFhYWJiYmNjYw==

    $('.btn_ajax_auth_app').click(function () {
        $.ajaxSetup({
            headers: {
                'Authorization': 'Basic MTExMjIyMzMzOmFhYWJiYmNjYw=='
            }
        });

        var contentType = "application/x-www-form-urlencoded; charset=utf-8";

        if (window.XDomainRequest) { //for IE8,IE9
            contentType = "text/plain";
        }

        $.ajax({
            url: domain + "/api/v1/auth/app", //для регистрации
            type: "POST",
//            data: {main: main},
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

<!--<button class="btn_ajax_auth_user">Auth User</button>-->
<!--<script>-->
<!---->
<!--    // base64_encode('111222333:aaabbbccc');-->
<!--    // Result: MTExMjIyMzMzOmFhYWJiYmNjYw==-->
<!---->
<!--    $('.btn_ajax_auth_user').click(function () {-->
<!--        $.ajaxSetup({-->
<!--            headers: {-->
<!--                'Authorization': 'Basic MTExMjIyMzMzOmFhYWJiYmNjYw=='-->
<!--            }-->
<!--        });-->
<!---->
<!--        var contentType = "application/x-www-form-urlencoded; charset=utf-8";-->
<!---->
<!--        if (window.XDomainRequest) { //for IE8,IE9-->
<!--            contentType = "text/plain";-->
<!--        }-->
<!---->
<!--        $.ajax({-->
<!--            url: domain + "/authorize", //для регистрации-->
<!--            type: "POST",-->
<!--//            data: {main: main},-->
<!--            dataType: "json",-->
<!--            contentType: contentType,-->
<!--            success: function (data) {-->
<!--                //alert("Data from Server" + JSON.stringify(data));-->
<!--                console.log(JSON.stringify(data));-->
<!--            },-->
<!--            error: function (jqXHR, textStatus, errorThrown) {-->
<!--                alert("You can not send Cross Domain AJAX requests: " + errorThrown);-->
<!--            }-->
<!--        });-->
<!--    })-->
<!--</script>-->

<button class="btn_ajax_registration">Registration</button>
<script>

    // base64_encode('111222333:aaabbbccc');
    // Result: MTExMjIyMzMzOmFhYWJiYmNjYw==

    $('.btn_ajax_registration').click(function () {
        $.ajaxSetup({
            headers: {
                'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJpbnRlcmRvbXVzIiwic3ViIjoiMTExMjIyMzMzIiwiaWF0IjoxNDk1NTcwNzM1LCJleHAiOjE1NjE2MzA3MzV9.mWs6-BqGRV-YQQg4tPO2XhxjJrzlzosOSR4sZIwcILY'
            }
        });

        var main = {
            company_name: "ApiTest1CompanyName",
            first_name: "ApiTest1Alex224",
            last_name: "ApiTest1Zwanetski",
            street_house_number: "ApiTest1Arnulfstraße 3, 80335 München",
            zip_code: "ApiTest1Zip",
            city: "ApiTest1City",
            different: 1,
            active: 1,
            install_street_house_number: "ApiTest1 install_street_house_number",
            install_zip_code: "ApiTest1 install_zip_code",
            install_city: "ApiTest1 install_city",
            email: "ApiTest1info@test2.de",
            telephone: "0176123456",
            reachability: '',
            service: '',
            comments: '',
            comments_hidden: 0,

        };

        var contentType = "application/x-www-form-urlencoded; charset=utf-8";

        if (window.XDomainRequest) { //for IE8,IE9
            contentType = "text/plain";
        }

        $.ajax({
            url: domain + "/api/v1/app/registration", //для регистрации
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
            client_id: 1,
            tradecentre_id: 1,
            check_in_time: currentDate
        };

        var contentType = "application/x-www-form-urlencoded; charset=utf-8";

        if (window.XDomainRequest) { //for IE8,IE9
            contentType = "text/plain";
        }

        $.ajax({
            url: domain + "/api/v1/app/check_in_time",
            type: "POST",
            data: {main: main},
            dataType: "json",
            contentType: contentType,
            success: function (data) {
                var dataOut = JSON.stringify(data);
                //alert("Data from Server" + JSON.stringify(data));
                $('#response0').text(data);
                $('#response').text(dataOut);
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
            client_id: 1,
            tradecentre_id: 1,
            check_out_time: currentDate
        };

        var contentType = "application/x-www-form-urlencoded; charset=utf-8";

        if (window.XDomainRequest) { //for IE8,IE9
            contentType = "text/plain";
        }

        $.ajax({
            url: domain + "/api/v1/app/check_out_time",
            type: "POST",
            data: {main: main},
            dataType: "json",
            contentType: contentType,
            success: function (data) {
                var dataOut = JSON.stringify(data);
                //alert("Data from Server" + JSON.stringify(data));
                console.log(dataOut);
                $('#response').text(dataOut);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("You can not send Cross Domain AJAX requests: " + errorThrown);
            }
        });
    })
</script>

<br>
<br>
<div id="response"></div>

</body>
</html>
