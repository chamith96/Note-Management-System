@component('mail::message')
# Login Success to NOTE+

Thank you for make note secure with us.

@component('mail::button', ['url' => 'http://localhost:8000/home'])
Go to Note+
@endcomponent

Thanks,<br>
NOTE+ Team.
@endcomponent
