<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estado de cuenta</title>
  <style>
    @font-face {
      font-family: 'Roboto-Medium';
      src: url({{ storage_path('fonts/Roboto-Medium.ttf') }}) format('truetype');
      font-weight: normal;
      font-style: normal;
      font-variant: normal;
    }

    @font-face {
      font-family: 'NotoSans-Regular';
      src: url({{ storage_path('fonts/NotoSans-Regular.ttf') }}) format('truetype');
      font-weight: normal;
      font-style: normal;
      font-variant: normal;
    }

    @font-face {
      font-family: 'NotoSans-Bold';
      src: url({{ storage_path('fonts/NotoSans-Bold.ttf') }}) format('truetype');
      font-weight: normal;
      font-style: normal;
      font-variant: normal;
    }

    @page {
      margin: 0.7cm 0.7cm 0cm 0.7cm;
      padding-top: 1cm;
    }

    body, table, table tr td {
      font-family: 'NotoSans-Regular', Arial !important;
      font-size: 0.9rem;
    }

    b, table tr th {
      font-family: 'NotoSans-Bold', Arial !important;
    }

    .debug-block {
      border: 1px dotted red;
    }

    header {
      text-align: left;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      border-bottom: 2px solid black;
    }

    header img.header-logo {
      width: auto;
      height: 50px;
    }

    .header p.title,
    .header h1.title,
    .header h2.title,
    .header h3.title {
      font-family: 'Roboto-Medium' !important;
    }

    .page {
      margin-top: 2.0cm;
      page-break-after: always;
    }

    .page:not(:last-child) {
      page-break-after: never;
    }

    footer {
      position: fixed;
      bottom: 0px;
      left: 0px;
      right: 0px;
      height: 80px;

      /** Extra personal styles **/
      background-color: #00b8e6;
      color: white;
      text-align: center;
    }

    table.table-report {
      width: 100% !important;
      border: 1px 0px solid black;
      border-collapse: collapse;
    }

    table.table-report th,
    table.table-report td {
      padding: 3px;
      border-bottom: 1px solid gray;
    }

    .text-right {
      text-align: right !important;
    }
  </style>
</head>
<body>
  @include('pdf.examples.03.header', ['subtitle' => 'Estado de cuenta'])
  @include('pdf.examples.03.content')
  @include('pdf.examples.03.footer')

  <script type="text/php">
    if (isset($pdf)) {
      $text = "Página {PAGE_NUM} / {PAGE_COUNT} - " . date('r');
      $size = 10;
      $font = $fontMetrics->getFont("NotoSans-Bold");
      $width = $fontMetrics->get_text_width($text, $font, $size) / 2;
      $x = ($pdf->get_width() - $width) / 2;
      $y = $pdf->get_height() - 30;
      $pdf->page_text($x, $y, $text, $font, $size);
    }
  </script>
</body>
</html>