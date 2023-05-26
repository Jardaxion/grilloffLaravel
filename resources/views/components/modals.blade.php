<div class="modal" data-modal="request">
    <div class="modal__inner">
        <div class="modal__title">
            <h3 class="modal__title-title">Оставить заявку</h3>
            <p class="modal__title-description">В течении дня с Вами свяжется менеджер</p>
        </div>
        <livewire:order/>
    </div>
</div>

<div class="modal" data-modal="thanks">
    <div class="modal__inner">
        <div class="modal__content">
            <h3 class="modal__content-title">Большое спасибо</h3>
            <p class="modal__content-description">Ваша заявка успешно отправлена, в течении дня с Вами свяжется менеджер</p>
            <button class="modal__input-button js-close-modal" data-closemodal="thanks">Отправить заявку</button>
        </div>
    </div>
</div>

@stack('modals')
