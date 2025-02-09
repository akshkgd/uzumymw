<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Certificate of Completion</title>
    <style>
        body {
            font-family: 'DejaVu Sans', Arial, sans-serif;
            color: #333;
            text-align: center;
            background: #fff;
        }
        .certificate {
            width: 800px;
            margin: 0 auto;
            padding: 30px;
            border: 20px solid #0066cc;
            position: relative;
        }
        .certificate-header {
            margin-bottom: 30px;
        }
        .certificate-title {
            font-size: 36px;
            font-weight: bold;
            color: #0066cc;
            margin-bottom: 20px;
        }
        .student-name {
            font-size: 28px;
            font-weight: bold;
            margin: 20px 0;
            border-bottom: 2px solid #0066cc;
            display: inline-block;
            padding: 10px 30px;
        }
        .certificate-content {
            margin: 20px 0;
            font-size: 18px;
            line-height: 1.5;
        }
        .certificate-footer {
            margin-top: 40px;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }
        .qr-code {
            position: absolute;
            bottom: 30px;
            right: 30px;
            width: 100px;
            height: 100px;
        }
        .signature-line {
            width: 200px;
            border-top: 1px solid #333;
            margin-top: 10px;
            padding-top: 5px;
        }
    </style>
</head>
<body>
    <div class="certificate">
        <div class="certificate-header">
            <img src="{{ asset('assets/img/codekaro-dark.png') }}" alt="Organization Logo" height="80">
            <h1 class="certificate-title">Certificate of Completion</h1>
        </div>
        
        <div class="certificate-content">
            <p>This is to certify that</p>
            <div class="student-name">{{ $certificate->students->name }}</div>
            <p>has successfully completed the course</p>
            <h2>{{ $certificate->batch->name }}</h2>
            <p>with a grade of c</p>
            <p>Completed on {{ date('Fs d, Y') }}</p>
        </div>

        <div class="certificate-footer">
            <div>
                <div class="signature-line">
                    Course Instructor
                </div>
            </div>
            <div>
                <div class="signature-line">
                    Director
                </div>
            </div>
        </div>

        {{-- Generate QR Code using GoQR.me API --}}
        <div class="qr-code">
            <img src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data={{ urlencode(url('/course-certificate/' . $certificate->id)) }}" alt="Certificate QR Code">
        </div>
    </div>
</body>
</html>
