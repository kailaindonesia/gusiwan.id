<!--
=========================================================
 Paper Dashboard 2 - v2.0.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-dashboard-2
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->



<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Kaila Technology
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->

  <script type="text/javascript" src="../assets/chartjs/Chart.js"></script>


</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        
       <center> <a href="./index.php" class="simple-text logo-normal">
          KAILA TECHNOLOGY</a></center>
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./index.php">
              <i class="nc-icon nc-shop"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="active">
            <a href="./sensor.php">
              <i class="nc-icon nc-settings"></i>
              <p>Data Sensor</p>
            </a>
          </li>
          <li>
            <a href="http://192.168.41.238/">
              <i class="nc-icon nc-tv-2"></i>
              <p>Live View</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
     
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-lg">

  <canvas id="bigDashboardChart"></canvas>


</div> -->
     
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Data Sensor</h5>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
<?php 
  include 'koneksi.php';
  ?>

        <center>
    <h2>TEMPERATUR SUHU TANAMAN<br/></h2>
  </center>



  <div style="width: 800px;margin: 0px auto;">
    <canvas id="myChart1"></canvas>
  </div>

  <br/>
  <br/>
  
  
  <center>
    <h2>HUMIDITY TANAMAN<br/></h2>
  </center>



  <div style="width: 800px;margin: 0px auto;">
    <canvas id="myChart2"></canvas>
  </div>

  <br/>
  <br/>
  
  <center>
    <h2>TDS TANAMAN<br/></h2>
  </center>



  <div style="width: 800px;margin: 0px auto;">
    <canvas id="myChart3"></canvas>
  </div>

  <br/>
  <br/>
  
  <center>
    <h2>PH TANAMAN<br/></h2>
  </center>



  <div style="width: 800px;margin: 0px auto;">
    <canvas id="myChart4"></canvas>
  </div>

  <br/>
  <br/>

  <center>
    <h2>LEMBAB TANAMAN<br/></h2>
  </center>



  <div style="width: 800px;margin: 0px auto;">
    <canvas id="myChart5"></canvas>
  </div>

  <br/>
  <br/>


      <?php 
      $no = 1;
      $no1 = 1;
      ?>


  
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated at 06.17 - 21/11/2019
                </div>
              </div>
            </div>
          </div>
        </div>








       
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Kaila Technology Team
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>

  <script>
  
    
    var ctx1 = document.getElementById("myChart1").getContext('2d');
    var myChart = new Chart(ctx1, {
      type: 'line',
      data: {
        labels: [<?php
              $data = mysqli_query($koneksi,"select * from greenhouse");
              while($d=mysqli_fetch_array($data)){
                $a = mysqli_num_rows($data);
                echo '"'.$d['date'].' & '.$d['time'].'"';
                if($no != $a){
                  echo ',';
                }
                $no++;
      }
        ?>],
        datasets: [{
          label: 'Suhu tanaman dalam C',
          data: [
          <?php 
          $data1 = mysqli_query($koneksi,"select * from greenhouse");
              while($d=mysqli_fetch_array($data1)){
                $a = mysqli_num_rows($data);
                echo $d['temp'];
                if($no1 != $a){
                  echo ',';
                }
                $no1++;
      }
          ?>
          ],
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
    var ctx2 = document.getElementById("myChart2").getContext('2d');
    var myChart = new Chart(ctx2, {
      type: 'line',
      data: {
        labels: [<?php
              $data = mysqli_query($koneksi,"select * from greenhouse");
              while($d=mysqli_fetch_array($data)){
                $a = mysqli_num_rows($data);
                echo '"'.$d['date'].' & '.$d['time'].'"';
                if($no != $a){
                  echo ',';
                }
                $no++;
      }
        ?>],
        datasets: [{
          label: 'HUMIDITY TANAMAN',
          data: [
          <?php 
          $data1 = mysqli_query($koneksi,"select * from greenhouse");
              while($d=mysqli_fetch_array($data1)){
                $a = mysqli_num_rows($data);
                echo $d['humid'];
                if($no1 != $a){
                  echo ',';
                }
                $no1++;
      }
          ?>
          ],
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
    var ctx3 = document.getElementById("myChart3").getContext('2d');
    var myChart = new Chart(ctx3, {
      type: 'line',
      data: {
        labels: [<?php
              $data = mysqli_query($koneksi,"select * from greenhouse");
              while($d=mysqli_fetch_array($data)){
                $a = mysqli_num_rows($data);
                echo '"'.$d['date'].' & '.$d['time'].'"';
                if($no != $a){
                  echo ',';
                }
                $no++;
      }
        ?>],
        datasets: [{
          label: 'TDS TANAMAN',
          data: [
          <?php 
          $data1 = mysqli_query($koneksi,"select * from greenhouse");
              while($d=mysqli_fetch_array($data1)){
                $a = mysqli_num_rows($data);
                echo $d['tds'];
                if($no1 != $a){
                  echo ',';
                }
                $no1++;
      }
          ?>
          ],
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
    var ctx4 = document.getElementById("myChart4").getContext('2d');
    var myChart = new Chart(ctx4, {
      type: 'line',
      data: {
        labels: [<?php
              $data = mysqli_query($koneksi,"select * from greenhouse");
              while($d=mysqli_fetch_array($data)){
                $a = mysqli_num_rows($data);
                echo '"'.$d['date'].' & '.$d['time'].'"';
                if($no != $a){
                  echo ',';
                }
                $no++;
      }
        ?>],
        datasets: [{
          label: 'PH TANAMAN',
          data: [
          <?php 
          $data1 = mysqli_query($koneksi,"select * from greenhouse");
              while($d=mysqli_fetch_array($data1)){
                $a = mysqli_num_rows($data);
                echo $d['ph'];
                if($no1 != $a){
                  echo ',';
                }
                $no1++;
      }
          ?>
          ],
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
    var ctx5 = document.getElementById("myChart5").getContext('2d');
    var myChart = new Chart(ctx5, {
      type: 'line',
      data: {
        labels: [<?php
              $data = mysqli_query($koneksi,"select * from greenhouse");
              while($d=mysqli_fetch_array($data)){
                $a = mysqli_num_rows($data);
                echo '"'.$d['date'].' & '.$d['time'].'"';
                if($no != $a){
                  echo ',';
                }
                $no++;
      }
        ?>],
        datasets: [{
          label: 'KELEMBABAN TANAMAN',
          data: [
          <?php 
          $data1 = mysqli_query($koneksi,"select * from greenhouse");
              while($d=mysqli_fetch_array($data1)){
                $a = mysqli_num_rows($data);
                echo $d['lembab'];
                if($no1 != $a){
                  echo ',';
                }
                $no1++;
      }
          ?>
          ],
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script>
</body>

</html>
