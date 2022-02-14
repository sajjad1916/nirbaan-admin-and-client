<livewire:scripts />

@livewireChartsScripts
<x-livewire-alert::scripts />
{{-- @bukScripts(true) --}}
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/init-alpine.js') }}"></script>
<script src="{{ asset('js/easymde.min.js') }}"></script>
<script src="{{ asset('js/privacy.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<!-- <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>  -->
<x-livewire-alert::flash />

@include('layouts.partials.notification')