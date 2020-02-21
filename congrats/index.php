<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <meta charset="utf-8" />
    <title>Поздравление</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" property="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" property="stylesheet" href="assets/css/main.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap&subset=cyrillic" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <div class="header">
        <div class="header__content">
            
        </div>
    </div>
    <!-- /Header -->

    <!-- Страница -->
    <div class="section main">
        <div class="inner-block">
            <h1 class="title">Заголовок</h1>
            <p class="text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
            <div class="comments-wrap">
                <ul>
                    <li>
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum
                        <div class="answer">Ответить</div>
                    </li>

                    <ul>
                        <li>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum
                            <div class="answer">Ответить</div>
                        </li>
                    </ul>
                </ul>
            </div>
            <div class="modal-form">
                <form action="addComment.php" method="post">
                    <p>Имя</p>
                    <input class="input" type="text" name="name">
                    <p>Комментарий</p>
                    <textarea class="textarea" name="comment" rows="5"></textarea>
                    <button class="button" type="submit">Отправить</button>
                </form>
            </div>
            <div class="form-wrap">
                <form action="addAnswer.php" method="post">
                    <p>Имя</p>
                    <input class="input" type="text" name="name">
                    <p>Комментарий</p>
                    <textarea class="textarea" name="comment" rows="5"></textarea>
                    <button class="button" type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /Страница -->

    <!-- Footer -->
    <div class="footer">
        <div class="footer__content">
            <div class="footer__left">
                &copy; Аналитикум плюс, 2019
            </div>
        </div>
    </div>
    <!-- /Footer -->
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
</body>
</html>