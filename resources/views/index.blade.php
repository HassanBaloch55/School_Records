@extends('layouts.app')
@section('content')
<body>
    <!-- Hero Section -->

        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('storage/images/about.webp') }}" class="img-slider" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="badge badge-danger">Meet with our toper students!</h1>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('storage/images/ds2.jpg') }}" class="img-slider" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="badge badge-danger">Meet with our toper students!</h1>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('storage/images/ds3.jpg') }}" class="img-slider" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="badge badge-danger">Meet with our toper students!</h1>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('storage/images/ds4.jpg') }}" class="img-slider" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="badge badge-danger">Meet with our toper students!</h1>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('storage/images/sd5.jpg') }}" class="img-slider" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="badge badge-danger">Meet with our toper students!</h1>
                </div>
              </div>
            </div>
          </div>

    <!-- Courses Section -->
    <section id="courses" class="py-5">
        <div class="container">
            <h2 class="text-center">Our Courses</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('storage/images/Ms.jpg') }}" class="card-img-top" alt="Course 1">
                        <div class="card-body">
                            <h5 class="card-title  badge badge-warning">MS OFFICE</h5>
                            <br>
                              <details>
                                 <summary><strong>Read More...</strong></summary>
                                 <p>
                                     
                                 </p>
                               </details>
                            <a href="/register" class="">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('storage/images/WEB DESIGN.png') }}" class="card-img-top" alt="Course 2">
                        <div class="card-body">
                            <h5 class="card-title  badge badge-warning">WEB DESIGNING</h5>
                            <details>
                                <summary><strong>Read More...</strong></summary>
                                <p>
                                    Web design involves the planning and creation of websites. It encompasses several aspects, including
                                    webpage layout, content production, and graphic design. This course will cover HTML, CSS, and responsive design
                                    principles, equipping you with the skills needed to create visually appealing and user-friendly websites.
                                </p>
                            </details>
                            <a href="/register" class="">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('storage/images/WEB DEVE.jpg') }}" class="card-img-top" alt="Course 3">
                        <div class="card-body">
                            <h5 class="card-title  badge badge-warning">WEB DEVELOPMENT</h5>
                            <details>
                                <summary><strong>Read More...</strong></summary>
                                <p>
                                    Web development is the process of building and maintaining websites. It involves both front-end
                                    (client-side) and back-end (server-side) development. This course will cover essential technologies
                                    such as HTML, CSS, JavaScript, and server-side programming, enabling you to create dynamic and interactive
                                    web applications.
                                </p>
                            </details>
                            <a href="/register" class="">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="bg-light py-5">
        <div class="container text-center">
            <h2>About Us</h2>
            <p>We are committed to providing quality education that empowers learners to succeed.</p>
        </div>
    </section>


    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center">Contact Us</h2>
            <form action="" method=""  style="width: 50%;">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Write Message:"required></textarea>
                </div>
             <button type="submit" >Send Message</button>
            </form>
        </div>
    </section>
@endsection
