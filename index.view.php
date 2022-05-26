<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/views/components/header.php"; ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="/public/img/icons/icon-person.svg" alt="">
            </div>
            <div class="col posDialogWindow">
                <canvas id="dialogWindow"></canvas>
            </div>

            <div class="col posAuth">

                <form action="">
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

</main>

<script src="/public/js/dialogWindow.js"></script>
<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/views/components/footer.php"; ?>