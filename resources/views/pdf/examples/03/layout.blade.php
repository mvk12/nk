<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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

    body {
      font-family: 'NotoSans-Regular';
    }

    .header {
      text-align: center;
    }

    .header p.title,
    .header h1.title,
    .header h2.title,
    .header h3.title {
      font-family: 'Roboto-Medium' !important;
    }

    .header img.header-logo {
      width: 200px;
      height: auto;
    }
  </style>
</head>
<body>
  @include('pdf.examples.03.header', ['subtitle' => 'Estado de cuenta'])
  @include('pdf.examples.03.content')
  @include('pdf.examples.03.footer')
</body>
</html>