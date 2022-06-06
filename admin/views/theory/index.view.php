<?php include_once $_SERVER['DOCUMENT_ROOT'].'/views/components/header.php'?>
<main>
    <section>
        <div class="section">
            <input type="text" class="input input-section" name="section_name" placeholder="Название раздела">
<!--            <button class="edit">-->
<!--                &#9998;-->
<!--            </button>-->
        </div>
        <div class="theme">
            <input type="text" class="input input-theme" name="theme_name" placeholder="Название темы">
<!--            <button class="edit">-->
<!--                &#9998;-->
<!--            </button>-->
        </div>
        <iframe id="out_editor" src="/admin/views/theory/editor.php" width="100%">

        </iframe>
    </section>
    <article>
        <p>Раздел 1</p>
        <ul>
            <li>Тема 1</li>
        </ul>
        <p>Раздел 2</p>
        <ul>
            <li>Тема 1</li>
        </ul>
    </article>
    <form method="post" action="/admin/app/theory/upload.php" enctype="multipart/form-data">
        <section class="practice">
            <div class="file">
                <img src="/public/img/icons/practice.svg" alt="file">
                Практика 1
            </div>
            <div class="btns">
                <label class="add">
                    +
                    <input type="file" name="practice" id="input_file">
                </label>
    <!--            <button class="edit">-->
    <!--                &#9998;-->
    <!--            </button>-->
            </div>
        </section>
        <button id="save" name="save"> СОХРАНИТЬ </button>
    </form>
</main>


<?php include_once $_SERVER['DOCUMENT_ROOT'].'/views/components/footer.php'?>