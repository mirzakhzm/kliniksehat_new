@extends('headerfooter.headerfooteradmin')

@section('content')


 <!-- Stats Section -->
<section id="stats" class="stats section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4">
        <div class="col-lg-3 col-md-6">
          <div class="stats-item d-flex align-items-center w-100 h-100">
            <i class="fas fa-user-injured flex-shrink-0"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>Total Pasien</p>
            </div>
          </div>
        </div><!-- End Stats Item -->
  
        <div class="col-lg-3 col-md-6">
          <div class="stats-item d-flex align-items-center w-100 h-100">
            <i class="fas fa-briefcase-medical flex-shrink-0"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>BPJS</p>
            </div>
          </div>
        </div><!-- End Stats Item -->
  
        <div class="col-lg-3 col-md-6">
          <div class="stats-item d-flex align-items-center w-100 h-100">
            <i class="fas fa-stethoscope flex-shrink-0"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>
              <p>UMUM</p>
            </div>
          </div>
        </div><!-- End Stats Item -->
  
        <div class="col-lg-3 col-md-6">
          <div class="stats-item d-flex align-items-center w-100 h-100">
            <i class="fas fa-user-md flex-shrink-0"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>
              <p>Dokter</p>
            </div>
          </div>
        </div><!-- End Stats Item -->
      </div>
    </div>
  </section><!-- /Stats Section -->
  
  <!-- Line Chart Section -->
  <section id="line-chart" class="line-chart section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4">
        <div class="col-12">
          <canvas id="myLineChart"></canvas>
        </div>
      </div>
    </div>
  </section><!-- /Line Chart Section -->
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const ctx = document.getElementById('myLineChart').getContext('2d');
    const myLineChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
          label: 'Jumlah Pasien BPJS',
          data: [10, 20, 30, 40, 50, 60, 70],
          fill: false,
          borderColor: 'rgb(75, 192, 192)',
          tension: 0.1
        }, {
          label: 'Jumlah Pasien UMUM',
          data: [5, 15, 10, 20, 25, 30, 35],
          fill: false,
          borderColor: 'rgb(255, 99, 132)',
          tension: 0.1
        }]
      },
      options: {
        responsive: true,
        scales: {
          x: {
            display: true,
            title: {
              display: true,
              text: 'Bulan'
            }
          },
          y: {
            display: true,
            title: {
              display: true,
              text: 'Jumlah Pasien'
            }
          }
        }
      }
    });
  </script>
  




@endsection