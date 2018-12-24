<form action="{{ route('konsultan.store') }}" method="post">
  {{ csrf_field() }}
  <table>
    <tr>
      <td><label>Nama:</label></td>
      <td><input type="text" name="nama"></td>
    </tr>
    <tr>
      <td><label>Alamat:</label></td>
      <td><input type="text" name="alamat"></td>
    </tr>
    <tr>
      <td><label>Jasa:</label></td>
      <td><input type="text" name="jasa"></td>
    </tr>
    <tr>
      <td><label>Email:</label></td>
      <td><input type="text" name="email"></td>
    </tr>
    <tr>
      <td><label>Tarif:</label></td>
      <td><input type="text" name="tarif"></td>
    </tr>
  </table>
  <!-- <label>Rating:</label> -->
  <!-- <input type="text" name="rating"> -->
  <button type="submit">Submit</button>
  <button type="reset">Cancel</button>
</form>