<?php include_once $_SERVER['DOCUMENT_ROOT'].'/views/components/header.php'?>
<main>
    <section>
        <div class="section">
            <span>Название раздела</span>
            <button class="edit">
                &#9998;
            </button>
        </div>
        <div class="theme">
            <span>Название темы</span>
            <button class="edit">
                &#9998;
            </button>
        </div>
<!--        <div id="out_editor">-->
            <div id="editorjs">

            </div>
<!--        </div>-->

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
            Практика 1
        </div>
        <div class="btns">
            <button class="add">
                +
            </button>
            <button class="edit">
                &#9998;
            </button>
        </div>

    </section>
</main>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/simple-image@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
<!--<script src="/public/js/editorJS.js" ></script>-->
<script>
    var editor = new EditorJS({
        holder: 'editorjs',
        tools:{
            header: Header,
            image: SimpleImage,
        }
    });
</script>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/views/components/footer.php'?>