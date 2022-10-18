<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mohammad Ramadan</title>
    <link rel = "icon" href ="{{asset('logo.png')}}"  type = "image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <style>
      body{
        font-family:Georgia, 'Times New Roman', Times, serif;
        background-color: #212121;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid text-lg-start text-center" style="background-color:#212121;">
      <div class="row " style="background-color: #141414">
        <x-navbar/>
      </div>
      
      <div class="row align-items-center">
        <div class="w-auto">
          <x-sidebar class="d-none flex-column position-fixed"/>
        </div>
        <x-hero/>
      </div>

      <div id="projects" class="row  justify-content-center align-items-center" style="background-color: #424242;">
      <x-projects/>
      </div>

      <div id="about" class="row  justify-content-center align-items-center" >
        <x-about/>
      </div>

      <div id="contact" class="row  justify-content-center align-items-center" style=" background-color: #424242; height:100vh">
        <x-contact/>
      </div> 

      <div class="d-md-none row">
        <x-sidebar class="justify-content-center"/>
      </div>

      <div class="row my-2">
        <div class="text-white text-center">
              &copy; Copyright <strong><span>2021 - 2022</span></strong>. All Rights Reserved
            </div>
      </div>
      
    </div>  
   
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    

    <script>
      const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
      const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
      <script src="{{asset('js/bootstrap.js')}}"></script>

  </body>
</html>