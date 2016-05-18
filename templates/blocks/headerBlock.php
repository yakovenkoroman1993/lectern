<?php
/**
 * Created by PhpStorm.
 * Date: 18.05.2016
 * Time: 22:29
 */
?>

<nav class="navbar navbar-default">
    <div class="container-fluid">

        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <img src="/assets/img/logo.gif" class="img-rounded" alt="Кафедра">
            </a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <li class="<?php echo isset($active_item) && $active_item === 'home' ? 'active' : '' ?>">
                    <a href="/">Главная</a>
                </li>

                <li class="<?php echo isset($active_item) && $active_item === 'about' ? 'active' : '' ?>">
                    <a href="/about">О нас</a>
                </li>

                <?php if ($this->currentUser): ?>

                    <li class="<?php echo isset($active_item) && $active_item === 'cabinet' ? 'active' : '' ?>">
                        <a href="/<?php echo $this->currentUser->getRole(); ?>/cabinet">

                            <?php if ($this->currentUser->getRole() === Constants::STUDENT_ROLE): ?>

                                <span class="glyphicon glyphicon-education"></span>

                            <?php elseif ($this->currentUser->getRole() === Constants::EMPLOYER_ROLE): ?>

                                <span class="glyphicon glyphicon-briefcase"></span>

                            <?php endif; ?>

                            <span>Личный кабинет</span>
                        </a>
                    </li>

                <?php endif ?>

            </ul>

            <?php if ($this->currentUser): ?>

                <?php include __DIR__ . '/../forms/profileForm.php'; ?>

            <?php elseif (!(isset($signinFormOff) && $signinFormOff)): ?>

                <?php include __DIR__ . '/../forms/signinForm.php'; ?>

            <?php endif ?>

        </div>
    </div>
</nav>