@component('mail::message')
# Заявка с сайта endi.kz

Дата создания: {{now()}}

@component('mail::table')
    | ФИО       | Телефон         | Сообщения  |
    | ------------- |:-------------:| --------:|
    | {{$data['name']}}      | {{$data['phone']}}       | {{$data['message']}}      |
@endcomponent

С уважением ,<br>
{{ config('app.name') }}
@endcomponent
