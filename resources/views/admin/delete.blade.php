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
    
    
        
         <table class="table">
             <tr>
			<td>Id</td>
			<td>{{$blog['id']}}</td>
		</tr>
		<tr>
			<td>title No</td>
			<td>{{$blog['title']}}</td>
		</tr>
		<tr>
			<td>Description</td>
			<td>{{$blog['description']}}</td>
		</tr>
		<tr>
        
         </tr>
        </table>
        
        <form method="post">
            <h1 class="header1"> Are you sure?</h1>
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="accId" value="{{$blog['id']}}">
		<input type="submit" name="confirm" class="btn btn-warning form-control" value="Confirm">
	</form>
    
    </div>
    <div class="col-sm-2"></div>
    
    </div>
   
    
    
</body>
    
</html>