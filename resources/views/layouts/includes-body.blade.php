@if ( in_array( Route::currentRouteName(),['/']) )
    <body class="page-category page__home vvo_ui" style="padding-top: 0px;">
@endif

@if ( in_array( Route::currentRouteName(),['search']) )
    <body class="page-category page__search vvo_ui">
@endif

@if ( in_array( Route::currentRouteName(),['search-flexible']) )
    <body class="page-category vvo_ui">
@endif

@if ( in_array( Route::currentRouteName(),['account']) )
    <body class="page-category page__account_user vvo_ui">
@endif

@if ( in_array( Route::currentRouteName(),['personal_info']) )
    <body class="page-category page__personal_info vvo_ui">
@endif

@if ( in_array( Route::currentRouteName(),['login_segurity']) )
    <body class="page-category page_login_security vvo_ui">
@endif

@if ( in_array( Route::currentRouteName(),['payment_payouts']) )
    <body class="page-category page_payments vvo_ui">
@endif

@if ( in_array( Route::currentRouteName(),['global_preferen']) )
    <body class="page-category page__personal_info vvo_ui">
@endif

@if ( in_array( Route::currentRouteName(),['interna']) )
    <body class="page-category sc-interna_body">
@endif

@if ( in_array( Route::currentRouteName(),['profile']) )
    <body class="page-category page__perfil_interno vvo_ui">
@endif

@if ( in_array( Route::currentRouteName(),['signup-host']) )
    <body class="page__host vvo_ui">
@endif

@if ( in_array( Route::currentRouteName(),['details-listing', 'host-listing', 'become-host','category','dashboard']) )
    <body class="page-category">
@endif