<?php

return [
    'plugin' => [
        'name' => 'کاربران',
        'description' => 'مدیریت کاربر ظاهر.',
        'tab' => 'کاربران',
        'access_users' => 'مدیریت کاربران'
    ],
    'location' => [
        'location' => 'محل',
        'new' => 'موقعیت جدید',
        'create_title' => 'افزودن موقعیت',
        'update_title' => 'ویرایش موقعیت',
        'preview_title' => 'پیش نمایش موقعیت'
    ],
    'locations' => [
        'menu_label' => 'موقعیت ها',
        'menu_description' => 'مدیریت کشور ها و استانهای موجود برای کاربران.',
        'hide_disabled' => 'مخفی معلول',
        'enabled_label' => "فعال",
        'enabled_help' => "موقعیت های غیر فعال شده در محیط کاربری نماسش داده نمی شوند.",
        'enable_or_disable_title' => "فعال و یا غیر فعال سازی موقعیت ها",
        'enable_or_disable' => 'فعال و یا غیر فعال سازی',
        'selected_amount' => ':amount موقعیت انتخاب شده است',
        'enable_success' => "موقعیت ها با موفقیت فعال شدند.",
        'disable_success' => "موقعیت ها با موفقیت غیر فعال شدن.",
        'disable_confirm' => 'آیا اطمینان دارید؟',
        'list_title' => 'مدیریت موقعیت ها',
        'delete_confirm' => 'آیا از حذف این موقعیت اطمینان دارید؟',
        'return_to_list' => 'بازگشت به لیست موقعیت ها',
        'delete_selected_empty' => 'There are no selected users to delete.',
        'delete_selected_confirm' => 'Delete the selected users?',
        'delete_selected_success' => 'Successfully deleted the selected users.'
    ],
    'users' => [
        'menu_label' => 'کاربران',
        'all_users' => 'همه کاربران',
        'new_user' => 'کاربر جدید',
        'list_title' => 'مدیریت کاربران',
        'activating' => 'فعال سازی...',
        'activate_warning_title' => 'کاربر فعال نمیباشد!',
        'activate_warning_desc' => 'این کاربر فعال نشده است و نمیتواند وارد سایت شود.',
        'activate_confirm' => 'آیا از فعالسازی این کاربر اطمینان دارید؟',
        'active_manually' => 'فعال سازی دستی ی این کاربر',
        'delete_confirm' => 'آیا از حذف این کاربر اطمینان دارید؟',
        'activated_success' => 'کاربر با اطمینان فعال شد!',
        'return_to_list' => 'بازگشت به لیست کاربران'
    ],
    'settings' => [
        'menu_label' => 'تنظیمات کاربر',
        'menu_description' => 'مدیریت تنظیمات مربوط به کاربر.',
        'activation_tab' => 'فعال سازی',
        'location_tab' => 'موقعیت',
        'signin_tab' => 'ورود',
        'activate_mode' => 'روش فعال سازی',
        'activate_mode_comment' => 'روشی را که میخواهید حساب های کاربری از آن طریق فعال شوند را انتخاب نمایید.',
        'activate_mode_auto' => 'خودکار',
        'activate_mode_auto_comment' => 'بهنگام ثبت نام حساب کاربری به صورت خودکار فعال شود.',
        'activate_mode_user' => 'کاربر',
        'activate_mode_user_comment' => 'کاربران حساب خود را از طریق ایمیل فعال نمایند.',
        'activate_mode_admin' => 'مدیریت',
        'activate_mode_admin_comment' => 'فقط مدیران حساب کاربری را فعال نمایید.',
        'welcome_template' => 'قالب خوش آمدگویی',
        'welcome_template_comment' => 'قالب نامه الکترونیکی که پس از این که کاربر حساب خود را برای اولین بار فعال کرد به او ارسال می شود.',
        'require_activation' => 'ورود نیاز مند فعال سازی حساب کاربری می باشد',
        'require_activation_comment' => 'کاربران باید دارای حساب کاربری فعال جهت ورود باشند.',
        'default_country' => 'کشور پیشفرض',
        'default_country_comment' => 'هنگامی که کاربر موقعیت خود را مشخص نکند کشور پیش فرض ایتفاده خواهد شد.',
        'default_state' => 'استان پیش فرض',
        'default_state_comment' => 'هنگامی که کاربر موقعیت خود را مشخص نکند استان پیشفرض انتخاب خواهد شد.',
        'use_throttle' => 'جلو گیری از ورود',
        'use_throttle_comment' => 'تکرار ورود نا موفق کاربر را به طور موقت غیر فعال میکند.',
        'login_attribute' => 'مشخصه ی ورود',
        'login_attribute_comment' => 'مشخصه ای را که کاربر برای ورود باید وارد نماید انتخاب نمایید.',
        'no_mail_template' => 'اطلاع رسانی نکن',
        'hint_templates' => 'شما میتوانید قالب پست الکترونیکی را با انتخاب "پست الکترونیکی" > "قالب های نامه الکترونیکی" از قسمت "سیستم" تغییر دهید.'
    ],
    'state' => [
        'label' => 'استان',
        'name' => 'نام',
        'name_comment' => 'نام استان را جهت نمایش وارد نمایید.',
        'code' => 'کد',
        'code_comment' => 'کد یکتایی جهت دسترسی به این استان وارد نمایید.'
    ],
    'country' => [
        'label' => 'کشور',
        'name' => 'نام',
        'code' => 'کد',
        'code_comment' => 'کد یکتایی را جهت دسترسی به این کشور را وارد نمایید.',
        'enabled' => 'فعال'
    ],
    'user' => [
        'user' => 'user',
        'id' => 'مشخصه',
        'username' => 'نام کاربری',
        'name' => 'نام',
        'surname' => 'نام خانوادگی',
        'email' => 'پست الکترونیکی',
        'created_at' => 'تاریخ ثبت نام',
        'phone' => 'تلفن',
        'company' => 'شرکت',
        'city' => 'شهر',
        'zip' => 'کد پستی',
        'street_addr' => 'آدرس',
        'country' => 'کشور',
        'state' => 'استان',
        'reset_password' => 'تنظیم مجدد کلمه عبور',
        'reset_password_comment' => 'جهت تنظیم مجدد کلمه عبور کاربر ، کلمه عبور جدید را وارد نمایید.',
        'confirm_password' => 'تایید کلمه عبور',
        'confirm_password_comment' => 'جهت تایید کلمه عبور را مجددا وارد نمایید.',
        'avatar' => 'نمایه',
        'details' => 'جزییات',
        'account' => 'حساب کاربری'
    ],
    'login' => [
        'attribute_email' => 'پست الکترونیکی',
        'attribute_username' => 'نام کاربری'
    ],
    'account' => [
        'account' => 'حساب کاربری',
        'account_desc' => 'فرم مدیریت کاربران.',
        'redirect_to' => 'انتقال به',
        'redirect_to_desc' => 'نام صفحه ای که کاربر پس از ورود باید به آن صفحه منتقل شود.',
        'code_param' => 'پارامتر کد فعال سازی',
        'code_param_desc' => 'پارامتر آدرس صفحه جهت استفاده در کد فعال سازی بهنگام ثبت نام',
        'invalid_activation_code' => 'مد فعالسازی معتبر نمیباشد',
        'invalid_user' => 'کاربری با اطلاعات وارد شده یافت نشد.',
        'success_activation' => 'حساب کاربری شما با موفقیت فعال شد.',
        'success_saved' => 'تنظیمات با موفقیت اعمال شدند.',
        'login_first' => 'شما باید وارد حساب کاربری خود شوید!',
        'alredy_active' => 'حساب کاربری شما قبلا فعال شده است!',
        'activation_email_sent' => 'یک پست الکترونیکی حاوی آدرس فعال سازی به ایمیل شما ارسال شد.',
        'country' => 'کشور',
        'state' => 'استان',
        'sign_in' => 'ورود',
        'register' => 'ثبت نام',
        'full_name' => 'نام کامل',
        'email' => 'پست الکترونیکی',
        'password' => 'کلمه عبور',
        'register' => 'ثبت نام',
        'login' => 'نام کاربری',
        'address' => 'آدرس',
        'city_suburb' => 'شهر / بخش',
        'postal_code' => 'کد پستی',
        'new_password' => 'کلمه عبور جدید',
        'new_password_confirm' => 'تایید کلمه عبور'
    ],
    'reset_password' => [
        'reset_password' => 'بازنشانی کلمه عبور',
        'reset_password_desc' => 'فرم کلمه عبور فراموش شده.',
        'code_param' => 'پارامتر کد بازنشانی',
        'code_param_desc' => 'پارامتر آدرس صفحه ای که جهت کد بازنشانی استفاده خوهد شد'
    ],
    'session' => [
        'session' => 'جلسه',
        'session_desc' => 'جلسه کاربری را به صفحه جهت دسترسی کاربران اضافه می کند.',
        'security_title' => 'دسترسی برای',
        'security_desc' => 'چه کسانی میتوانند به این صفحه دسترسی داشته باشند؟',
        'all' => 'همه',
        'users' => 'کاربران',
        'guests' => 'میهمان ها',
        'redirect_title' => 'انتقال به',
        'redirect_desc' => 'نام صفحه ای که در صورت عدم اجازه دسترسی کاربر به آن انتقال پیدا میکند.',
        'logout' => 'شما شده اند با موفقیت از سیستم خارج!'
    ]
];
