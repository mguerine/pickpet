<?php
session_start();
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <style>


* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box
}

.limiter {
    width: 100%;
    margin: 0 auto
}

.container-login100 {
    width: 100%;
    min-height: 100vh;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    padding: 15px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    position: relative;
    z-index: 1
}

.container-login100::before {
    content: "";
    display: block;
    position: absolute;
    z-index: -1;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;

}

.login_topimg {
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    width: 100%;
    min-height: 185px;
    position: relative;
    background: #91B3D1 url(https://image.freepik.com/free-vector/cyber-data-security-online-concept-illustration-internet-security-information-privacy-protection_1150-37330.jpg) no-repeat;
    background-size: auto;
    background-position: center
}

.login_topimg img {
    width: 100%;
    height: auto
}

.login_topimg .logo_wrap {
    border-radius: 5px;
    background: #fff;
    padding: 13px 55px;
    position: relative;
    top: -21px;
    margin: 10px auto;
    max-width: 255px
}

#login .wrap-login100 {
    background-color: #fff;
    padding: 30px 130px;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    width: 100%
}

.login100-form {
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap
}

.login100-form-title {
    font-size: 25px;
    color: #243762;
    line-height: 1.2;
    text-transform: uppercase;
    text-align: center;
    width: 100%;
    display: block
}

.login100-form-subtitle {
    font-size: 16px;
    color: #243762;
    line-height: 1.2;
    text-align: center;
    width: 100%;
    display: block
}

.wrap-input100 {
    position: relative;
    width: 100%;
    z-index: 1
}

#login input {
    outline: none;
    border: none
}

#login label {
    display: inline-block;
    margin-bottom: .5rem
}

.input-checkbox100 {
    display: none
}

input {
    outline: none;
    border: none
}

.wrap-input100 {
    position: relative;
    width: 100%;
    z-index: 1
}

.input100 {
    font-size: 18px;
    line-height: 1.2;
    color: #686868;
    display: block;
    width: 100%;
    background: #e6e6e6;
    height: 45px;
    border-radius: 3px;
    padding: 0 30px 0 55px
}

.focus-input100 {
    display: block;
    position: absolute;
    border-radius: 3px;
    bottom: 0;
    left: 0;
    z-index: -1;
    width: 100%;
    height: 100%;
    box-shadow: 0px 0px 0px 0px;
    color: rgba(211, 63, 141, 0.6)
}

.symbol-input100 {
    font-size: 15px;
    color: #999999;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    position: absolute;
    border-radius: 25px;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    padding-left: 23px;
    padding-bottom: 5px;
    pointer-events: none;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s
}

::-webkit-input-placeholder {
    opacity: 1;
    -webkit-transition: opacity .5s;
    transition: opacity .5s
}

:-moz-placeholder {
    opacity: 1;
    -moz-transition: opacity .5s;
    transition: opacity .5s
}

::-moz-placeholder {
    opacity: 1;
    -moz-transition: opacity .5s;
    transition: opacity .5s
}

:-ms-input-placeholder {
    opacity: 1;
    -ms-transition: opacity .5s;
    transition: opacity .5s
}

::placeholder {
    opacity: 1;
    transition: opacity .5s
}

*:focus::-webkit-input-placeholder {
    opacity: 0
}

*:focus:-moz-placeholder {
    opacity: 0
}

*:focus::-moz-placeholder {
    opacity: 0
}

*:focus:-ms-input-placeholder {
    opacity: 0
}

*:focus::placeholder {
    opacity: 0
}

.lnr {
    speak: none;
    font-style: normal;
    font-weight: 400;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

.flex-sb-m {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
    -ms-align-items: center;
    align-items: center
}

.w-full {
    width: 100%
}

.p-b-30 {
    padding-bottom: 30px
}

.input-checkbox100:checked+.label-checkbox100::before {
    color: #09569B
}

.label-checkbox100::before {
    content: "\f00c";
    font-family: FontAwesome;
    font-size: 13px;
    color: transparent;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    width: 18px;
    height: 18px;
    border-radius: 2px;
    background: #fff;
    border: 1px solid #e6e6e6;
    left: 0;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%)
}

.label-checkbox100 {
    font-size: 14px;
    font-weight: normal;
    color: #999999;
    line-height: 1.2;
    display: block;
    position: relative;
    padding-left: 26px;
    cursor: pointer
}

.m-b-16 {
    margin-bottom: 16px
}

.p-b-55 {
    padding-bottom: 55px
}

.container-login100-form-btn {
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center
}

.login100-form-btn:hover {
    background: #333333
}

