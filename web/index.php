<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
        .loading-spinner-wrapper {
            position: absolute;
            width: 100%;
            left: 0;
            text-align: center;
            z-index: 99;
            top: 50%;
            margin-top: -6px;
            opacity: 0;
            -webkit-transition: all, 0.3s, ease;
            -moz-transition: all, 0.3s, ease;
            -ms-transition: all, 0.3s, ease;
            -o-transition: all, 0.3s, ease;
            transition: all, 0.3s, ease;
        }

        .loading-spinner {
            position: relative;
            vertical-align: middle;
            width: 50px;
            height: 12px;
            text-align: center;
            margin: 0 auto;
            display: block;
        }

        .loading-spinner span {
            position: absolute;
            top: 0;
            width: 11px;
            height: 11px;
            border-radius: 50%;
            background: #ef6c00;
            -webkit-animation: pulse 1s infinite ease-in-out;
            -moz-animation: pulse 1s infinite ease-in-out;
            animation: pulse 1s infinite ease-in-out;
            -webkit-animation-fill-mode: both;
            -moz-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        .loading-spinner span.one {
            left: 0;
            -webkit-animation-delay: -.32s;
            -moz-animation-delay: -.32s;
            animation-delay: -.32s;
        }

        .loading-spinner span.two {
            left: 50%;
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            transform: translateX(-50%);
            -webkit-animation-delay: -.16s;
            -moz-animation-delay: -.16s;
            animation-delay: -.16s;
        }

        .loading-spinner span.three {
            right: 0;
        }

        .loading-spinner span {
            background: #ef6c00;
        }

        @-webkit-keyframes pulse {
            0%, 100%, 80% {
                opacity: 0;
            }
            40% {
                opacity: 1;
            }
        }

        @-moz-keyframes pulse {
            0%, 100%, 80% {
                opacity: 0;
            }
            40% {
                opacity: 1;
            }
        }

        @keyframes pulse {
            0%, 100%, 80% {
                opacity: 0;
            }
            40% {
                opacity: 1;
            }
        }

        .freewaterform {
            padding: 5px 20px 20px;
            clear: both;
            float: none;
            position: relative;
            overflow: hidden;
        }

        .freewaterform.activated:before {
            content: '';
            position: absolute;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            width: 100%;
            top: 0;
            left: 0;
        }

        .freewaterform.activated .loading-spinner-wrapper {
            opacity: 1;
        }

        .freewaterform input[type="email"] {
            padding: 8px 10px;
            min-width: 200px;
            display: inline-block;
            font-family: Helvetica, Arial, sans-serif;
            font-size: 12px;
            line-height: 18px;
            color: #1b1b1b;
            border-radius: 2px;
            border: 1px solid #ccc;
            letter-spacing: 1px;
            outline: none;
        }

        .freewaterform .input-wrap {
            text-align: center;
            margin-top: 8px;
        }

        .freewaterform input[type="submit"] {
            border: none;
            border-radius: 2px;
            display: inline-block;
            height: 36px;
            line-height: 36px;
            outline: 0;
            padding: 0 2rem;
            text-transform: uppercase;
            font-size: 14px;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            text-decoration: none;
            color: #fff;
            font-family: Helvetica, Arial, sans-serif;
            background-color: #ef6c00;
            text-align: center;
            letter-spacing: 1px;
        }

        .freewaterform input[type="submit"]:hover {
            box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
        }

        .freewater-thankyou h2 {
            font-weight: bold;
            color: #333;
            text-align: center;
            line-height: 24px;
            font-size: 18px;
        }

        .freewater-thankyou h2 span {
            color: #ef6c00;
        }
    </style>
</head>
<body>
<div class="freewater-thankyou" style="display: none;">
    <h2>Thank you! <br/>Kindly check your e-mail account <br/>for instructions on how to claim your discount.</h2>
</div>
<div class="freewaterform">
    <div id="app-loader" class="loading-spinner-wrapper">
        <div class="loading-spinner"><span class="one"> </span> <span class="two"> </span> <span class="three"> </span>
        </div>
    </div>
    <p style="font-style: italic; text-align: center; font-size: 12px;">Hold up! There's still the matter of your <span
            style="color: #ff3d00 !important;">discount coupon!</span> <br/> Fill up this form so we can send you a
        coupon for 10% discount off for a pair of sandals from Res-Toe-Run!</p>

    <form action="email-handler.php" method="post">
    <div class="input-wrap"><input id="email" type="email" placeholder="Enter your Email Address"/></div>
    <div class="input-wrap">
        <input type="submit" id="submit" value="submit"/>
    </div>
    </form></div>
</body>
<script>
    'use strict';
    var submit = document.getElementById('submit');
    var email = document.getElementById('email_field');


    /**
     * @return {boolean}
     */


    submit.addEventListener('click',  function () {


        formWrap[0].classList.add('activated');
        var data = new FormData();
        data.append('email', email.value);

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'https://freewaters.herokuapp.com/raffle-handler.php');
        xhr.send(data);

        xhr.onreadystatechange = function () {
            var DONE = 4;
            var OK = 200;
            if (xhr.readyState === DONE) {
                if (xhr.status === OK) {
                    var serverResponse = JSON.parse(xhr.responseText);
                    return true;
                }
            }
        };
        return false;
    });
</script>
</html>