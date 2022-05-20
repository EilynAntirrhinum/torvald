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
                    <button class="theme-btn" data-bs-toggle="collapse" data-bs-target="#theme-open">
                        <img src="/public/img/icons/elipsis.svg" alt="Редактировать">
                    </button>
                </div>

                <div id="theme-open" class="collapse">
                    <div>
                        <div>
                            <p>Name</p>
                            <button class="theme-btn" data-bs-toggle="collapse" data-bs-target="#theme-open">
                                <img src="/public/img/icons/elipsis.svg" alt="Редактировать">
                            </button>
                        </div>
                        <div>
                            <p>Name</p>
                            <button class="theme-btn" data-bs-toggle="collapse" data-bs-target="#theme-open">
                                <img src="/public/img/icons/elipsis.svg" alt="Редактировать">
                            </button>
                        </div><div>
                            <p>Name</p>
                            <button class="theme-btn" data-bs-toggle="collapse" data-bs-target="#theme-open">
                                <img src="/public/img/icons/elipsis.svg" alt="Редактировать">
                            </button>
                        </div><div>
                            <p>Name</p>
                            <button class="theme-btn" data-bs-toggle="collapse" data-bs-target="#theme-open">
                                <img src="/public/img/icons/elipsis.svg" alt="Редактировать">
                            </button>
                        </div>
                    </div>
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
                <div class="edit-btn-course">
                    <button>
                        <img src="/public/img/icons/elipsis.svg" alt="Редактировать">
                    </button>
                </div>

                <div class="text-course">
                    <p class="header-course">Название курса курса</p>
                    <p class="description-course">Описание курса описание курса описание курса описание курса описание курса
                        описание курса описание курса</p>
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
                    <p class="description-course">Описание курса описание курса описание курса описание курса описание курса
                        описание курса описание курса</p>
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
                    <p class="description-course">Описание курса описание курса описание курса описание курса описание курса
                        описание курса описание курса</p>
                    <p class="time-course">2 часа</p>
                </div>

                <div class="img-course">
                    <img src="/public/img/icons/courses/books.svg">
                </div>
            </div>
        </section>
        <p><a href="#" id="watch-all-link">Посмотреть всё</a></p>
    </main>

<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/views/components/footer.php"; ?>