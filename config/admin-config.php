<?php

return [
    /*
     * --------------------------------------------------------------------------
     * Define configuration groups
     * --------------------------------------------------------------------------
     * Each configuration group will be rendered as a TAB page
     */
    'admin_config_groups' => [
        'site' => 'Основные данные',
        'mails' => 'Почта',
        'contacts' => 'Контакты',
        'socials' => 'Соцсети',
        'yandex_money' => 'Юмани'
    ],
    /*
     * --------------------------------------------------------------------------
     * Define configuration permissions
     * --------------------------------------------------------------------------
     * Each configuration group will be visible to all roles if not specified or empty array.
     * Example: ['role1', 'role2']
     */
    'admin_config_permissions' => [
        'sample' => [],
        'sample2' => [],
    ],
    /**
     * --------------------------------------------------------------------------
     * Define configuration items
     * --------------------------------------------------------------------------
     * access：config('sample') config('sample.value')
     */
    'socials'=>[
        'instagram'=>[
            'type'=>'text',
            'instagram',
            'placeholder'=>'instagram'
        ],
        'telegram'=>[
            'type'=>'text',
            'telegram',
            'placeholder'=>'telegram'
        ],
        'vk'=>[
            'type'=>'text',
            'vk',
            'placeholder'=>'vk'
        ],
        'whatsapp'=>[
            'type'=>'text',
            'whatsapp',
            'placeholder'=>'whatsapp'
        ],

    ],
    'contacts'=>[

        'phone'=>[
            'type'=>'text',
            'Телефон',
            'placeholder'=>'Телефон'
        ],
        'email'=>[
            'type'=>'text',
            'Email',
            'placeholder'=>'Email'
        ],

    ],

    'yandex_money' => [
        'shop_id' => [
            'type'=>'text',
            'shop_id',
            'placeholder'=>'shop_id'
        ],
        'shop_key' => [
            'type'=>'text',
            'shop_key',
            'placeholder'=>'shop_key'
        ],
    ],

    'site' => [
        'city'=>[
            'type'=>'text',
            'Город',
            'placeholder'=>'Город'
        ],
        'profile'=>[
            'type'=>'text',
            'Профиль пользователя',
            'placeholder'=>'ИП "ИВАНОВ ИВАН ИВАНОВИЧ"'
        ],
        'title'=>[
            'type'=>'text',
            'SEO-title',
            'placeholder'=>'Введите заголовок сайта'
        ],
        'description'=>[
            'type'=>'text',
            'SEO-description',
            'placeholder'=>'Введите описание сайта'
        ],
        'keywords'=>[
            'type'=>'text',
            'SEO-keywords',
            'placeholder'=>'Введите клюючевые слова'
        ],
        'favicon'=>[
            'type'=>'image',
            'favicon',
            'placeholder'=>'загрузите favicon для сайта'
        ],
        'logo'=>[
            'type'=>'image',
            'Логотип',
            'placeholder'=>'загрузите favicon для сайта'
        ],

        'user_default_avatar'=>[
            'type'=>'image',
            'Аватар пользователя',
            'placeholder'=>'Аватарка по умолчанию'
        ],


    ],
    'mails' => [
        'from'=>[
            'type'=>'text',
            'От кого',
            'placeholder'=>'От кого'
        ],
        'to'=>[
            'type'=>'tags',
            'Кому',
            'placeholder'=>'Кому'
        ],

        'subject'=>[
            'type'=>'text',
            'Тема письма',
            'placeholder'=>'Тема письма'
        ],
    ],


];
