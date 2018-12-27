


@foreach($data as $datas)
<form action="{{ route('konsultan.update', $datas->id) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <table>
       <tr>
            <td><label>Nama:</label></td>
            <td><input type="text" name="name" value="{{ $datas->nama }}"></td>
       </tr> 
       <tr>
           
            <td><label>Jasa:</label></td>
            <td><input type="text" name="jasa" value="{{ $datas->jasa }}"></td>
       </tr>
       <tr>
           <td><label>Email:</label></td>
           <td><input type="text" name="email" value="{{ $datas->email }}"></td>
       </tr>
        <tr>
           <td><label>Alamat:</label></td>
           <td><input type="text" name="alamat" value="{{ $datas->alamat }}"></td>
       </tr>
        <tr>
           <td><label>Tarif:</label></td>
           <td><input type="text" name="tarif" value="{{ $datas->tarif }}"></td>
        </tr>
    </table>
<!--     <label>Rating:</label>
    <input type="text" name="rating" value="{{ $datas->rating }}"> -->    
    <button type="submit">Submit</button>
    <button type="reset">Cancel</button>
</form>
@endforeach