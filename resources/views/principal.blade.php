<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script src="./js/script.js" type="text/javascript"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link href="{{asset('./css/estilos.css')}}" rel="stylesheet">
      <meta charset="UTF-8">
      <title>Alura Typer</title>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id='menu'>
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <br>

  <div class="anunciotop">
    <div class="text-center">
      <a href="#">
        <img src='https://via.placeholder.com/400x150'>
      </a>
    </div>
  </div>
      
  <h3 class='text-center' id='titulo-logo'>SpeedKeyBoard</h3>


    <div class="text-center" id='info-mid'>
      <div class="text-center" style="width: 20%" id='list-time'>
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" role="tab" aria-controls="home">TIME:</a>
          <a class="list-group-item list-group-item-action" id="list-60-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">60 Segundos</a>
          <a class="list-group-item list-group-item-action" id="list-90-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">90 Segundos</a>
          <a class="list-group-item list-group-item-action" id="list-10-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">10 Segundos</a>
        </div>
      </div>
      <div class="text-center" id='parag-texto'>
        <p class='paragrafo'>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
          Quaerat, velit distinctio. Ipsa quidem ad enim, nostrum facere odio, quis illo delectus sunt corrupti aliquid dolore libero 
          perspiciatis commodi, officia totam.
          
        </p>
      </div> 
    </div> 
    <div class="text-center">  
      <div class="text-center" id='segundos'>
        {{-- <p class = 'dez'><span class="tempo-digit">10</span> Segundos</p> --}}
      </div>

      <div class="form-floating">
        <div class="area">
          <textarea class="text-center"  id="areatexto" style="width: 50%; height: 200px" ></textarea>
        </div>
      </div>
    </div>
  

    <div class="resul" id='result'>
      <div class="text-center"> 
        <ul class='list-result'>
          <li><span id='resul-palavra'>0</span> Palavras digitadas</li>
          <li><span id='caract-digit'>0</span> Caracteres digitados</li>
        </ul>
      </div>
    
    </div>
    
    
    <div class="text-center" id='btn-refresh'>
      <button type="button" class="btn btn-success" id='refresh'>Success</button>    
    </div>


    <div class="anunciobottom">
      <div class="text-center">
        <a href="#">
          <img src='https://via.placeholder.com/400x150'>
        </a>
      </div>
    </div>




    
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./js/script.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
