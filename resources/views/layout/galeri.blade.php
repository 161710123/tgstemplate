	@extends('layout.index')
@section('konten')<br>
	<!DOCTYPE html>
<html>
<title></title>
  <style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>My Gallery</h1>      
    <p>M dika Fadlan</p>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <h3>All Photos</h3><br>
  <div class="row">
    <div class="col-sm-3">
      <p>1</p>
      <img src="g.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>2</p>
      <img src="h.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>3</p>
      <img src="i.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>4

</p>
      <img src="j.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      <p>5</p>
      <img src="k.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>6</p>
      <img src="l.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>7

</p>
      <img src="m.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>8</p>
      <img src="a.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br><br>


</body>
</html>

@endsection