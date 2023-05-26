<x-app-layout>
    <main>
        <section class="infoFull message">
            <div class="container">
                <div class="infoFull__inner">
                    <h1 class="title-message">{{ request('message') }}</h1>
                    <div class="infoFull__content">
                        <p class="infoFull__description"> Скоро с вами свяжется менеджер для уточнения заказа</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>
