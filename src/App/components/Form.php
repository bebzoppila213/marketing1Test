<?php 
    $formId = rand();
?>

<form class="form" method="POST"  action="<?= $formUrl ?>">
    <div class="form__item">
        <label class="form__item-label" for="">Имя *</label>
        <input name="name" class="form__item-input" type="text">
    </div>
    <div class="form__item">
        <label pattern="[0-9]{3} [0-9]{3} [0-9]{4}" maxlength="12" type="tel" class="form__item-label" for="">Телефон*</label>
        <input name="phone" class="form__item-input" type="text">
    </div>
    <div class="form__item">
        <input require name="spam" id="<?= $formId ?>" type="checkbox">
        <label class="form__item-label" for="<?= $formId ?>">Принимаю условия</label>
    </div>
    <div class="form__item form__btn">
        <button type="submit" class="form__btn-item">Отправить</button>
    </div>
    <div class="form__item form__messages">
        <strong><?= $messages ?></strong>
    </div>
</form>