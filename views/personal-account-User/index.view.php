<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/views/components/header.php"; ?>

<main>
    <div class="container">
        <nav class="NavTransparent">
            <div class="nav nav-tabs " id="nav-tab" role="tablist">
                <button class="nav-link borderNone active" id="nav-tests-tab" data-bs-toggle="tab" data-bs-target="#nav-tests" type="button" role="tab" aria-controls="nav-tests" aria-selected="true">Тесты</button>
                <button class="nav-link borderNone" id="nav-practice-tab" data-bs-toggle="tab" data-bs-target="#nav-practice" type="button" role="tab" aria-controls="nav-practice" aria-selected="false">Практики</button>
                <button class="nav-link borderNone" id="nav-statistics-tab" data-bs-toggle="tab" data-bs-target="#nav-statistics" type="button" role="tab" aria-controls="nav-statistics" aria-selected="false">Статистика</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active " id="nav-tests" role="tabpanel" aria-labelledby="nav-tests-tab">
                <table class="table fs-5 ">
                    <thead>
                        <tr>
                            <td scope="col">Название</td>
                            <td scope="col">Оценка</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Тест по основам языка</td>
                            <td class="">4</td>
                        </tr>
                        <tr>
                            <td>Тест по линейным алгоритмам</td>
                            <td class="">5</td>
                        </tr>
                        <tr>
                            <td>Тест по работе с массивами</td>
                            <td class="text-center notСompletedColor"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="nav-practice" role="tabpanel" aria-labelledby="nav-practice-tab">
            <table class="table fs-5">
                    <thead class="colorViolet">
                        <tr>
                            <td scope="col">Название</td>
                            <td scope="col">Оценка</td>
                            <td scope="col">Комментарии</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Практика 1</td>
                            <td class="">4</td>
                            <td>Файл с практикой не открывается, отправь ещё раз.</td>
                        </tr>
                        <tr>
                            <td>Практика 2-4</td>
                            <td class="">5</td>
                            <td>Отсутствуют</td>
                        </tr>
                        <tr>
                            <td>Практика 5-7</td>
                            <td class="notСompletedColor"></td>
                            <td>Отсутствуют</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="nav-statistics" role="tabpanel" aria-labelledby="nav-statistics-tab"> 
                <p class="fs-5">Блок отсутствует</p>  </div>
        </div>
    </div>

</main>


<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/views/components/footer.php"; ?>