<form action="{{ route('konsultan.store') }}" method="post">
  {{ csrf_field() }}
  <label>Nama:</label>
  <input type="text" name="nama">
  <label>Alamat:</label>
  <input type="text" name="alamat">
  <label>Jasa:</label>
  <input type="text" name="jasa">
  <label>Email:</label>
  <input type="text" name="email">
  <label>Tarif:</label>
  <input type="text" name="tarif">
  <!-- <label>Rating:</label> -->
  <!-- <input type="text" name="rating"> -->
  <button type="submit">Submit</button>
  <button type="reset">Cancel</button>
</form>