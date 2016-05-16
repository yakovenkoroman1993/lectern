<form class="navbar-form navbar-right" role="form" method="post" action="/logout">
    
    <span><span class="hidden-xs">Вы авторизованы как </span><?php echo ucfirst($this->currentUser->getFirstName()); ?></span>

    <img src="<?php echo $this->currentUser->getImgUrl() ?>" class="img-circle" style="max-width: 35px; max-height: 35px;">

    <button class="btn btn-sm btn-default">
        <small><b>Выйти</b></small>
        <span class="glyphicon glyphicon-log-out"></span>
    </button>

    <input name="flash" type="hidden" value="<?php echo $this->flash; ?>">

</form>

