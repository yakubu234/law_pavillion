@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<br>
<form action="{{ route('clients.get') }}">
    <label>Search by Last Name</label>
    <input type="text" name="last_name" placeholder="last name" required><br>

    <input type="submit" name="seacr">
</form>
<br><br>

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
    @foreach ($clients as $client)
            <tr>
                <td>{{ $client->first_name }}</td>
                <td>{{ $client->last_name }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->date_profiled }}</td>
                <td>{{ $client->primary_counsel_id }}</td>
                <td>{{ $client->date_of_birth }}</td>
                @if($client->profile_image)
                    <td><img src="{{ asset('storage/' . $client->profile_image) }}" width="100" height="100bord" alt="Profile Image"></td>
                @else
                    <td>No Image</td>
                @endif
                <td>{{ $client->case_details }}</td>
            </tr>
        @endforeach
    </tbody>

</table>