.label-checkbox100::before {
    content: "\f00c";
    font-family: FontAwesome;
    font-size: 13px;
    color: transparent;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    width: 18px;
    height: 18px;
    border-radius: 3px;
    background: #fff;
    border: 2px solid #09569B;
    left: 0;
    top: 48%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%)
}

#login button:hover {
    cursor: pointer
}

.login100-form-btn {
    font-size: 16px;
    line-height: 1.5;
    color: #fff;
    text-transform: uppercase;
    width: 100%;
    height: 45px;
    border-radius: 3px;
    background: #09569B;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 25px;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s
}

#login button {
    outline: none !important;
    border: none
}

@media (max-width: 768px) {
    .container {
        width: 750px
    }

    #login .wrap-login100 {
        padding: 27px
    }

    .login_topimg .logo_wrap {
        padding: 5px 55px
    }
}
</style>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<title>Novo usuário - PickPet</title>
<meta name='robots' content='max-image-preview:large' />
	<script>
	( function() {
		var query = document.location.search;

		if ( query && query.indexOf( 'preview=true' ) !== -1 ) {
			window.name = 'wp-preview-465';
		}

		if ( window.addEventListener ) {
			window.addEventListener( 'unload', function() { window.name = ''; }, false );
		}
	}());
	</script>
	<link rel='dns-prefetch' href='//s0.wp.com' />
<link rel='dns-prefetch' href='//wordpress.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel="alternate" type="application/rss+xml" title="Feed para Pick Pet &raquo;" href="https://pickpet171.wordpress.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="Feed de comentários para Pick Pet &raquo;" href="https://pickpet171.wordpress.com/comments/feed/" />
	<script type="text/javascript">
		/* <![CDATA[ */
		function addLoadEvent(func) {
			var oldonload = window.onload;
			if (typeof window.onload != 'function') {
				window.onload = func;
			} else {
				window.onload = function () {
					oldonload();
					func();
				}
			}
		}
		/* ]]> */
	</script>
			<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s0.wp.com\/wp-content\/mu-plugins\/wpcom-smileys\/twemoji\/2\/72x72\/","ext":".png","svgUrl":"https:\/\/s0.wp.com\/wp-content\/mu-plugins\/wpcom-smileys\/twemoji\/2\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/s0.wp.com\/wp-includes\/js\/wp-emoji-release.min.js?m=1625065786h&ver=5.9-beta4-52005"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([10084,65039,8205,55357,56613],[10084,65039,8203,55357,56613])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='all-css-0-1' href='https://s0.wp.com/_static/??-eJylUttuwjAM/aGlocCmvUz7Fif1QiA35ULXv5/TalVpAU3aS5Rj+xxfeR+Y9C6jy9wWFkxR2iXeB+ktS1YbHFaokSm98AVNGK9mooV4waydYgIip9Bby4a8yJmKSDLqkLUn9OWN8f2z+JO/YmSiCGGQ2HkwOIdrJ03pyFwr6CCdNAmkxmq3DTknnsl/Ef57/mzy/iYFG9i+2XFICfMkX02T/COSKgQFRkWeiPza7ptDs+eiaNPV8ckLM1pEiMOqjX8I5RPaO/OgZi12GtCQu85zAYKBgSZqUIEcHs7qhk6+Jb4hPS5+rJTEMAeoJcPgS2Yq6u7P/a8kItQLW1/BnaOBjkocb3M66hlPJM2dz+My588ztboFstsA21E8oU2phQgRU2L0Wl0sGzc2pvu0H+3bsT3u2tf3w/kHcqhdNA==?cssminify=yes' type='text/css' media='all' />
<style id='wp-block-library-inline-css'>
.has-text-align-justify {
	text-align:justify;
}
</style>
<style id='wpcom-admin-bar-inline-css'>

			.admin-bar {
				position: inherit !important;
				top: auto !important;
			}
			.admin-bar .goog-te-banner-frame {
				top: 32px !important
			}
			@media screen and (max-width: 782px) {
				.admin-bar .goog-te-banner-frame {
					top: 46px !important;
				}
			}
			@media screen and (max-width: 480px) {
				.admin-bar .goog-te-banner-frame {
					position: absolute;
				}
			}
		
