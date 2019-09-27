<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Main Page</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


  <!-- Custom styles for this template -->
  <link href="css/landing-page.css" rel="stylesheet">

  <style type="text/css">
      .modal-dialog {
        min-width: 90%;
        margin: 1.75rem auto;
      }

      #col1 {
        height: 400px;
      }
      .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
        color: darkblue;
        font-weight: bold;
      }

  </style>

</head>

<body>


  

  <!-- Form -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto" style="margin-top: -7%; margin-bottom: 12%;color: #f8f9fa">
          <h1 class=""><i style='font-size:50px' class='fab'>&#xf39d;</i>   &nbsp;Online Text Recognizer </h1>
          <h3>Read image and extract text into an electronic format. <br> </h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-10 col-xl-7 mx-auto">
      
          <form  id="uploadimage" action="bridge.php" method="POST" enctype="multipart/form-data">
            <div class="form-row">
              <div class="col-5">
                
                <div class="custom-file form-control" style="text-align: left;">
                  <input type="file" class="custom-file-input" id="file" name="file" required accept="image/x-png,image/gif,image/jpeg,image/jpg"
                  oninvalid="this.setCustomValidity('Please upload an image file')"
                  oninput="setCustomValidity('')">
                  <label class="custom-file-label " for="customFile">
                  Upload image</label>
                </div>


              </div>
              <div class="col-4">
                <!-- <input type="text" class="form-control form-control-lg" placeholder="Last name"> -->
                <select id="inputLang" class="form-control" name="lango" required
                oninvalid="this.setCustomValidity('Please choose a language')"
                oninput="setCustomValidity('')">
                  <option value="" disabled selected>Select language</option>
                  <option value="eng" >English</option>
                  <option value="ara" >Arabic</option>
                  <option value="chi_sim" >Chinese (Simple)</option>
                  <option value="chi_tra" >Chinese (Tradictional)</option>
                  <option value="fra" >French</option>
                </select>


              </div>

              <div class="col-3">
                 <button type="submit" name="submit" id="go" class="btn btn-block btn-primary" >Recognize!  </button>

              </div>

             
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>


  <!-- Modal -->


 

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-info m-auto text-primary"></i>
            </div>
            <h3>What is OCR?</h3>
            <p class="lead mb-0" style="text-align: justify;"><b>OCR (Optical Character Recognition)</b> is a technology that extracts the text from an image or a scanned document so that it can be edited, formatted or searched. <br>
            OCR can be used to convert books, invoices and other documents into electronic format and to automate various business processes.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-primary"></i>
            </div>
            <h3>Our Service</h3>
            <p class="lead mb-0" style="text-align: justify;">Free service that allows you to easily read your images or scanned documents, Based on one of most accurate open-source OCR engines <b>“Tesseract”</b>. Using <b>OpenCV</b> open source, Many image processing operations are done before doing the actual OCR to overcome its weaknesses and improve the quality of the text extracted. </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Features</h3>
            <ul class="lead" style="text-align: justify;">
                <li>Supports poorly scanned and photographed pages</li>
                <li>Supports low-resolution images</li>
                <li>Automatically detects and rotates skewed images</li>
                <li>Supports BMP, JPEG, TIFF or PNG as input</li>
                <li>Supports DOC, PDF or plain text as output</li>
                <li>Recognize many languages </li>
                <li>Works online - no installation</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
         
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>



  <script type="text/javascript">
    
    $(document).ready(function () {
      bsCustomFileInput.init()
    })

    
  </script>

</body>

</html>
