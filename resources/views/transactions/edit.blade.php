<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1> transaction </h1>

    <div>
      @if(session()->has ('sucess'))
        <div>
          {{session('sucess')}}
        </div>
      @endif
    </div>


    <div>
      @if($errors->any())
      <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach

      </ul>


      @endif

    </div>

    <form method="post" action="{{route('transaction.update', ['transaction' => $transaction])}}">
      @csrf 
      @method('put')
      <div>
        <label>Name</label>
        <input type="text" name="user" placeholders="user" value="{{$transaction->user}}"/>
        <label>Name</label>
        <input type="text" name="type" placeholders="type" value="{{$transaction->type}}"/>
        <label>Name</label>
        <input type="text" name="valor" placeholders="valor" value="{{$transaction->valor}}"/>
        <label>Category</label>
        <select id='Category_id' name='category_id' class='form-control' > 
          <option value="" selected disabled>Select Category </option>
          @foreach($categories as $ct)
            <option value ="{{$ct->id}}"> {{$ct->name}} </option>
          @endforeach
          </select>
      </div>
      <div>
          <input type="submit" value= "Update Transaction" />
      </div>

    </form>
</body>
</html>