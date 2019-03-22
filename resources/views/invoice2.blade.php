<html>
<head>
    <title>Payment Reciept></title>
    <link rel="icon" href="http://<?php echo $_SERVER['SERVER_NAME'];?>/bhs/assets/img/favicon.ico">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style type="text/css">
        #invoice-POS{
            box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
            padding:2mm;
            margin: 0 auto;
            width: 100mm;
            background: #FFF;


        ::selection {background: #f31544; color: #FFF;}
        ::moz-selection {background: #f31544; color: #FFF;}
        h1{
            font-size: 1.5em;
            color: #222;
        }
        h2{font-size: .9em;}
        h3{
            font-size: 1.2em;
            font-weight: 300;
            line-height: 2em;
        }
        p{
            font-size: .7em;
            color: #666;
            line-height: 1.2em;
        }

        #top, #mid,#bot{ /* Targets all id with 'col-' */
            border-bottom: 1px solid #EEE;
        }

        #top{min-height: 100px;}
        #mid{min-height: 80px;}
        #bot{ min-height: 50px;}

        #top .logo{
        //float: left;
            height: 60px;
            width: 60px;
            background: url(http://michaeltruong.ca/images/logo1.png) no-repeat;
            background-size: 60px 60px;
        }
        .clientlogo{
            float: left;
            height: 60px;
            width: 60px;
            background: url(http://michaeltruong.ca/images/client.jpg) no-repeat;
            background-size: 60px 60px;
            border-radius: 50px;
        }
        .info{
            display: block;
        //float:left;
        //margin-left: 0;
            text-align: center;
        }
        .title{
            float: right;
        }
        .title p{text-align: right;}
        table{
            width: 100%;
            border-collapse: collapse;
            text-align: center !important;
        }
        td{
        //padding: 5px 0 5px 15px;
        //border: 1px solid #EEE
        }
        .tabletitle{
        //padding: 5px;
            font-size: .5em;
            background: #EEE;
        }
        .service{border-bottom: 1px solid #EEE;}
        .item{width: 24mm;}
        .itemtext{font-size: .5em;}

        #legalcopy{
            margin-top: 5mm;
        }



        }
    </style>
</head>
<body onLoad="self.print()">
<div id="invoice-POS"  >

    <header class="clearfix">
        <div id="logo">
            {{--<img src="images/logo.jpeg">--}}
            <img src="{{ asset('images/logo.jpeg') }}">
        </div>
        <div id="company">
            <h2 class="name">ZUca POS</h2>
            <div>977-726</div>
            <div>Phone:0988673255</div>
            <div>Email:<a href="mailto:">Zuca.co.ke</a></div>
            <div>Website:Zuca web</div>
        </div>
    </header>
    <main>
        <div id="details" class="clearfix">
            <div id="client">
                <div class="to">INVOICE TO:</div>
                <h2 class="name">kim</h2>
                <div class="address">Town: kenya}</div>
                <div class="address">Delivery line: 0788383773</div>
                <div class="address">Phone: 0726265629</div>
                <div class="email">Email: ttttt</div>
            </div>
            <div id="invoice">
                <h1>INVOICE 3-2-1</h1>
                <div class="date"><strong>Date of Invoice:</strong> leo</div>
                <div class="date"><strong>Due Date:</strong> kesho</div>
            </div>
        </div>
        <table border="0" cellspacing="0" cellpadding="0">
            <thead>
            <tr>
                <th class="no">#</th>
                <th class="desc">Item</th>
                <th class="unit">Unit Price</th>
                <th class="qty">Qty</th>
                <th class="total">Total</th>
            </tr>
            </thead>
            <tbody>

            <tr class="item-row">
                <td class="no">1</td>
                <td class="desc"><p>44444</p></td>
                <td class="unit">KSh 600</td>
                <td class="qty">5</td>
                <td class="total">KSh 9000</td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="2"></td>
                <td colspan="2">SUBTOTAL</td>
                <td>KSh 9000</td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="2">TAX</td>
                <td>Inclusive</td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="2">GRAND TOTAL</td>
                <td>KSh 9000</td>
            </tr>
            </tfoot>
        </table>
        <div id="thanks">Thank you!</div>
        <div id="notices">
            <div>NOTICE:</div>
            <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
        </div>
    </main>
    <footer>
        Invoice was created on a computer and is valid without the signature and seal.
    </footer>
</div>
</body>
</html>