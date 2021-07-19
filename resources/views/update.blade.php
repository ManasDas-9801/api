<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
      
        <style>
          a{
            text-decoration:none;
            color:black;
          }
        </style>
        <title>Document</title>
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </head>
    <body  style="background-image:url('{{asset('one.png')}}');width:100%;background-size:cover;">
      <nav class="navbar navbar-expand-sm navbar-light container-fluid sticky-top shadow text-light " style="background-color: #1289A7">
           <div class="container nabb">
                 <h2>Employee Detail</h2>
                <button class="navbar-toggler bg-light" data-toggle ="collapse" data-target= "#nab">
                     <span class="navbar-toggler-icon bg-light"></span>
                 </button>
                  
                    <div class="collapse navbar-collapse mx-auto tex-light" id="nab"> 
                      
                      <form class="d-flex " action="{{route('search')}}" method="GET" class="float-end" style="margin-left: 70%">
                        <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search" style="width:300px"> 
                        <button class="btn btn-outline-warning" type="submit">Search</button>
                      </form>
    
                    </div> 
              </div>
      </nav>
    
      <div class="container-fluid mt-2">
        <div class="row mx-4 px-2">
            <div class="col-lg-3 mx-auto ">
                <div class="card shadow mx-2">
                    <div class="card-header"><b>Insert Employee Detail</b></div>
                      <div class="card-body ">
                        <form action="{{route('set')}}" method="post">
                            @csrf
                            <label for="name"> <b> First Name: </b></label>
                            <input type="text" name="fname" id="" class="form-control mb-2" value="{{$r->e_firstname}}">
                           @error('fname')
                               <p class="text-danger">Required field</p>
                           @enderror
                            <label for="name"> <b> Last Name: </b></label>
                            <input type="text" name="lname" id="" class="form-control mb-2" value="{{$r->e_lastname}}">
                            @error('lname')
                               <p class="text-danger">Required field</p>
                           @enderror
                            <label for="email"> <b>Email:</b></label>
                            <input type="email" name="email" id="" class="form-control mb-2" value="{{$r->e_email}}">
                            @error('email')
                               <p class="text-danger">Required field</p>
                           @enderror
                            
                            <label for="Contact"> <b>Contact No.: </b></label>
                            <input type="number" name="contact" id="" class="form-control mb-2" value="{{$r->e_contact}}">
                            @error('contact')
                               <p class="text-danger">Required field</p>
                           @enderror
                          <input type="hidden" name="id" value="{{$r->id}}">
                            <input type="submit" value="Update" class="form-control btn btn-warning" >
       
                            
                        </form>
                      </div>
                </div>
            </div>
            
        </div>
      </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    @yield('container')
    </body>
    </html>
</body>
</html>