
<table border="1">
    <thead>
        <tr>
            <th>First name</th>
            <th>Last Name</th>
            <th>email</th>
            <th>date_profiled</th>
            <th>primary_counsel_id</th>
            <th>date_of_birth</th>
            <th>profile_image</th>
            <th>case_details</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($client as $client_single)
            <tr>
                <td>{{ $client_single->first_name }}</td>
                <td>{{ $client_single->last_name }}</td>
                <td>{{ $client_single->email }}</td>
                <td>{{ $client_single->date_profiled }}</td>
                <td>{{ $client_single->primary_counsel_id }}</td>
                <td>{{ $client_single->date_of_birth }}</td>
                @if($client_single->profile_image)
                    <td><img src="{{ asset('storage/' . $client_single->profile_image) }}" width="100" height="100bord" alt="Profile Image"></td>
                @else
                    <td>No Image</td>
                @endif
                <td>{{ $client_single->case_details }}</td>
            </tr>
        @endforeach
    </tbody>

</table>