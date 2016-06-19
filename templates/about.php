<?php $titlePage = 'Доска объявлений'; ?>

<?php ob_start() ?>
    <link href="../assets/css/about.css" rel="stylesheet" type="text/css">
<?php $css = ob_get_clean() ?>

<?php ob_start() ?>
<?php $beforeJs = ob_get_clean() ?>

<?php ob_start() ?>
<?php $afterJs = ob_get_clean() ?>

<?php ob_start() ?>

    <!--<div class="content-effect hidden-xs" style="top: inherit; bottom: 0">
        <div class="visible-effect" style="width: 625px">
            <p class="effect">Теперь найти работу
                <span class="glyphicon glyphicon-hand-right" style="vertical-align: middle"></span>
            </p>
            <ul class="effect" style="padding-left: 420px">
                <li>легко</li>
                <li>просто</li>
                <li>удобно</li>
                <li>быстро</li>
            </ul>
        </div>
    </div>-->

    <div class="jumbotron" style="font-family: 'Muli'; margin-top: 10px">
        <h2>Добро пожаловать на сайт «Содействие трудоустройству выпускников кафедры ИВТ и ИБ»</h2>
        <p class="text-justify">Наш сайт  позволяет работодателям выставлять имеющиеся вакансии, получать сведения о студентах заинтересованных в поисках работы, а также осуществлять отбор кадров исходя из своих требований.</p>
        <h2>О кафедре</h2>
        <p class="text-justify">Кафедра «Информатика, вычислительная техника и информационная безопасность» создана в 2014 году на основе объединения кафедр «Вычислительные системы и информационная безопасность» и «Системы автоматизированного проектирования». За 17 лет работы кафедры подготовлено более 200 специалистов по защите информации и более 60 инженеров по специальности «Вычислительные машины, комплексы и системы». 100% выпускников кафедры находят работу по специальности. Они широко востребованы в Алтайском крае и за его пределами.</p>
        <p class="text-justify">
            <b>ЗАВЕДУЮЩИЙ КАФЕДРОЙ: </b>Якунин Алексей Григорьевич доктор теxнических наук, профессор
            <br>
            <b>E-mail: </b>yakunin@agtu.secna.ru
            <br>
            <b>Аудитория: </b>403, корпус "Д"
            <br>
            <b>Телефон: </b>8 (3852) 29-07-86
        </p>

        <?php if (is_null($this->currentUser)): ?>

            <p class="text-center">
                <a class="btn btn-primary btn-large" href="/signup">Регистрация</a>
            </p>

        <?php endif ?>

    </div>

<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>