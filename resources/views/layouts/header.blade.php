<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Arezzo Contatos</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
      <link href="css/style.css" rel="stylesheet">

</head>
<body>

<nav class="pink darken-1">
    <div class="container">
            <div class="nav-wrapper">
                    <a href="/" class="brand-logo"><i style="font-size:2.5rem;" class="fas fa-mail-bulk">Arezzo</i></a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="/"><i style="font-size:2.5rem;" class="material-icons medium">home</i></a></li>
                        <li><a href="/criar-contato"><i style="font-size:2.8rem;" class="material-icons medium  tooltipped" data-position="bottom" data-tooltip="Adicionar contato">group_add</i></a></li>

                        <li>
                          <form action="{{route('logout')}}" method="POST" id="logout-form">
                              @csrf
                              <button type="submit" class="btn-logout tooltipped" data-position="bottom" data-tooltip="Sair"><i style="font-size:2.5rem;" class="material-icons medium" >input</i></button>
                          </form>
                       </li>

                        <li style="margin-left: 10px;"><a href="/"><i style="font-size:2.5rem;" class="material-icons medium">person</i></a>
                        <li style="margin-right: 10px;" class="logged-user">
                       Logado como <b style="color: #e9e9e9;font-size:; margin-left:8px;"> {{Auth::user()->name}}</b></li>

                  </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="/"><i style="font-size:2.2rem;" class="material-icons medium">home</i></a></li>
            <li><a href="/criar-contato"><i style="font-size:2.2rem;" class="material-icons medium">contact_mail</i></a></li>

            <li>
              <form action="{{route('logout')}}" method="POST" id="logout-form">
                  @csrf
                  <button style="margin-left: 28px;" type="submit" class="btn-logout"><i style="font-size:2.2rem;" class="material-icons medium" >input</i></button>
              </form>
           </li>


            <li style="margin-left: 20px;">
           Logado como <b style="color: #444;font-size:; margin-left:8px;"> {{Auth::user()->name}}</b></li>
           <li></li>
        </ul>

    </div>
    <br><br>
