<!DOCTYPE html>
<html lang="en">

@include('component.head');

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100 ">
        <div class="container">
        <div class="row justify-content-end">
        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
        <div class="card z-index-0">
            <div class="card-header text-center pt-4">
                  <h4 class="font-weight-bolder">Login</h4>
                </div>
                <div class="card-body">
                  <form role="form">
                    <div class="mb-3">
                      <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username">
                    </div>
                    <div class="mb-3">
                      <input type="email" class="form-control form-control-lg" placeholder="Password" aria-label="Password">
                    </div>
                    <a class="text-center" href="/homeadmin">
                      <button type="button" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Login</button>
                    </a>
                  </form>
                </div>
              </div>
            </div>
             
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-start flex-column">
              <div class="position-relative h-100 m-3 px-7 bg-gradient-primary border-radius-lg d-flex flex-column justify-content-center overflow-hidden">
                <h1 class="mt-5 text-white font-weight-bolder position-relative">TTF</h1>
                <h3 class="text-white position-relative">Tanda Tukar Faktur</h3>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </section>
  </main>

</body>

</html>