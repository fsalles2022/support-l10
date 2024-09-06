<div class="container">
    <div class="container p-4">
        <h3 class="display-1 text-center">Em que podemos ajudar?</H3>
        <x-alert />


        <form action="{{ route('supports.store') }}" method="POST">
            @include('admin.supports.partials.form')
        </form>
    </div>
</div>