</style>
<style id='global-styles-inline-css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--color--primary: #404040;--wp--preset--color--secondary: #f25f70;--wp--preset--color--foreground: #444444;--wp--preset--color--background: #ffffff;--wp--preset--color--tertiary: #dddddd;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 19.5px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36.5px;--wp--preset--font-size--x-large: 42px;--wp--preset--font-size--normal: 22px;--wp--preset--font-size--huge: 49.5px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-primary-color{color: var(--wp--preset--color--primary) !important;}.has-secondary-color{color: var(--wp--preset--color--secondary) !important;}.has-foreground-color{color: var(--wp--preset--color--foreground) !important;}.has-background-color{color: var(--wp--preset--color--background) !important;}.has-tertiary-color{color: var(--wp--preset--color--tertiary) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-primary-background-color{background-color: var(--wp--preset--color--primary) !important;}.has-secondary-background-color{background-color: var(--wp--preset--color--secondary) !important;}.has-foreground-background-color{background-color: var(--wp--preset--color--foreground) !important;}.has-background-background-color{background-color: var(--wp--preset--color--background) !important;}.has-tertiary-background-color{background-color: var(--wp--preset--color--tertiary) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-primary-border-color{border-color: var(--wp--preset--color--primary) !important;}.has-secondary-border-color{border-color: var(--wp--preset--color--secondary) !important;}.has-foreground-border-color{border-color: var(--wp--preset--color--foreground) !important;}.has-background-border-color{border-color: var(--wp--preset--color--background) !important;}.has-tertiary-border-color{border-color: var(--wp--preset--color--tertiary) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}.has-normal-font-size{font-size: var(--wp--preset--font-size--normal) !important;}.has-huge-font-size{font-size: var(--wp--preset--font-size--huge) !important;}
</style>
<link rel='stylesheet' id='all-css-2-1' href='https://s0.wp.com/wp-content/mu-plugins/comment-likes/css/comment-likes.css?m=1407378799h&cssminify=yes' type='text/css' media='all' />
<link rel='stylesheet' id='print-css-3-1' href='https://s0.wp.com/wp-content/themes/pub/varia/print.css?m=1571655471h&cssminify=yes' type='text/css' media='print' />
<link rel='stylesheet' id='all-css-4-1' href='https://s0.wp.com/_static/??-eJx9jd0KwjAMRl/IGKai7EJ8lq7GWmmTkmYbvr0Vb/xjN+E7cA7BuYAXNmJDu1KmimUcsJrM7dwTrX2tK/xvTU6jw8j+pcJcvOSfII9Q0hgiVwwkkMQ7i8IfAJfkoi6lLNa+unOODINTmDZLttKQJLQZsFlvuBSZVFAqogYX0fzNz/SUj91+2/f9rjt0twcrunXm?cssminify=yes' type='text/css' media='all' />
<link crossorigin="anonymous" rel='stylesheet' id='stow-fonts-css'  href='https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A300%2C300italic%2C400%2C400italic%2C600%7CDroid+Serif%3A400%2C400italic%7COswald%3A300%2C400&#038;subset=latin%2Clatin-ext' media='all' />
<link rel='stylesheet' id='all-css-6-1' href='https://s0.wp.com/_static/??/wp-content/themes/pub/stow/style.css,/wp-content/mu-plugins/admin-bar/masterbar-overrides/masterbar.css?m=1639994171j&cssminify=yes' type='text/css' media='all' />
<style id='jetpack-global-styles-frontend-style-inline-css'>
:root { --font-headings: unset; --font-base: unset; --font-headings-default: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif; --font-base-default: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;}
</style>
<link rel='stylesheet' id='all-css-8-1' href='https://s0.wp.com/wp-content/themes/h4/global.css?m=1420737423h&cssminify=yes' type='text/css' media='all' />
			<script data-ampdevmode>
				( () => {
					if ( 'amp-wizard-completion-preview' !== window.name ) {
						return;
					}

					/** @type {HTMLStyleElement} */
					const style = document.createElement( 'style' );
					style.setAttribute( 'type', 'text/css' );
					style.appendChild( document.createTextNode( 'html { margin-top: 0 !important; } #wpadminbar { display: none !important; }' ) );
					document.head.appendChild( style );

					document.addEventListener( 'DOMContentLoaded', function() {
						const adminBar = document.getElementById( 'wpadminbar' );
						if ( adminBar ) {
							document.body.classList.remove( 'admin-bar' );
							adminBar.remove();
						}
					});
				} )();
			</script>
			<script id='wpcom-actionbar-placeholder-js-extra'>
