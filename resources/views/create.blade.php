
<form method="POST" action="{{ route('clients.create') }}" enctype="multipart/form-data">

    @csrf
    <label>First Name</label>
    <input type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}">
    @error('first_name')
    <div class="error-message">
        {{ $message }}
    </div>
  @enderror

  <br>
  <label>Last Name</label>
    <input type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}">
    @error('last_name')
    <div class="error-message">
        {{ $message }}
    </div>
  @enderror

  <br>
  <label>Email </label>
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
    @error('email')
    <div class="error-message">
        {{ $message }}
    </div>
  @enderror

  <br>
  <label>Date Profiled </label>
    <input type="date" name="date_profiled" placeholder="Date Profiled" value="{{ old('date_profiled') }}">
    @error('date_profiled')
    <div class="error-message">
        {{ $message }}
    </div>
  @enderror

  <br>
  <label>Primary Counsel ID  </label>
    <input type="text" name="primary_counsel_id" placeholder="Primary Legal Counsel" value="{{ old('primary_counsel_id') }}">
    @error('primary_counsel_id')
    <div class="error-message">
        {{ $message }}
    </div>
  @enderror

  <br>
  <label>Date of Birth </label>
    <input type="date" name="date_of_birth" placeholder="Date of Birth" value="{{ old('date_of_birth') }}">
    @error('date_of_birth')
    <div class="error-message">
        {{ $message }}
    </div>
  @enderror

  <br>
  <label>Choose Profile Image  </label>
    <input type="file" name="profile_image" accept="image/*">
    @error('profile_image')
    <div class="error-message">
        {{ $message }}
    </div>
  @enderror

  <br>
  <label>Case Details  </label>
    <textarea placeholder="case details" name="case_details" value="{{ old('case_details') }}">{{ old('case_details') }}</textarea>
    @error('case_details')
    <div class="error-message">
        {{ $message }}
    </div>
  @enderror

  <br>
    <button type="submit">Submit</button>
</form>
