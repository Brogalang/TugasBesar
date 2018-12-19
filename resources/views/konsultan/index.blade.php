<table>
<thead>
  <tr>
    <th>No.</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Jasa</th>
    <th>Email</th>
    <th>Rating</th>
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
  </tr>
  @endforeach
</tbody>
</table>