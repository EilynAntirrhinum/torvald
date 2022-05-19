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

        <div id="editorjs">

        </div>
    </section>
    <article>
        <p>Раздел 1</p>
        <ul>
            <li>Тема 1</li>
        </ul>
    </article>
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