<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>My Dashboard</title>
<!-- sidebar style  -->

<!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/style4.css">
    
  
  
    <!-- <link href="../css/dashboard.css" rel="stylesheet"> -->
  
  <!-- Request  Quotation core CSS -->
<link href="../css/feather.css" rel="stylesheet">

     <!-- Request  Quotation core CSS -->
   <link href="../css/style.css" rel="stylesheet">
   <link href="../css/navbarsite.css" rel="stylesheet">
   <link href="../css/feather.css" rel="stylesheet">
   

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.min.js" ></script>
   <script src="../js/pcoded.min.js" ></script>
    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
<style>

div.fixed-top a.dropdown-item {
    color:blue;
    text-decoration: none;
    background-color: transparent;
  }
  div.fixed-top a.dropdown-item:hover {
    color: red;
  text-decoration: none;
  background-color: transparent;
  /* font-size:16px; */
}
div.fixed-top a{
    color:white;
    text-decoration: none;
    background-color: transparent;
  }
  div.fixed-top a:hover {
    color: black;
  text-decoration: none;
  background-color: transparent;
  /* font-size:16px; */
}
  a{
    color:grey;
    text-decoration: none;
    background-color: transparent;
  }
  a:hover {
    color: red;
  text-decoration: none;
  background-color: transparent;
  /* font-size:16px; */
}

.card .card-header .card-header-right {
    right: 10px;
    top: 13px;
    display: inline-block;
    padding: 7px 0;
    position: absolute;
}
.card .card-header .card-header-right {
    right: 10px;
    top: 13px;
    display: inline-block;
    
    padding: 7px 0;
    position: absolute;
}
.card .card-header .card-header-right i {
    margin: 0 4px;
    cursor: pointer;
    font-size: 14px;
    font-weight: 500;
    color: #333;
    line-height: 1;
}

.list-unstyled {
  
    list-style: none;
}
.feather {
    font-family: 'feather' !important;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.icon-maximize:before {
    content: "\e908";
}

.form-control-modal {
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: .9375rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.avatar img {
  width: 35px;
    height:35px ;
    border: 0 none;
    border-radius: 100%;}

    div.header .nav-link{
      padding: 0rem .8rem ;
    }

.review-conversation .header-section .star {
    font-size: 30px;
}
.widgets_letters{
    font-size:20px;
    color: white;
}
.widgets_numbers{
    font-size:35px;
}
.previous_font{
  margin-top: 10px;
  margin-left: 5px;
  font-size: 15px;
}

</style>


 
    

 <title>Dashboard Template for Bootstrap</title>

 <!-- Bootstrap core CSS -->
 <link href="../css/bootstrap.min.css" rel="stylesheet">
 <script src="../js/bootstrap.min.js"></script>
<script src="../js/pcoded.min.js"></script>
<script src="../js/tables.js"></script>
 <!-- Custom styles for this template -->
 <link href="../css/dashboard.css" rel="stylesheet">

<!-- sidebar style  -->
<link rel="stylesheet" href="../css/style4.css">

<script>
                                
    function DoNav(theUrl)
             {
                document.location.href = theUrl;
            }
                                     </script>

</head>

<body class="p-0 m-0">

    <div class="wrapper" style="margin-bottom: 0;">

          
        <!-- Sidebar  -->
        <nav id="sidebar" style="margin-top: 0;">
               
                <div  class="sidebar-sticky">
                        <div class="sidebar-header" style="margin:auto">
                                <center>
                                    <a class="nav-item dropdown mt-2" >
                                        <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false">
                                          
                                          <div class="row" style="margin-top:8px;">
                                           
                                              <i class="fas fa-user" style="margin:5px;"></i>
                                            <h5>Admin</h5>
                                            <span class="dropdown-toggle" style=""></span> 
                                          </div>
                                            
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                  <a href="{{ url('/logout') }}" class="dropdown-item" role="menuitem"
                                                      onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();">
                                                      Logout
                                                  </a>
          
                                                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                      {{ csrf_field() }}
                                                  </form>
                             </div>
                                      </a>
                               
                            </center>
                            </div> 
                 
                  <ul class="nav flex-column">
                        <li class="nav-item">
                                <a class="nav-link  active" href="{{url('/admin')}}">
                                  <i class="fas fa-home"></i>
                                  Dashboard <span class="sr-only">(current)</span>
                                </a>
                              </li>
                            <li class="nav-item">
                                  <a class="nav-link" href="{{ route('requests') }}">
                                    <i class="fas fa-file"></i>
                                    Requests
                                  </a>
                                </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{route('editestimate')}}">
                                  <i class="fas fa-calculator"></i>
                                  Estimates
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{route('admininvoices')}}">
                                  <i class="fa fa-copy"></i>
                                  Invoices
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{route('adminsales')}}">
                                  <i class="fa fa-tag" aria-hidden="true"></i>
                                  Sales
                                </a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{route('displayadmininbox')}}">
                                    <i class="fas fa-question-circle"></i>
                                    Customer Support
                                  </a>
                                </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{route('managereviews')}}">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  Reviews
                                </a>
                              </li>
                   
                  </ul>
                  <ul class="list-unstyled CTAs">
                        <li>
                            <!-- <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a> -->
                        </li>
                        <li>
                            <!-- <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a> -->
                        </li>
                    </ul>    
                     
         </div>
         
         
        
        </nav>

        <!-- Page Content  -->
        <div id="content">

           

      <!-- Sidebar -->
      
     
    
