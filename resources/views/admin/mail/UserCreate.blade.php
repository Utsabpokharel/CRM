@component('mail::message')
# Introduction

<h2>Hello Valued Employee,<h2>
This is to notify that new user has been created.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
