<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Blog</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $('#form').on('#submit',function(e){
     e.preventDefault();
      var title=$("#title").val();
      var content=$("#content").val();
      var category=$("#category").val();
      var picname=$("#picname").val();
      $.post('/create',
{
title : title,
content : content,
category : category,
picname : picname
    });
      });
      });
</script>
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">
<h2>Add Blog</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('oriblogs.index') }}"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('oriblogs.store') }}" method="POST" id="form" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Category</strong>
        <select name="category" class="form-control" id="category">
            <option selected hidden disabled></option>
            <option value="Personal blogs">Personal blogs</option>
            <option value="Business/corporate blogs">Business/corporate blogs</option>
            <option value="Personal brand/professional blogs">Personal brand/professional blogs</option>
            <option value="Fashion blogs"> Fashion blogs</option>
            <option value="Lifestyle blogs"> Lifestyle blogs</option>
            <option value="Food blogs">Food blogs</option>
            <option value="Affiliate/review blogs">Affiliate/review blogs</option>
        </select>
            @error('category')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        </div>
        </div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Title</strong>
<input type="text" name="title" class="form-control" id="title" placeholder="Blog Title">
@error('title')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Content</strong>
<textarea name="content" class="form-control" placeholder="Blog Content" id="content" style="height:300px";></textarea>
@error('content')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Picture</strong>
    <input type="file" name="picname" placeholder="Choose image" id="picname">
    @error('picname')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>
    </div>
<button type="submit" id="submit" class="btn btn-primary ml-3">Submit</button>
</div>
</form>
</body>
</html>