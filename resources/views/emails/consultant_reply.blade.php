@php($itemScount = 0 )

@component('mail::panel')
This is the panel content.
@endcomponent

@component('mail::message')
#  @lang('Hello , This Reply Your Consultant')

@component('mail::table')

|@lang('Reply Your Consultant')|
|:---:|
| @lang('Hi') {{ $consultant['name'] }}  {{ $consultant['reply'] }} |

@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent
