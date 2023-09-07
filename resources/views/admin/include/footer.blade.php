<footer class="footer">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6 mb-lg-0 ">
          <div class="copyright text-center text-sm text-muted text-lg-start">
            © <script>
              document.write(new Date().getFullYear())
            </script>,
            Developed by
            <span class="font-weight-bold">Anil Subedi</span>
          </div>
        </div>
        <div class="col-lg-6">
          <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <li class="nav-item">
              <a href="../../index.html" class="nav-link text-muted" target="_blank">Home</a>
            </li>
            <li class="nav-item">
              <a href="../../aboutus.html" class="nav-link text-muted" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="../../contacts.html" class="nav-link text-muted" target="_blank">Contact Us</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link pe-0 text-muted" target="_blank">License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

</main>
<div class="fixed-plugin">
<a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
  <i class="material-icons py-2">settings</i>
</a>
<div class="card shadow-lg">
  <div class="card-header pb-0 pt-3">
    <div class="float-start">
      <h5 class="mt-3 mb-0">UI Configurator</h5>
    </div>
    <div class="float-end mt-4">
      <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
        <i class="material-icons">clear</i>
      </button>
    </div>
    <!-- End Toggle Button -->
  </div>
  <hr class="horizontal dark my-1">
  <div class="card-body pt-sm-3 pt-0">
    <!-- Sidebar Backgrounds -->
    <div>
      <h6 class="mb-0">Choose Sidebar Color</h6>
    </div>
    <a href="javascript:void(0)" class="switch-trigger background-color">
      <div class="badge-colors my-2 text-start">
        <span class="badge filter bg-gradient-secondary active" data-color="secondary" onclick="sidebarColor(this)"></span>
        <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
        <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
        <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
        <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
        <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
      </div>
    </a>
    <!-- Sidenav Type -->
    <div class="mt-3">
      <h6 class="mb-0">Sidenav Type</h6>
    </div>
    <div class="d-flex">
      <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
      <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
      <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
    </div>
    <!-- Navbar Fixed -->
    <div class="mt-3 d-flex">
      <h6 class="mb-0">Navbar Fixed</h6>
      <div class="form-check form-switch ps-0 ms-auto my-auto">
        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
      </div>
    </div>
    <hr class="horizontal dark my-3">
    <div class="mt-2 d-flex">
      <h6 class="mb-0">Light / Dark</h6>
      <div class="form-check form-switch ps-0 ms-auto my-auto">
        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
      </div>
    </div>
    
    </div>
  </div>
</div>
</div>
<!--   Core JS Files   -->
<script src="{{asset('admin/js/core/popper.min.js')}}"></script>
<script src="{{asset('admin/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script>
var win = navigator.platform.indexOf('Win') > -1;
if (win && document.querySelector('#sidenav-scrollbar')) {
  var options = {
    damping: '0.5'
  }
  Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
}



const image = document.querySelector("input[name='image']")
const file = image.files[0]
const fileName = file.name
const fileSize = file.size
const fileType = file.type
</script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="{{asset('admin/js/material-dashboard.min.js?v=3.1.0')}}"></script>
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

</body>
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

<script>
  ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .then( editor => {
                  console.log( editor );
          } )
          .catch( error => {
                  console.error( error );
          } );
</script>
<script>
            ClassicEditor
          .create( document.querySelector( '#projectDesc' ) )
          .then( editor => {
                  console.log( editor );
          } )
          .catch( error => {
                  console.error( error );
          } );
</script>
</html>