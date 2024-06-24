<!doctype html>
<html lang="en">
  <head>
    <title>Customer</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       </style>
  </head>
  <body>
    <br>
    <br>
    <div class="container">
      <a href="{{route('customer.create')}}">
        <button class="btn btn-secondary ml-auto d-block">Add</button>
      </a>
      
      <br><br><br>
      <div class="table">
        <table>
        <thead>
          <tr>
          <td>Name</td>
          <td>Email</td>
          {{-- <td>password</td> --}}
          <td>Address</td>
          <td>Gender</td>
          <td>DOB</td>
          <td>Image</td>
          <td>Action</td>
        </tr>
        </thead>
        <tbody>
          @foreach($customers as $customer)
          <tr>
            <td>{{$customer->name}}</td>
            <td>{{$customer->email}}</td>
            {{-- <td>{{$customer->password}}</td> --}}
            <td>{{$customer->address}}</td>
            <td>{{$customer->gender}}</td>
            <td>{{$customer->dob}}</td>
            <td><img src="{{asset('storage/uploads/'. $customer->image)}}" alt="" height="50" width="50" style="border:none; border-radius:50%;">
            </td>
            <td>
              <a href="{{route('customer.delete',['id'=>$customer->id])}}">
                <button class="btn btn-danger">Delete</button>
              </a>
              
              <a href="{{route('customer.edit',['id'=>$customer->id])}}">
                <button class="btn btn-primary">Edit</button>
              </a>
              
            </td>

          </tr>
          @endforeach
        </tbody>
      </div>
    </div>
  </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>