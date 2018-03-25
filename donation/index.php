<!doctype html>
<html>
  <head>
    <title>Donation</title>

<style>
.tip-button {
  width: 304px;
  height: 89px;
  background-size: 100%;
  background-image: url('images/1_pay_mm_off.png');
  cursor: pointer;
}
.tip-button:hover {
  background-image: url('images/1_pay_mm_over.png');
}
.tip-button:active {
  background-image: url('images/1_pay_mm_off.png');
}
</style>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript" src="https://blockchain.info/Resources/js/pay-now-button.js"></script>


  </head>

  <body>
    <center><h1>Buy With MetaMask</h1>
    <div class="tip-button"></div>
    <div class="message"></div></center>
    
    <div style="font-size:16px;margin:0 auto;width:300px" class="blockchain-btn"
     data-address="1AanWHSKhWLcKDVp64jWuRmkKEtrecXaFa"
     data-shared="false">
    <div class="blockchain stage-begin">
        <img src="https://blockchain.info/Resources/buttons/donate_64.png"/>
    </div>
    <div class="blockchain stage-loading" style="text-align:center">
        <img src="https://blockchain.info/Resources/loading-large.gif"/>
    </div>
    <div class="blockchain stage-ready">
         <p align="center">Please Donate To Bitcoin Address: <b>[[address]]</b></p>
         <p align="center" class="qr-code"></p>
    </div>
    <div class="blockchain stage-paid">
         Donation of <b>[[value]] BTC</b> Received. Thank You.
    </div>
    <div class="blockchain stage-error">
        <font color="red">[[error]]</font>
    </div>
    </div>
  </body>

<script>
var MY_ADDRESS = '0xb5556e48Df83FB640683F2598ED78ce22cb2dAa7'
var tipButton = document.querySelector('.tip-button')
tipButton.addEventListener('click', function() {
  if (typeof web3 === 'undefined') {
    return renderMessage('<div>You need to install <a href=“https://metmask.io“>MetaMask </a> to use this feature.  <a href=“https://metmask.io“>https://metamask.io</a></div>')
  }
  var user_address = web3.eth.accounts[0]
  web3.eth.sendTransaction({
    to: MY_ADDRESS,
    from: user_address,
    value: web3.toWei('1', 'ether'),
  }, function (err, transactionHash) {
    if (err) return renderMessage('There was a problem!: ' + err.message)
    // If you get a transactionHash, you can assume it was sent,
    // or if you want to guarantee it was received, you can poll
    // for that transaction to be mined first.
    renderMessage('Thanks for the generosity!!')
  })
})
function renderMessage (message) {
  var messageEl = document.querySelector('.message')
  messageEl.innerHTML = message
}
</script>

</html>
