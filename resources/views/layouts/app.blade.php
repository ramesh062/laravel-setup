<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="SAAPL (ISO 9001:2015 Certified Company) is one of the leading company with intelligence to understand the meaning of “SYNCHRONISATION, REGISTRATION & INSPECTION IN CONVERTING”. ">
    <meta name="keywords" content="saapl, sa automation, industrial automation solution." />
    <meta name="author" content="ACME Infosoft">
    <title>S A AUTOMATION PRIVATE LIMITED</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.png">

    @include("layouts.includes.style")
</head>
<body>
    <div class="page-wrapper">
        @include("layouts.includes.header")
        <main class="main">
            @yield('content')
        </main>
        @include("layouts.includes.footer")
    </div>
    @include("layouts.includes.script")
</body>
</html>
