<! DOCTYPE html>  
<html lang="en" >
   <head>
      <meta charset="UTF-8">
      <title> Laravel MentorShip Task </title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   </head>
   <style>  
      body {  
      font-family: 'Muli', sans-serif;  
      }  
      h1 {  
      /* color: #fff;   */
      padding-bottom: 2rem;  
      font-weight: bold;  
      }  
      a {  
      color: #333;  
      }  
      a:hover {  
      color: #E8D426;  
      text-decoration: none;  
      }  
      .form-control:focus {  
      color: #000;  
      background-color: #fff;  
      border: 2px solid #E8D426;  
      outline: 0;  
      box-shadow: none;  
      }  
      .btn {  
      background: #28a745;  
      border: #E8D426;  
      }  
      .btn:hover {  
      background: #28a745;  
      border: #E8D426;  
      }
    .custom-control-input {
        z-index: 0;
        opacity: 1;
    }  
   </style>
   <body>
      <div class="pt-5">
         <h1 class="text-center"> Laravel MentorShip Task </h1>
         <div class="container">
            <div class="row">
               <div class="col-md-5 mx-auto">
                  <div class="card card-body">
                     @if (session('success'))
                        <div class="alert alert-success" role="alert">
                           <button type="button" class="close" data-dismiss="alert">×</button>
                           {{ session('success') }}
                        </div>
                        @elseif(session('failed'))
                        <div class="alert alert-danger" role="alert">
                           <button type="button" class="close" data-dismiss="alert">×</button>
                           {{ session('failed') }}
                        </div>
                     @endif
                     @yield('content')
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>