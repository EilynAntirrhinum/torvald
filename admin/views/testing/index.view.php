<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/admin/views/components/header.php"; ?>

<main>
    <section id="torvald-dialogue">
        <img src="/public/img/icons/torvald_icon.svg" alt="Торвальд">
    </section>

    <section id="tests">
        <h3>Оглавление</h3>

        <div>
            <div id="add-test">
                <button id="add-test-btn">+</button>
                <p>Добавить новую тему</p>
            </div>

            <div class="test-inside">
                <p>Name</p>
            </div>
        </div>
    </section>
</main>

<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/admin/views/components/footer.php"; ?>
