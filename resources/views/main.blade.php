<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>User</title>
</head>
<body>
<div class="container">
    <h1>Страница пользователей</h1>

    <h1>Маршрут прохождения данных в Laravel</h1>
    <ul>
        <li>
            <p>Изначально мы попадаем в web.php</p>

            <code>
                Route::get('/main/{id}', 'User@showUser');
            </code>
        </li>
        <li>
            <p>Миграция - это шаблон для создания таблицы базы данных</p>
        </li>
        <li>
            <p>Модель - интерпритатор поступа (генератор запросов) к таблице базы данных</p>

            <p>В ней задается связность таблиц и определяется список и видимость полей, а так же особенности в виде времен модицикации и мягкого удаления</p>
        </li>
        <li>
            <p>Далее запрс поступает в контроллер User и вызывает в нем метод showUser Модели</p>

            <p>!!! Обратите внимание что мы используем подключенную модель UserTable</p>

            <code>
                use App\User as UserTable;
                <pre>
                class User extends Controller
                {
                public function showUser($id)
                {
                $user = UserTable::findOrFail($id);
                $adress = $user->adress;

                return view('main', compact('user', 'adress'));
                }
                }
                </pre>
            </code>
        </li>
        <li>
            <p>И в конце все попадает в шаблонизатор Blade</p>
        </li>
    </ul>


    <h2>user</h2>

    <code>
        {{$user}}
    </code>

    <h2>adress</h2>

    <code>
        {{$adress}}
    </code>


</div>
</body>
</html>
