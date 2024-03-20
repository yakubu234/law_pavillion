@component('mail::message')
@subject('Reminder: Update Your Profile Image at Law Firm X')

Dear {{ $client->first_name }} {{ $client->last_name }},

<p>This is a friendly reminder that we haven't received your profile image yet. Having a profile image helps us better identify and serve you.</p>

<p>Please drop off your passport photograph at our office at your earliest convenience. Alternatively, you can reply to this email with a digital copy (JPG, PNG, etc.).</p>

<p>Thank you for your cooperation.</p>

<p>Sincerely,</p>

<p>Law Firm X Team</p>
@endcomponent
