<table class="table table-hover table-bordered">
    <thead>
        <tr class="alert-light bg-dark">
            <th>Номер</th>
            <th>Заглавие</th>
            {{-- <th>Навигация</th> --}}
        </tr>
    </thead>
    <tbody>
        @foreach ($messages as $message)
            <tr>
                <td>{{ $message->id }}</td>
                <td>{{ $message->content }}</td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr class="alert-light bg-dark">
            <th>Номер</th>
            <th>Заглавие</th>
        </tr>
    </tfoot>
</table>
