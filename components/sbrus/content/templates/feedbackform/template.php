<?php

?>

<div class="container">

        <div class="row">
            <div class="col-lg-4">
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="Имя">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" placeholder="Телефон">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">

                <div class="form-group">
                    <textarea class="form-control" id="text" rows="5"></textarea>
                </div>

            </div>
        </div>

        <div class="row">

            <div class="col-lg-12">

                    <input name="ml" type="checkbox" class="checkbox" id="submit_privacy" style="margin: 0 5px 2px 0;">
                    <label id="ml" for="submit_privacy" style="margin-bottom: 12px;">
                        Я согласен(-а) на обработку и передачу персональных данных <br>
                    </label>

                    <a href="/privacy/" target="_blank">Конфиденциальность</a>

            </div>

        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button class="btn btn-primary" onclick="submitFeedBackForm()">Отправить</button>
            </div>
        </div>


</div>
