<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>my</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="/public/css/homepage.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  

        <!-- Styles -->
    </head>
        <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
              <a class=" navbar-brand" href="">Home</a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
               </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        @if (Route::has('login'))

                            @auth
                                <a class="nav-link" href="{{ url('/home') }}">Home</a>
                        @else
                                <li class="nav-item"> <a class="nav-link" href="{{ route('login') }}">Login</a>   
                                <li class="nav-item">            <a class="nav-link"  href="{{ route('register') }}">Register</a>
                                <li> <a class="nav-link" data-toggle="modal" href="#Calendar" >Calendar Mitzuteilen</a></li> 
                                <li> <a class="nav-link" data-toggle="modal" data-target="#createEvent">Events Hinzufügen</a></li> 
                                <li> <a class="nav-link" data-toggle="modal" href="#" >Band sucht</a></li> 
                                <li> <a class="nav-link" data-toggle="modal" href="#" >Kunsten Homepage</a></li>  
                            @endauth
                        @endif    



                    </ul>
                </div>
            </nav>
             <div class="flex-center position-ref full-height">
        <div class="wrapper" style="background-color: black;">
            
            
            <!-- Calendar --> 
  
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
             <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                   <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                  <img src="{{url('/img/slide2.jpg')}}" alt="Los Angeles" style="width:100%;">
              </div>

              <div class="item">
                <img src="{{url('/img/slide1.jpg')}}" alt="Chicago" style="width:100%;">
               <img src="" alt="Image"/>
              </div>

              <div class="item">
                 <img src="{{url('/img/slide3.jpg')}}" alt="New york" style="width:100%;">
              </div>
            </div>

                 <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a>
            </div>
     
        <div class="col-md-12">

          <div class="row text-center text-lg-left">

                <div class="col-lg-2 col-md-2 col-xs-4">
                  <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                  </a>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-4">
                  <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                  </a>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-4">
                  <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                  </a>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-4">
                  <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                  </a>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-4">
                  <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                  </a>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-4">
                  <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                  </a>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-4">
                  <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                  </a>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-4">
                  <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                  </a>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-4">
                  <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                  </a>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-4">
                  <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                  </a>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-4">
                  <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                  </a>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-4">
                  <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                  </a>
                </div>
              </div>
            </div>
                  <script>alert('building content');</script>
                  
                <div id="Calendar" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg" style="height:80%;">

                        <!-- Modal content-->
                        <div class="modal-content"style="height:80%;">
                                <iframe src="https://calendar.google.com/calendar/b/1/embed?title=Leipzig%20Events&amp;showDate=0&amp;showPrint=0&amp;showCalendars=0&amp;mode=WEEK&amp;height=600&amp;wkst=1&amp;hl=de&amp;bgcolor=%23666666&amp;src=8c2fkhnojei8c1amnidun0oamg%40group.calendar.google.com&amp;color=%23333333&amp;ctz=Europe%2FBerlin"
                                    style="border:solid 1px #777" width="100%" height="370%" frameborder="0" scrolling="no">
                                </iframe>
                            
                                    
                            <br>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                   <!-- Modal form-->
                <div class="modal fade" id="createEvent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                     <h4 class="modal-title" id="createEvent">Event Hinzufüngen</h4>
                                    </div>

                                    <!-- Modal Body -->
                                    <div class="modal-body">

                                        <form role="form">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Event name</label>
                                                  <input name="name" class="form-control" placeholder="Event name"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Datum</label>
                                                <input type="date" name="name" class="form-control" placeholder="Event name"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Adresse</label>
                                                  <input type="text" name="name" class="form-control" placeholder="Event name"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Besitzer</label>
                                                <input type="text" name="name" class="form-control" placeholder="Event name"/>
                                            </div>
                                          
                                          <button type="submit" class="btn btn-default">Senden</button>
                                        </form>
                                    </div>

                                    <!-- Modal Footer -->
                                    <div class="modal-footer">
                                     <button type="button" class="btn btn-default"data-dismiss="modal">Close</button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>


                
    
    <!-- /.container -->  
    
            <div class="footer">
             <footer class="py-5 bg-dark">
              <p class="m-0 text-center text-white">Copyright &copy;  2017</p>
             </footer>
            </div>
       
        </div>
        </div>
            <script type="text/javascript">
                $(document).ready(function(){
                    $(window).on('load',function(){
                        $('#Calendar').modal('show');
                    });
                     $('#event').click('load',function(){
                        $('#event').modal('show');
                    });
                             
                    
                    
                });
            </script>
            
            
            
            
    </body>
</html>
