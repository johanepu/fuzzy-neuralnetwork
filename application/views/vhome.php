<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Algoritma Evolusioner | TSP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/fontastic.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Dt css button -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css">
    <!-- Fa icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style media="screen">
    .content-inner{
      min-height: 100vh !important;
      min-width: 100vw !important;
      padding-bottom: 90px !important;
    }

    h3{
      float:left !important;
    }

    a{
      cursor:pointer;
    }
    #map{
      height:500px;
    }
    .form-inline{
      padding-bottom: 10px;
    }
    </style>
  </head>
  <body>
    <div class="page home-page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.html" class="navbar-brand">
                  <div class="brand-text brand-big"><span>Algoritma </span><strong>Evolusioner</strong></div>
                  <div class="brand-text brand-small"><strong>ALEV</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Presentasi Traveling Salesman Problem</h2>
            </div>
          </header>

          <!-- Page Footer-->
          <footer class="main-footer fixed-bottom">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Lulus Cepet &copy; 2018</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Kelompok Alev</a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- Javascript files-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/synaptic/1.0.8/synaptic.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?=base_url()?>assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script> -->
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script> -->
    <script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
    <!-- <script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script> -->
    <script src="<?=base_url()?>assets/js/charts-home.js"></script>
    <script src="<?=base_url()?>assets/js/front.js"></script>
    //gmaps
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwW5b1RmYGIJIg1OWr00VUAgEUB4n_oP8&callback=initMap"></script>



    <script type="text/javascript">
    var input = new synaptic.Layer(10); // Two inputs
    var output = new synaptic.Layer(1); // Three outputs

    input.project(output); // Connect input to output

    var trainingData = [
    {input: [0,0,0,0,0,0,1,0,0,0], output: [0]}, // Whistle -> Run
    {input: [0,1,0,0,0,0,0,0,0,0], output: [0]},
    {input: [0,1,0,0,0,1,0,0,0,0], output: [0]},
    {input: [0,0,1,0,0,0,1,0,0,0], output: [0]},
    {input: [1,0,0,0,1,1,1,0,0,0], output: [0]},
    {input: [1,0,0,0,0,1,0,0,0,0], output: [0]},
    {input: [0,1,0,0,0,1,0,0,0,0], output: [0]},
    {input: [0,0,0,1,0,0,1,0,0,0], output: [0]},
    {input: [0,0,1,1,0,0,0,0,0,0], output: [0]},
    {input: [0,0,0,0,0,1,0,0,0,0], output: [0]},
    {input: [0,0,0,0,0,0,0,1,1,1], output: [1]},
    {input: [0,0,0,0,1,0,0,1,1,1], output: [1]},
    {input: [1,1,0,0,1,1,0,0,0,0], output: [1]},
    {input: [1,1,1,0,1,1,0,0,1,1], output: [1]},
    {input: [0,0,0,0,0,0,0,1,0,1], output: [1]},
    {input: [1,0,0,0,0,1,0,1,0,1], output: [1]},
    {input: [0,0,1,0,0,0,0,1,0,1], output: [1]},
    {input: [1,0,0,1,1,0,1,1,1,1], output: [1]},
    {input: [1,1,0,0,0,0,0,0,0,0], output: [1]},
    {input: [0,1,0,0,1,1,1,1,1,1], output: [1]},
    ];

    var learningRate = 0.4;

    function train() {
        for(var i = 0; i < trainingData.length; i++) {
            input.activate(trainingData[i]["input"]);
            output.activate();
            output.propagate(learningRate, trainingData[i]["output"]);
        }
    }

    function retrain() {
        for(var i = 0; i < 1000; i++) {
            trainingData = _.shuffle(trainingData);
            train();
        }
    }
    retrain(); // Start the training


    input.activate([0,0,1,0,0,0,1,0,0,0]); // Coba activete
    var result = output.activate();

    console.log("Dengue Neuron: " + result[0] * 100 + "%");

    </script>
  </body>
</html>
