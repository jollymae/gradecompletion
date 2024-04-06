
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nova Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>
<body>

<div class="back-to-home">
  <a href="{{route('home')}}"><button type="back to home">Back to Home</button></a>
</div>

<form action="{{route('registerCaradmin')}}" method="POST" enctype="multipart/form-data">

 @csrf
 

 <div class="form-group">
    <label for="exampleFormControlSelect1">Car Model</label>
    <select name="model_id" class="form-select" aria-label="Default select example">
            <option value="">Select Car Model</option>
            @foreach($models as $model)
            <option value="{{ $model->mymodel_id }}">{{ $model->name }}</option>
            @endforeach
        </select>
  </div>
 

  <div class="form-group">
    <label for="exampleFormControlSelect1">Car Dealer</label>
    <select name="dealer_id" class="form-select" aria-label="Default select example">
            <option value="">Select Car Dealer</option>
            @foreach($dealers as $dealer)
            <option value="{{ $dealer->id }}">{{ $dealer->name }}</option>
            @endforeach
        </select>
  </div>

  
  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price">
  </div>

  <div class="mb-3">
        <label for="formFile" class="form-label">Car Image</label>
        <input name="image" class="form-control" type="file" id="formFile">
    </div>



  <button type="submit" class="btn btn-primary w-full mt-5">Submit</button>
 
  <style>
  /* Style the form container */
  form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border-radius: 8px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
  select {
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
    padding: 12px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  button[type="submit"]:hover {
    background-color: #0056b3;
  }

  /* Style form group */
  .form-group {
    margin-bottom: 15px;
  }

  /* Style form error messages */
  .error-message {
    color: red;
    margin-top: 5px;
  }

  /* Style form header */
  .form-header {
    text-align: center;
    margin-bottom: 20px;
  }

  /* Style form container background */
  body {
    background-color: #f4f4f4;
    padding: 20px;
  }

  .back-to-home {
    margin-bottom: 20px; /* Adjust spacing as needed */
  }

  .back-to-home button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .back-to-home button:hover {
    background-color: #0056b3;
  }
</style>


</form>
</body>
</html>