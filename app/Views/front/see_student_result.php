<section class="bg-img pt-200 pb-120" data-overlay="7" style="background-image: url(../images/front-end-img/banners/banner-1.jpg); background-position: top center;">
  <div class="container mt-5">

  <style>
    body {
      background: linear-gradient(to right, #f0f4ff, #dbefff);
      font-family: 'Segoe UI', sans-serif;
    }
    .result-card {
      background: linear-gradient(to bottom right, #ffffff, #f0f8ff);
      border-radius: 20px;
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
      padding: 40px;
      margin: 30px auto;
      max-width: 1000px;
    }
    .school-header {
      text-align: center;
      margin-bottom: 30px;
      color: #2c3e50;
    }
    .school-logo {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      border: 3px solid #0d6efd;
      margin-bottom: 10px;
    }
    .table thead {
      background-color: #0d6efd;
      color: #fff;
    }
    .table tbody tr:nth-child(even) {
      background-color: #f9f9f9;
    }
    .highlight-box {
      background-color: #e3f2fd;
      padding: 15px;
      border-radius: 10px;
      margin-bottom: 15px;
    }
    .print-btn, .download-btn {
      margin: 10px;
      padding: 10px 30px;
      font-size: 16px;
      border-radius: 30px;
    }
    .footer-signature {
      margin-top: 20px;
      font-style: italic;
      color: #34495e;
    }
  </style>
</head>
<body>
  <div class="container result-card">
    <div class="school-header">
      <img src="school-logo.png" alt="School Logo" class="school-logo">
      <h2><strong>Sunshine Model School</strong></h2>
      <h5>📘 Student's Academic Report Card </h5>
    </div>

    <div class="row">
      <div class="col-md-6 highlight-box">
        <p><strong>📅 Academic Year:</strong> 2024-2025</p>
        <p><strong>📝 Exam Name:</strong> Final Term Examination</p>
        <p><strong>🏫 Class:</strong> 8</p>
        <p><strong>📚 Group:</strong> Science</p>
        <p><strong>👥 Section:</strong> A</p>
      </div>
      <div class="col-md-6 highlight-box">
        <p><strong>🆔 Student ID:</strong> STU123456</p>
        <p><strong>👦 Student Name:</strong> Rahim Uddin</p>
        <p><strong>👨 Father's Name:</strong> Karim Uddin</p>
        <p><strong>👩 Mother's Name:</strong> Hasina Begum</p>
        <p><strong>📄 Registration No:</strong> REG2024123</p>
      </div>
    </div>

    <h5 class="mt-4">📑 Subject-wise Marks</h5>
    <table class="table table-bordered text-center">
      <thead>
        <tr>
          <th>Subject</th>
          <th>Full Marks</th>
          <th>Obtained Marks</th>
          <th>Grade</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Bangla</td><td>100</td><td>85</td><td>A</td></tr>
        <tr><td>English</td><td>100</td><td>78</td><td>B+</td></tr>
        <tr><td>Mathematics</td><td>100</td><td>90</td><td>A+</td></tr>
        <tr><td>General Science</td><td>100</td><td>88</td><td>A+</td></tr>
        <tr><td>ICT</td><td>50</td><td>45</td><td>A</td></tr>
      </tbody>
    </table>

    <div class="row">
      <div class="col-md-6 highlight-box">
        <p><strong>🔢 Total Marks:</strong> 398 / 450</p>
        <p><strong>📊 GPA:</strong> 4.80</p>
        <p><strong>✅ Result:</strong> Passed</p>
        <p><strong>🏅 Position in Class:</strong> 3rd</p>
        <p><strong>📈 Attendance:</strong> 95%</p>
      </div>
      <div class="col-md-6 highlight-box">
        <p><strong>👨‍🏫 Teacher's Comment:</strong> Very good performance. Keep it up.</p>
        <p><strong>👩‍🏫 Head Teacher's Comment:</strong> Promoted to next class.</p>
        <p class="footer-signature">Signature: ______________________</p>
      </div>
    </div>

    <div class="text-center">
      <button class="btn btn-success print-btn" onclick="window.print()">🖨️ Print</button>
      <button class="btn btn-primary download-btn" id="downloadPdf">⬇️ Download PDF</button>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
  <script>
    $('#downloadPdf').click(function() {
      const element = document.querySelector('.result-card');
      html2pdf().from(element).save('Result-Sheet.pdf');
    });
  </script>




  </div>
</section>
