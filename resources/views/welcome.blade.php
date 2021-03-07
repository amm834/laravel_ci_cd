<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
</head>
<body class="container p-3">

<h1>Create Post</h1>
<form action="{{url('/')}}" method="post">
    @csrf
    <label for="">Choose Language Type</label>
    <select class="form-select" name="languageType" >
  <option value="en">English</option>
  <option value="my">မျန္မာ</option>
</select>
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" accept="text" name="title">
  </div>
  <div class="mb-3">
    <label for="title" class="form-label">Content</label>
    <input type="text" class="form-control" id="title" accept="text" name="content">
  </div>

  <button type="submit" class="btn btn-primary">Create</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>