<!DOCTYPE html>
<html>
    <head>
        <title>Eagle Financial Services</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
                background-image:url('http://www.planwallpaper.com/static/images/Alien_Ink_2560X1600_Abstract_Background.jpg>');
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
				<div align="center"><H1><FONT SIZE="8" FACE="arial" COLOR=black>EAGLE FINANCIAL SERVICES </FONT></H1></div>
				<div align="right"> <FONT SIZE="4" FACE="verdana" COLOR=black>- Your Mid-west financial services partner</div>
<div id="header1">
	<!-- header1 Left -->
	<div class="header1left">
		
		
			
				<a href="{{ action('CustomerController@index') }}">Customers</a> &nbsp
				<a href="{{ action('StockController@index') }}">Stocks</a> &nbsp
				<a href="{{ action('InvestmentController@index') }}">Investments</a> &nbsp
                <a href="{{ action('AssetController@index') }}">Assets</a>
			
	</div>
</div>

<div class=""><img src="http://blackengtech.com/img/pictures/finance.jpg" width="100%" height="400"></div>
				
            </div>
        </div>
    </body>
</html>
