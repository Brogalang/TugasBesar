@foreach($data as $datas)
<form action="{{ route('konsultan.update', $datas->id) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <label>Nama:</label>
    <input type="text" name="nama" value="{{ $datas->nama }}">
    <label>Alamat:</label>
    <input type="text" name="alamat" value="{{ $datas->alamat }}">
    <label>Jasa:</label>
    <input type="text" name="jasa" value="{{ $datas->jasa }}">
    <label>Email:</label>
    <input type="text" name="email" value="{{ $datas->email }}">
    <label>Tarif:</label>
    <input type="text" name="tarif" value="{{ $datas->tarif }}">
    <label>Rating:</label>
    <input type="text" name="rating" value="{{ $datas->rating }}">
    <button type="submit">Submit</button>
    <button type="reset">Cancel</button>
</form>
@endforeach