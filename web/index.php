<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method="POST" action="email-handler.php" id="form">
    <label for="email"> Email
        <input id="email" type="email" name="email"/>
    </label>
    <button type="button" id="submit">Submit</button>
</form>
</body>
<script>
    'use strict';

    var submit = document.getElementById('submit');
    var email = document.getElementById('email');
    console.log(email.value);
    console.log(submit);
    submit.onclick = function () {
        var data = new FormData();
        data.append('email', email.value);
        console.log('working');
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '/email-handler.php');
        xhr.send(data);


        xhr.onreadystatechange = function () {
            var DONE = 4;
            var OK = 200;
            if (xhr.readyState === DONE) {
                if (xhr.status === OK) {
                    var serverResponse = JSON.parse(xhr.responseText);
                    console.log(serverResponse);
                }
            }
        };

        return false;
    };
</script>
</html>