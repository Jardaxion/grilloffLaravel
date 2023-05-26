<form class="basket__buy" action="" wire:submit.prevent="submit">
    <div class="buy__top">
        <div class="buy__left">
        <h3 class="buy__title">Оформление заказа</h3>
        <div class="buy__input-input">
            <input class="buy__input" id="FIO" name="name" type="text" wire:model="name">
            <label class="buy__placeholder" for="FIO">
                <div>ФИО</div>
            </label>
        </div>
        <div class="buy__input-oneLine">
            <div class="buy__input-input">
            <input class="buy__input" id="phone" name="phone" type="text" wire:model="phone">
            <label class="buy__placeholder" for="phone">
                <div>Телефон<span>*</span></div>
            </label>
            </div>
            <div class="buy__input-input">
            <input class="buy__input" id="email" name="mail" type="text" wire:model="email">
            <label class="buy__placeholder" for="email">
                <div>Email<span>*</span></div>
            </label>
            </div>
        </div>
        <div class="buy__input-input">
            <input class="buy__input" id="comment" name="comment" type="text" wire:model="comment">
            <label class="buy__placeholder" for="comment">
                <div>Комментарий</div>
            </label>
        </div>
        <h3 class="buy__title">Адрес</h3>
        <div class="buy__input-input">
            <input class="buy__input" id="adress" name="address" type="text" wire:model="address">
            <label class="buy__placeholder" for="adress">
                <div>Адрес<span>*</span></div>
            </label>
        </div>
        <div class="buy__input-input">
            <input class="buy__input" id="city" name="city" type="text" wire:model="city">
            <label class="buy__placeholder" for="city">
                <div>Город<span>*</span></div>
            </label>
        </div>
        <div class="buy__input-input">
            <input class="buy__input" id="street" name="street" type="text" wire:model="street">
            <label class="buy__placeholder" for="street">
                <div>Улица<span>*</span></div>
            </label>
        </div>
        <div class="buy__input-oneLine">
            <div class="buy__input-input">
            <input class="buy__input" id="home" name="home" type="text" wire:model="home">
            <label class="buy__placeholder" for="home">
                <div>Дом<span>*</span></div>
            </label>
            </div>
            <div class="buy__input-input">
            <label for="house">
                <input id="house" type="checkbox" name="isHouse" name="" wire:model="isHouse">
                <div class="checkbox">
                <svg width="21" height="20" viewbox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="20" height="19" rx="2.5" stroke="#D5D5D5"></rect>
                </svg>
                <img class="checkbox-check" src="img/checkbox-check.svg" alt="">
                </div>
            </label>
            <p class="buy__checkText">Частный дом</p>
            </div>
        </div>
        <div class="buy__input-oneLine radioLine">
            <h3 class="buy__title">Способ оплаты</h3>
            <label class="radioLabel" for="paymentFirst">
                <input id="paymentFirst" value="online" type="radio" name="payment" wire:model="payMethod">
                <div class="radio">
                    <div class="radio__notCheck"></div>
                    <div class="radio__check"></div>
                </div>
                <p class="radio__text">Оплата онлайн</p>
            </label>
            <label class="radioLabel" for="paymentSecond">
                <input id="paymentSecond" value="nal" type="radio" name="payment" wire:model="payMethod">
                <div class="radio">
                    <div class="radio__notCheck"></div>
                    <div class="radio__check"></div>
                </div>
                <p class="radio__text">Оплата наличными</p>
            </label>
        </div>
        </div>
    </div>
    <div class="buy__bottom">
        <div class="buy__price">
        <p class="buy__price-text">Итого:</p>
        @livewire('totla-basket-page')
        </div>
        <button class="button buy__button" type="submit">Сделать заказ</button>
    </div>
</form>