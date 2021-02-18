@extends('layouts.app')

@section('content')
<div id="cuerpo_registro">
    <personas-component 
            route-register="{{ route('register') }}" 
            old-name="{{ old('name') }}"
            old-email = "{{ old('email') }}"
            titulo-register = "{{ __('Register') }}"
            titulo-name = "{{ __('Name') }}"
            titulo-email = "{{ __('E-Mail Address') }}"
            titulo-password = "{{ __('Password') }}"
            titulo-confirmar-password = "{{ __('Confirm Password') }}"
    >
    </personas-component>
</div>
@endsection
