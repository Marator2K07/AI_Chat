<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <section style="background-color: #eee;">
    <div class="container py-5">

      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-7 col-xl-8">

          <ul class="list-unstyled">
            <li class="d-flex justify-content-between mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
                class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
              <div class="card">
                <div class="card-header d-flex justify-content-between p-3">
                  <p class="fw-bold mb-0">You</p>
                  <p class="text-muted small mb-0"><i class="far fa-clock"></i> {{ $message->created_at->diffForHumans() }}</p>
                </div>
                <div class="card-body">
                  <p class="mb-0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.
                  </p>
                </div>
              </div>
            </li>
            <li class="d-flex justify-content-between mb-4">
              <div class="card w-100">
                <div class="card-header d-flex justify-content-between p-3">
                  <p class="fw-bold mb-0">Lara Croft</p>
                  <p class="text-muted small mb-0"><i class="far fa-clock"></i> 13 mins ago</p>
                </div>
                <div class="card-body">
                  <p class="mb-0">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                    laudantium.
                  </p>
                </div>
              </div>
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp" alt="avatar"
                class="rounded-circle d-flex align-self-start ms-3 shadow-1-strong" width="60">
            </li>
            <li class="d-flex justify-content-between mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
                class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
              <div class="card">
                <div class="card-header d-flex justify-content-between p-3">
                  <p class="fw-bold mb-0">Brad Pitt</p>
                  <p class="text-muted small mb-0"><i class="far fa-clock"></i> 10 mins ago</p>
                </div>
                <div class="card-body">
                  <p class="mb-0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.
                  </p>
                </div>
              </div>
            </li>
            <li class="bg-white mb-3">
              <div class="form-outline">
                <textarea class="form-control" id="textAreaExample2" rows="4"></textarea>
                <label class="form-label" for="textAreaExample2">Message</label>
              </div>
            </li>
            <button type="button" class="btn btn-info btn-rounded float-end">Send</button>
          </ul>

        </div>

      </div>

    </div>
  </section>
</body>

</html>