<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ru_RU">
<head>
    <meta charset="utf-8">
    <?php if (!empty($css)): ?>
        <?php foreach ($css as $css_item): ?>
            <link href="<?= $css_item; ?>" rel="stylesheet">
        <? endforeach; ?>
    <?php endif; ?>
</head>
<body>

<div class="container">
    <form class="form validate" method="POST">
        <div class="row">
            <h4>Account</h4>
            <div class="input-group input-group-icon">
                <input type="text" name="name" placeholder="Full Name" class="required"/>
            </div>
            <div class="input-group input-group-icon">
                <input type="email" name="email" placeholder="Email Adress" class="required"/>
            </div>
        </div>
        <div class="row">
            <div class="col-half">
                <h4>Date of Birth</h4>
                <div class="input-group">
                    <div class="col-third">
                        <input type="number" name="day" placeholder="DD" min="1" max="31" />
                    </div>
                    <div class="col-third">
                        <input type="number" name="month" placeholder="MM" min="1" max="12" />
                    </div>
                    <div class="col-third">
                        <input type="number" name="year" placeholder="YYYY" min="1900" max="<?= date("Y")?>" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-half">
                <h4>Favorite color</h4>
                <div class="favorite-color">
                    <div class="input-group">
                        <div class="col-third">
                            <input type="color" name="favcolor" title="color" value="#FFFFFF"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <button class="button"> Send</button>
        </div>
    </form>
</div>
<?php if (!empty($js)): ?>
    <?php foreach ($js as $js_item): ?>
        <script src="<?= $js_item; ?>"></script>
    <? endforeach; ?>
<?php endif; ?>
</body>
</html>