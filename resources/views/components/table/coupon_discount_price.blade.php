@php
    if( !empty($data) ){
        $model = $data["model"];
    }
@endphp

@if ( $model->percentage )
    {{ $model->discount_price ?? $model->discount ?? '' }}%
@else
    {{ $model->discount_price ?? $model->discount ?? '' }}
@endif

