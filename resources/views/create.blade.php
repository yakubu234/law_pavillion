
<form method="POST" action="{{ route('clients.create') }}" enctype="multipart/form-data">

@if ($errors->any())
    <div class="error-container">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    @csrf

    <input type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}">
    @error('first_name')
    <div class="error-message">
        {{ $message }}
    </div>
  @enderror

  <br>
    <input type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}">
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
    <input type="date" name="date_profiled" placeholder="Date Profiled" value="{{ old('date_profiled') }}">
    <input type="text" name="primary_counsel_id" placeholder="Primary Legal Counsel" value="{{ old('primary_counsel_id') }}">
    <input type="date" name="date_of_birth" placeholder="Date of Birth" value="{{ old('date_of_birth') }}">
    <input type="file" name="profile_image" accept="image/*">
    <textarea placeholder="case details" name="case_details" value="{{ old('case_details') }}">{{ old('case_details') }}</textarea>
    <button type="submit">Submit</button>
</form>
