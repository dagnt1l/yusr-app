@if ($errors->any())
    <div class="alert">
        <div class="space-y-2">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    </div>
@endif


@if(session('success'))
<div class="alert">
    <div class="space-y-2">
        @foreach (session('success') as $success)
            <p>{{ $success }}</p>
        @endforeach
    </div>
</div>
@endif