@if ($errors->any())
    <div class="alert alert-secondary" role="alert">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
