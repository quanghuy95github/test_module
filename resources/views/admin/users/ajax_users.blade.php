@forelse($users as $user )
    <tr role="row" class="odd">
        <td class="sorting_1">{{ $user['full_name'] }}</td>
        <td>{{ $user['role']['name'] }}</td>
        <td>{{ $user['email'] }}</td>
        <td>{{ $user['phone'] }}</td>
        <td>{{ $user['address'] }}</td>
        <td>
            <a href=""><i class="fa fa-fw fa-eye"></i></a>
            <a href=""><i class="fa fa-fw fa-close"></i></a>
            <a href=""><i class="fa fa-fw fa-trash"></i></a>
        </td>
    </tr>
@empty
    <p>This page not data</p>
@endforelse