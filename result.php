<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Result</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


  <!-- Custom styles for this template -->
  <link href="css/landing-page.css" rel="stylesheet">

  <style type="text/css">
      header.masthead {

	  padding-top: 4rem;
	  padding-bottom: 4rem;
	}

  </style>

</head>

<body>


  

  <!-- Form -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
      <div class="row" >
        <div class="col-xl-9 mx-auto" style="">
          <h2 class="" ><i style='font-size:30px' class='fab'>&#xf39d;</i>
          Online Text Recognizer </h2>
          <h3><i style="font-size:30px" class="fa">&#xf582;</i>
          	Thank you for using our product 
          	<i style="font-size:30px" class="fa">&#xf582;</i> <br> </h3>  	
        </div>
      </div>
  </header>


  <!-- Modal -->


 

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">

      				<!-- Displaying Images -->
                  <div class="col-sm-12 col-md-4" id="col1">
                    <nav>
                      <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Uploaded image</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Preprocessed image</a>
                      
                      </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <img src="container/input.png" class="img-fluid img-thumbnail" alt="Responsive image">
                      </div>
                      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <img src="container/outputFinal.png" class="img-fluid img-thumbnail" alt="Responsive image">
                      </div>
                     
                    </div>
                    
                  </div>


                    <!-- Plain text section -->
                  <div class="col-sm-12 col-md-5">

                   
                    <nav>
                      <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="font-weight: bold;">Plain Text</a>
                        
                      
                      </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="form-group">
                       <textarea class="form-control txxt" id="plain" rows="12"><?php mb_internal_encoding("UTF-8");  
                       function file_get_contents_utf8($fn) {
					     $content = file_get_contents($fn);
					      return mb_convert_encoding($content, 'UTF-8',
					          mb_detect_encoding($content, 'UTF-8, ISO-8859-1', true));
					}

                       echo file_get_contents_utf8("container/output.txt");?>
                       </textarea>
                     </div>
                      </div>
                    </div>

                                          
                  </div>

                
                  <!-- Download section -->
                  <div class="col-sm-12 col-md-3">
                     <nav>
                      <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="font-weight: bold;">Download Options</a>
                        
                      
                      </div>
                    </nav>

                    
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                        <div class="list-group">
                          <a href="Download.php?action=a" class="list-group-item list-group-item-danger list-group-item-action">PDF Document (PDF) </a>
                          <a href="Download.php?action=b" class="list-group-item list-group-item-primary list-group-item-action">Word Document (DOC)</a>
                          <a href="Download.php?action=c" class="list-group-item list-group-item-secondary list-group-item-action">Text Document (TXT)</a>
                          <!-- <a href="Download.php?action=d" class="list-group-item list-group-item-action list-group-item-warning">TSV Document (TSV)</a> -->
                        </div>
                        
                      </div>
                      
                     
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
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
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
      //bsCustomFileInput.init();
     // document.getElementById(".txxt").value = "haha data";

    })

      
      

  </script>

</body>

</html>
