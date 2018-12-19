<a href="{{ route('konsultan.index') }}">Lihat Data Konsultan</a>
<h1>Data Konsultan {{ $data->nama }}</h1>
<table>
    <tbody>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $data->nama }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $data->alamat }}</td>
        </tr>
        <tr>
            <td>Jasa</td>
            <td>:</td>
            <td>{{ $data->jasa }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{ $data->email }}</td>
        </tr>
        <tr>
            <td>Rating</td>
            <td>:</td>
            <td>{{ $data->rating }}</td>
        </tr>
    </tbody>
</table>