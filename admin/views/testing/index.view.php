<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/admin/views/components/header.php"; ?>

<main>
    <section id="torvald-dialogue">
        <img src="/public/img/icons/torvald_icon.svg" alt="Торвальд">
    </section>

    <section id="tests">
        <h3>Тесты</h3>

        <div id="tests-list">
            <div id="add-test">
                <button id="add-test-btn">
                    <a href="/admin/app/controllers/testing/add-test.php">+</a>
                </button>
                <p>Добавить новую тему</p>
            </div>

            <div class="test-inside">
                <p>Name</p>
                <button class="test-btn">
                    <img src="/public/img/icons/elipsis.svg" alt="Редактировать">
                </button>
            </div>
        </div>
    </section>
</main>

<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/admin/views/components/footer.php"; ?>
