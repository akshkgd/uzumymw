<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        p{
            margin: 0
        }
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
        }
        .header {
            /* border-bottom: 1px solid #eee; */
            padding-bottom: 20px;
            margin-bottom: 0px;
            margin-left: 10px;
        }
        .details {
            margin-bottom: 40px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table td, table th {
            padding: 10px;
            border: 1px solid #eee;
            
        }
        .desc{
            font-size: 14px;
        }

        .ck{
            font-size: 18px;
            
            }
        .add{
            margin-top: -6px;
            font-size: 14px;
            color: rgb(79, 79, 79)
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .codekaro{
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="invoice-box">
        <div class="header">
            <div class="codekaro">
                <cente>
                    <img src="{{public_path('assets/img/logo-red.png')}}" alt="Codekaro" style="height: 20px;">
                    <p class="ck">Codekaro</p>
                    <p class="add">Electronic City Phase-1, Bengaluru, BLR 560100, India</p>
                   
                    <p class="add">info@codekaro.in</p>
                    <p class="add">GSTIN - 09HAIPS9510Q2ZL</p>
                </cente>
                
                
            </div>
        </div>
            <table style="margin-bottom: 40px; border: none;">
                <tr>
                    <td style="border: none; width: 50%; padding-right: 40px;">
                        <p class="desc">Invoice #: {{ $invoiceId }}</p>
                        <p class="desc">Date: {{ $invoiceDate }}</p>
                        <p class="desc">Transaction ID: {{ $transactionId }}</p>
                        <p class="desc">Payment Method: {{ $paymentMethod }}</p>
                    </td>
                    <td style="border: none; width: 50%;">
                        <p class="desc">Bill To:</p>
                        <p class="desc">{{ $user->name }}</p>
                        <p class="desc">{{ $user->email }}</p>
                        <p class="desc"> +91 80859 00000</p>
                    </td>
                </tr>
            </table>
        
        
        <table>
            <tr>
                <th>Description</th>
                <th>Amount</th>
            </tr>
            <tr>
                <td>{{ $batch->name }}</td>
                <td>Rs. {{ $amount }}</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>Rs. {{ $amount }}</strong></td>
            </tr>
        </table>
        
        <div style="margin-top: 40px">
            <center>
                <p class="text-center add">This is system generated invoice, no signature required.</p>
            </center>
        </div>
    </div>
</body>
</html> 