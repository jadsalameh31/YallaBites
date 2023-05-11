<!DOCTYPE html>
<table>
    <thead>
        <tr>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roles as $role)
        <tr>
            <td>{{ $role->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>