<div class="well col-sm-8">
    <h3>Письмо с сайта (вопрос от клиента)</h3>
    <p>ФИО заказчика: <strong>{{$order->dataName}}</strong></p> 
    <p>Емейл: <strong>{{$order->dataEmail}}</strong></p> 

    @if($order->filled('dataSubject'))
    <p>Тема письма: <strong>{{$order->dataSubject}}</strong></p> 
    @endif

    @if($order->filled('dataOrganization'))
    <p>Организация клиента: <strong>{{$order->dataOrganization}}</strong></p> 
    @endif
    
    @if($order->filled('dataPhone'))
    <p>Телефон: <strong>{{$order->dataPhone}}</strong></p> 
    @endif
    <p>Сообщение: <strong>{{$order->dataText}}</strong></p> 
</div>