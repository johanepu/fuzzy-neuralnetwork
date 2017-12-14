<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Komputasi Lunak | Neuron Network</title>
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

    .form-inline{
      padding-bottom: 10px;
    }

    fieldset {
      overflow: hidden
    }

    .some-class {
      float: left;
      clear: none;
    }

    label {
      float: left;
      clear: none;
      display: block;
      padding: 2px 1em 0 0;
    }

    input[type=radio],
    input.radio {
      float: left;
      clear: none;
      margin: 2px 0 0 2px;
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
                  <div class="brand-text brand-big"><span>Komputasi </span><strong>Lunak</strong></div>
                  <div class="brand-text brand-small"><strong>KomLun</strong></div></a>
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
              <h2 class="no-margin-bottom">Neuron Network to determine Dengue Fever Desease</h2>
            </div>
          </header>
          <!--Konten-->
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row">

          <div class="col-lg-6">
            <div class="card">
              <div class="card-header d-flex align-items-center">
                <h3 class="h4">Konfigurasi Input</h3>
              </div>
              <div class="card-body">
                <div class="" id="pilihkota">
                  <div class="form-inline">
                    <table>
                        <tr>
                            <td colspan="2" ><b>Konfigurasi Variabel</b></td>
                        </tr>
                        <tr>
                            <td>Fever : </td>
                            <td>
                              <div class="input-group col-md-12">
                                <fieldset>
                                  <div class="fever" name="feverradio" id="">
                                    <input type="radio" class="radio" name="fever" value="1" onclick="createArray()" id="1" />
                                    <label for="y">Ya</label>
                                    <input type="radio" class="radio" name="fever" value="0" onclick="createArray()" id="0" />
                                    <label for="z">Tidak</label>
                                  </div>
                                </fieldset>
                              </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Nausea : </td>
                            <td>
                              <div class="input-group col-md-12">
                                <fieldset>
                                  <div class="nausea" name="nausearadio" id="">
                                    <input type="radio" class="radio" name="nausea" value="1" onclick="createArray()" id="1" />
                                    <label for="y">Ya</label>
                                    <input type="radio" class="radio" name="nausea" value="0" onclick="createArray()" id="0" />
                                    <label for="z">Tidak</label>
                                  </div>
                                </fieldset>
                              </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Vomiting : </td>
                            <td>
                              <div class="input-group col-md-12">
                                <fieldset>
                                  <div class="vomiting" name="vomitingradio" id="">
                                    <input type="radio" class="radio" name="vomiting" value="1" onclick="createArray()" id="1" />
                                    <label for="y">Ya</label>
                                    <input type="radio" class="radio" name="vomiting" value="0" onclick="createArray()" id="0" />
                                    <label for="z">Tidak</label>
                                  </div>
                                </fieldset>
                              </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Diarrhea : </td>
                            <td>
                              <div class="input-group col-md-12">
                                <fieldset>
                                  <div class="diarrhea" name="diarrhearadio" id="">
                                    <input type="radio" class="radio" name="diarrhea" value="1" onclick="createArray()" id="1" />
                                    <label for="y">Ya</label>
                                    <input type="radio" class="radio" name="diarrhea" value="0" onclick="createArray()" id="0" />
                                    <label for="z">Tidak</label>
                                  </div>
                                </fieldset>
                              </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Black Feses : </td>
                            <td>
                              <div class="input-group col-md-12">
                                <fieldset>
                                  <div class="feses" name="fesesradio" id="">
                                    <input type="radio" class="radio" name="feses" value="1" onclick="createArray()" id="1" />
                                    <label for="y">Ya</label>
                                    <input type="radio" class="radio" name="feses" value="0" onclick="createArray()" id="0" />
                                    <label for="z">Tidak</label>
                                  </div>
                                </fieldset>
                              </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Headache : </td>
                            <td>
                              <div class="input-group col-md-12">
                                <fieldset>
                                  <div class="headache" name="headacheradio" id="">
                                    <input type="radio" class="radio" name="headache" value="1" onclick="createArray()" id="1" />
                                    <label for="y">Ya</label>
                                    <input type="radio" class="radio" name="headache" value="0" onclick="createArray()" id="0" />
                                    <label for="z">Tidak</label>
                                  </div>
                                </fieldset>
                              </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Pain Abdomen : </td>
                            <td>
                              <div class="input-group col-md-12">
                                <fieldset>
                                  <div class="abdomen" name="abdomenradio" id="">
                                    <input type="radio" class="radio" name="abdomen" value="1" onclick="createArray()" id="1" />
                                    <label for="y">Ya</label>
                                    <input type="radio" class="radio" name="abdomen" value="0" onclick="createArray()" id="0" />
                                    <label for="z">Tidak</label>
                                  </div>
                                </fieldset>
                              </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Muscular Pain : </td>
                            <td>
                              <div class="input-group col-md-12">
                                <fieldset>
                                  <div class="muscular" name="muscularradio" id="">
                                    <input type="radio" class="radio" name="muscular" value="1" onclick="createArray()" id="1" />
                                    <label for="y">Ya</label>
                                    <input type="radio" class="radio" name="muscular" value="0" onclick="createArray()" id="0" />
                                    <label for="z">Tidak</label>
                                  </div>
                                </fieldset>
                              </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Red Spots : </td>
                            <td>
                              <div class="input-group col-md-12">
                                <fieldset>
                                  <div class="redspot" name="redspotradio" id="">
                                    <input type="radio" class="radio" name="redspot" value="1" onclick="createArray()" id="1" />
                                    <label for="y">Ya</label>
                                    <input type="radio" class="radio" name="redspot" value="0" onclick="createArray()" id="0" />
                                    <label for="z">Tidak</label>
                                  </div>
                                </fieldset>
                              </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Spontaneous Bleeding : </td>
                            <td>
                              <div class="input-group col-md-12">
                                <fieldset>
                                  <div class="bleeding" name="bleedingradio" id="">
                                    <input type="radio" class="radio" name="bleeding" value="1" onclick="createArray()" id="1" />
                                    <label for="y">Ya</label>
                                    <input type="radio" class="radio" name="bleeding" value="0" onclick="createArray()" id="0" />
                                    <label for="z">Tidak</label>
                                  </div>
                                </fieldset>
                              </div>
                            </td>
                        </tr>

                    </table>

                    <div class="form-group col-md-3">
                      <button type="button" name="button" class="btn bg-blue plus" style="display:none"><i class="fa fa-plus"></i></button>
                      <span style="padding-left:10px"></span>
                      <button type="button" name="button" class="btn bg-red minus" style="display:none"><i class="fa fa-minus"></i></button>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 form-inline" style="margin-left:10px;margin-top:10px;">
                  <button type="button" name="button" id="start" class="btn bg-navy" ><span class="fa fa-start"></span> Start</button>
                  <button type="button" name="button" id="reset" class="btn bg-navy" style="margin-left:10px;"><span class="fa fa-refresh"></span> Reset</button>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-6">
            <div class="card">
              <div class="card-header d-flex align-items-center">
                <h3 class="h4">Setting Parameter</h3>
              </div>
              <div class="card-body">
                <div>
                  <table>
                      <tr>
                          <td colspan="2" ><b>Konfigurasi Variabel</b></td>
                      </tr>
                      <tr>
                          <td>Learning Rate: </td>
                          <td>
                            <div class="input-group col-md-12">
                              <select class="mr form-control"  id="learning-rate">
                                  <option value="0.00">0.00</option>
                                  <option value="0.05">0.01</option>
                                  <option value="0.05">0.05</option>
                                  <option value="0.1">0.1</option>
                                  <option value="0.2">0.2</option>
                                  <option value="0.4" selected="selected">0.4</option>
                                  <option value="0.7">0.7</option>
                                  <option value="1">1.0</option>
                              </select>
                              </div>
                          </td>
                      </tr>
                      <tr>
                          <td>Epoch : </td>
                          <td>
                            <div class="input-group col-md-12">
                              <select class="mr form-control"  id="epoch">
                                  <option value="1">1</option>
                                  <option value="20">20</option>
                                  <option value="50">50</option>
                                  <option value="100">100</option>
                                  <option value="500">500</option>
                                  <option value="1000" selected="selected">1000</option>
                                  <option value="2000">2000</option>
                                  <option value="5000">5000</option>
                              </select>
                              </div>
                          </td>
                      </tr>
                      <tr>
                          <td>Jumlah Hidden Layer : </td>
                          <td>
                            <div class="input-group col-md-12">
                              <select class="mr form-control"  id="hiddenCount">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="5"selected="selected">5</option>
                                  <option value="10">10</option>
                                  <option value="20">20</option>
                                  <option value="50">50</option>
                                  <option value="100">100</option>
                              </select>
                              </div>
                          </td>
                      </tr>
                      <tr>
                          <td colspan="3" ><b>Hasil Deteksi</b></td>
                      </tr>
                      <tr>
                        <td colspan="3">
                        <div class=" hsl" >
                          <p >Dengue Neuron (No Hidden Layer) Output = </p>
                          <div id="hasil" >

                          </div>
                          <p >Dengan Hidden Layer Output = </p>
                          <div id="hasil2" >

                          </div>
                          <p >Dengan Deep Learning Output = </p>
                          <div id="hasil3" >

                          </div>
                          <p >Dengan Long Short-term Memory Output = </p>
                          <div id="hasil4" >

                          </div>
                        </div>
                      </td>
                      </tr>

                  </table>
                </div>
              </div>

            </div>
          </div>



          <!-- Page Footer-->
          <footer class="main-footer fixed-bottom">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Lulus Cepet &copy; 2018</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Kelompok Komlun</a></p>
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





    <script type="text/javascript">


    var learningRate;
    var learnData = [];
    var epoch;
    var hiddenCount;

    $(document).on('click','#start', function(){
      learningRate = $('#learning-rate').val();
      epoch = $('#epoch').val()
      hiddenCount = $('#hiddenCount').val()
      if (learnData.length < 10) {
        alert("Input harus diisi semua");
      } else {
        createArray();
        retrain();
        trainHidden();
        trainDeep();
        trainLSTM();
        console.log(learnData);
        input.activate(learnData);
        var result = output.activate();
        var hasilhidden = myNetwork.activate(learnData);
        var hasildeep = myDeepNetwork.activate(learnData);
        var hasilLSTM = myLSTM.activate(learnData);
        console.log("Learning Rate : " +learningRate);
        console.log("Epoch training : " +epoch);
        console.log("Node Hidden Layer : " +hiddenCount);
        console.log("Dengue No Hidden Layer : " + result[0] * 100 + "%");
        console.log("Dengan Hidden Layer : " + hasilhidden[0] * 100 + "%");
        console.log("Dengan Deep Learning Neuron : "+ hasildeep[0] * 100 + "%");
        console.log("Dengan LSTM Neuron : "+ hasilLSTM[0] * 100 + "%");

        //tampilkan di hasil
        var hasil = result[0] * 100;
        var hasil2 = hasilhidden[0] * 100;
        var hasil3 = hasildeep[0] * 100;
        var hasil4 = hasilLSTM[0] * 100;
        var tekshasil ='<p>'+hasil+' %</p>';
        var tekshasil2 ='<p>'+hasil2+' %</p>';
        var tekshasil3 ='<p>'+hasil3+' %</p>';
        var tekshasil4 ='<p>'+hasil4+' %</p>';
        $('div.hsl').find('div#hasil').html(tekshasil);
        $('div.hsl').find('div#hasil2').html(tekshasil2);
        $('div.hsl').find('div#hasil3').html(tekshasil3);
        $('div.hsl').find('div#hasil4').html(tekshasil4);
        $('#hasil').html(tekshasil);
        $('#hasil2').html(tekshasil2);
        $('#hasil3').html(tekshasil3);
        $('#hasil4').html(tekshasil4);
      }

    }).on('click','#reset', function(){
      $('#result').empty();
      $('#result2').empty();
      $('#result3').empty();
      $('#result4').empty();
      document.getElementById("start").style.display = "none";
      $('#pilihkota div').first().find('div.col-md-2').show();
      $('.rs').not(':first').remove();
      $('#result').empty();
      $('#result2').empty();
      $('#result3').empty();
      $('#result4').empty();
      nodes.splice(0,nodes.length);
      clearMap();
    });

    //tangkap input
    function createArray() {
    learnData[0] = $('input[name=fever]:checked').val();
    learnData[1] = $('input[name=nausea]:checked').val();
    learnData[2] = $('input[name=vomiting]:checked').val();
    learnData[3] = $('input[name=diarrhea]:checked').val();
    learnData[4] = $('input[name=feses]:checked').val();
    learnData[5] = $('input[name=headache]:checked').val();
    learnData[6] = $('input[name=abdomen]:checked').val();
    learnData[7] = $('input[name=muscular]:checked').val();
    learnData[8] = $('input[name=redspot]:checked').val();
    learnData[9] = $('input[name=bleeding]:checked').val();
    }

    //training data 80
    var trainingData = [
    {input: [0,0,0,0,0,0,1,0,0,0], output: [0]},
    {input: [0,1,0,0,0,0,0,0,0,0], output: [0]},
    {input: [0,1,0,0,0,1,0,0,0,0], output: [0]},
    {input: [0,0,1,0,0,0,1,0,0,0], output: [0]},

    {input: [1,0,0,0,1,1,1,0,0,0], output: [0]},
    {input: [1,0,0,0,0,1,0,0,0,0], output: [0]},
    {input: [0,1,0,0,0,1,0,0,0,0], output: [0]},
    {input: [0,0,0,1,0,0,1,0,0,0], output: [0]},
    {input: [0,0,1,1,0,0,0,0,0,0], output: [0]},
    {input: [0,0,0,0,0,1,0,0,0,0], output: [0]},
    {input: [0,0,0,0,1,0,0,0,0,0], output: [0]},
    {input: [0,0,1,0,0,0,1,0,0,0], output: [0]},
    {input: [1,1,1,0,0,0,0,0,0,0], output: [0]},
    {input: [1,1,0,0,0,0,0,0,0,0], output: [0]},

    {input: [0,1,1,0,0,0,0,0,0,0], output: [0]},
    {input: [0,1,0,0,0,0,0,0,0,0], output: [0]},
    {input: [0,1,0,0,0,1,0,0,0,0], output: [0]},
    {input: [0,0,1,0,0,0,0,0,0,0], output: [0]},
    {input: [0,0,0,0,0,1,0,1,1,1], output: [0]},
    {input: [0,0,0,0,0,0,1,0,0,0], output: [0]},
    {input: [0,1,0,0,0,0,1,0,0,0], output: [0]},
    {input: [0,0,1,0,0,0,1,0,0,0], output: [0]},
    {input: [0,0,1,1,0,0,1,0,0,0], output: [0]},
    {input: [0,1,1,1,0,0,0,0,0,0], output: [0]},

    {input: [1,0,0,0,0,1,0,0,0,0], output: [0]},
    {input: [0,0,0,0,0,1,0,0,0,0], output: [0]},
    {input: [1,1,1,1,0,0,0,0,0,0], output: [0]},
    {input: [0,0,0,0,1,1,0,0,0,0], output: [0]},
    {input: [0,0,0,0,0,1,1,0,0,0], output: [0]},
    {input: [0,0,1,0,0,1,0,0,0,0], output: [0]},
    {input: [0,0,0,1,0,0,0,0,0,0], output: [0]},
    {input: [0,1,0,1,0,0,0,0,0,0], output: [0]},
    {input: [1,0,0,0,0,0,1,0,0,0], output: [0]},
    {input: [0,0,1,0,0,0,0,0,0,0], output: [0]},

    {input: [1,1,0,0,0,1,0,0,0,0], output: [0]},
    {input: [0,0,0,0,1,0,0,0,0,0], output: [0]},
    {input: [0,0,0,0,0,1,0,0,0,0], output: [0]},
    {input: [1,1,0,0,0,0,0,0,0,0], output: [0]},
    {input: [0,1,1,0,0,0,0,0,0,0], output: [0]},
    {input: [1,1,0,0,0,0,1,0,0,0], output: [0]},
    {input: [0,1,0,0,0,0,1,0,0,0], output: [0]},
    {input: [1,1,0,1,1,1,1,0,0,0], output: [0]},
    {input: [0,0,1,0,0,0,1,0,0,0], output: [0]},
    {input: [1,0,1,0,0,0,0,0,0,0], output: [0]},

    {input: [0,0,0,0,0,0,0,1,1,1], output: [1]},
    {input: [0,0,0,0,1,0,0,1,1,1], output: [1]},
    {input: [1,1,0,0,1,1,0,0,0,0], output: [1]},
    {input: [1,1,1,0,1,1,0,0,1,1], output: [1]},
    {input: [1,0,1,0,1,1,1,0,0,0], output: [1]},

    {input: [0,0,0,0,0,0,0,1,0,1], output: [1]},
    {input: [1,0,0,0,0,1,0,1,0,1], output: [1]},
    {input: [0,0,1,0,0,0,0,1,0,1], output: [1]},
    {input: [1,0,0,1,1,0,1,1,1,1], output: [1]},
    {input: [1,1,0,0,0,0,0,0,0,0], output: [1]},
    {input: [0,1,0,0,1,1,1,1,1,1], output: [1]},
    {input: [0,0,0,0,1,0,0,1,0,1], output: [1]},
    {input: [1,1,0,0,1,0,1,0,0,0], output: [1]},

    {input: [1,1,0,0,1,1,1,0,1,1], output: [1]},
    {input: [0,1,0,1,0,0,0,1,1,1], output: [1]},
    {input: [0,0,1,0,0,0,0,1,0,1], output: [1]},
    {input: [1,1,1,1,1,1,0,1,0,1], output: [1]},
    {input: [1,1,0,0,0,0,0,0,0,0], output: [1]},
    {input: [1,1,0,0,1,1,0,1,0,1], output: [1]},
    {input: [0,0,0,0,1,0,0,1,0,1], output: [1]},
    {input: [1,0,1,0,1,1,1,0,0,0], output: [1]},

    {input: [0,0,0,0,0,0,0,1,0,1], output: [1]},
    {input: [1,1,0,0,1,0,1,1,0,1], output: [1]},
    {input: [0,0,1,0,0,0,0,1,0,1], output: [1]},
    {input: [0,0,0,0,0,0,1,1,0,1], output: [1]},
    {input: [1,1,0,0,1,1,0,0,1,1], output: [1]},
    {input: [0,1,0,0,1,0,0,0,0,0], output: [1]},
    {input: [0,0,0,0,1,1,0,1,0,1], output: [1]},
    {input: [0,1,0,0,1,0,1,0,0,0], output: [1]},

    {input: [1,1,0,0,1,0,1,1,1,1], output: [1]},
    {input: [0,1,0,0,1,1,0,0,0,0], output: [1]},
    {input: [0,0,0,0,0,1,0,0,0,0], output: [1]},
    {input: [1,1,0,0,1,1,0,0,1,1], output: [1]},
    {input: [1,0,1,1,0,1,0,0,1,1], output: [1]},
    {input: [1,1,0,0,1,0,0,0,1,1], output: [1]},
    {input: [1,0,0,0,0,0,0,1,0,0], output: [1]},
    {input: [0,0,1,0,0,0,1,0,1,1], output: [1]},

    {input: [1,1,0,0,0,0,0,0,0,0], output: [1]},
    {input: [1,1,0,0,1,1,0,0,0,0], output: [1]},
    {input: [1,0,0,0,1,1,0,0,0,0], output: [1]},
    {input: [1,0,0,0,0,0,0,1,0,1], output: [1]},
    {input: [1,1,0,0,1,1,0,0,0,0], output: [1]},
    {input: [1,0,0,0,1,1,0,0,1,1], output: [1]},

    ];

    //simple neuron network no hidden layer
    var input = new synaptic.Layer(10); // Ten inputs
    var output = new synaptic.Layer(1); // One outputs

    input.project(output); // Connect input to output

    function train() {
        for(var i = 0; i < trainingData.length; i++) {
            input.activate(trainingData[i]["input"]);
            output.activate();
            output.propagate(learningRate, trainingData[i]["output"]);
        }
    }

    function retrain() {
        for(var i = 0; i < epoch; i++) {
            trainingData = _.shuffle(trainingData);
            train();
        }
    }


    //with one hidden layer
    var myNetwork = new synaptic.Architect.Perceptron(
        10, // Input layer with 10 neurons
        5, // First hidden layer with 5 neurons
        1 // Output layer with 1 neurons
    );

    function trainHidden(){
      var myHidTrainer = new synaptic.Trainer(myNetwork); // Create trainer
          myHidTrainer.train(trainingData, {
              rate: learningRate,
              iterations: epoch,
              shuffle: true
      }); // Train with training data

    }

      //with deep learning (two hidden layer)
      var myDeepNetwork = new synaptic.Architect.Perceptron(
          10, // Input layer with 10 neurons
          5, // First hidden layer with 3 neurons
          3, // Second hidden layer with 3 neurons
          1 // Output layer with 1 neurons
      );

      function trainDeep(){
        var myTrainer = new synaptic.Trainer(myDeepNetwork); // Create trainer
            myTrainer.train(trainingData, {
                rate: learningRate,
                iterations: epoch,
                shuffle: true
        }); // Train with training data

      }

      //with LSTM
      var myLSTM = new synaptic.Architect.LSTM(
        10, // Input Gate 10 neurons
        15, // Memory Cell
        1 //Output layer
      );

      function trainLSTM(){
        var myLSTMTrainer = new synaptic.Trainer(myLSTM); // Create trainer
            myLSTMTrainer.train(trainingData, {
                rate: learningRate,
                iterations: 10,
                shuffle: true
        }); // Train with training data

      }






    </script>
  </body>
</html>
