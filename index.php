<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="assets/img/aws.png" />

  <title>AWS S3</title>
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
  <div class="container-fluid">

    <div class="row d-flex justify-content-center mt-5">
      <div id="respuesta"></div>
      <div class="col-12 col-lg-6 mb-3">
        <div class="card">
          <div class="card-header py-2">
            <img src="assets/img/aws.png" width="40" height="30" /> <b> Select file to uploads to Amazon Web Service</b>
          </div>
          <div class="card-body">
            <div class="row g-4">
              <form action="" method="POST" id="uploadFile" enctype="multipart/form-data">
                <div class="input-group mb-3">
                  <label class="input-group-text" for="file">Upload</label>
                  <input class="form-control" type="file" id="files" name="files[]" multiple />
                </div>

                <div class="d-grid">
                  <button type="submit" class="btn btn-outline-primary">Upload file to AWS</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="card">
          <div class="card-header"></div>
          <div class="card-body">
            <table class="table table-hover table-sm">
              <tr>
                <th>Name</th>
                <th>Modified</th>
                <th>Size</th>
                <th>Owner</th>
                <th class="text-center">Action</th>
              </tr>
              <tbody id="tablaFiles">

              </tbody>
            </table>
            <div id="spinner">
              <div class="sk-cube-grid animate__animated animate__fadeIn">
                <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="app/script.js"></script>
</body>

</html>