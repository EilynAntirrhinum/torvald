<?php include_once $_SERVER['DOCUMENT_ROOT'].'/views/components/header.php'?>
<main>
    <form method="post" enctype="multipart/form-data">
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
        <textarea id="mytextarea" name="content">

        </textarea>
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

        <section class="practice">
            <div class="file">
                <img src="/public/img/icons/practice.svg" alt="file">
                <input type="text" id="pr_name" class="input" name="pr_name" placeholder="Название практики" size="50">
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
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea',
            plugins: [
                'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
                'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
                'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
            ],
            toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
                'alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
        });
    </script>
</main>


<?php include_once $_SERVER['DOCUMENT_ROOT'].'/views/components/footer.php'?>