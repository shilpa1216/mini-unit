@extends ('layouts.master')


@section ('content')
<div class="col-sm-8 blog-main">
<h1> Create a Post </h1>

<hr> 

<form method = "POST" action= "/posts"
	{{ csrf_field() }}

  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" id="title" name= "title">
  </div>
  
  <div class="form-group">
    <label for="body">Body:</label>
	   <textarea id = "body" name="body" class="form-control"> </textarea>
    </div>
  
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>

  <button type="submit" class="btn btn-default">Publish</button>
</form>

</div>
@endsection