<!-- Sidebar end-->
            <main role="main" class="">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <svg class="svg-inline--fa fa-align-left fa-w-14" aria-hidden="true" data-prefix="fa" data-icon="align-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M288 44v40c0 8.837-7.163 16-16 16H16c-8.837 0-16-7.163-16-16V44c0-8.837 7.163-16 16-16h256c8.837 0 16 7.163 16 16zM0 172v40c0 8.837 7.163 16 16 16h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16zm16 312h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm256-200H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16h256c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16z"></path></svg><!-- <i class="fa fa-align-left"></i> -->
                        <span><svg class="svg-inline--fa fa-arrow-left fa-w-14" aria-hidden="true" data-prefix="fa" data-icon="arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path></svg><!-- <i class="fa fa-arrow-left"></i> --></span>
                    </button>
                    <div class="mx-3">
                            <h1 class="h2">Home</h1>
                        </div>  
                    <button class="btn btn-dark d-inline-block d-lg-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <svg class="svg-inline--fa fa-align-justify fa-w-14" aria-hidden="true" data-prefix="fa" data-icon="align-justify" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M0 84V44c0-8.837 7.163-16 16-16h416c8.837 0 16 7.163 16 16v40c0 8.837-7.163 16-16 16H16c-8.837 0-16-7.163-16-16zm16 144h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 256h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0-128h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg><!-- <i class="fa fa-align-justify"></i> -->
                    </button>
                     
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            
                                <li class="nav-item dropdown show">
                                        <a class="nav-link" style="background: #f8f9fa"  href="{{route('displayadmininbox')}}" title="Messages" aria-expanded="true" data-animation="scale-up" role="button">
                                            <i class="fa fa-envelope" style="font-size:20px;" aria-hidden="true"></i>
                                            <sup class="badge badge-pill badge-info up" style="    position: relative;
                                            top: -10px;
                                            margin: 0px -0.8em;
                                            border-radius: 15px;"> {{ $chats }} </sup>
                                          </a>
                                       
                                      </li>
                                <li class="nav-item">
                               
                                        <a href="{{route('displayuseraccounts')}}" class="dropdown-item" role="menuitem">
                                            Manage Users 
                                        </a>
        
                        </li> 
                                <li class="nav-item">
                               
                                    <a href="{{ url('/logout') }}" class="dropdown-item" role="menuitem"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
             
                    </li>
                            
                           
                        </ul>
                    </div>
                </div>
            </nav> 
              <div class="row mb-4" style="align-items:center;display:flex;justify-content:center;">
                <!-- class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom -->
                       
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3 grid-margin stretch-card">
                  <div class="card card-statistics bg-primary">
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-center">
                          
                          <div class="highlight-icon  mr-3 ">
                              <a href="adrequest.html"> 
                              <i class="fa fa-cart-arrow-down fa-2x"></i>
                              </a>
                          </div>
                        <div class="wrapper">
                            <a href="{{ route('requests') }}">
                                <p class="card-text mb-0 mr-1 widgets_letters">Requests</p>
                                </a>
                          <div class="fluid-container">
                          <h3 class="card-title mb-0 widgets_numbers">{{ $buttonnumber }}</h3>
                          </div>
                          <div class="previous_font" style="backface-visibility: hidden;">Received requests</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3 grid-margin stretch-card">
                  <div class="card card-statistics bg-success">
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-center">
                          <div class="highlight-icon  mr-3 ">
                              <a href="adreviews.html">
                              <i class="fa fa-star fa-2x"></i>
                              </a>
                          </div>
                        <div class="wrapper">
                            <a href="{{route('managereviews')}}">
                          <p class="card-text mb-0 widgets_letters mr-1">Reviews</p>
                          </a>
                          <div class="fluid-container">
                            <h3 class="card-title mb-0 widgets_numbers"> {{ $reviewss }} </h3>
                          </div>
                          <div class="previous_font" style="backface-visibility: hidden;">Product reviews</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

          <!-- Requests table start -->
          <div class="col-md-12 mb-5">
            <div class="card table-card">
                <div class="card-header">
                    <h5>Requests</h5>
                    <div class="card-header-right">
                        
                            <!-- <ul class="list-unstyled card-option" style="width: 130px;">
                                <li class="first-opt" style="display: none;"><i class="feather open-card-option icon-x"></i></li>
                                <li><i class="feather full-card icon-maximize"></i></li>
                                <li><i class="feather icon-minus minimize-card"></i></li>
                                <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                <li><i class="feather icon-trash close-card"></i></li>
                                <li><i class="feather open-card-option icon-x"></i></li>
                            </ul> -->
                           
                    </div>
                </div>
                <div class="card-block p-b-0">
                    <div class="table-responsive" >
                        <table class="table table-hover m-b-0" id="example">
                            <thead>
                                <tr  >
                                    <th>ID</th>
                                    <th>Request-ID</th>
                                    <th>Created At</th>
                                    <th>Email</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < count($requestid); $i++)
                                
                            
                                
                                <tr onclick="DoNav('{{ route('newestimate', ['rid'=>$requestid[$i]]) }}');">
                                <td>{{ $t = $i+1 }}</td>
                                    <td>{{ $requestid[$i] }}</td>
                                    <td>{{ $createdat[$i] }}</td>
                                    <td>{{ $useremails[$i] }}</td>
                                   
                                </tr>
                                @endfor
                              </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Requests table end -->


