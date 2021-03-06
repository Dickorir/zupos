<html>
<head>
    <title>Payment Reciept></title>
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
            margin-left: 0;
        }
        .title{
            float: right;
        }
        .title p{text-align: right;}
        table{
            width: 100%;
            border-collapse: collapse;
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

<div id="invoice-POS">

    <center id="top">
        <div class="logo"></div>
        <div class="info">
            <h2>{{ get_option('name') }}</h2>
        </div><!--End Info-->
    </center><!--End InvoiceTop-->

    <div id="mid">
        <div class="info">
            <p style="    text-align: center; margin-top: -20px !important;">
                {{ get_option('street') }}, {{ get_option('address') }}</br>
                {{ get_option('email') }} </br>
                {{ get_option('tel') }} </br>
            </p>
        </div>
    </div><!--End Invoice Mid-->

    <div id="bot">
        <div style="font-weight: bold"><span class=""></span> Order#: {{ $order->order_number }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Table:{{ $order->table->name }}</div>
        <div style="font-size: 12px"> <span style="font-weight: bold">Date:</span> {{ \Carbon\Carbon::parse($order->created_at)  }}</div>
        <div id="table">
            <table style="border-bottom:  double;    width: 100%;">
                <tr class="tabletitle">
                    <td class="item"><h2>Item</h2></td>
                    <td class="Hours"><h2>Qty</h2></td>
                    <td class="Rate"><h2>Sub Total</h2></td>
                </tr>

                @php $sum = 0; @endphp
                @foreach($orderitems as $orderitem)
                    <tr class="service">
                        <td class="tableitem"><p class="itemtext">{{ $orderitem->product->name }}</p></td>
                        <td class="tableitem"><p class="itemtext">{{ $orderitem->quantity }}</p></td>
                        <td class="tableitem"><p class="itemtext">{{ $orderitem->sub_total_price }}</p></td>
                    </tr>
                    @php $sum+= $orderitem->sub_total_price; @endphp
                @endforeach

            <!-- <tr class="tabletitle">
                    <td></td>
                    <td class="Rate"><h2>tax</h2></td>
                    <td class="payment"><h2>$419.25</h2></td>
                </tr> -->


                <tr class="tabletitle">
                    <td></td>
                    <td class="Rate"><h2>Total</h2></td>
                    <td class="payment"><h2>Ksh {{ $sum }}</h2></td>
                </tr>

            </table>
        </div><!--End Table-->

        <div>Served by:{{ $order->waiter->name }}</div>
        <div id="legalcopy">
            <p class="legal" style="text-align: center"><strong>Thank you for dining with us!</strong><br>
                System by: Zuca Solutions - 0776020366
            </p>
        </div>

    </div><!--End InvoiceBot-->
</div><!--End Invoice-->

<script>
    setTimeout(function () { window.close();}, 2000);
</script>
</body>
