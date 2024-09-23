<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Kamu - PHP Framework">
    <meta name="description" content="Kamu - PHP Framework">
    <meta name="theme-color" content="#ffffff">
    <meta name="color-scheme" content="light">
    <title>RestFull API - PHP Framework</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')) ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo e(asset('kamu.png')) ?>">
</head>

<body class="font-sans m-0 bg-gradient-to-br from-indigo-300 to-purple-400">
    <div class="flex h-screen justify-center items-center">
        <div class="text-slate-600 text-center bg-white p-8 rounded-xl drop-shadow-2xl">
            <h1 class="inline font-medium text-4xl mr-1">UCUP LOVE HILMY</h1>
            <p class="inline font-medium text-2xl">
                <?php echo e($data) ?>

            <small class="block mt-4" id="information"></small>
        </div>
    </div>

    <script src="<?php echo e(asset('js/app.js')) ?>"></script>
</body>

</html>
