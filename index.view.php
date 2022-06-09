<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/views/components/header.php"; ?>

<main>

</main>

<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/views/components/footer.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="/public/img/icons/icon-person.svg" alt="">
            </div>

            <div class="col posDialogWindow">
                <canvas id="dialogWindow"></canvas>
            </div>
            <p class="fs-5 posTextTrovald">Приветствую, меня зовут Торвальд, я буду твоим спутником на всем твоем сложном пути познания. <br><br>

                Чтобы я смог делиться с тобой своими знаниями тебе необходимо авторизироваться!</p>
            <div class="col posAuth">

                <form class="auth" action="">
                    <div class="input-group mb-4 p-3 sizeBlokAuth">
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
    <div class="container textDiv">
        <p class="fs-2 colorOrange">Python</p>
        <p class=" fs-5">Различные языки программирования обычно доминируют в какой-то отрасли (или нескольких), для работы в которой они хорошо подходят. Но это не значит, что программист ограничен использовать строго определённый инструмент, поэтому любой язык общего назначения, такой как Python, может применять для создания чего-угодно.</p>
    </div>
    <div class="colorBlock textDiv">
        <p class="fs-2">Курсы</p>
    </div>
</main>


<script src="/public/js/dialogWindow.js"></script>
<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/views/components/footer.php"; ?>
