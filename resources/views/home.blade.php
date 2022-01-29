<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-router@3.5.2/dist/vue-router.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>

    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        rel="stylesheet"
    />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Course</title>

    <style>
        .open-tinybox {
            display: inline-block;
            cursor: pointer;
            margin: 5px;
            width: 100px;
        }

        .button1{
            width: 225px;
            height: 98px;
            background-image: url(/images/button1.png);
        }

        .button2{
            width: 224px;
            height: 98px;
            background-image: url(/images/button2.png);
        }

        .button3{
            width: 180px;
            height: 123px;
            background-image: url(/images/buttonok.png);
        }

        .button4{
            min-width: 81px;
            min-height: 81px;
            background-image: url(/images/sert.png);
        }

        .button5{
            min-width: 48px;
            min-height: 48px;
            background-image: url(/images/back.png);
        }

        .button1:hover{
            width: 225px;
            height: 98px;
            background-image: url(/images/buttonh.png);
        }

        .button2:hover{
            width: 224px;
            height: 98px;
            background-image: url(/images/button2h.png);
        }

        .button3:hover{
            width: 180px;
            height: 123px;
            background-image: url(/images/buttonokh.png);
        }

        .button5:hover{
            width: 48px;
            height: 48px;
            background-image: url(/images/backh.png);
        }

        .menu:hover{
            background-color: #00f3f3;
        }

        .elem {
            overflow: auto;
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .elem::-webkit-scrollbar {
            width: 0;
            height: 0;
        }
    </style>
</head>

<body>

<div id="app">
    <!-- отображаем тут компонент, для которого совпадает маршрут -->
    <router-view></router-view>
</div>

<!-- Tinybox -->
<script defer src="https://cdn.jsdelivr.net/npm/vue-tinybox@1.3/dist/tinybox.umd.js"></script>

<script src="js/course.vue.js"></script>
<script src="js/main.vue.js"></script>

<script>
    // 1. Определяем компоненты для маршрутов.
    // Они могут быть импортированы из других файлов

    Vue.use(VueRouter);

    Vue.component('Main', Main);
    Vue.component('Course', Course);

    // 2. Определяем несколько маршрутов
    // Каждый маршрут должен указывать на компонент.
    // "Компонентом" может быть как конструктор компонента, созданный
    // через `Vue.extend()`, так и просто объект с опциями компонента.
    // Мы поговорим о вложенных маршрутах позднее.
    const routes = [
        { path: '/', component: Main },
        { path: '/course', component: Course }
    ];

    // 3. Создаём экземпляр маршрутизатора и передаём маршруты в опции `routes`
    // Вы можете передавать и дополнительные опции, но пока не будем усложнять.
    const router = new VueRouter({
        routes: routes,
        mode: 'history',
        base: '/'
    });

    // 4. Создаём и монтируем корневой экземпляр приложения.
    // Убедитесь, что передали экземпляр маршрутизатора в опции
    // `router`, чтобы позволить приложению знать о его наличии.
    const app = new Vue({
        router,
    }).$mount('#app');

    // Всё, приложение работает! ;)

</script>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
