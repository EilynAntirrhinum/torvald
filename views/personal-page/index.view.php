<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/views/components/header.php"; ?>

<main>
    <div class="mb-3" id="header-courses">
        <h3>Группа: 363/б
        </h3>
    </div>
    <div class="row flex m-0 d-flex justify-content-between">
        <div class="block-statistic"></div>
        <div class="group-fix ">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="btn">БВ-363/б</button>
                <button class="btn">СА-123/к</button>
                <button class="btn">ВБ-423/к</button>
            </div>
        </div>
    </div>
</main>

<main>
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="background-color: white ;">
            <p class="fs-5 p-2 text-center text-decoration-underline" style="background-color: #AB98FA;">Темы</p>
            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">линейные алгоритмы</button>
            <button class="nav-link " id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">массивы</button>
            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Тема 3</button>
            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Тема 4</button>
        </div>
        <div class="tab-content w-100" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <table class="table fs-5 ">
                    <thead>
                        <tr>
                            <td scope="col">ФИО студента</td>
                            <td scope="col">Оценка за практику</td>
                            <td scope="col">Оценка за тест</td>
                            <td scope="col">Комментарий</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Антонов Василий Сергеевич</td>
                            <td class="">3</td>
                            <td class="">4</td>
                            <td class="" aria-placeholder="Добавить комментарий"></td>
                        </tr>
                        <tr>
                            <td>Бердинскийх Марк Львович</td>
                            <td class="">3</td>
                            <td class="">4</td>
                            <td class="" aria-placeholder="Добавить комментарий">
                                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                                    <img src="/public/img/icons/chat-left.svg" alt="">
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Джинов Сапфир Абдулович</td>
                            <td class="">2</td>
                            <td class="text-center notСompletedColor"></td>
                            <td class="" aria-placeholder="Добавить комментарий"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <table class="table fs-5 ">
                    <thead>
                        <tr>
                            <td scope="col">ФИО студента</td>
                            <td scope="col">Оценка за практику</td>
                            <td scope="col">Оценка за тест</td>
                            <td scope="col">Комментарий</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Антонов Василий Сергеевич</td>
                            <td class="">4</td>
                            <td class="">5</td>
                            <td class="" aria-placeholder="Добавить комментарий"></td>
                        </tr>
                        <tr>
                            <td>Бердинскийх Марк Львович</td>
                            <td class="">5</td>
                            <td class="">3</td>
                            <td class="" aria-placeholder="Добавить комментарий">
                                <button type="button" class="btn">
                                    <img src="/public/img/icons/chat-left.svg" alt="">
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Джинов Сапфир Абдулович</td>
                            <td class="">5</td>
                            <td class="text-center notСompletedColor"></td>
                            <td class="" aria-placeholder="Добавить комментарий"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <table class="table fs-5 ">
                    <thead>
                        <tr>
                            <td scope="col">ФИО студента</td>
                            <td scope="col">Оценка за практику</td>
                            <td scope="col">Оценка за тест</td>
                            <td scope="col">Комментарий</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Антонов Василий Сергеевич</td>
                            <td class="">4</td>
                            <td class="">2</td>
                            <td class="" aria-placeholder="Добавить комментарий"></td>
                        </tr>
                        <tr>
                            <td>Бердинскийх Марк Львович</td>
                            <td class="">5</td>
                            <td class="">3</td>
                            <td class="" aria-placeholder="Добавить комментарий">
                                <button type="button" class="btn">
                                    <img src="/public/img/icons/chat-left.svg" alt="">
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Джинов Сапфир Абдулович</td>
                            <td class="text-center notСompletedColor"></td>
                            <td class="" aria-placeholder="Добавить комментарий"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <table class="table fs-5 ">
                    <thead>
                        <tr>
                            <td scope="col">ФИО студента</td>
                            <td scope="col">Оценка за практику</td>
                            <td scope="col">Оценка за тест</td>
                            <td scope="col">Комментарий</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Антонов Василий Сергеевич</td>
                            <td class="">4</td>
                            <td class="">4</td>
                            <td class="" aria-placeholder="Добавить комментарий"></td>
                        </tr>
                        <tr>
                            <td>Бердинскийх Марк Львович</td>
                            <td class="">5</td>
                            <td class="">4</td>
                            <td class="" aria-placeholder="Добавить комментарий">
                                <button type="button" class="btn">
                                    <img src="/public/img/icons/chat-left.svg" alt="">
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Джинов Сапфир Абдулович</td>
                            <td class="">4</td>
                            <td class="text-center notСompletedColor"></td>
                            <td class="" aria-placeholder="Добавить комментарий"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <input type="text">
            ыоврфыолвпрфыолпв
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/views/components/footer.php"; ?>