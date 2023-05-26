@stack('styles')
<style>
    html{
        scroll-behavior: smooth;
    }

    .header__search-button{
        font-size: 18px;
    }

    .ourShops__page{
        min-height: 396px;
    }

    .product__number{
        color: white;
        font-size: 16px;
    }

    .ourShops__page-left{
        height: 396px;
    }

    .buttons__row button:hover{
        cursor: pointer;
    }

    .products__content{
        grid-template-columns: repeat(3, 1fr);
    }

    .products__content-wrapper{
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
    }

    .products__content-catalog{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        width: 300px;
        position: relative;
        padding-right: 10px;
    }

    .products__content-catalog::after{
        content: '';
        position: absolute;
        right: 0;
        top: 0;
        height: 470px;
        width: 1px;
        background:#E0E0E0;
    }

    .products__catalog-item{
        transition: .3s ease all;
        padding-bottom: 2px;
    }

    .products__catalog-item:not(.active):hover{
        color: #cc2929;
    }

    .products__catalog-item.active{
        border-bottom: 1px solid #cc2929;
    }

    .products__catalog-item:not(:last-of-type){
        margin-bottom: 8px;
    }

    .productPage__buttons .buttons__row{
        display: none;
    }

    .productPage__buttons.active .buttons__row{
        display: flex;
    }

    .productPage__buttons.active .productPage__button{
        display: none;
    }

    .productPage__buttons *{
        border-radius: 11px;
    }

    .productPage__buttons .buttons__row{
        height: 51px;
        width: 186px;
    }

    .productPage__buttons .product__number{
        height: 51px;
    }

    .product__slider-img{
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .product__description p{
        max-width: 100%;
        overflow-wrap: anywhere;
    }
    
    .swiper{
        margin: 0;
    }

    .header__menuBtn.active span:nth-of-type(2){
        width: 0;
    }
    
    .complect__image-wrapper{
        position: relative;
    }

    .complect__background{
        width: 85%;
        height: 85%;
    }

    .basket__product-bottom input{
        color: black;
    }

    @media(max-width: 960px){
        .basket__product-box .buttons__row{
            display: flex !important;
        }
        .productPage__line{
            flex-direction: column;
            align-items: flex-start;
        }
        .productPage__line .productPage__buttons,
        .productPage__line .buttons__row{
            width: 100%;
        }

        .productPage__line .buttons__row{
            margin-top: 15px;
        }

        .productPage__line .buttons__row .minus, 
        .productPage__line .buttons__row .plus{
            padding: 0 22px;
        }

        .catalogFull .products__product{
            display: flex !important;
        }

        .products__content-wrapper{
            flex-direction: column;
        }

        .products__content-catalog{
            padding-right: 0;
            padding-bottom: 5px;
            margin-right: 0;
            margin-bottom: 15px;
        }

        .products__content-catalog::after{
            height: 1px;
            width: 100%;
            bottom: 0;
            top: auto;
        }
    }
</style>
