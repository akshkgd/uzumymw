<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Invoice</title>
    <style>
        /* Include minimal styles since extensive Tailwind won't apply directly to PDF unless inlined */
        body { font-family: sans-serif !important; }
        .border { border: 1px solid #ccc; }
        .text-gray-500 { color: #6b7280; }
        .rotate-90{transform: rotate(90deg); margin-bottom: 0;}
        .text-base { font-size: 16px; }
        /* Add other inline styles as needed */
    </style>
</head>
<body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
  <main style="margin-top: 50px; padding: 0px;">
    <div style="max-width: 750px; margin: 0 auto; border-radius:14px; padding: 0px;">
      <div>
       
            
            <h3 style="margin-bottom:0; margin-top:5px">Codekaro</h3>
        
       
        <p class="text-sm" style="margin-top:5px; margin-bottom:0">GSTIN - 09HAIPS9510Q2ZL</p>

        <div style="margin-top:50px; display:flex; justify-content:space-between;">
          <div>
            <p class="text-sm" style="font-size:14px; color:gray;">ISSUED TO</>
            <p style="margin-bottom:0">{{ $enrollment->students->name ?? 'N/A' }}</p>
            <p style="margin-top:6px; margin-bottom:0">{{ $enrollment->students->email ?? 'N/A' }}</p>
            <p style="margin-top:6px">{{ $enrollment->students->mobile ?? 'N/A' }}</p>

          </div>
          <div style="text-align:righ; margin-top:24px">
            <p style="margin-bottom:0">Invoice Id: 
              <span class="text-base font-light text-gray-500">{{ $enrollment->invoiceId }}</span>
            </p>
            <p style="margin-top:6px">Generated at: <span class="text-gray-500">{{ \Carbon\Carbon::parse($enrollment->paidAt)->format('d-M-Y') }}</span></p>
          </div>
        </div>

        <div style="margin-top:30px;">
          <p class="font-medium">Transaction Id: <span class="text-gray-500">{{ $enrollment->transactionId }}</span></p>
          <p class="font-medium">Payment Method: <span class="text-gray-500">{{ $enrollment->paymentMethod }}</span></p>
          <p class="font-medium">Amount Paid: <span class="text-gray-500">{{ $enrollment->amountPaid / 100 }}</span></p>
          <p class="font-medium">Paid On: <span class="text-gray-500">{{ \Carbon\Carbon::parse($enrollment->paidAt)->format('d-M-Y') }}</span></p>
        </div>

        <div style="margin-top:30px;">
          <table style="width:100%; border-collapse: collapse;">
            <thead style="border-bottom:1px solid #eee;">
              <tr style="padding:8px 0">
                <td style="text-align:left; padding:12px 0;">Description</td>
                <td style="text-align:right; padding:12px 0;">Rate</td>
                <td style="text-align:right; padding:12px 0;">Total</td>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom:1px solid #eee;">
                <td style="padding:12px 0;">{{ $enrollment->batch->name ?? 'Course' }}</td>
                <td style="text-align:right; padding:12px 0;">{{ $enrollment->amountPaid / 100 }}</td>
                <td style="text-align:right; padding:12px 0;">{{ $enrollment->amountPaid / 100 }}</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="2" style="text-align:right; padding:8px 0;">Total</td>
                <td style="text-align:right; padding:8px 0;">{{ $enrollment->amountPaid / 100 }}</td>
              </tr>
            </tfoot>
          </table>
        </div>
        <div style="margin-top:20px;  padding:8px 15px; text-align:center;">
          <p class="text-sm text-gray-500" style="font-size: 12px">This is a system generated invoice, no signature required.</p>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
