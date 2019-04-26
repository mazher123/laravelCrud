<!doctype html>

<html>
<head>
    
    
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    
    
</head>
<body class="container-fluid">
   
   
     <div class='container-fluid'>
     <nav class="navbar navbar-inverse">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-4">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Event Factory</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-4">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">home</a></li>
            <li><a href="{{route('admin.viewdata')}}">view post</a></li>
        <li><a href="{{route('admin.addpost')}}">Add post</a></li>
              
            <li><a href="{{route('logout.logout')}}">logout</a></li>
           
          </ul>
       
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /. -->
    
    </div>
    
    <div class="col-sm-12">
        
        
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
    
    
     <h1 class="header"> welcome  admin, {{session('uname')}}</h1>
    
     <div class="col-sm-12" >
       <h2>Event factory </h2>      
    <p> 

Event Factory started in 2015 with a vision of becoming the country’s best event management company. Our main motto was to turning out clients dreams into a reality. And since then we have been successfully covering a wide array of events starting from small and intimate birthday parties to stunning and carefully detailed and customized corporate events.

Now after successfully completing so many events we are venturing into becoming country’s first online event solutions company. We are here to cater to each and every need of your dream event. Be it a grand stage decor or just a simple sound system to amp up your private party.

We have so many options for you to choose and decide on what you like, we also offer personal customisation for our valuable customers, we will guide you throughout the procedure and find you the best solution for your event. We offer easy payments, and payment plans for corporate sales.

Stay connected with our Facebook and Instagram pages to know more about our ongoing offers.
</p> 
        
     </div>
    
    
    </div>
    <div class="col-sm-2"></div>
    
    </div>
   
    
    
</body>
    
</html>