var actionbardata = {"siteID":"201465251","siteURL":"http:\/\/pickpet171.wordpress.com","xhrURL":"https:\/\/pickpet171.wordpress.com\/wp-admin\/admin-ajax.php","nonce":"1055c00802","isLoggedIn":"1","statusMessage":"","subsEmailDefault":"instantly","proxyScriptUrl":"https:\/\/s0.wp.com\/wp-content\/js\/wpcom-proxy-request.js?ver=20211021","shortlink":"https:\/\/wp.me\/PdDkjx-7v","i18n":{"followedText":"Novos posts deste site agora aparecer\u00e3o no seu <a href=\"https:\/\/wordpress.com\/read\">Leitor<\/a>","foldBar":"Esconder esta barra","unfoldBar":"Mostrar esta barra"}};
</script>
<script crossorigin='anonymous' type='text/javascript' src='https://s0.wp.com/_static/??-eJyNzsEKwjAMBuAXsq3isHgQn2WrXUlJm9o0zL29PewgMkQIhISP5DdLUZAdysOzib2e4uu6NZ0g68gH8wupBKGOzX9iR7n53EwSVVACZDYsE7sKpQH1aSZEWr55P51oAvRK2Ncx9F3/O9OOq9hUqfRa9/Jx+SO33tQ93U6Xs7XHYbja+AbfjWT8'></script>
<script type='text/javascript'>
	window.addEventListener( 'DOMContentLoaded', function() {
		rltInitialize( {"token":"rlt-MnxMMU1Wd096bHZIVHhNV2VJQUNBemM5bXlpTnBMTTBhZ0cyR051c2hScEZ0bTh4cUFDVFJhOXNEakYwUEVkUWJxSDdIOUI5S1FQLzdZN295Znp4MXlmYkE5NnNXVXIvdDVPNmJESmhpcFpUalIrSW9yY2xwVmVxSWVDRTIzR0tSS0MwMHlZL3NiYThINWxTMWg4bHE1eHd2aXpqVVNSN0MvSkxuOHhDSFRtN2RrYStqOEVYNkxlcVdtSnlOak9hcVREZStWY01EQjFDYlF2aERiNGNnV2lqNEU0WmM0d05XQ2FZclNkeEdOS2hGYzAwVUF2emozcmU1WFR1Qm1FRGkvNjkvNzQ2UG80RGdBaTRzOFJVZDQ2YmZGeHkvR21tMklPYjBVUDVsMVZFbkJQZC9sY0V5K21XST18ZmVlYjRhZGY2MTc0YzljOWEzNTI1MzE2YzMxZTI0NzRlNWNlNDIyMjM4YmVjNTk0fDI1OGUyMjRiZmRkMWZkMDVkOWM2ODJjYmI0NDk5NzZlMWRiOGI3MjJiYmI2NTEyYTdmZjA3NjE1YzVjODM1OGQ1ODhmMTczYzRiNjE4NTUzMjEwNDFiM2I5Yzk4NTg3ODBhZjlhNzEyZmE2YWEwMWU5MjVkM2JjYTIyMTdlMWJh","iframeOrigins":["https:\/\/widgets.wp.com"]} );
	} );
</script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://pickpet171.wordpress.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://s0.wp.com/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress.com" />
<link rel='shortlink' href='https://wp.me/PdDkjx-7v' />
		<!-- Custom Logo: hide header text -->
		<style id="custom-logo-css" type="text/css">
			.site-title, .site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}
		</style>
		
<!-- Jetpack Open Graph Tags -->
<meta property="og:type" content="article" />
<meta property="og:title" content="Cadastrar" />
<meta property="og:url" content="https://pickpet171.wordpress.com/?page_id=465" />
<meta property="og:description" content="Visite o post para mais." />
<meta property="article:published_time" content="-001-11-30T00:00:00+00:00" />
<meta property="article:modified_time" content="2022-01-17T22:23:24+00:00" />
<meta property="og:site_name" content="Pick Pet" />
<meta property="og:image" content="https://pickpet171.files.wordpress.com/2022/01/cropped-cropped-f97be788-a846-4448-a42d-72c410b6ff93-removebg-preview-1.png?w=200" />
<meta property="og:image:width" content="200" />
<meta property="og:image:height" content="200" />
<meta property="og:image:alt" content="" />
<meta property="og:locale" content="pt_BR" />
<meta name="twitter:text:title" content="Cadastrar" />
<meta name="twitter:image" content="https://pickpet171.files.wordpress.com/2022/01/cropped-cropped-f97be788-a846-4448-a42d-72c410b6ff93-removebg-preview-1.png?w=213" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Visite o post para mais." />
<meta property="fb:app_id" content="249643311490" />
<meta property="article:publisher" content="https://www.facebook.com/WordPresscom" />

