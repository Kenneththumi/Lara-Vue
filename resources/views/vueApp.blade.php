<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token()}}">
    
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{'css/app.css'}}">
        
    </head>
    <body>
        <div class="container">
            <h3>Vue.Js CRUD with Laravel 5.5 application</h3>
        </div>
        <section id="app"></section>
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>
