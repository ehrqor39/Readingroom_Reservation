<?php
session_start();
if(($_SESSION['is_logged'])) {
    $id = $_SESSION['id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .seat {
            width: 50px;
            height: 50px;
            margin-top: 3px;
            margin-left: 3px;
            margin-bottom: 3px;
            font-size: small;
        }

        .clicked {
            background-color: red;
            color: white;
        }
        .bg-image {
            /*background-image: url('https://source.unsplash.com/WEQbe2jBg40/600x1200');*/
            /*background-size: cover;*/
            /*background-position: center;*/
            min-height: 100vh;
            border: #0f0f0f;
            border-spacing: 10px;
        }
        :root {
            --input-padding-x: 1.5rem;
            --input-padding-y: 0.75rem;
        }
        @media screen and (min-width:2000px) {
            .seat {
                width: 100px;
                height: 100px;
                font-size: medium;
            }
        }
        @media screen and (max-width:1300px){
            .seat {
                width: 30px;
                height: 30px;
            }
        }
    </style>
</head>

<body>
<div class="container-fluid">
    <div class="row no-gutter">
        <div class="d-flex align-content-around flex-wrap col-md-4 col-lg-6 bg-image">
                <h3><span class="label label-primary"><? echo $id?></span></h3>
        </div>
        <div class="d-flex col-md-8 col-lg-6">
            <div class="container-fluid align-self-center seat-wrapper" id="seatingMap">
                <h3><span class="label label-primary">Seating Map</span></h3>
                <div>
                    <input type="button" name="seats" class="seat" value="1">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="2">
                    <input type="button" name="seats" class="seat" value="3">
                    <input type="button" name="seats" class="seat" value="4">
                    <input type="button" name="seats" class="seat" value="5">
                    <input type="button" name="seats" class="seat" value="6">
                    <input type="button" name="seats" class="seat" value="7">
                    <input type="button" name="seats" class="seat" value="8">
                    <input type="button" name="seats" class="seat" value="9">
                    <input type="button" name="seats" class="seat" value="10">
                </div>
                <div>
                    <input type="button" name="seats" class="seat" value="11">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                </div>
                <div>
                    <input type="button" name="seats" class="seat" value="12">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="13">
                    <input type="button" name="seats" class="seat" value="14">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                </div>
                <div>
                    <input type="button" name="seats" class="seat" value="15">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="16">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                </div>
                <div>
                    <input type="button" name="seats" class="seat" value="17">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="18">
                    <input type="button" name="seats" class="seat" value="19">
                    <input type="button" name="seats" class="seat" value="20">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="21">
                    <input type="button" name="seats" class="seat" value="22">
                    <input type="button" name="seats" class="seat" value="23">
                    <input type="button" name="seats" class="seat" value="24">
                    <input type="button" name="seats" class="seat" value="25">
                </div>
                <div>
                    <input type="button" name="seats" class="seat" value="26">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="27">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="28">
                    <input type="button" name="seats" class="seat" value="29">
                    <input type="button" name="seats" class="seat" value="30">
                    <input type="button" name="seats" class="seat" value="31">
                    <input type="button" name="seats" class="seat" value="32">
                </div>
                <div>
                    <input type="button" name="seats" class="seat" value="33">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="34">
                    <input type="button" name="seats" class="seat" value="35">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="36">
                    <input type="button" name="seats" class="seat" value="37">
                    <input type="button" name="seats" class="seat" value="38">
                    <input type="button" name="seats" class="seat" value="39">
                </div>
                <div>
                    <input type="button" name="seats" class="seat" value="40">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="41">
                    <input type="button" name="seats" class="seat" value="42">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="43">
                    <input type="button" name="seats" class="seat" value="44">
                    <input type="button" name="seats" class="seat" value="45">
                    <input type="button" name="seats" class="seat" value="46">
                </div>
                <div>
                    <input type="button" name="seats" class="seat" value="47">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="48">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="49">
                    <input type="button" name="seats" class="seat" value="50">
                    <input type="button" name="seats" class="seat" value="51">
                    <input type="button" name="seats" class="seat" value="52">
                    <input type="button" name="seats" class="seat" value="53">
                </div>
                <div>
                    <input type="button" name="seats" class="seat" value="54">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="55">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="56">
                    <input type="button" name="seats" class="seat" value="57">
                    <input type="button" name="seats" class="seat" value="58">
                    <input type="button" name="seats" class="seat" value="59">
                    <input type="button" name="seats" class="seat" value="60">
                </div>
                <div>
                    <input type="button" name="seats" class="seat" value="61">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="62">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="X" disabled="disabled">
                    <input type="button" name="seats" class="seat" value="63">
                    <input type="button" name="seats" class="seat" value="64">
                    <input type="button" name="seats" class="seat" value="65">
                    <input type="button" name="seats" class="seat" value="66">
                    <input type="button" name="seats" class="seat" value="67">
                    <input type="button" name="seats" class="seat" value="68">
                </div>

            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="//unpkg.com/bootstrap@4/dist/css/bootstrap.min.css">
<script src='//unpkg.com/jquery@3/dist/jquery.min.js'></script>
<script src='//unpkg.com/popper.js@1/dist/umd/popper.min.js'></script>
<script src='//unpkg.com/bootstrap@4/dist/js/bootstrap.min.js'></script>
</body>
</html>