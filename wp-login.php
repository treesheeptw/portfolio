<!DOCTYPE html>
<html lang="zh-TW">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>登入 &lsaquo; 樹羊 &#8212; WordPress</title>
	<meta name="robots" content="max-image-preview:large, noindex, noarchive">
<link href="https://fonts.gstatic.com/" crossorigin rel="preconnect">
<link rel="stylesheet" id="dashicons-css" href="/wp-includes/css/dashicons.min.css?ver=6.2.2" media="all">
<link rel="stylesheet" id="buttons-css" href="/wp-includes/css/buttons.min.css?ver=6.2.2" media="all">
<link rel="stylesheet" id="forms-css" href="/wp-admin/css/forms.min.css?ver=6.2.2" media="all">
<link rel="stylesheet" id="l10n-css" href="/wp-admin/css/l10n.min.css?ver=6.2.2" media="all">
<link rel="stylesheet" id="login-css" href="/wp-admin/css/login.min.css?ver=6.2.2" media="all">
	<meta name="referrer" content="strict-origin-when-cross-origin">
		<meta name="viewport" content="width=device-width">
	<link rel="icon" href="/wp-content/uploads/2023/06/signal-2023-06-15-153559-150x150.jpeg" sizes="32x32">
<link rel="icon" href="/wp-content/uploads/2023/06/signal-2023-06-15-153559-300x300.jpeg" sizes="192x192">
<link rel="apple-touch-icon" href="/wp-content/uploads/2023/06/signal-2023-06-15-153559-300x300.jpeg">
<meta name="msapplication-TileImage" content="/wp-content/uploads/2023/06/signal-2023-06-15-153559-300x300.jpeg">
	</head>
	<body class="login no-js login-action-login wp-core-ui  locale-zh-tw">
	<script type="text/javascript">document.body.className = document.body.className.replace('no-js','js');</script>
		<div id="login">
		<h1><a href="https://tw.wordpress.org/">本站採用 WordPress 建置</a></h1>
	
		<form name="loginform" id="loginform" action="http://localhost/portfolio/wp-login.php" method="post">
			<p>
				<label for="user_login">使用者名稱或電子郵件地址</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" autocomplete="username">
			</p>

			<div class="user-pass-wrap">
				<label for="user_pass">密碼</label>
				<div class="wp-pwd">
					<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20" autocomplete="current-password" spellcheck="false">
					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="顯示密碼">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
			</div>
						<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> <label for="rememberme">保持登入</label></p>
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="登入">
									<input type="hidden" name="redirect_to" value="http://localhost/portfolio/wp-admin/">
									<input type="hidden" name="testcookie" value="1">
			</p>
		</form>

					<p id="nav">
				<a href="/wp-login.php?action=lostpassword">忘記密碼？</a>			</p>
					<script type="text/javascript">function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
wp_attempt_focus();
if ( typeof wpOnload === 'function' ) { wpOnload() }</script>
				<p id="backtoblog">
			<a href="/">&larr; 前往《樹羊》</a>		</p>
			</div>
				<div class="language-switcher">
				<form id="language-switcher" action="" method="get">

					<label for="language-switcher-locales">
						<span class="dashicons dashicons-translation" aria-hidden="true"></span>
						<span class="screen-reader-text">
							語言						</span>
					</label>

					<select name="wp_lang" id="language-switcher-locales"><option value="en_US" lang="en" data-installed="1">English (United States)</option>
<option value="zh_TW" lang="zh" selected data-installed="1">繁體中文</option></select>
					
					
					
						<input type="submit" class="button" value="變更">

					</form>
				</div>
				<script src="/wp-includes/js/jquery/jquery.min.js?ver=3.6.4" id="jquery-core-js"></script>
<script src="/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.0" id="jquery-migrate-js"></script>
<script id="zxcvbn-async-js-extra">var _zxcvbnSettings = {"src":"\/wp-includes\/js\/zxcvbn.min.js"};</script>
<script src="/wp-includes/js/zxcvbn-async.min.js?ver=1.0" id="zxcvbn-async-js"></script>
<script src="/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2" id="wp-polyfill-inert-js"></script>
<script src="/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.11" id="regenerator-runtime-js"></script>
<script src="/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script src="/wp-includes/js/dist/hooks.min.js?ver=4169d3cf8e8d95a3d6d5" id="wp-hooks-js"></script>
<script src="/wp-includes/js/dist/i18n.min.js?ver=9e794f35a71bb98672ae" id="wp-i18n-js"></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text directionltr': [ 'ltr' ] } );
</script>
<script id="password-strength-meter-js-extra">var pwsL10n = {"unknown":"密碼強度未知","short":"非常低","bad":"低","good":"中","strong":"高","mismatch":"不相符"};</script>
<script id="password-strength-meter-js-translations">( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2023-03-28 17:14:41+0000","generator":"GlotPress\/4.0.0-alpha.4","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=1; plural=0;","lang":"zh_TW"},"%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code.":["從 %2$s 版開始，%1$s 已淘汰不用，請改用 %3$s。建議撰寫更具包容性的程式碼。"]}},"comment":{"reference":"wp-admin\/js\/password-strength-meter.js"}} );</script>
<script src="/wp-admin/js/password-strength-meter.min.js?ver=6.2.2" id="password-strength-meter-js"></script>
<script src="/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js"></script>
<script id="wp-util-js-extra">var _wpUtilSettings = {"ajax":{"url":"\/portfolio\/wp-admin\/admin-ajax.php"}};</script>
<script src="/wp-includes/js/wp-util.min.js?ver=6.2.2" id="wp-util-js"></script>
<script id="user-profile-js-extra">var userProfileL10n = {"user_id":"0","nonce":"e7468a606b"};</script>
<script id="user-profile-js-translations">( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2023-03-28 17:14:41+0000","generator":"GlotPress\/4.0.0-alpha.4","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=1; plural=0;","lang":"zh_TW"},"Your new password has not been saved.":["新密碼尚未儲存。"],"Hide":["隱藏"],"Show":["顯示"],"Confirm use of weak password":["確認使用安全強度較弱的密碼"],"Hide password":["隱藏密碼"],"Show password":["顯示密碼"]}},"comment":{"reference":"wp-admin\/js\/user-profile.js"}} );</script>
<script src="/wp-admin/js/user-profile.min.js?ver=6.2.2" id="user-profile-js"></script>
	<div class="clear"></div>
	</body>
	</html>