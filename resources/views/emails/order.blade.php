<div class="well col-sm-8">
    <h3>Письмо с сайта (заказ на товар)</h3>
    <p>ФИО заказчика: <strong>{{$order->dataName}}</strong></p> 
    <p>Емейл: <strong>{{$order->dataEmail}}</strong></p> 
    <p>Телефон: <strong>{{$order->dataPhone}}</strong></p> 
    <p>Комментарий: <strong>{{$order->dataText}}</strong></p> 
    <p>Ссылка на товар: <strong>{{$order->link}}</strong></p> 
    <p>Интересующие допуски: <strong>{{$order->orderString}}</strong></p> 
</div>