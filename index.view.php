<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/views/components/header.php"; ?>

<main>
    <div class="container mb-4 pb-5">
        <div class="row">
            <div class="col posTorvaldImg">
                <img src="/public/img/icons/icon-person.svg" alt="">
            </div>

            <div class="col posDialogWindow">
                <canvas id="dialogWindow"></canvas>
            </div>
            <p class="fs-5 posTextTrovald">Приветствую, меня зовут Торвальд, я буду твоим спутником на всем твоем сложном пути познания.<br><br>

                Чтобы я смог делиться с тобой своими знаниями тебе необходимо авторизироваться!</p>
            <div class="col posAuth">

                <form class="auth" action="">
                    <div class="input-group mb-4 p-3 sizeBlockAuth">
                        <div class="col">
                            <h3 class="mb-3">АВТОРИЗАЦИЯ</h3>
                            <div>
                                <input class=" col-sm-2 form-control mb-4 borderNone" type="text" placeholder="Логин">
                                <input class=" col-sm-2 form-control mb-4 borderNone" type="password" placeholder="Пароль">
                            </div>
                            <div>
                                <button class="btn btn-light  mt-4 borderNone">ВОЙТИ</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <section class="about-python">
        <p class="header-python">Python</p>
        <p class="text-python">Различные языки программирования обычно доминируют в какой-то отрасли (или нескольких), для работы в которой они хорошо подходят. Но это не значит, что программист ограничен использовать строго определённый инструмент, поэтому любой язык общего назначения, такой как Python, может применять для создания чего-угодно.</p>
    </section>
</main>

<div id="header-courses">
    <h3>Курсы</h3>
</div>

<main>
    <section id="courses">
        <div class="course">
            <div class="text-course">
                <a href="#">
                    <p class="header-course">Название курса курса</p>
                    <p class="description-course">Описание курса описание курса описание курса</p>
                    <p class="time-course">2 часа</p>
                </a>
            </div>

            <div class="img-course">
                <img src="/public/img/icons/courses/books.svg">
            </div>
        </div>
    </section>

    <div class="watch-all-courses">
        <a href="/app/controllers/courses">Посмотреть всё</a>
    </div>
</main>

<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/views/components/footer.php"; ?>

<script src="/public/js/dialogWindow.js"></script>