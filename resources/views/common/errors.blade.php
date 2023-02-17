@if (count($errors) > 0)
    <!-- Список ошибок формы -->
    <div class="alert alert-danger">
        <div>Упс! Что-то пошло не так!</div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif