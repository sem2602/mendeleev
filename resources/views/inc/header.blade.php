@section('header')

<header class="border border-info">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="navbar-brand ms-3">
            <span href="/">MendeleevPanel</span>
            <span href="/updates">v2.0</span>
        </div>



        <div class="navbar-custom d-lg-none me-2">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsDefault" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse justify-content-between ms-3" id="navbarsDefault">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Главная</a>
                </li>



                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Заказы</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/orders/create">Новый заказ</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="/orders/accepted">Принятые заказы</a></li>
                        <li><a class="dropdown-item" href="/orders/active">Активные заказы</a></li>
                        <li><a class="dropdown-item" href="/orders/cod">Наложенные платежи</a></li>
                        <li><a class="dropdown-item" href="/orders">Все заказы</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="/registers">Реестры</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="/orders/calls">Прозвон заказов</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Платежи</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/payments/privat24">Privat24</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Товары</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/products">Список товаров</a></li>
                        <li><a class="dropdown-item" href="/sets">Список наборов</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="/products/create">Новый товар</a></li>
                        <li><a class="dropdown-item" href="/sets/create">Новый набор</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="/inventory">Инвентаризация</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Прочее</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/marking">Маркировка</a></li>
                        <li><a class="dropdown-item" href="/maxi-marking">Маркировка Maxi</a></li>
                        <li><a class="dropdown-item" href="/clients">Клиенты</a></li>
                        <li><a class="dropdown-item" href="/users">Пользователи</a></li>
                        <li><a class="dropdown-item" href="/blacklist">Чёрный список</a></li>
                        <li><a class="dropdown-item" href="/history">История</a></li>
                        <li><a class="dropdown-item" href="/storage_history">Складская история</a></li>
                        <li><a class="dropdown-item" href="/settings">Настройки</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="navbar-nav me-3">
                <li class="nav-item"><a class="nav-link" href="#">Дмитрий М.</a></li>
                <li class="nav-item"><a class="nav-link" href="/logout">Выйти</a></li>
            </ul>

        </div>

    </nav>

</header>
