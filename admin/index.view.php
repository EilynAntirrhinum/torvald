<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/views/components/header.php"; ?>

    <main>
        <section id="themes">
            <h3>Оглавление</h3>
            <div id="themes-list">
                <div id="add-theme">
                    <div id="add-theme-inside">
                        <button id="add-theme-btn">+</button>
                        <p>Добавить новую тему</p>
                    </div>
                </div>
                <div class="theme">
                    <p>Name</p>
                    <img src="/public/img/icons/elipsis.svg" alt="Редактировать">
                </div>
                <div class="theme">
                    <p>Name</p>
                    <img src="/public/img/icons/elipsis.svg" alt="Редактировать">
                </div>
                <div class="theme">
                    <p>Name</p>
                    <img src="/public/img/icons/elipsis.svg" alt="Редактировать">
                </div>
            </div>
            <p><a href="#" id="watch-all-link">Посмотреть всё</a></p>
        </section>
    </main>

    <div id="header-courses">
        <h3>Уроки</h3>
    </div>

    <main>
        <section id="courses">
            <div id="add-course">
                <button id="add-course-btn">+</button>
            </div>
            <div class="course">
                <img src="/public/img/icons/elipsis.svg" alt="Редактировать">
                <p></p>
                <span></span>
                <sub></sub>
                <img>
            </div>
            <div class="course">

            </div>
            <div class="course">

            </div>
        </section>
    </main>

<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/views/components/footer.php"; ?>