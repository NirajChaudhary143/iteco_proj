<footer class="bg-dark w-100 mt-0 text-light pt-5 pb-1 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <ul class="">
                        <li class="h5 headg">Keep Exploring</li>
                        <div class="underl"></div>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('aboutUs')}}">About Us</a></li>
                        <li><a href="{{route('services')}}">Services</a></li>
                        <!-- <li><a href="">Gallery</a></li> -->
                        <li><a href="{{route('projects')}}">Projects</a></li>
                        <li><a href="{{route('contact.us')}}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <ul class="">
                        <li class="h5 headg">Contact Us</li>
                        <div class="underl"></div>
                        <li>ITECO Nepal (P) Ltd.</li>
                        <li>P.O. Box 2147,90,</li>
                        <li>Panchakanya Marga, Minbhawan</li>
                        <li>Naya Baneshwor, Kathmandu, Nepal</li>

                        <li>Phone :
                            <a href="tel:+977-1-4106776">+977-1-4106776 <i class="fa fa-phone" aria-hidden="true"></i></a>
                        </li>
                        <li>E-mail :  <a href="mailto:iteco@mos.com.np">iteco@mos.com.np <i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12">
                    <ul class="">
                        <li class="h5">Send Us a Message</li>
                        <div class="underl"></div>
                        <form action="{{route('send.mail')}}" method="POST" class="row">
                            @csrf
                            <label for="name" class="form-label col-lg-4">Name</label>
                            <input type="text" name="name" id="name" class="forn-control col-lg-8 mb-1" style="height:30px;">

                            <label for="name" class="form-label col-lg-4">E-mail</label>
                            <input type="email" name="email" id="name" class="forn-control col-lg-8 mb-1" style="height:30px;">

                            <label for="name" class="form-label col-lg-4">Write Message</label>
                            <textarea name="message" id="name" class="textareaf forn-control col-lg-8 mb-1" style="height:70px;"></textarea>
                            <input  type="submit" value="Submit" class="submit_btn form-control">
                        </form>
                    </ul>
                </div>


            </div>
        </div>
        <div class="footUnd"></div>
        <div class="col-md-12 col-lg-12 col-sm-12 text-center py-3 foot">
            © ITECO Nepal (P) Ltd. <span id="year"> </span> All Rights Reserved.
        </div>
    </footer>
    <script src="{{asset('user/js/bootstrap.bundle.min.js')}}" ></script>
    <script src="{{asset('user/js/index.js')}}"></script>
    <script src="{{asset('user/js/projectfilter.js')}}"></script>
    <script>
        // Get references to all the tables
        const transportationTable = document.getElementById('transportation');
        const hydroProjTable = document.getElementById('hydroProj');
        const waterProjTable = document.getElementById('waterProj');
        const otherProjTable = document.getElementById('otherProj');
        const displayAllTable = document.getElementById('displayAll');

        // Get reference to the category select dropdown
        const categorySelect = document.getElementById('categorySelect');

        // Hide all tables except the "Display All" table when the page loads
        transportationTable.style.display = 'none';
        hydroProjTable.style.display = 'none';
        waterProjTable.style.display = 'none';
        otherProjTable.style.display = 'none';

        // Show the "Display All" table by default
        displayAllTable.style.display = 'table';

        // Listen for changes in the category select dropdown
        categorySelect.addEventListener('change', function () {
            // Hide all tables
            transportationTable.style.display = 'none';
            hydroProjTable.style.display = 'none';
            waterProjTable.style.display = 'none';
            otherProjTable.style.display = 'none';
            displayAllTable.style.display = 'none';

            const selectedCategory = this.value;

            // Show the selected table based on the selected category
            if (selectedCategory === '1') {
                transportationTable.style.display = 'table';
            } else if (selectedCategory === '2') {
                hydroProjTable.style.display = 'table';
            } else if (selectedCategory === '3') {
                waterProjTable.style.display = 'table';
            } else if (selectedCategory === '4') {
                otherProjTable.style.display = 'table';
            } else if (selectedCategory === '0') {
                displayAllTable.style.display = 'table';
            }
        });
    </script>

