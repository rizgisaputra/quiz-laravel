<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <title>Mini Project</title>
  </head>
  <body>
    <header>
      <nav>
          <div class="navbar shadow navbar-expand-lg w-100 border-bottom ">
              <div
                class="container d-flex flex-row justify-content-between w-100 "
              >
                <div class="d-flex flex-row gap-2 align-items-center">
                  <span class="text-dark fs-4 fw-bold ">RIZGI SAPUTRA</span>
                </div>
                <div class="navbar-menu d-flex flex-row">
                  <ul
                    class="text-white d-flex flex-row gap-5 pt-3 align-items-center"
                    style="list-style: none"
                  >
                    <li>
                      <a href="todos.php" style="text-decoration: none; color: black"
                        >Todos</a
                      >
                    </li>
                    <li>
                      <a
                        href="tags_page.php"
                        style="text-decoration: none; color: black"
                        >Tags</a
                      >
                    </li>
                  </ul>
                </div>
                <div class="login d-flex flex-row">
                    <form action="{{ route('login') }}">
                    <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                </div>
              </div>
          </div>
      </nav>
    </header>
    <div class="content container mt-5">
        <div class="add-activity d-flex flex-column gap-3 justify-content-center">
         <span class="fw-bold fs-1 text-dark d-flex justify-content-center " style="letter-spacing: 3px;">YOUR   TODOS</span>
         <div class="add-and-search d-flex flex-row justify-content-between">
         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addActivity" style="width: 7rem;">Add Activity</button>
         <div class="searching ">
         <form action="" method="post" class="d-flex flex-row gap-2">
         <input type="search" placeholder="Search" class="form-control" name="search" id="search" style="width:100%; height: 2rem;">
         <button type="submit" class="btn btn-primary" name="button-search" style="height:2rem;"><i class="bi bi-search text-light"></i></button>
         </form>
        </div>
        <div class="searching-by-date ">
         <form action="" method="post" class="d-flex flex-row gap-2">
         <input type="date" placeholder="Search Date" class="form-control" name="search-by-date" id="search-by-date" style="width:100%; height: 2rem;">
         <button type="submit" class="btn btn-primary" name="button-search-by-date" style="height:2rem;"><i class="bi bi-search text-light"></i></button>
         </form>
        </div>
        <div class="searching-by-tag ">
         <form action="" method="post" class="d-flex flex-row gap-2">
         <select class="form-select" aria-label="Default select example" name="search-by-tag" id="tag">
            <option selected>Select Tag</option>
            <option value="Education">Education</option>
            <option value="Healthy">Healthy</option>
            <option value="Science">Science</option>
        </select>
         <button type="submit" class="btn btn-primary" name="button-search-by-tag" style="height:2rem;"><i class="bi bi-search text-light"></i></button>
         </form>
        </div>
        </div>
         <span class="border-bottom mt-1"></span>
         <div class="list-todo">
           <div class="row d-flex flex-row g-3 justify-content-center">
            <div class="col-lg-3">
              <div class="card position-relative rounded shadow d-flex flex-column" style="height: 10rem; background-color:#edf6f9;">
                <div class="dots d-flex justify-content-between px-2">
                  <form action="" method="post">
                  <div class="check d-flex flex-row gap-2">
                  <input type="hidden" name="idCheck" id="idCheck">
                  <button type="submit" class="btn-outline-primary" name="isDone" id="isDone" style="height: 2rem; width:2rem; margin-top:11px"><i class="bi bi-check2-square text-dark"></i></button>
                  <label for="isDone" style="margin-top:11px; font-size: 20px;">Done</label>
                  </div>
                  </form>
                <button type="button" class="border border-0 bg-transparent" data-bs-toggle="dropdown" aria-expanded="false" style="outline: none !important;">
                <i class="bi bi-three-dots fs-4"></i>
                </button>
                <ul class="dropdown-menu">
                  <li>
                    <span class="dropdown-item">
                      <form action="" method="post">
                         <button type="button" class="border border-0 bg-transparent" data-bs-toggle="modal" data-bs-target="#updateActivity" name="update"><i class="bi bi-pencil text-dark" ></i> Update</button>
                        </form>
                    </span>
                  </li>
                  <li>
                    <span class="dropdown-item">
                      <form action="" method="post">
                        <button type="submit" class="border border-0 bg-transparent " name="delete"><i class=" bi bi-trash3 text-dark"></i> Delete</button>
                      </form>
                    </span>
                  </li>
                </ul>
                </div>
                <span class="text-dark fw-bold fs-4 px-2"> Olahraga </span>
                <div class="time d-flex flex-row g-2 px-2 mt-1">
                <i class="bi bi-calendar-check me-2"></i>
                <span class="fs-6"> 2024-02-02 to 2024-02-019</span>
                </div>
                <span class="border-bottom mt-2"></span>
                <div class="tags px-2">
                  <span class="text-dark fw-bold fs-6">Tags : #Healthy</span>
                </div>
              </div>
            </div>
           </div>
         </div>
            <div class="modal fade" id="addActivity" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Activity</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <form action="" method="post">
                    <div class="d-flex flex-column gap-3">
                        <div class="activity d-flex flex-column gap-1">
                            <label for="activity">Activity</label>
                            <input type="text" id="activity" placeholder="Activity" name="activity" class="form-control">
                        </div>
                        <div class="start-date d-flex flex-column gap-1">
                            <label for="start-date">Start Date</label>
                            <input type="date" id="start-date" name="start-date" class="form-control">
                        </div>
                        <div class="end-date d-flex flex-column gap-1">
                            <label for="end-date">End date</label>
                            <input type="date" id="end-date" name="end-date" class="form-control">
                        </div>
                        <div class="tag d-flex flex-column gap-1">
                        <label for="tag">Select Tag</label>
                        <select class="form-select" aria-label="Default select example" name="search-by-tag" id="tag">
                              <option selected>Select Tag</option>
                              <option value="Education">Education</option>
                              <option value="Healthy">Healthy</option>
                              <option value="Science">Science</option>
                          </select>
                          </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 d-flex" name="add">Save changes</button>
                   </form>
                </div>
                </div>
            </div>
            </div>
        </div>
      <div class="modal fade" id="updateActivity" tabindex="-1" aria-labelledby="updateActivityLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="updateActivityLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="" method="post">
            <div class="d-flex flex-column gap-3">
                <div class="activity d-flex flex-column gap-1">
                    <input type="hidden" name="id" >
                    <label for="activity">Activity</label>
                    <input type="text" id="activity" name="activity" class="form-control" >
                </div>
                <div class="start-date d-flex flex-column gap-1">
                    <label for="start-date">Start Date</label>
                    <input type="date" id="start-date" name="start-date" class="form-control">
                </div>
                <div class="end-date d-flex flex-column gap-1">
                    <label for="end-date">End date</label>
                    <input type="date" id="end-date" name="end-date" class="form-control">
                </div>
                <div class="tag">
                <label for="updateTag">Select Tag</label>
                <select class="form-select" aria-label="Default select example" name="search-by-tag" id="tag">
                    <option selected>Select Tag</option>
                    <option value="Education">Education</option>
                    <option value="Healthy">Healthy</option>
                    <option value="Science">Science</option>
                </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3 d-flex" name="update">Save changes</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>
