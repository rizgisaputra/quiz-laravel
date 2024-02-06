<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"
    />
    <title>Takehome</title>
  </head>
  <body>
    <header>
      <nav>
        <div class="navbar navbar-expand-lg shadow p-3 mb-5 bg-body rounded fixed-top">
          <div class="container d-flex flex-row justify-content-between">
            <div class="d-flex flex-row gap-2 align-items-center">
              <img
                src="assest/img/download-removebg-preview.png"
                class="img-fluid"
                alt="..."
                style="height: 40px; width: 40px"
              />
              <span style="color: #3a86ff; font-size: 20px" class="fw-bold"
                >Rizgi Saputra</span
              >
            </div>
            <div class="navbar-menu d-flex flex-row">
              <ul
                class="text-white d-flex flex-row gap-5 fw-bold align-items-center"
                style="list-style: none"
              >
                <li>
                  <a
                    href="home.html"
                    style="text-decoration: none; color: #3a86ff"
                    >Home</a
                  >
                </li>
                <li>
                  <a
                    href="about.html"
                    style="text-decoration: none; color: #3a86ff"
                    >About Me</a
                  >
                </li>
                <li>
                  <a
                    href="skills.html"
                    style="text-decoration: none; color: #3a86ff"
                    >Skills</a
                  >
                </li>
                <li>
                  <a
                    href="my-project.html"
                    style="text-decoration: none; color: #3a86ff"
                    >My Projects</a
                  >
                </li>
                <li>
                  <a
                    href="contact-me.html"
                    style="text-decoration: none; color: #3a86ff"
                    >Contact Me</a
                  >
                </li>
              </ul>
            </div>
            <div class="autenthic d-flex flex-row gap-2">
                <form action="{{ route('register') }}">
                    <button type="submit" class="btn btn-outline-primary text-primary">Sign Up</button>
                </form>
                <form action="{{ route('login') }}">
                    <button type="submit" class="btn btn-primary text-light">Login</button>
                </form>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <div class="home mt-5 pt-5">
      <div
        class="container d-flex flex-row justify-content-between"
        style="margin-top: 100px"
      >
        <div class="row">
          <div class="col-lg-6 d-flex flex-column">
            <span
              class="fw-bold text-dark"
              style="font-size: 38px; font-family: sans-serif"
              >Hi There,</span
            >
            <span
              class="fw-bold text-dark"
              style="font-size: 38px; font-family: sans-serif"
              >I am
              <span
                class="fw-bold"
                style="font-family: sans-serif; font-size: 38px; color: #3a86ff"
                >Rizgi Saputra</span
              ></span
            >
            <span class="mt-3"
              >I am interested in developing a harmonies relationship between
              user needs and product capabilities and I am using HTMl, CSS and
              Bootstrap 5 for developing my portofolio</span
            >

            <div class="d-flex flex-row gap-3 mt-3">
              <a href="https://www.facebook.com/?locale=id_ID">
                <div
                  class="facebook rounded-circle"
                  style="background-color: #3a86ff; width: 36px; height: 36px"
                >
                  <img
                    src="assest/img/Facebook.png"
                    class="img-fluid"
                    alt="..."
                    style="padding-left: 13px; padding-top: 7px"
                  />
                </div>
              </a>
              <a
                href="https://www.instagram.com/rizgisaputra_03?igsh=OGQ5ZDc2ODk2ZA=="
              >
                <div
                  class="instagram rounded-circle"
                  style="background-color: #3a86ff; width: 36px; height: 36px"
                >
                  <img
                    src="assest/img/Instagram.png"
                    class="img-fluid"
                    alt="..."
                    style="padding-left: 10px; padding-top: 7px"
                  />
                </div>
              </a>
              <a href="https://www.tiktok.com/@rizzputra03?_t=8if1gJttSXy&_r=1">
                <div
                  class="tiktok rounded-circle"
                  style="background-color: #3a86ff; width: 36px; height: 36px"
                >
                  <div
                    class="logo-tiktok"
                    style="padding-top: 5px; padding-left: 10px"
                  >
                    <i class="bi bi-tiktok" style="color: white"></i>
                  </div>
                </div>
              </a>
              <a href="https://id.linkedin.com/">
                <div
                  class="linkedin rounded-circle"
                  style="background-color: #3a86ff; width: 36px; height: 36px"
                >
                  <img
                    src="assest/img/LinkedIn.png"
                    class="img-fluid"
                    alt="..."
                    style="padding-left: 10px; padding-top: 7px"
                  />
                </div>
              </a>
            </div>
            <button
              type="button"
              class="btn btn-primary mt-5"
              style="width: 150px"
            >
              Read More <i class="bi bi-arrow-right"></i>
            </button>
          </div>
          <div class="col-lg-6" style="padding-left: 50px">
            <img
              src="assest/img/pngtree-a-man-who-works-at-a-computer-png-image_2195281.jpg"
              class="img-fluid rounded"
              alt="..."
              style="height: 400px"
              width="400px"
            />
          </div>
        </div>
      </div>
      <div class="container" style="margin-top: 100px">
        <div class="row d-flex flex-row">
          <div class="col-lg-6">
            <div
              class="box"
              style="width: 350px; height: 400px; margin-left: 120px"
            >
              <img
                src="assest/img/profil.jpg"
                class="img-fluid"
                alt="..."
                style="height: 400px; width: 300px; border-radius: 20px"
              />
            </div>
          </div>

          <div class="col-lg-6 d-flex flex-column gap-3">
            <span
              style="
                color: #3a86ff;
                font-size: 38px;
                font-family: sans-serif;
                font-weight: 700;
              "
              >About Me</span
            >
            <span
              class="mt-3 text-dark"
              style="
                font-size: 18px;
                font-weight: 500;
                text-align: justify;
                font-family: sans-serif;
                line-height: 30px;
              "
              >Hi, my name is Rizgi Saputra, I come from Kebumen, Central Java.
              I was born in Kebumen on February 3 2006 and I am currently 17
              years old. Now I live in Pondok Aren, Bintaro, South Tangerang. I
              am a fresh graduate and am interested in technology and want to
              have a career in technology. Now I am study on Staditek and i have
              get matery for example algoritma, then programing language like
              C++ . Beside that i get matery database especially postgresql and
              now i studying html, css and bootstrap.
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="skills mt-5">
        <div class="container d-flex justify-content-center">
          <div class="col d-flex flex-column gap-4">
            <span
              style="
                color: #3a86ff;
                font-size: 38px;
                font-family: sans-serif;
                font-weight: 700;
              "
              >Skills</span
            >
            <div class="row d-flex flex-row">
              <div class="col-lg-3">
                <div class="card bg-light rounded" style="height: 230px">
                  <div
                    class="title rounded text-center"
                    style="height: 15%; background-color: #ffc300"
                  >
                    <span class="text-dark fs-5 fw-bold">Web Development</span>
                  </div>
                  <span class="text-center pt-4 px-3"
                    >Web development is a process of building and maintaining a
                    website. This work is done behind the scenes with the goal of
                    creating a website that looks slick, and works quickly.</span
                  >
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card bg-light rounded" style="height: 230px">
                  <div
                    class="title rounded text-center"
                    style="height: 15%; background-color: #ffc300"
                  >
                    <span class="text-dark fs-5 fw-bold">Design Grafis</span>
                  </div>
                  <span class="text-center pt-4 px-3"
                    >Graphic design is a method of conveying visual text and
                    images from the communicator to the communicant or recipient
                    of the message.</span
                  >
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card bg-light rounded" style="height: 230px">
                  <div
                    class="title rounded text-center"
                    style="height: 15%; background-color: #ffc300"
                  >
                    <span class="text-dark fs-5 fw-bold">Editing Video</span>
                  </div>
                  <span class="text-center pt-4 px-3"
                    >Video editing is a process of processing images and sound
                    into one complete video. Through this editing process, you
                    will produce a video that matches your wishes.</span
                  >
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card bg-light rounded" style="height: 230px">
                  <div
                    class="title rounded text-center"
                    style="height: 15%; background-color: #ffc300"
                  >
                    <span class="text-dark fs-5 fw-bold">Data Entry</span>
                  </div>
                  <span class="text-center pt-4 px-3"
                    >Data entry is a job whose job is to enter and update data or
                    information into electronic services or databases. Data Entry
                    is an administrative job.</span
                  >
                </div>
              </div>
            </div>
            <span
              class="text-center mt-5"
              style="
                color: #3a86ff;
                font-size: 20px;
                font-family: sans-serif;
                font-weight: 700;
              "
              >My Stack</span
            >
            <div
              class="row d-flex flex-row gap-2 mb-3 justify-content-center"
              style="height: 100px"
            >
              <div class="col-lg-1">
                <div class="html">
                  <img
                    src="assest/img/img-html.png"
                    class="img-fluid"
                    alt="..."
                    style="height: 80px"
                  />
                </div>
              </div>
              <div class="col-lg-1">
                <div class="css">
                  <img
                    src="assest/img/img-css.png"
                    class="img-fluid"
                    alt="..."
                    style="height: 80px"
                  />
                </div>
              </div>

              <div class="col-lg-1">
                <div class="bootstrap">
                  <img
                    src="assest/img/img-bootstrap.jpg"
                    class="img-fluid"
                    alt="..."
                    style="height: 80px"
                  />
                </div>
              </div>
              <div class="col-lg-1">
                <div class="vn">
                  <img
                    src="assest/img/img-vn.png"
                    class="img-fluid"
                    alt="..."
                    style="height: 80px"
                  />
                </div>
              </div>
              <div class="col-lg-1">
                <div class="c++">
                  <img
                    src="assest/img/cpp.png"
                    class="img-fluid"
                    alt="..."
                    style="height: 80px"
                  />
                </div>
              </div>

              <div class="col-lg-1">
                <div class="excel">
                  <img
                    src="assest/img/img-excel.png"
                    class="img-fluid"
                    alt="..."
                    style="height: 80px"
                  />
                </div>
              </div>
              <div class="col-lg-1">
                <div class="picsart">
                  <img
                    src="assest/img/img-picsart.jpg"
                    class="img-fluid"
                    alt="..."
                    style="height: 80px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="my-project mt-5">
        <div class="container d-flex justify-content-center">
           <div class="col d-flex flex-column gap-4">
              <span style="color: #3a86ff; font-size: 38px;" class="fw-bold text-center mb-2">My Projects</span>
               <div class="row d-flex flex-row justify-content-center gap-5">
                   <div class="col-lg-4">
                     <a href="#" style="text-decoration: none; color: black;">
                       <div class="card bg-light rounded" style="width: 369px; height: 270px;">
                           <div class="title bg-dark rounded text-center" style="height: 135px;">
                               <img src="assest/img/warnet.jpg" class="img-fluid" alt="..." style="width: 369px; height: 135px;"/>
                           </div>
                           <span class="text-center fw-bold mt-3">Management Internet Cafes</span>
                           <span class="text-center px-3 mt-3" style="text-align: justify;">This program have purpose is help owner to manage internet cafes</span>
                       </div>
                     </a>
                   </div>
                   <div class="col-lg-4">
                     <a href="#" style="text-decoration: none; color: black;">
                       <div class="card bg-light rounded" style="width: 369px; height: 270px;">
                           <div class="title bg-dark rounded text-center" style="height: 135px;">
                               <img src="assest/img/gojek.jpg" class="img-fluid" alt="..." style="width: 369px; height: 135px;"/>
                           </div>
                           <span class="text-center fw-bold mt-3">System Database Gojek</span>
                           <span class="text-center px-3 mt-3">This program for save all data customer and driver. And customer doing transaction </span>
                       </div>
                       </a>
                   </div>
                   <div class="col-lg-4 mb-4">
                     <a href="#" style="text-decoration: none; color: black;">
                       <div class="card bg-light rounded" style="width: 369px; height: 270px;">
                           <div class="title bg-dark rounded text-center" style="height: 135px;">
                               <img src="assest/img/perpustakaan.jpg" class="img-fluid" alt="..." style="width: 369px; height: 135px;"/>
                           </div>
                           <span class="text-center fw-bold mt-3">System Database Library</span>
                           <span class="text-center px-3 mt-3">With this project, we have check book where available in library and check borrowed book</span>
                       </div>
                       </a>
                   </div>
                   <div class="col-lg-4 mb-4">
                     <a href="#" style="text-decoration: none; color: black;">
                       <div class="card bg-light rounded" style="width: 369px; height: 270px;">
                           <div class="title bg-dark rounded text-center" style="height: 135px;">
                               <img src="assest/img/game.jpg" class="img-fluid" alt="..." style="width: 369px; height: 135px;"/>
                           </div>
                           <span class="text-center fw-bold mt-3">System Game Battlegrounds</span>
                           <span class="text-center px-3 mt-3">We can choose caracter and level enemy in this program. Then we can fight with enemy</span>
                       </div>
                       </a>
                   </div>
               </div>
           </div>
        </div>
       </div>
     </div>
     <div class="contact-me" style="margin-top: 5rem;">
        <div class="container">
          <div class="d-flex flex-column gap-5">
            <div class="row">
              <div class="col-lg-6">
                <img
                  src="assest/img/img-contact-me.png"
                  class="img-fluid"
                  alt="..."
                  style="width: 350px; height: 450px"
                />
              </div>
              <div class="col-lg-6 d-flex flex-column gap-3">
                <span class="mb-3 fw-bold" style="font-size: 38px; color: #3a86ff"
                  >Contact Me</span
                >
                <input
                  type="text"
                  class="form-control"
                  placeholder="Your Name"
                  id="exampleInputName"
                  aria-describedby="Name"
                  style="width: 533px; height: 60px"
                />
                <input
                  type="email"
                  class="form-control"
                  placeholder="Your Email"
                  id="exampleInputEmail"
                  aria-describedby="Email"
                  style="width: 533px; height: 60px"
                />
                <div class="form-floating">
                  <textarea
                    class="form-control"
                    placeholder="Your Message"
                    id="floatingTextarea2"
                    style="width: 533px; height: 149px"
                  ></textarea>
                  <label for="floatingTextarea">Your Message</label>
                </div>
                <button
                  type="button"
                  class="btn btn-primary"
                  style="width: 151px; height: 48px"
                >
                  Submit Message
                </button>
              </div>
            </div>
            <footer>
              <div class="container border-top" style="height: 150px">
                <div class="d-flex flex-row justify-content-between">
                  <div class="col-lg-3 d-flex align-items-center">
                    <div class="d-flex flex-row gap-2 align-items-center">
                      <img
                        src="assest/img/download-removebg-preview.png"
                        class="img-fluid"
                        alt="..."
                        style="height: 40px; width: 40px"
                      />
                      <span
                        style="color: #3a86ff; font-size: 20px"
                        class="fw-bold"
                        >Rizgi Saputra</span
                      >
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="d-flex flex-column gap-2 mt-4">
                      <div class="d-flex flex-row gap-2">
                        <i class="bi bi-telephone"></i>
                        <span>+62 8953-7925-4459</span>
                      </div>
                      <div class="d-flex flex-row gap-2">
                        <i class="bi bi-envelope"></i>
                        <span>rizgisaputra326@gmail.com</span>
                      </div>
                      <div class="d-flex flex-row gap-2">
                        <i class="bi bi-geo-alt"></i>
                        <span>Pondok Aren, South Tangerang</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 d-flex flex-row justify-content-end">
                    <div class="d-flex flex-column gap-2 mt-4">
                      <ul class="list-unstyled">
                        <div class="d-flex flex-column gap-2">
                          <li>
                            <a href="#" style="color: black">Website Terms</a>
                          </li>
                          <li>
                            <a href="#" style="color: black">Privacy Policy</a>
                          </li>
                          <li>
                            <a href="#" style="color: black">Cookies Policy</a>
                          </li>
                        </div>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </footer>
          </div>
        </div>
      </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
