<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Certificate of Completion</title>
  <style>
    body {
      font-family: 'Georgia', serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f3f4f6;
    }
    .certificate-container {
      width: 800px;
      padding: 40px;
      border: 15px solid #4CAF50;
      background-color: white;
      text-align: center;
      position: relative;
    }
    .certificate-container h1 {
      font-size: 48px;
      color: #4CAF50;
      margin: 0;
    }
    .certificate-container h2 {
      font-size: 28px;
      color: #333;
      margin: 10px 0;
    }
    .certificate-container p {
      font-size: 20px;
      color: #666;
      margin: 20px 0;
    }
    .certificate-container .signature {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 40px;
    }
    .certificate-container .signature div {
      text-align: center;
    }
    .certificate-container .signature div p {
      margin: 0;
    }
    .certificate-container .signature-line {
      border-top: 2px solid #333;
      width: 200px;
      margin: 10px auto;
    }
  </style>
</head>
<body>
  <div class="certificate-container">
    <h1>Certificate of Completion</h1>
    <p>This is to certify that</p>
    <h2>[Recipient Name]</h2>
    <p>has successfully completed the</p>
    <h2>[Course Name]</h2>
    <p>on [Date].</p>
    <div class="signature">
      <div>
        <div class="signature-line"></div>
        <p>Instructor's Signature</p>
      </div>
      <div>
        <div class="signature-line"></div>
        <p>Authorized Signature</p>
      </div>
    </div>
  </div>
</body>
</html>
