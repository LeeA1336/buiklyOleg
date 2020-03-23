<section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
            <!--заполните этот список из массива категорий-->
            <?php
            foreach ($category as $key => $value) {
            ?>
            <li class="promo__item promo__item--<?php echo "$key" ?>">
                <a class="promo__link" href="pages/all-lots.html"><?php echo "$value" ?></a>
            </li>
            <?php
            }
            ?>
        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">
        <?php
            foreach ($lots as $value) {  
            ?>
            <!--заполните этот список из массива с товарами-->
            <li class="lots__item lot">
                <div class="lot__image">
                <img src="<?php echo "$value[image]" ?>" width="350" height="260" alt="">
                </div>
                <div class="lot__info">
                <span class="lot__category"><?php echo "$value[category]" ?></span>
                    <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?php echo "$value[name]" ?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost"><?=cost($value['price']); ?></span>
                        </div>
                        <div class="lot__timer timer">
                            <?= $timer;?>
                        </div>
                    </div>
                </div>
            </li>
            <?php
            }
            ?>
        </ul>
    </section>