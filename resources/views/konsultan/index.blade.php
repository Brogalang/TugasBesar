<table>
<thead>
  <tr>
    <th>No.</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Jasa</th>
    <th>Email</th>
    <th>Rating</th>
    <th>Option</th>  
  </tr>
</thead>
<tbody>
  @php
    $no = 1;
  @endphp
  @foreach($data as $items)
  <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $items->nama }}</td>
    <td>{{ $items->alamat }}</td>
    <td>{{ $items->jasa }}</td>
    <td>{{ $items->email }}</td>
    <td>{{ $items->rating }}</td>
    <td>
      <form action="{{ route('konsultan.destroy', $items->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <a href="{{ route('konsultan.show',$items->id) }}">Lihat</a>
            <a type="submit" href="{{ route('konsultan.edit',$items->id) }}">Edit</a>
            <button type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
        </form>
    </td>
  </tr>
  @endforeach
</tbody>
</table>