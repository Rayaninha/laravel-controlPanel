        <!DOCTYPE html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

            <title>Processo Seletivo</title>

            <!-- Fonts -->
            <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        </head>
        <body>
            <div class="container-sm">
                <br>
                <h1>User</h1>
                <div class="accordion" id="accordionUser">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="badge bg-success text-wrap" style="width: 6rem;">POST</div>
                                <b class="p-2">/user</b>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionUser">
                            <div class="accordion-body">
                                <form action="/createuser" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="username" aria-describedby="username" name="username" placeholder="username">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="password">
                                    </div>
                                    <button type="submit" class="btn btn-dark">Submit</button>
                                </form>
                                <br>
                                @dump($errors)
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="badge bg-primary text-wrap" style="width: 6rem;">GET</div>
                                <b class="p-2">/user</b>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionUser">
                            <div class="accordion-body">
                                <form action="/selectuser" method="GET">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="uuid" aria-describedby="uuid" name="uuid" placeholder="uuid">
                                    </div>
                                    <button type="submit" class="btn btn-dark">Fetch</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <div class="badge bg-primary text-wrap" style="width: 6rem;">GET</div>
                            <b class="p-2">/user</b>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Fecth all users</p>
                        <a href="/selectusers" type="button" class="btn btn-dark">Fetch</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heaadingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <div class="badge bg-warning text-wrap" style="width: 6rem;">PUT</div>
                    <b class="p-2">/user</b>
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionUser">
              <div class="accordion-body">
                <form action="/updateuser" method="PUT">
                  @csrf
                  <div class="mb-3">
                    <input type="text" class="form-control" id="uuid" aria-describedby="uuid" name="uuid" placeholder="uuid user">
                  </div>
                  <div class="mb-3">
                    <input type="text" class="form-control" id="username" aria-describedby="username" name="username" placeholder="username">
                  </div>
                  <div class="mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="password">
                  </div>
                  <button type="submit" class="btn btn-dark">Submit</button>
                </form>
                <br>
                @dump($errors)
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            <div class="badge bg-danger text-wrap" style="width: 6rem;">DELETE</div>
            <b class="p-2">/user</b>
        </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionUser">
      <div class="accordion-body">
        <form action="/deleteuser" method="POST">
          @csrf @method('DELETE')
          <div class="mb-3">
            <input type="text" class="form-control" id="uuid" aria-describedby="uuid" name="uuid" placeholder="uuid">
          </div>
          <button type="submit" class="btn btn-dark">Delete</button>
        </form>
    </div>
    </div>
    </div>
    </div>

    <br>
    <h1>Articles</h1>
    <div class="accordion" id="accordionArticles">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingSix">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
            <div class="badge bg-success text-wrap" style="width: 6rem;">POST</div>
            <b class="p-2">/articles</b>
        </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionArticles">
      <div class="accordion-body">
        <form action="/createarticle" method="POST">
          @csrf
          <div class="mb-3">
            <input type="text" class="form-control" id="uuid" aria-describedby="uuid" name="uuid" placeholder="uuid user">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="title" aria-describedby="title" name="title" placeholder="title">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="resume" name="resume" placeholder="resume">
          </div>
          <div class="mb-3">
            <textarea type="text" class="form-control" id="text" name="text" placeholder="text"></textarea>
            
          </div>
          <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
    </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingSeven">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
            <div class="badge bg-primary text-wrap" style="width: 6rem;">GET</div>
            <b class="p-2">/articles</b>
        </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionArticles">
      <div class="accordion-body">
        <form action="/selectarticle" method="GET">
          @csrf
          <div class="mb-3">
            <input type="text" class="form-control" id="uuid" aria-describedby="uuid" name="uuid" placeholder="uuid">
          </div>
          <button type="submit" class="btn btn-dark">Fetch</button>
        </form>
    </div>
    </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingEight">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
            <div class="badge bg-primary text-wrap" style="width: 6rem;">GET</div>
            <b class="p-2">/articles</b>
        </button>
    </h2>
    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionArticles">
      <div class="accordion-body">
        <p>Fecth all articles</p>
        <a href="/selectarticles" type="button" class="btn btn-dark">Select All</a>
    </div>
    </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingNine">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
            <div class="badge bg-warning text-wrap" style="width: 6rem;">PUT</div>
            <b class="p-2">/articles</b>
        </button>
    </h2>
    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionArticles">
      <div class="accordion-body">
        <form action="/updatearticle" method="PUT">
          @csrf
          <div class="mb-3">
            <input type="text" class="form-control" id="uuid" aria-describedby="uuid" name="uuid" placeholder="uuid article">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="title" aria-describedby="title" name="title" placeholder="title">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="resume" name="resume" placeholder="resume">
          </div>
          <div class="mb-3">
            <textarea type="text" class="form-control" id="text" name="text" placeholder="text"></textarea>
            
          </div>
          <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
    </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTen">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
            <div class="badge bg-danger text-wrap" style="width: 6rem;">DELETE</div>
            <b class="p-2">/articles</b>
        </button>
    </h2>
    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionArticles">
      <div class="accordion-body">
        <form action="/deletearticle" method="POST">
          @csrf @method('DELETE')
          <div class="mb-3">
            <input type="text" class="form-control" id="uuid" aria-describedby="uuid" name="uuid" placeholder="uuid">
          </div>
          <button type="submit" class="btn btn-dark">Delete</button>
        </form>
    </div>
    </div>
    </div>
    </div>            
    <br>
    </div>
    </body>
    </html>
