<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1> Transactions </h1>
    <div>
      <table border="1">
        <tr>
          <th>ID</th>
          <th>User</th>
          <th>Type</th>
          <th>Valor</th>
          <th>Category_id</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        @foreach($transactions as $transaction)
        <tr>
          <td>{{$transaction->id}}  </td>
          <td>{{$transaction->user}}</td>
          <td>{{$transaction->type}}</td>
          <td>{{$transaction->valor}}</td>
          <td>{{$transaction->category_id}}</td>
          <td>
            <a href="{{route('transaction.edit',['transaction' => $transaction] )}}"> Edit </a>
          </td>
          <td>
            <form method="post" action="{{route('transaction.destroy', ['transaction' => $transaction])}}">
              @csrf
              @method('delete')
              <input type="submit" value="Delete" />
            </form>
          </td>
        </tr>
        
        @endforeach


         </table>
    </div>
</body>
</html>