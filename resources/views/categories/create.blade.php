<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1> Create a Category </h1>
    <div>
      @if($errors->any())
      <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach

      </ul>


      @endif

    </div>

    <form method="post" action="{{route('category.store')}}">
      @csrf 
      @method('post')
      <div>
        <label>Name</label>
        <input type="text" name="name" placeholders="name"/>

      </div>
      <div>
          <input type="submit" value= "save a new category" />
      </div>

    </form>
</body>
</html>