<!-- End Jetpack Open Graph Tags -->
<link rel="search" type="application/opensearchdescription+xml" href="https://pickpet171.wordpress.com/osd.xml" title="Pick Pet" />
<link rel="search" type="application/opensearchdescription+xml" href="https://s1.wp.com/opensearch.xml" title="WordPress.com" />
<meta name="application-name" content="Pick Pet" /><meta name="msapplication-window" content="width=device-width;height=device-height" /><meta name="msapplication-tooltip" content="Adoção e Divulgação" /><meta name="msapplication-task" content="name=Editar página;action-uri=https://wordpress.com/page/pickpet171.wordpress.com/465;icon-uri=https://s0.wp.com/i/icons/page.ico" /><meta name="msapplication-task" content="name=Escrever um post;action-uri=https://wordpress.com/post/pickpet171.wordpress.com;icon-uri=https://s0.wp.com/i/icons/post.ico" /><meta name="msapplication-task" content="name=Moderar comentários;action-uri=https://pickpet171.wordpress.com/wp-admin/edit-comments.php?comment_status=moderated;icon-uri=https://s0.wp.com/i/icons/comment.ico" /><meta name="msapplication-task" content="name=Fazer upload de nova mídia;action-uri=https://pickpet171.wordpress.com/wp-admin/media-new.php;icon-uri=https://s0.wp.com/i/icons/media.ico" /><meta name="msapplication-task" content="name=Estatística do blog;action-uri=https://pickpet171.wordpress.com/wp-admin/index.php?page=stats;icon-uri=https://s0.wp.com/i/icons/stats.ico" /><!-- Não existe versão amphtml disponível para essa URL. --><style type="text/css" media="print">#wpadminbar { display:none; }</style>
	<style type="text/css" media="screen">
	html { margin-top: 0px !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 46px !important; }
	}
</style>
	<link rel="icon" href="https://pickpet171.files.wordpress.com/2022/01/cropped-cropped-f97be788-a846-4448-a42d-72c410b6ff93-removebg-preview-1.png?w=32" sizes="32x32" />
<link rel="icon" href="https://pickpet171.files.wordpress.com/2022/01/cropped-cropped-f97be788-a846-4448-a42d-72c410b6ff93-removebg-preview-1.png?w=192" sizes="192x192" />
<link rel="apple-touch-icon" href="https://pickpet171.files.wordpress.com/2022/01/cropped-cropped-f97be788-a846-4448-a42d-72c410b6ff93-removebg-preview-1.png?w=180" />
<meta name="msapplication-TileImage" content="https://pickpet171.files.wordpress.com/2022/01/cropped-cropped-f97be788-a846-4448-a42d-72c410b6ff93-removebg-preview-1.png?w=213" />
</head>

<body class="page-template-default page page-id-465 logged-in admin-bar no-customize-support wp-custom-logo wp-embed-responsive singular image-filters-enabled hide-homepage-title  highlander-enabled highlander-light">

		

	
<script type="text/javascript">
/* <![CDATA[ */
var clickDebugLink;

