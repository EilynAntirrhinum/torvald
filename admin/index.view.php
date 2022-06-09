<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/admin/views/components/header.php"; ?>

    <main>
        <section id="themes">
            <h3>Оглавление</h3>
            <div id="themes-list">
                <div id="add-section">
                    <div id="add-section-inside">
                        <form method="post">
                            <button id="add-section-btn" name="add-section-btn">
                                <a href="/admin/app/controllers/theory/">+</a>
                            </button>
                        </form>
                        <p>Добавить новый раздел</p>
                    </div>
                </div>
                <div class="section">
                    <p>Name</p>
                    <button class="section-btn" data-bs-toggle="collapse" data-bs-target="#theme-open">
                        <img src="/public/img/icons/elipsis.svg" alt="Редактировать">
                    </button>
                </div>

                <div id="theme-open" class="collapse">
                    <div>
                        <div id="add-theme">
                            <button id="add-theme-btn">
                                <a href="#">+</a>
                            </button>
                            <p>Добавить новую тему</p>
                        </div>

                        <div class="theme-inside">
                            <p>Name</p>

                            <button class="theme-btn" data-bs-toggle="collapse" data-bs-target="#theme-open">
                                <a href="#">
                                    <img src="/public/img/icons/elipsis.svg" alt="Редактировать">
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div id="header-courses">
        <h3>Уроки</h3>
    </div>

    <main>
        <section id="courses">
            <div id="add-course">
                <button id="add-course-btn">
                    <a href="#">+</a>
                </button>
            </div>

            <div class="course">
                <div class="edit-btn-course">
                    <button>
                        <img src="/public/img/icons/elipsis.svg" alt="Редактировать">
                    </button>
                </div>

                <div class="text-course">
                    <p class="header-course">Название курса курса</p>
                    <p class="description-course">Описание курса описание курса описание курса</p>
                    <p class="time-course">2 часа</p>
                </div>

                <div class="img-course">
                    <img src="/public/img/icons/courses/books.svg">
                </div>
            </div>

            <div class="course">
                <div class="edit-btn-course">
                    <button>
                        <img src="/public/img/icons/elipsis.svg" alt="Редактировать">
                    </button>
                </div>

                <div class="text-course">
                    <p class="header-course">Название курса курса</p>
                    <p class="description-course">Описание курса описание курса описание курса</p>
                    <p class="time-course">2 часа</p>
                </div>

                <div class="img-course">
                    <img src="/public/img/icons/courses/books.svg">
                </div>
            </div>

            <div class="course">
                <div class="edit-btn-course">
                    <button>
                        <img src="/public/img/icons/elipsis.svg" alt="Редактировать">
                    </button>
                </div>

                <div class="text-course">
                    <p class="header-course">Название курса курса</p>
                    <p class="description-course">Описание курса описание курса  описание курса</p>
                    <p class="time-course">2 часа</p>
                </div>

                <div class="img-course">
                    <img src="/public/img/icons/courses/books.svg">
                </div>
            </div>
        </section>
    </main>

<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/admin/views/components/footer.php"; ?>