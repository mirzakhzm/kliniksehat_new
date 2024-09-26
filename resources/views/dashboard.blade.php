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
                      <span data-purecounter-start="0" data-purecounter-end="{{ $totalPasien }}" data-purecounter-duration="1" class="purecounter"></span>
                      <p>Total Pasien</p>
                  </div>
              </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
              <div class="stats-item d-flex align-items-center w-100 h-100">
                  <i class="fas fa-briefcase-medical flex-shrink-0"></i>
                  <div>
                      <span data-purecounter-start="0" data-purecounter-end="{{ $totalBPJS }}" data-purecounter-duration="1" class="purecounter"></span>
                      <p>BPJS</p>
                  </div>
              </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
              <div class="stats-item d-flex align-items-center w-100 h-100">
                  <i class="fas fa-stethoscope flex-shrink-0"></i>
                  <div>
                      <span data-purecounter-start="0" data-purecounter-end="{{ $totalUmum }}" data-purecounter-duration="1" class="purecounter"></span>
                      <p>UMUM</p>
                  </div>
              </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
              <div class="stats-item d-flex align-items-center w-100 h-100">
                  <i class="fas fa-user-md flex-shrink-0"></i>
                  <div>
                      <span data-purecounter-start="0" data-purecounter-end="{{ $totalDokter }}" data-purecounter-duration="1" class="purecounter"></span>
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

  




@endsection