jQuery(document).ready( function($) {
	var single = false, w = 1000,
		supe = false;

	$(document.body).load(function(){ $('#wpadminbar img.grav-hashed').removeClass('grav-hashed'); }); // hack to hide the gravatar hovercard

	if ( single && supe )
		w = 1385;
	else if ( supe )
		w = 1200;

	// debug bar extra
	clickDebugLink = function( parent_id, obj ) {

		$('#'+parent_id).children('div').hide();

		document.getElementById( obj.href.substr( obj.href.indexOf( '#' ) + 1 ) ).style.display = 'block';
		$( obj.href.substr( obj.href.indexOf( '#' ) ) ).show()

		$(obj).parent().addClass('current').siblings('li').removeClass('current');

		return false;
	};

	$( '#wpadminbar #wp-admin-bar-shortlink' ).click( function() {
		$( '#adminbar-shortlink-input' ).select();
	});

	// skip tap-to-hover on site switcher for mobile
	if ( 'ontouchstart' in window ) {
		$('#wp-admin-bar-switch-site').on( 'touchstart', function( event ) {
			if ( $( window ).width() > 782 ) {
				return;
			}
			event.stopPropagation();
			$( event.target ).first( 'a' ).click();
		});
	}

});
/* ]]> */
</script>
	<div class="wpcom-bubble action-bubble">
		<div class="bubble-txt"></div>
	</div>
	<script type="text/javascript">function hideBubble() { jQuery('body').append( jQuery( 'div.wpcom-bubble' ).removeClass( 'fadein' ) ).off( 'click.bubble touchstart.bubble' ); jQuery(document).off( 'scroll.bubble' ); };</script>
		<script type="text/javascript">
	jQuery( '#wp-admin-bar-jumptotop-button-menu a' ).click( function( e ) {
		e.preventDefault();
		jQuery( 'html, body' ).animate( { scrollTop: 0 }, 'fast' );
	} );
	function hideShowTbJumpToTop() {
		var total_width = 0;
		// Calculate total width taken by items minus our button to see if it'll
		// overlap with other toolbar menus.
		jQuery( '#wp-admin-bar-root-default > li' ).each( function() {
			var self = jQuery( this );
			if ( 'wp-admin-bar-jumptotop-button-menu' != self.attr( 'id' ) )
				total_width += self.width();
		});
		if ( jQuery( '#wp-admin-bar-jumptotop-button-menu' ).position()['left'] - total_width < 10 ) {
			jQuery( '#jumptotop' ).animate( { 'top': '-50px' }, 'fast' );
		} else if (  jQuery( window ).scrollTop() >= 350 && parseInt( jQuery( '#jumptotop' ).css( 'top' ) ) < 0 ) {
			if ( jQuery( '#wp-admin-bar-jumptotop-button-menu' ).position()['left'] - total_width < 10 )
			   return;
			jQuery( '#jumptotop' ).animate( { 'top': 0 }, 'fast' );
		} else if (  jQuery( window ).scrollTop() < 1 && parseInt( jQuery( '#jumptotop' ).css( 'top' ) ) >= 0 ) {
			jQuery( '#jumptotop' ).animate( { 'top': '-50px' }, 'fast' );
		}
	}
	// handle on page load if auto scrolling to a position
	hideShowTbJumpToTop();
	// bind to scrolll event
	var jumpToTopTimer = null;
	jQuery( window ).scroll( function() {
		clearTimeout( jumpToTopTimer );
		jumpToTopTimer = setTimeout( jumpToTopRefresh, 150 );
	} );
	var jumpToTopRefresh = function() {
		hideShowTbJumpToTop();
	};
	</script>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0.49803921568627" /><feFuncG type="table" tableValues="0 0.49803921568627" /><feFuncB type="table" tableValues="0 0.49803921568627" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-red"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 0.27843137254902" /><feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0" /><feFuncG type="table" tableValues="0 0.64705882352941" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.78039215686275 1" /><feFuncG type="table" tableValues="0 0.94901960784314" /><feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.44705882352941 0.4" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-orange"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.098039215686275 1" /><feFuncG type="table" tableValues="0 0.66274509803922" /><feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">Ir para conteúdo</a>

	<header id="masthead" class="site-header">
	<div class="site-branding">

			<div class="site-logo"><img width="346" height="201" src="https://pickpet171.files.wordpress.com/2022/01/cropped-cropped-f97be788-a846-4448-a42d-72c410b6ff93-removebg-preview.png" class="custom-logo" alt="Pick Pet" srcset="https://pickpet171.files.wordpress.com/2022/01/cropped-cropped-f97be788-a846-4448-a42d-72c410b6ff93-removebg-preview.png 346w, https://pickpet171.files.wordpress.com/2022/01/cropped-cropped-f97be788-a846-4448-a42d-72c410b6ff93-removebg-preview.png?w=150&amp;h=87 150w, https://pickpet171.files.wordpress.com/2022/01/cropped-cropped-f97be788-a846-4448-a42d-72c410b6ff93-removebg-preview.png?w=300&amp;h=174 300w" sizes="(max-width: 346px) 100vw, 346px" data-attachment-id="373" data-permalink="https://pickpet171.wordpress.com/cropped-cropped-f97be788-a846-4448-a42d-72c410b6ff93-removebg-preview-png/" data-orig-file="https://pickpet171.files.wordpress.com/2022/01/cropped-cropped-f97be788-a846-4448-a42d-72c410b6ff93-removebg-preview.png" data-orig-size="346,201" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="cropped-cropped-f97be788-a846-4448-a42d-72c410b6ff93-removebg-preview.png" data-image-description="&lt;p&gt;https://pickpet171.files.wordpress.com/2022/01/cropped-cropped-f97be788-a846-4448-a42d-72c410b6ff93-removebg-preview.png&lt;/p&gt;
