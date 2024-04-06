


<section class="text-center mt-5">
   
    <div class="back-to-cars">
    <a href="{{route('vehicles')}}" button type=""back-to-cars>Back to Cars</a>
   </div>
   
    <form action="{{ route('registercustomer') }}" method="POST">
    @csrf
        @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
        @endif
    
   
  <!-- Name container -->
  <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
    </div>

    <!-- Address container -->
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
    </div>

    <!-- Gender container -->
    <div class="form-group">
        <label for="gender">Gender</label>
        <input type="text" class="form-control" id="gender" name="gender" placeholder="Enter Gender">
    </div>

    <!-- Phone container -->
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone">
    </div>

    <!-- Annual Income container -->
    <div class="form-group">
        <label for="annual_income">Annual Income</label>
        <input type="number" class="form-control" id="annual_income" name="annual_income" placeholder="Enter Annual Income">
    </div>

    <!-- Submit button -->
    <a href="{{route('thankyou')}}"><button type="submit" class="btn btn-primary btn-block mt-4">Buy</button></a>

    
    <style>
  /* Style the form container */
  form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border-radius: 8px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
  }

  /* Style form labels */
  label {
    font-weight: bold;
    margin-bottom: 5px;
    display: block;
    color: #333;
  }

  /* Style form inputs */
  input[type="text"],
  input[type="email"],
  input[type="password"],
  input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box; /* Ensure padding and border included in width */
    font-size: 16px;
  }
   /* Style file input container */
   .file-input-container {
    position: relative;
    overflow: hidden;
    display: inline-block;
    margin-bottom: 15px;
  }

  /* Style custom file input button */
  .custom-file-input {
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
    cursor: pointer;
    width: 100%;
    height: 100%;
    z-index: 999;
  }

  /* Style file input button */
  .file-input-button {
    padding: 10px 15px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    display: inline-block;
    transition: background-color 0.3s ease;
  }

  .file-input-button:hover {
    background-color: #0056b3;
  }

  /* Style submit button */
  button[type="submit"] {
    width: 100%;
    padding: 15px;
    margin-top: 10px; /* Added margin-top to reduce gap */
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-size: 16px;
  }

  button[type="submit"]:hover {
    background-color: #0056b3;
  }



  /* Style form container background */
  body {
    background-color: #f4f4f4;
    padding: 30px;
  }

  /* Style back to cars container */
  .back-to-cars {
    margin-bottom: 15px; /* Adjust spacing as needed */
  }

  /* Style back to cars button */
  .back-to-cars a {
    padding: 15px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none; /* Remove underline */
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-family: Arial, sans-serif; /* Specify font-family */
    font-size: 16px;
  }

  .back-to-cars a:hover {
    background-color: #0056b3;
  }
</style>

</form>

</section>
<!-- Section: Design Block -->

