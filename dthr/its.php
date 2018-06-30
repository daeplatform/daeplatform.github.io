<?php
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
    box-sizing: border-box;
}

.columns {
    float: left;
    width: 33.3%;
    padding: 8px;
}

.price {
    list-style-type: none;
    border: 1px solid #eee;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;
}

.price:hover {
    box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
    background-color: #111;
    color: white;
    font-size: 25px;
}

.price li {
    border-bottom: 1px solid #eee;
    padding: 20px;
    text-align: center;
}

.price .grey {
    background-color: #eee;
    font-size: 20px;
}

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 18px;
}

@media only screen and (max-width: 600px) {
    .columns {
        width: 100%;
    }
}
</style>
</head>
<body>

<h2 style="text-align:center">Daethereum (DTHR)</h2>
<p style="text-align:center">Contrack Address: <a target="_blank" href="/">Address</a><br />
0 DTHR	|	0 BTC	|	0 BTC	|	0 ETH</p>
<p style="text-align:center">Min. 0.005 ETH per transaction	|	Max. 1 ETH per transaction</p>

<div class="columns">
  <ul class="price">
    <li class="header">Round 1</li>
    <li class="grey">20,000 DTHR/ETH</li>
    <li>25 million DTHR</li>
    <li>Starts on July 09, 2018</li>
    <li>Completed on July 13, 2018</li>
    <li>Sold 0 DTHR</li>
    <li class="grey"><a href="#" class="button">Process</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#4CAF50">Round 2</li>
    <li class="grey">15,000 DTHR/ETH</li>
    <li>15 million DTHR</li>
    <li>Starts on Jul 16, 2018</li>
    <li>Completed on Jul 20, 2018</li>
    <li>Sold 0 DTHR</li>
    <li class="grey"><a href="#" class="button">Coming Soon</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">Round 3</li>
    <li class="grey">10,000 DTHR/ETH</li>
    <li>10 million DTHR</li>
    <li>Starts on Jul 23, 2018</li>
    <li>Completed on Jul 27, 2018</li>
    <li>Sold 0 DTHR</li>
    <li class="grey"><a href="#" class="button">Coming Soon</a></li>
  </ul>
</div>

</body>
</html>
?>