" data-image-caption="" data-medium-file="https://pickpet171.files.wordpress.com/2022/01/cropped-cropped-f97be788-a846-4448-a42d-72c410b6ff93-removebg-preview.png?w=300" data-large-file="https://pickpet171.files.wordpress.com/2022/01/cropped-cropped-f97be788-a846-4448-a42d-72c410b6ff93-removebg-preview.png?w=346" /></a></div>
								<p class="site-title"><a href="https://pickpet171.wordpress.com/" rel="home">Pick Pet</a></p>
			
				<p class="site-description">
				Adoção e Divulgação			</p>
	</div><!-- .site-branding -->
		<nav id="site-navigation" class="main-navigation" aria-label="Navegação Principal">

		<input type="checkbox" role="button" aria-haspopup="true" id="toggle" class="hide-visually">
		<label for="toggle" id="toggle-menu" class="button">
			Menu			<span class="dropdown-icon open">+</span>
			<span class="dropdown-icon close">&times;</span>
			<span class="hide-visually expanded-text">expandido</span>
			<span class="hide-visually collapsed-text">fechado</span>
		</label>

		<div class="menu-principal-container"><ul id="menu-principal-1" class="main-menu" aria-label="submenu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-319"><a href="index.php">Página inicial</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-350"><a href="orientacoes.php">Cadastrar Pet</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-246"><a href="cachorros.php">Cachorros</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-247"><a href="gatinhos.php">Gatinhos</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-244"><a href="ongs_importantes.php">ONGs Importantes</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-264"><a href="quem_somos.php">Quem Somos?</a></li>
<?php

	if(isset($_SESSION['usuarioId'])){
		echo  "<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-264\"><a href=\"index.php\">";
		echo "Olá, " . $_SESSION['usuarioNome'] . "</a></li>";
		echo "<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-264\"><a href=\"sair.php\">Deseja sair?</a></li> ";
	}
?>

</ul></div>	</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

	<section id="primary" class="content-area">
	

			
<article id="post-465" class="post-465 page type-page status-draft hentry entry">


   
<form action="processan_adotar.php" method="POST">
<div class="limiter" id="login">
    <div class="container-login100" style="background-color: ghostwhite">
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-5 col-md-offset-1">
                    <div class="login_topimg" style="background-image:url(https://media.istockphoto.com/vectors/dog-paw-foot-print-cat-paw-puppy-kitten-cartoon-doodle-seamless-vector-id884079558?k=6&m=884079558&s=170667a&w=0&h=n9J6XUEotkhChXctg5-46pmH1MRJSsx3MYhaQ2MZEaw=)" > </div>
                    <div class="wrap-login100">
                        <center>
						  
                        <form class="login100-form validate-form"> <span class="login100-form-title "> Cadastrar Conta </span> <span class="login100-form-subtitle m-b-16"> Crie sua conta no PickPet </span>
                            <div class="wrap-input100 validate-input m-b-16" data-validate="Valid name is required"> <input type="text" name="nome" id="inputNome" class="input100"  placeholder="Nome Completo" required> <span class="focus-input100"></span> <span class="symbol-input100"> <span class="glyphicon glyphicon-user"></span> </span> </div>
							<div class="wrap-input100 validate-input m-b-16" data-validate="Valid email is required: ex@abc.xyz"> <input type="email" name="email" id="inputEmail" class="input100"  placeholder="Email" required> <span class="focus-input100"></span> <span class="symbol-input100"> <span class="glyphicon glyphicon-user"></span> </span> </div>
                            <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required"> <input type="password" name="senha" id="inputPassword" class="input100" placeholder="Senha" required> <span class="focus-input100"></span> <span class="symbol-input100"> <span class="glyphicon glyphicon-lock"></span> </span> </div>
                           
							 <?php
								if(isset($_SESSION['msg'])){
									echo $_SESSION['msg'];
									unset($_SESSION['msg']);
								}
							?>
							
							</center>
                            <div class="container-login100-form-btn p-t-25"> <button class="login100-form-btn"> Cadastrar </button> </div>
							
							<center><br><a href="login.php">Voltar para o login</a></center>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>	
    
   
        
 



	
	

</div><!-- #page -->


<!--  -->
	
			<script src='//0.gravatar.com/js/gprofiles.js?ver=202203y' id='grofiles-cards-js'></script>
<script id='wpgroho-js-extra'>
var WPGroHo = {"my_hash":"498df9a9fd2575b4ff5a34dfc002fc44"};
</script>
<script crossorigin='anonymous' type='text/javascript' src='https://s0.wp.com/wp-content/mu-plugins/gravatar-hovercards/wpgroho.js?m=1610363240h'></script>

	<script>
		// Initialize and attach hovercards to all gravatars
		( function() {
			function init() {
				if ( typeof Gravatar === 'undefined' ) {
					return;
				}

				if ( typeof Gravatar.init !== 'function' ) {
					return;
				}

				Gravatar.profile_cb = function ( hash, id ) {
					WPGroHo.syncProfileData( hash, id );
				};

				Gravatar.my_hash = WPGroHo.my_hash;
				Gravatar.init( 'body', '#wp-admin-bar-my-account' );
			}

			if ( document.readyState !== 'loading' ) {
				init();
			} else {
				document.addEventListener( 'DOMContentLoaded', init );
			}
		} )();
	</script>

		<div style="display:none">
	<div class="grofile-hash-map-498df9a9fd2575b4ff5a34dfc002fc44">
	</div>
	</div>
			
			
	