<!-- Reviews table start -->
<div class="col-md-12 my-5">
  <div class="card table-card">
      <div class="card-header">
          <h5>Reviews</h5>
          <div class="card-header-right">
              
                  <!-- <ul class="list-unstyled card-option" style="width: 130px;">
                      <li class="first-opt" style="display: none;"><i class="feather open-card-option icon-x"></i></li>
                      <li><i class="feather full-card icon-maximize"></i></li>
                      <li><i class="feather icon-minus minimize-card"></i></li>
                      <li><i class="feather icon-refresh-cw reload-card"></i></li>
                      <li><i class="feather icon-trash close-card"></i></li>
                      <li><i class="feather open-card-option icon-x"></i></li>
                  </ul> -->
                 
          </div>
      </div>
      <div class="card-block p-b-0">
          <div class="table-responsive">
              <table class="table table-hover m-b-0" id="example">
                  <thead>
                      <tr>
                          <th>Review ID</th>
                          <th>Rating</th>
                          <th>Review</th>
                          </tr>
                  </thead>
                  <tbody>
                      @foreach ($displayreviews as $item)
                      <tr>
                            <td> {{ $item->id }} </td>
                            <td> {{ $item->Rating }} </td>
                            <td> {{ $item->Review }} </td>
                        </tr> 
                      @endforeach      
                   </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
<!-- Reviews table end -->

  

              </main>
        
            
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

   
</body>

</html>
