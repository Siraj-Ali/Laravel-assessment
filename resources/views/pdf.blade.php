<!DOCTYPE html>
<html lang="ur" dir="rtl">
<head>
    <meta charset="UTF-8">
    <style>
        @font-face {
            font-family: 'jameel-noori-nastaleeq';
            src: url('{{ storage_path('fonts/JameelNooriNastaleeq-Regular.ttf') }}') format('truetype');
        }
    
        body {
            font-family: 'jameel-noori-nastaleeq', sans-serif;
            direction: rtl;
            text-align: right;
        }
    </style>
    
</head>
<body>
    <h1>اردو پی ڈی ایف</h1>
    <p>{{ $urduText }}</p>
</body>
</html>
