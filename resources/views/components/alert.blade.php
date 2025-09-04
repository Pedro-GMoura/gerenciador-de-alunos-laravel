@if(session('success'))
<div class="alart-success">
    {{session('success')}}
</div>

@endif
@if(session('error'))
<div class="alart-error">
    {{session('error')}}
</div>
@endif

@if ($errors->any())
    <div class="alart-error">
        @foreach ($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
</div>
@endif