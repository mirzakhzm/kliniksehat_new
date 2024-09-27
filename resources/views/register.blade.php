@extends('headerfooter.headerfooterlogin')

@section('content')

<!-- Section: Design Block -->
<section class="">
    <!-- Jumbotron -->
    <div class="px-4 py-5 px-md-5 text-center text-lg-start">
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card">
              <div class="card-body py-5 px-md-5 ">
                <form id="registrationForm">
                    @csrf
                    
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="text" name="username" id="form3Example3" class="form-control" />
                      <label class="form-label" for="username">Username</label>
                    </div> 

                    <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" name="email" id="form3Example3" class="form-control" />
                    <label class="form-label" for="email">Email</label>
                  </div>     

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" name="role" id="form3Example3" class="form-control" />
                    <label class="form-label" for="role">Role</label>
                  </div>                    
                  
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" name="password" id="form3Example4" class="form-control" />
                    <label class="form-label" for="password">Password</label>
                  </div>

                  <div class="text-center">
                  <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
                    Daftar
                  </button>                
                </div> 
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->
<script>
    document.getElementById('registrationForm').onsubmit = async function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        const response = await fetch('/api/register', {
            method: 'POST',
            body: formData,
        });
        const result = await response.json();
        window.location.href = '/login';
        alert(result.message);
    };
</script>
@endsection