
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
 
</form>
</body>
</html>