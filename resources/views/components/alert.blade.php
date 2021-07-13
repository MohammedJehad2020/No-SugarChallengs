@if (session()->has('success'))
<div class="btn btn-lg btn-block btn-outline-success mb-2">
    {{ session()->get('success') }}
</div>
@endif