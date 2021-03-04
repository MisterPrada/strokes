@component('mail::panel')
    <h3>Новое сообщение: "Контакты"</h3>
@endcomponent
<div>
    <b>Имя:</b> {{ $form->name }} <br>
    <b>Email:</b> {{ $form->email }} <br>
    <b>Сообщение:</b> {{ $form->message }} <br>
</div>