<script>
window.addEventListener( "load", function( event ) {
	var link = document.createElement( "link" );
	link.href = "https://s0.wp.com/wp-content/mu-plugins/actionbar/actionbar.css?v=20210915";
	link.type = "text/css";
	link.rel = "stylesheet";
	document.head.appendChild( link );

	var script = document.createElement( "script" );
	script.src = "https://s0.wp.com/wp-content/mu-plugins/actionbar/actionbar.js?v=20211028";
	script.defer = true;
	document.body.appendChild( script );
} );
</script>

	<link rel='stylesheet' id='all-css-0-2' href='https://s0.wp.com/_static/??/wp-content/mu-plugins/jetpack/_inc/blocks/button/view.css,/wp-content/mu-plugins/grunion-contact-form/css/grunion.css?m=1631286182j&cssminify=yes' type='text/css' media='all' />
<script id='thickbox-js-extra'>
var thickboxL10n = {"next":"Pr\u00f3ximo \u00bb","prev":"\u00ab Anterior","image":"Imagem","of":"de","close":"Fechar","noiframes":"Este recurso necessita frames em linha. Os iframes est\u00e3o desativados por voc\u00ea ou seu navegador n\u00e3o os suporta.","loadingAnimation":"https:\/\/s0.wp.com\/wp-includes\/js\/thickbox\/loadingAnimation.gif"};
</script>
<script id='comment-like-js-extra'>
var comment_like_text = {"loading":"Carregando...","swipeUrl":"https:\/\/s0.wp.com\/wp-content\/mu-plugins\/comment-likes\/js\/lib\/swipe.js?ver=20131008"};
</script>
<script id='notes-rest-common-js-extra'>
var wpNotesArgs = {"cacheBuster":"calypso-4917-3286-g69c83d04d2v2","iframeUrl":"https:\/\/widgets.wp.com\/notifications\/","iframeAppend":"2","iframeScroll":"no","wide":"1"};
</script>
<script id='tos-report-form-js-extra'>
var wpcom_tos_report_form = {"ajaxurl":"\/wp-admin\/admin-ajax.php","isLoggedoutUser":"","post_ID":"465","current_url":"https:\/\/pickpet171.wordpress.com","report_this_content":"Denunciar este conte\u00fado"};
</script>
<script crossorigin='anonymous' type='text/javascript' src='https://s0.wp.com/_static/??-eJyNkNFOwzAMRX8Ir9oQ03hAfEuaGJqutivHKft8km2MgbLBSxTnHudeu/uYwQsbsnVj6gIu0eN8WI3poStSZD/lgKlqNkS/7+VwubSgQRbUePwPxrSiyC3KhSJA7/Qa+IpBGeYpv0e+4oruheC773ZP4ai6T3F/Mvvx0EqTOaAmL4q38vauDszYiltkysmcH/BOKhbD8wk1kDAsmz/5y7z3YZMEirOowZso/a7/tWByyVCrlWmZtrmoUiL1GM5reKWX9fZx97x9Wu824ydfd9id'></script>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<script type="text/javascript">
// <![CDATA[
(function() {
try{
  if ( window.external &&'msIsSiteMode' in window.external) {
    if (window.external.msIsSiteMode()) {
      var jl = document.createElement('script');
      jl.type='text/javascript';
      jl.async=true;
      jl.src='/wp-content/plugins/ie-sitemode/custom-jumplist.php';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(jl, s);
    }
  }
}catch(e){}
})();
// ]]>
</script><script>
if ( 'object' === typeof wpcom_mobile_user_agent_info ) {

	wpcom_mobile_user_agent_info.init();
	var mobileStatsQueryString = "";
	
	if( false !== wpcom_mobile_user_agent_info.matchedPlatformName )
		mobileStatsQueryString += "&x_" + 'mobile_platforms' + '=' + wpcom_mobile_user_agent_info.matchedPlatformName;
	
	if( false !== wpcom_mobile_user_agent_info.matchedUserAgentName )
		mobileStatsQueryString += "&x_" + 'mobile_devices' + '=' + wpcom_mobile_user_agent_info.matchedUserAgentName;
	
	if( wpcom_mobile_user_agent_info.isIPad() )
		mobileStatsQueryString += "&x_" + 'ipad_views' + '=' + 'views';

	if( "" != mobileStatsQueryString ) {
		new Image().src = document.location.protocol + '//pixel.wp.com/g.gif?v=wpcom-no-pv' + mobileStatsQueryString + '&baba=' + Math.random();
	}
	
}
</script>
</body>
</html>

