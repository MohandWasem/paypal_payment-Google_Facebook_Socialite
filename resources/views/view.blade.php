
<a href="{{route:}}">add</a>
<table>
<thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>address</th>
        <th>priv</th>
    </tr>
</thead>
<tbody>
    @forelse ($admins as $admins)
    <tr>
        <td>{{$id++}}</td>
        <td>{{$admins->name}}</td>
        <td>{{$admins->email}}</td>
        <td>{{$admins->address}}</td>
        <td>{{$admins->priv}}</td>
    </tr>
    @empty

    @endforelse
</tbody>
</table>