<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/admin/views/components/header.php"; ?>

<main>
    <section id="torvald-dialogue">
        <img src="/public/img/icons/torvald_icon.svg" alt="Торвальд">
    </section>
</main>

<div id="header-test">
    <input type="text" name="header-test" class="input-header-test" placeholder="Название теста">
</div>

<main>
    <section id="test">
        <div class="question">
            <div class="inputs">
                <input type="text" name="question" class="input-question" placeholder="Вопрос">
            </div>
            <div class="radio-answers">
                <div class="radio-answers-inside">
                    <input type="radio" name="radio-answer[]" class="radio-answer">
                    <input type="text" name="input-answer[]" class="input-answer" placeholder="Вариант ответа">
                </div>

                <div class="cbs-inputs-answers-inside">
                    <input type="radio" name="radio-answer[]" class="radio-answer">
                    <input type="text" name="input-answer[]" class="input-answer" placeholder="Вариант ответа">
                </div>

                <div class="cbs-inputs-answers-inside">
                    <input type="radio" name="radio-answer[]" class="radio-answer">
                    <input type="text" name="input-answer[]" class="input-answer" placeholder="Вариант ответа">
                </div>

                <div class="cbs-inputs-answers-inside">
                    <input type="radio" name="radio-answer[]" class="radio-answer">
                    <input type="text" name="input-answer[]" class="input-answer" placeholder="Вариант ответа">
                </div>
            </div>
        </div>
    </section>
</main>

<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/admin/views/components/footer.php"; ?>
