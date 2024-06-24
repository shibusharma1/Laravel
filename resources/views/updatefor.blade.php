<!doctype html>
<html lang="en">
  <head>
    <title>{{$title}}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
       <form action="{{$url}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container mt-4 card p-3 bg-white">
          <h3 class="text-center text-primary">
            {{$title}}
          </h3>
          <div class="row">
            <div class="form-group col-md-6 required">
              <label for="name">Name:</label>
              <input type="text" name="name" id="" class="form-control" value='{{$customers->name}}'>
              <span class="text-danger">
                @error('name')
                  {{$message}}
                @enderror
              </span>
            </div>
            <div class="form-group col-md-6 required">
              <label for="email">Email:</label>
              <input type="email" name="email" id="" class="form-control" value='{{$customers->email}}' >
              <span class="text-danger">
                @error('email')
                  {{$message}}
                @enderror
              </span>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6 required">
              <label for="password">Password</label>
              <input type="password" name="password" id="" class="form-control"  >
              <span class="text-danger">
                @error('password')
                  {{$message}}
                @enderror
              </span>
            </div>
            <div class="form-group col-md-6 required">
              <label for="confirm_password">Confirm Password</label>
              <input type="password" name="confirm_password" id="" class="form-control" >
              <span class="text-danger">
                @error('confirm_password')
                  {{$message}}
                @enderror
              </span>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12 required">
              <label for="address">Address:</label>
              <input type="text" name="address" id="" class="form-control" value='{{$customers->address}}'>
              <span class="text-danger">
                @error('address')
                  {{$message}}
                @enderror
              </span>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6 required">
              <label for="gender">Gender:</label>
              <br/>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="male" value="M"/>
                <label class="form-check-label" for="male">
                  Male
                </label>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="female" value="F"/>
                  <label class="form-check-label" for="female">
                    Female
                  </label>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="Other" value="O"/>
                    <label class="form-check-label" for="other">
                      Other
                    </label>
    
              </div>
              
              <span class="text-danger">
                @error('gender')
                  {{$message}}
                @enderror
              </span>
            </div>
            <div class="form-group col-md-6 required">
              <label for="dob">Date of Birth</label>
              <input type="date" name="dob" id="" class="form-control" value='{{$customers->dob}}'>
              <span class="text-danger">
                @error('dob')
                  {{$message}}
                @enderror
              </span>
            </div>
            <div class="form-group col-md-6 required">
              <label for="dob">Image</label>
              <input type="file" name="image" id="" class="form-control" >
              <span class="text-danger">
                @error('image')
                  {{$message}}
                @enderror
              </span>
            </div>
          </div>
          <br>
          <button class="btn btn-primary text-align-center"> {{$btn}}</button>
        </div>

       </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>