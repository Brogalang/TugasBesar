
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>New konsultan</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{url('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{url('vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('css/creative.min.css')}}" rel="stylesheet">

<body id="page-top" style="padding:0 margin:0">

    <!-- Navigation -->
    

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">KONSULTAN</h2>
            <p class="section-heading text-white">Daftarkan diri anda sebagai orang yang berjasa</p>
            <hr class="light my-4">

<!-- <form action="{{ route('konsultan.store') }}" method="post">
  {{ csrf_field() }}
  <table align="center">
    <tr>
      <td><label style="color: white">Nama:</label></td>
      <td><input type="text" name="nama"></td>
    </tr>
    <tr>
      <td><label style="color: white">Alamat:</label></td>
      <td><input type="text" name="alamat"></td>
    </tr>
    <tr>
      <td><label style="color: white">Jasa:</label></td>
      <td><input type="text" name="jasa"></td>
    </tr>
    <tr>
      <td><label style="color: white">Email:</label></td>
      <td><input type="text" name="email"></td>
    </tr>
    <tr>
      <td><label style="color: white">Tarif: Rp.</label></td>
      <td><input type="number" name="tarif">,00</td>
    </tr>
    <tr>
      <td><label style="color: white">About Me:</label></td>
      <td><textarea name="tentang"></textarea></td>
    </tr>
  </table> -->

<form action="{{ route('konsultan.store') }}" method="post">
  {{ csrf_field() }}
  <table align="center">
    <tr>
      <td><label style="color: white">Nama:</label></td>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <td><label style="color: white">Jasa:</label></td>
      <td><input type="text" name="jasa"></td>
    </tr>
    <tr>
      <td><label style="color: white">Tarif: Rp.</label></td>
      <td><input type="number" name="tarif">,00</td>
    </tr>
    <tr>
      <td><label style="color: white">Email:</label></td>
      <td><input type="text" name="email"></td>
    </tr>
    <tr>
      <td><label style="color: white">Web:</label></td>
      <td><input type="text" name="web"></td>
    </tr>
    <tr>
      <td><label style="color: white">About Me:</label></td>
      <td><textarea name="tentang"></textarea></td>
    </tr>
<!--     <tr>
      <td><label style="color: white">Foto:</label></td>
      <td><input type="file" id="foto" name="foto" placeholder="Image" class="form-control"></td>
    </tr> -->
  </table>

  <!-- <label>Rating:</label> -->
  <!-- <input type="text" name="rating"> -->
  <button type="submit">Submit</button>
  <button type="reset">Cancel</button>
</form>

          </div>
        </div>
      </div>
    </section>



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>

