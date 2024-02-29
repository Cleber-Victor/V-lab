<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1> Category </h1>
    <div>
      <table border="1">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        @foreach($categories as $category)
        <tr>
          <td>{{$category->id}}  </td>
          <td>{{$category->name}}</td>
          <td>
            <a href="{{route('category.edit',['category' => $category] )}}"> Edit </a>
          </td>
          <td>
            <form method="post" action="{{route('category.destroy', ['category' => $category])}}">
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