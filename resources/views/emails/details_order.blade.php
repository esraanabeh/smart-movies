
@php($itemScount = 0 )

@component('mail::panel')
This is the panel content.
@endcomponent

@component('mail::message')
#  Hello , This Your Order

@component('mail::table')

|Order Code|Order Status|Order Address|
|:---:|:---:|:---:|:---:|:---:|
| {{ $order['id'] }} | {{ $order['status'] }} | {{ $order->address['name'] ." ". $order->address['area'] ." ". $order->address['block'] }} | 


|Order Details|
|:------------:|

|Item Code|Product Name|Product Color|Product Size|
   |:---:|:---:|:---:|:---:|
@forelse ($items as $item)
    @php($itemScount += $item['quantaty'])
| {{ $item['id'] }} |  {{ $item->product['en_name'] }} | {{ $item->color ? $item->color->en_name : 'No Color'}}|{{ $item->size ? $item->size->en_name : 'No Size'}}|
@empty
    |{{__('Not Found Any Product')}}|
@endforelse

|Total Stock Count |Total Price|
|:---:|:---:|
|{{$itemScount}}|{{ $order['total_price'] }} |

@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent



