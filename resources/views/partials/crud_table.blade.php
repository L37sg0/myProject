<table class="table table-hover table-bordered">
    <thead>
        <tr class="alert-light bg-dark">
            <th>Номер</th>
            <th>Заглавие</th>
            <th>Навигация</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pages as $page)
            <tr>
                <td>{{ $page->id }}</td>
                <td>{{ $page->title }}</td>
                <td>{{ $page->slug }}</td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr class="alert-light bg-dark">
            <th>Номер</th>
            <th>Заглавие</th>
            <th>Навигация</th>
        </tr>
    </tfoot>
</table>
