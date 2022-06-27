<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/styles.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
    <title>Naves espaciales</title>
</head>
<body>
    <div class="container-fluid">
        <!-- mostrar la marca / logotipo / nombre de la empresa y todas las navegaciones -->
        <header class="row justify-content-center">
            <div class="col-md-10 col-sm-12 text-center text-white pt-5 pb-2">
                <h1 class="title">Naves espaciales</h1>
               
            </div>
            @yield('banner')
        </header>

        @yield('content')

        
    </div>
    <script src="https://kit.fontawesome.com/bde242f7d4.js" crossorigin="anonymous"></script>
    @yield('js')
</body>
</html>