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
            <li><a href="{{route('admin.adminpanel')}}">home</a></li>
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
    
      <h2 class="header1"> Blog posts</h2>
     <table class="table">
        <tr>
          <th>Id</th>
          <th>Title</th>
          <th>Description</th>
          <th>Action</th>
              
            
         </tr>
       @foreach($blog as $blg)
        <tr>
         <td>{{$blg['id']}}</td>
         <td>{{$blg['title']}}</td>
         <td>{{$blg['description']}}</td>
         <td><a href="{{route('admin.edit',$blg['id'])}}" class="btn btn-primary button"> Edit</a>||<a href="{{route('admin.delete',$blg['id'])}}" class="btn btn-danger button">Delete</a></td>
         
         </tr>
        @endforeach
        </table>
    
    
    
    </div>
    <div class="col-sm-2"></div>
    
    </div>
   
    
    
</body>
    
</html>