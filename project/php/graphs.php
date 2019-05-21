<?php
 session_start();
?>
<html>
<head>
<link rel="stylesheet" href="../css/graphs.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body class="bg-primary">
<script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
<coingecko-coin-price-marquee-widget  coin-ids="bitcoin,ethereum,litecoin,bitcoin-cash" currency="usd" background-color="#ffffff" locale="en"></coingecko-coin-price-marquee-widget>




<?php
echo "<div class='dropdown' style='padding-top: 25px; padding-left: 12px; position: fixed;'>";
echo "<button class='dropbtn'>Coins</button>";
echo "<div class='dropdown-content'>";
echo "<a onclick='showBitcoin()' class='coins'>Bitcoin</a>";
echo "<a onclick='showEthereum()' class='coins'>Ethereum</a>";
echo "<a onclick='showLitecoin()' class='coins'>Litecoin</a>";
echo "<a onclick='showBitcoinCash()' class='coins'>Bitcoin Cash</a>";

    
    
echo "<script>

function showBitcoin(){
var a = document.getElementById('btcGraph');
var b = document.getElementById('ethGraph');
var c = document.getElementById('ltcGraph');
var d = document.getElementById('bchGraph');

if(a.style.display === 'none'){
 a.style.display = 'block';
 b.style.display = 'none';
 c.style.display = 'none';
 d.style.display = 'none';
}else{ 
 a.style.display ='none';
}
}
    
function showEthereum(){
var a = document.getElementById('btcGraph');
var b = document.getElementById('ethGraph');
var c = document.getElementById('ltcGraph');
var d = document.getElementById('bchGraph');

if(b.style.display === 'none'){
 b.style.display = 'block';
 a.style.display = 'none';
 c.style.display = 'none';
 d.style.display = 'none';
}else{ 
 b.style.display ='none';
}
}

function showLitecoin(){
var a = document.getElementById('btcGraph');
var b = document.getElementById('ethGraph');
var c = document.getElementById('ltcGraph');
var d = document.getElementById('bchGraph');

if(c.style.display === 'none'){
 c.style.display = 'block';
 a.style.display = 'none';
 b.style.display = 'none';
 d.style.display = 'none';
}else{ 
 c.style.display ='none';
}
} 
    
function showBitcoinCash(){
var a = document.getElementById('btcGraph');
var b = document.getElementById('ethGraph');
var c = document.getElementById('ltcGraph');
var d = document.getElementById('bchGraph');

if(d.style.display === 'none'){
 d.style.display = 'block';
 a.style.display = 'none';
 b.style.display = 'none';
 c.style.display = 'none';
}else{ 
 d.style.display ='none';
}
}</script>"; 

  echo "</div>";
echo "</div>";


?>

<!-- Dynamic chart for Bitcoin -->
<div id='btcGraph' style='padding-top:65px;' class="tradingview-widget-container">
<div id="tradingview_f3425"></div>
<div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/COINBASE-BTCUSD/" rel="noopener" target="_blank"><span class="blue-text">BTCUSD Chart</span></a> by TradingView</div>
<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
<script type="text/javascript">
new TradingView.widget(
		{
			"width": 800,
			"height": 580,
			"symbol": "COINBASE:BTCUSD",
			"interval": "D",
			"timezone": "Etc/UTC",
			"theme": "Dark",
			"style": "2",
			"locale": "en",
			"toolbar_bg": "#f1f3f6",
			"enable_publishing": false,
			"allow_symbol_change": true,
			"show_popup_button": true,
			"popup_width": "1000",
			"popup_height": "650",
			"container_id": "tradingview_f3425"
		}
		);
</script>
</div>
<!-- END of BTC Chart -->

<!-- Dynamic chart for Ethereum -->
<div id="ethGraph" style='padding-top:65px;' class="tradingview-widget-container">
  <div id="tradingview_b445b"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/COINBASE-ETHUSD/" rel="noopener" target="_blank"><span class="blue-text">ETHUSD Chart</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 800,
  "height": 580,
  "symbol": "COINBASE:ETHUSD",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "Dark",
  "style": "2",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "show_popup_button": true,
  "popup_width": "1000",
  "popup_height": "650",
  "container_id": "tradingview_b445b"
}
  );
  </script>
</div>
<!-- END of ETH Chart -->
    
<!-- Dynamic Chart for Litecoin -->
<div id="ltcGraph" style='padding-top:65px;' class="tradingview-widget-container">
  <div id="tradingview_054d2"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/COINBASE-LTCUSD/" rel="noopener" target="_blank"><span class="blue-text">LTCUSD Chart</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 800,
  "height": 580,
  "symbol": "COINBASE:LTCUSD",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "Dark",
  "style": "2",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "show_popup_button": true,
  "popup_width": "1000",
  "popup_height": "650",
  "container_id": "tradingview_054d2"
}
  );
  </script>
</div>
<!-- END of LTC Chart-->
    
<!-- Dynamic Chart for Bitcoin Cash -->
<div id="bchGraph" style='padding-top:65px;' class="tradingview-widget-container">
  <div id="tradingview_90b56"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/COINBASE-BCHUSD/" rel="noopener" target="_blank"><span class="blue-text">BCHUSD Chart</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 800,
  "height": 580,
  "symbol": "COINBASE:BCHUSD",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "Dark",
  "style": "2",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "show_popup_button": true,
  "popup_width": "1000",
  "popup_height": "650",
  "container_id": "tradingview_90b56"
}
  );
  </script>
</div>
<!-- END of BCH Chart -->
    
</body>
</html>