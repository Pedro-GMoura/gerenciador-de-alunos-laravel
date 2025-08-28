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