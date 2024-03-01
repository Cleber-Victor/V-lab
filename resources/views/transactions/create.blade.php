<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1> Create a Transaction </h1>
    <div>
      @if($errors->any())
      <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach

      </ul>


      @endif

    </div>

    <form method="post" action="{{route('transaction.store')}}">
      @csrf 
      @method('post')
      <div>
        <label>User</label>
        <input type="text" name="user" placeholders="user"/>
        <label>Type</label>
        <input type="text" name="type" placeholders="type"/>
        <label>Valor</label>
        <input type="text" name="valor" placeholders="valor"/>
        <label>Category</label>
        <select id='Category_id' name='category_id' class='form-control' > 
          <option value="" selected disabled>Select Category </option>
          @foreach($categories as $ct)
            <option value ="{{$ct->id}}"> {{$ct->name}} </option>
          @endforeach
          </select>
      </div>
      <div>
          <input type="submit" value= "save a new transaction" />
      </div>

    </form>
</body>
</html>