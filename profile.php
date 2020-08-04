
<!doctype html><html lang="en-US"><head><meta charset="UTF-8"/><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={licenseKey:"NRJS-2daad049a5f06189192",applicationID:"320542214"};window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var i=n[t]={exports:{}};e[t][0].call(i.exports,function(n){var i=e[t][1][n];return r(i||n)},i,i.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<t.length;i++)r(t[i]);return r}({1:[function(e,n,t){function r(){}function i(e,n,t){return function(){return o(e,[u.now()].concat(f(arguments)),n?null:this,t),n?void 0:this}}var o=e("handle"),a=e(4),f=e(5),c=e("ee").get("tracer"),u=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",d=l+"ixn-";a(p,function(e,n){s[n]=i(l+n,!0,"api")}),s.addPageAction=i(l+"addPageAction",!0),s.setCurrentRouteName=i(l+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,i="function"==typeof n;return o(d+"tracer",[u.now(),e,t],r),function(){if(c.emit((i?"":"no-")+"fn-start",[u.now(),r,i],t),i)try{return n.apply(this,arguments)}catch(e){throw c.emit("fn-err",[arguments,this,e],t),e}finally{c.emit("fn-end",[u.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=i(d+n)}),newrelic.noticeError=function(e,n){"string"==typeof e&&(e=new Error(e)),o("err",[e,u.now(),!1,n])}},{}],2:[function(e,n,t){function r(e,n){var t=e.getEntries();t.forEach(function(e){"first-paint"===e.name?c("timing",["fp",Math.floor(e.startTime)]):"first-contentful-paint"===e.name&&c("timing",["fcp",Math.floor(e.startTime)])})}function i(e,n){var t=e.getEntries();t.length>0&&c("lcp",[t[t.length-1]])}function o(e){if(e instanceof s&&!l){var n,t=Math.round(e.timeStamp);n=t>1e12?Date.now()-t:u.now()-t,l=!0,c("timing",["fi",t,{type:e.type,fid:n}])}}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var a,f,c=e("handle"),u=e("loader"),s=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){a=new PerformanceObserver(r),f=new PerformanceObserver(i);try{a.observe({entryTypes:["paint"]}),f.observe({entryTypes:["largest-contentful-paint"]})}catch(p){}}if("addEventListener"in document){var l=!1,d=["click","keydown","mousedown","pointerdown","touchstart"];d.forEach(function(e){document.addEventListener(e,o,!1)})}}},{}],3:[function(e,n,t){function r(e,n){if(!i)return!1;if(e!==i)return!1;if(!n)return!0;if(!o)return!1;for(var t=o.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var f=navigator.userAgent,c=f.match(a);c&&f.indexOf("Chrome")===-1&&f.indexOf("Chromium")===-1&&(i="Safari",o=c[1])}n.exports={agent:i,version:o,match:r}},{}],4:[function(e,n,t){function r(e,n){var t=[],r="",o=0;for(r in e)i.call(e,r)&&(t[o]=n(r,e[r]),o+=1);return t}var i=Object.prototype.hasOwnProperty;n.exports=r},{}],5:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,i=t-n||0,o=Array(i<0?0:i);++r<i;)o[r]=e[n+r];return o}n.exports=r},{}],6:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function i(e){function n(e){return e&&e instanceof r?e:e?c(e,f,o):o()}function t(t,r,i,o){if(!l.aborted||o){e&&e(t,r,i);for(var a=n(i),f=v(t),c=f.length,u=0;u<c;u++)f[u].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function d(e,n){h[e]=v(e).concat(n)}function m(e,n){var t=h[e];if(t)for(var r=0;r<t.length;r++)t[r]===n&&t.splice(r,1)}function v(e){return h[e]||[]}function g(e){return p[e]=p[e]||i(t)}function w(e,n){u(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var h={},y={},b={on:d,addEventListener:d,removeEventListener:m,emit:t,get:g,listeners:v,context:n,buffer:w,abort:a,aborted:!1};return b}function o(){return new r}function a(){(s.api||s.feature)&&(l.aborted=!0,s=l.backlog={})}var f="nr@context",c=e("gos"),u=e(4),s={},p={},l=n.exports=i();l.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(i.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return e[n]=r,r}var i=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){i.buffer([e],r),i.emit(e,n,t)}var i=e("ee").get("handle");n.exports=r,r.ee=i},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,o,function(){return i++})}var i=1,o="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!x++){var e=E.info=NREUM.info,n=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();u(y,function(n,t){e[n]||(e[n]=t)}),c("mark",["onload",a()+E.offset],null,"api");var t=d.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function i(){"complete"===d.readyState&&o()}function o(){c("mark",["domContent",a()+E.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(f=Math.max((new Date).getTime(),f))-E.offset}var f=(new Date).getTime(),c=e("handle"),u=e(4),s=e("ee"),p=e(3),l=window,d=l.document,m="addEventListener",v="attachEvent",g=l.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:l.setImmediate,CT:clearTimeout,XHR:g,REQ:l.Request,EV:l.Event,PR:l.Promise,MO:l.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1173.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),E=n.exports={offset:f,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};e(1),e(2),d[m]?(d[m]("DOMContentLoaded",o,!1),l[m]("load",r,!1)):(d[v]("onreadystatechange",i),l[v]("onload",r)),c("mark",["firstbyte",f],null,"api");var x=0,O=e(6)},{}],"wrap-function":[function(e,n,t){function r(e){return!(e&&e instanceof Function&&e.apply&&!e[a])}var i=e("ee"),o=e(5),a="nr@original",f=Object.prototype.hasOwnProperty,c=!1;n.exports=function(e,n){function t(e,n,t,i){function nrWrapper(){var r,a,f,c;try{a=this,r=o(arguments),f="function"==typeof t?t(r,a):t||{}}catch(u){l([u,"",[r,a,i],f])}s(n+"start",[r,a,i],f);try{return c=e.apply(a,r)}catch(p){throw s(n+"err",[r,a,p],f),p}finally{s(n+"end",[r,a,c],f)}}return r(e)?e:(n||(n=""),nrWrapper[a]=e,p(e,nrWrapper),nrWrapper)}function u(e,n,i,o){i||(i="");var a,f,c,u="-"===i.charAt(0);for(c=0;c<n.length;c++)f=n[c],a=e[f],r(a)||(e[f]=t(a,u?f+i:i,o,f))}function s(t,r,i){if(!c||n){var o=c;c=!0;try{e.emit(t,r,i,n)}catch(a){l([a,t,r,i])}c=o}}function p(e,n){if(Object.defineProperty&&Object.keys)try{var t=Object.keys(e);return t.forEach(function(t){Object.defineProperty(n,t,{get:function(){return e[t]},set:function(n){return e[t]=n,n}})}),n}catch(r){l([r])}for(var i in e)f.call(e,i)&&(n[i]=e[i]);return n}function l(n){try{e.emit("internal-error",n)}catch(t){}}return e||(e=i),t.inPlace=u,t.flag=a,t}},{}]},{},["loader"]);</script><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><link rel="profile" href="https://gmpg.org/xfn/11"/><style type="text/css" media="all">img.wp-smiley,img.emoji{display:inline !important;border:0 !important;box-shadow:none !important;height:1em !important;width:1em !important;margin:0 .07em !important;vertical-align:-.1em !important;background:none !important;padding:0 !important}</style><link type="text/css" media="all" href="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/css/breeze_cf07de79cc294c50e394b4aa16099cec.css" rel="stylesheet" /><link type="text/css" media="all" href="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/css/breeze_c207f7aa1d09d631893b95e0ef7afe58.css" rel="stylesheet" /><link type="text/css" media="all" href="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/css/breeze_5a625f7100b0b0a4fde3444e3329311b.css" rel="stylesheet" /><link type="text/css" media="all" href="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/css/breeze_23c359a73e0fc19e70fa30f4dfa6c723.css" rel="stylesheet" /><link type="text/css" media="all" href="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/css/breeze_2c412053ffbc05b869ad75cb701c0e7d.css" rel="stylesheet" /><style type="text/css" media="all">.woocommerce form .form-row .required{visibility:visible}</style><link type="text/css" media="all" href="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/css/breeze_f83ce846bf273bbeee67e2b46b07397b.css" rel="stylesheet" /><link type="text/css" media="all" href="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/css/breeze_0eaff951907d9efd60f2ed0490119526.css" rel="stylesheet" /><link type="text/css" media="all" href="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/css/breeze_88fbf2906b2c9cfd3f05f875d88d2406.css" rel="stylesheet" /><link type="text/css" media="all" href="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/css/breeze_8ad7de9be39ab5bbb5902d4082d4d0d7.css" rel="stylesheet" /><link type="text/css" media="all" href="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/css/breeze_ae013f0aa08884d86e7e3ec529a1bb3d.css" rel="stylesheet" /><link type="text/css" media="all" href="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/css/breeze_80029d6c3eef3e2266e6b977686f0751.css" rel="stylesheet" /><link type="text/css" media="all" href="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/css/breeze_8057bcc08d59833e4998b8f8295c6eef.css" rel="stylesheet" /><style type="text/css" media="all"></style><link type="text/css" media="all" href="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/css/breeze_90507c7fcd340e0b2de60e7e06d5e234.css" rel="stylesheet" /><style type="text/css" media="all">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important}</style><title>My account &#8211; Lisfinity</title><link rel='dns-prefetch' href='//maps.googleapis.com' /><link rel='dns-prefetch' href='//fonts.googleapis.com' /><link rel='dns-prefetch' href='//s.w.org' /><link rel="alternate" type="application/rss+xml" title="Lisfinity &raquo; Feed" href="https://classic.lisfinity.com/feed/" /><link rel="alternate" type="application/rss+xml" title="Lisfinity &raquo; Comments Feed" href="https://classic.lisfinity.com/comments/feed/" /><link rel='stylesheet' id='google-material-icons-css'  href='https://fonts.googleapis.com/css?family=Material+Icons%7CMaterial+Icons+Outlined%7CMaterial+Icons+Two+Tone%7CMaterial+Icons+Round%7CMaterial+Icons+Sharp&#038;ver=5.4.2'  media='all' /><link rel='stylesheet' id='dashicons-css'  href='//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-includes/css/dashicons.min.css?ver=5.4.2'  media='all' /><link rel='stylesheet' id='style-lisfinity-core-colors-css'  href='https://classic.lisfinity.com/wp-content/plugins/lisfinity-core/templates/options/colors/colors.php?ver=5.4.2'  media='all' /><!--[if lt IE 8]> <script  src='//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-includes/js/json2.min.js?ver=2015-05-03'></script> <![endif]--><link rel='https://api.w.org/' href='https://classic.lisfinity.com/wp-json/' /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://classic.lisfinity.com/xmlrpc.php?rsd" /><link rel="wlwmanifest" type="application/wlwmanifest+xml" href="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-includes/wlwmanifest.xml" /><meta name="generator" content="WordPress 5.4.2" /><meta name="generator" content="WooCommerce 4.3.1" /><link rel="canonical" href="https://classic.lisfinity.com/my-account/" /><link rel='shortlink' href='https://classic.lisfinity.com/?p=8' /><link rel="alternate" type="application/json+oembed" href="https://classic.lisfinity.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fclassic.lisfinity.com%2Fmy-account%2F" /><link rel="alternate" type="text/xml+oembed" href="https://classic.lisfinity.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fclassic.lisfinity.com%2Fmy-account%2F&#038;format=xml" /><meta name="framework" content="Redux 4.1.11" /><noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript><meta name='robots' content='noindex,follow' /><div style="display:none;"><div id="wp-lisfinity_settings-wrap" class="wp-core-ui wp-editor-wrap tmce-active"><div id="wp-lisfinity_settings-editor-tools" class="wp-editor-tools hide-if-no-js"><div class="wp-editor-tabs"><button type="button" id="lisfinity_settings-tmce" class="wp-switch-editor switch-tmce" data-wp-editor-id="lisfinity_settings">Visual</button> <button type="button" id="lisfinity_settings-html" class="wp-switch-editor switch-html" data-wp-editor-id="lisfinity_settings">Text</button></div></div><div id="wp-lisfinity_settings-editor-container" class="wp-editor-container"><div id="qt_lisfinity_settings_toolbar" class="quicktags-toolbar"></div><textarea class="wp-editor-area" rows="20" autocomplete="off" cols="40" name="lisfinity_settings" id="lisfinity_settings"></textarea></div></div></div><link rel="icon" href="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2020/04/cropped-favicon-1-32x32.png" sizes="32x32" /><link rel="icon" href="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2020/04/cropped-favicon-1-192x192.png" sizes="192x192" /><link rel="apple-touch-icon" href="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2020/04/cropped-favicon-1-180x180.png" /><meta name="msapplication-TileImage" content="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2020/04/cropped-favicon-1-270x270.png" /> <script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_3359cf97bb5703e8f5ef3f4426b97415.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_49edccea2e7ba985cadc9ba0531cbed1.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_981130d60da5f1fed5127c7b1e7bf3f8.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_abdfea7c3e472ae61a64dfb541034b6c.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_f8194aa9b8c3e32240909370b75b834d.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_99a6d2033349657c4c384caa26e40afa.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_bc0591b8d0abebfb32714d709199f39e.js"></script></head><body class="page-template-default page page-id-8 logged-in theme-lisfinity woocommerce-account woocommerce-page woocommerce-no-js font-sans lisfinity-page-account elementor-default" itemscope="itemscope" itemtype="https://schema.org/WebPage"><div class="woocommerce"><div id="page-dashboard" data-options="{&quot;promotions&quot;:true,&quot;messenger&quot;:true,&quot;messenger_limit&quot;:&quot;300&quot;,&quot;messenger_note&quot;:&quot;You can be banned for violent messages.&quot;,&quot;messenger_note_translation&quot;:&quot;FAQ&quot;,&quot;logo_size&quot;:100,&quot;page_billing&quot;:true,&quot;page_shipping&quot;:true}"><div class="woocommerce-notices-wrapper"></div></div><div id="loader"
class="fixed top-0 left-0 w-full h-full flex-center loader loader__auth flex flex-col w-full bg-white"
style="z-index: 9999;"><div class="flex-center flex-col"> <img src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/plugins/lisfinity-core/dist/images/loader-rings.4bcf82c529.svg"
alt="Dashboard Loader"/><p class="mt-20 text-lg text-grey-900">Preparing dashboard...</p></div></div></div> <script type="text/html" id="tmpl-media-frame"><div class="media-frame-title" id="media-frame-title"></div>
		<h2 class="media-frame-menu-heading">Actions</h2>
		<button type="button" class="button button-link media-frame-menu-toggle" aria-expanded="false">
			Menu			<span class="dashicons dashicons-arrow-down" aria-hidden="true"></span>
		</button>
		<div class="media-frame-menu"></div>
		<div class="media-frame-tab-panel">
			<div class="media-frame-router"></div>
			<div class="media-frame-content"></div>
		</div>
		<h2 class="media-frame-actions-heading screen-reader-text">
		Selected media actions		</h2>
		<div class="media-frame-toolbar"></div>
		<div class="media-frame-uploader"></div></script> <script type="text/html" id="tmpl-media-modal"><div tabindex="0" class="media-modal wp-core-ui" role="dialog" aria-labelledby="media-frame-title">
			<# if ( data.hasCloseButton ) { #>
				<button type="button" class="media-modal-close"><span class="media-modal-icon"><span class="screen-reader-text">Close dialog</span></span></button>
			<# } #>
			<div class="media-modal-content" role="document"></div>
		</div>
		<div class="media-modal-backdrop"></div></script> <script type="text/html" id="tmpl-uploader-window"><div class="uploader-window-content">
			<div class="uploader-editor-title">Drop files to upload</div>
		</div></script> <script type="text/html" id="tmpl-uploader-editor"><div class="uploader-editor-content">
			<div class="uploader-editor-title">Drop files to upload</div>
		</div></script> <script type="text/html" id="tmpl-uploader-inline"><# var messageClass = data.message ? 'has-upload-message' : 'no-upload-message'; #>
		<# if ( data.canClose ) { #>
		<button class="close dashicons dashicons-no"><span class="screen-reader-text">Close uploader</span></button>
		<# } #>
		<div class="uploader-inline-content {{ messageClass }}">
		<# if ( data.message ) { #>
			<h2 class="upload-message">{{ data.message }}</h2>
		<# } #>
					<div class="upload-ui">
				<h2 class="upload-instructions drop-instructions">Drop files to upload</h2>
				<p class="upload-instructions drop-instructions">or</p>
				<button type="button" class="browser button button-hero">Select Files</button>
			</div>

			<div class="upload-inline-status"></div>

			<div class="post-upload-ui">
				
				<p class="max-upload-size">
				Maximum upload file size: 2 MB.				</p>

				<# if ( data.suggestedWidth && data.suggestedHeight ) { #>
					<p class="suggested-dimensions">
						Suggested image dimensions: {{data.suggestedWidth}} by {{data.suggestedHeight}} pixels.					</p>
				<# } #>

							</div>
				</div></script> <script type="text/html" id="tmpl-media-library-view-switcher"><a href="/my-account/account-edit/?mode=list" class="view-list">
			<span class="screen-reader-text">List View</span>
		</a>
		<a href="/my-account/account-edit/?mode=grid" class="view-grid current" aria-current="page">
			<span class="screen-reader-text">Grid View</span>
		</a></script> <script type="text/html" id="tmpl-uploader-status"><h2>Uploading</h2>
		<button type="button" class="button-link upload-dismiss-errors"><span class="screen-reader-text">Dismiss Errors</span></button>

		<div class="media-progress-bar"><div></div></div>
		<div class="upload-details">
			<span class="upload-count">
				<span class="upload-index"></span> / <span class="upload-total"></span>
			</span>
			<span class="upload-detail-separator">&ndash;</span>
			<span class="upload-filename"></span>
		</div>
		<div class="upload-errors"></div></script> <script type="text/html" id="tmpl-uploader-status-error"><span class="upload-error-filename">{{{ data.filename }}}</span>
		<span class="upload-error-message">{{ data.message }}</span></script> <script type="text/html" id="tmpl-edit-attachment-frame"><div class="edit-media-header">
			<button class="left dashicons"<# if ( ! data.hasPrevious ) { #> disabled<# } #>><span class="screen-reader-text">Edit previous media item</span></button>
			<button class="right dashicons"<# if ( ! data.hasNext ) { #> disabled<# } #>><span class="screen-reader-text">Edit next media item</span></button>
			<button type="button" class="media-modal-close"><span class="media-modal-icon"><span class="screen-reader-text">Close dialog</span></span></button>
		</div>
		<div class="media-frame-title"></div>
		<div class="media-frame-content"></div></script> <script type="text/html" id="tmpl-attachment-details-two-column"><div class="attachment-media-view {{ data.orientation }}">
			<h2 class="screen-reader-text">Attachment Preview</h2>
			<div class="thumbnail thumbnail-{{ data.type }}">
				<# if ( data.uploading ) { #>
					<div class="media-progress-bar"><div></div></div>
				<# } else if ( data.sizes && data.sizes.large ) { #>
					<img class="details-image" src="{{ data.sizes.large.url }}" draggable="false" alt="" />
				<# } else if ( data.sizes && data.sizes.full ) { #>
					<img class="details-image" src="{{ data.sizes.full.url }}" draggable="false" alt="" />
				<# } else if ( -1 === jQuery.inArray( data.type, [ 'audio', 'video' ] ) ) { #>
					<img class="details-image icon" src="{{ data.icon }}" draggable="false" alt="" />
				<# } #>

				<# if ( 'audio' === data.type ) { #>
				<div class="wp-media-wrapper">
					<audio style="visibility: hidden" controls class="wp-audio-shortcode" width="100%" preload="none">
						<source type="{{ data.mime }}" src="{{ data.url }}"/>
					</audio>
				</div>
				<# } else if ( 'video' === data.type ) {
					var w_rule = '';
					if ( data.width ) {
						w_rule = 'width: ' + data.width + 'px;';
					} else if ( wp.media.view.settings.contentWidth ) {
						w_rule = 'width: ' + wp.media.view.settings.contentWidth + 'px;';
					}
				#>
				<div style="{{ w_rule }}" class="wp-media-wrapper wp-video">
					<video controls="controls" class="wp-video-shortcode" preload="metadata"
						<# if ( data.width ) { #>width="{{ data.width }}"<# } #>
						<# if ( data.height ) { #>height="{{ data.height }}"<# } #>
						<# if ( data.image && data.image.src !== data.icon ) { #>poster="{{ data.image.src }}"<# } #>>
						<source type="{{ data.mime }}" src="{{ data.url }}"/>
					</video>
				</div>
				<# } #>

				<div class="attachment-actions">
					<# if ( 'image' === data.type && ! data.uploading && data.sizes && data.can.save ) { #>
					<button type="button" class="button edit-attachment">Edit Image</button>
					<# } else if ( 'pdf' === data.subtype && data.sizes ) { #>
					<p>Document Preview</p>
					<# } #>
				</div>
			</div>
		</div>
		<div class="attachment-info">
			<span class="settings-save-status" role="status">
				<span class="spinner"></span>
				<span class="saved">Saved.</span>
			</span>
			<div class="details">
				<h2 class="screen-reader-text">Details</h2>
				<div class="filename"><strong>File name:</strong> {{ data.filename }}</div>
				<div class="filename"><strong>File type:</strong> {{ data.mime }}</div>
				<div class="uploaded"><strong>Uploaded on:</strong> {{ data.dateFormatted }}</div>

				<div class="file-size"><strong>File size:</strong> {{ data.filesizeHumanReadable }}</div>
				<# if ( 'image' === data.type && ! data.uploading ) { #>
					<# if ( data.width && data.height ) { #>
						<div class="dimensions"><strong>Dimensions:</strong>
							{{ data.width }} by {{ data.height }} pixels						</div>
					<# } #>

					<# if ( data.originalImageURL && data.originalImageName ) { #>
						Original image:						<a href="{{ data.originalImageURL }}">{{data.originalImageName}}</a>
					<# } #>
				<# } #>

				<# if ( data.fileLength && data.fileLengthHumanReadable ) { #>
					<div class="file-length"><strong>Length:</strong>
						<span aria-hidden="true">{{ data.fileLength }}</span>
						<span class="screen-reader-text">{{ data.fileLengthHumanReadable }}</span>
					</div>
				<# } #>

				<# if ( 'audio' === data.type && data.meta.bitrate ) { #>
					<div class="bitrate">
						<strong>Bitrate:</strong> {{ Math.round( data.meta.bitrate / 1000 ) }}kb/s
						<# if ( data.meta.bitrate_mode ) { #>
						{{ ' ' + data.meta.bitrate_mode.toUpperCase() }}
						<# } #>
					</div>
				<# } #>

				<div class="compat-meta">
					<# if ( data.compat && data.compat.meta ) { #>
						{{{ data.compat.meta }}}
					<# } #>
				</div>
			</div>

			<div class="settings">
				<# var maybeReadOnly = data.can.save || data.allowLocalEdits ? '' : 'readonly'; #>
				<# if ( 'image' === data.type ) { #>
					<span class="setting has-description" data-setting="alt">
						<label for="attachment-details-two-column-alt-text" class="name">Alternative Text</label>
						<input type="text" id="attachment-details-two-column-alt-text" value="{{ data.alt }}" aria-describedby="alt-text-description" {{ maybeReadOnly }} />
					</span>
					<p class="description" id="alt-text-description"><a href="https://www.w3.org/WAI/tutorials/images/decision-tree" target="_blank" rel="noopener noreferrer">Describe the purpose of the image<span class="screen-reader-text"> (opens in a new tab)</span></a>. Leave empty if the image is purely decorative.</p>
				<# } #>
								<span class="setting" data-setting="title">
					<label for="attachment-details-two-column-title" class="name">Title</label>
					<input type="text" id="attachment-details-two-column-title" value="{{ data.title }}" {{ maybeReadOnly }} />
				</span>
								<# if ( 'audio' === data.type ) { #>
								<span class="setting" data-setting="artist">
					<label for="attachment-details-two-column-artist" class="name">Artist</label>
					<input type="text" id="attachment-details-two-column-artist" value="{{ data.artist || data.meta.artist || '' }}" />
				</span>
								<span class="setting" data-setting="album">
					<label for="attachment-details-two-column-album" class="name">Album</label>
					<input type="text" id="attachment-details-two-column-album" value="{{ data.album || data.meta.album || '' }}" />
				</span>
								<# } #>
				<span class="setting" data-setting="caption">
					<label for="attachment-details-two-column-caption" class="name">Caption</label>
					<textarea id="attachment-details-two-column-caption" {{ maybeReadOnly }}>{{ data.caption }}</textarea>
				</span>
				<span class="setting" data-setting="description">
					<label for="attachment-details-two-column-description" class="name">Description</label>
					<textarea id="attachment-details-two-column-description" {{ maybeReadOnly }}>{{ data.description }}</textarea>
				</span>
				<span class="setting">
					<span class="name">Uploaded By</span>
					<span class="value">{{ data.authorName }}</span>
				</span>
				<# if ( data.uploadedToTitle ) { #>
					<span class="setting">
						<span class="name">Uploaded To</span>
						<# if ( data.uploadedToLink ) { #>
							<span class="value"><a href="{{ data.uploadedToLink }}">{{ data.uploadedToTitle }}</a></span>
						<# } else { #>
							<span class="value">{{ data.uploadedToTitle }}</span>
						<# } #>
					</span>
				<# } #>
				<span class="setting" data-setting="url">
					<label for="attachment-details-two-column-copy-link" class="name">Copy Link</label>
					<input type="text" id="attachment-details-two-column-copy-link" value="{{ data.url }}" readonly />
				</span>
				<div class="attachment-compat"></div>
			</div>

			<div class="actions">
				<a class="view-attachment" href="{{ data.link }}">View attachment page</a>
				<# if ( data.can.save ) { #> |
					<a href="{{ data.editLink }}">Edit more details</a>
				<# } #>
				<# if ( ! data.uploading && data.can.remove ) { #> |
											<button type="button" class="button-link delete-attachment">Delete Permanently</button>
									<# } #>
			</div>
		</div></script> <script type="text/html" id="tmpl-attachment"><div class="attachment-preview js--select-attachment type-{{ data.type }} subtype-{{ data.subtype }} {{ data.orientation }}">
			<div class="thumbnail">
				<# if ( data.uploading ) { #>
					<div class="media-progress-bar"><div style="width: {{ data.percent }}%"></div></div>
				<# } else if ( 'image' === data.type && data.sizes ) { #>
					<div class="centered">
						<img src="{{ data.size.url }}" draggable="false" alt="" />
					</div>
				<# } else { #>
					<div class="centered">
						<# if ( data.image && data.image.src && data.image.src !== data.icon ) { #>
							<img src="{{ data.image.src }}" class="thumbnail" draggable="false" alt="" />
						<# } else if ( data.sizes && data.sizes.medium ) { #>
							<img src="{{ data.sizes.medium.url }}" class="thumbnail" draggable="false" alt="" />
						<# } else { #>
							<img src="{{ data.icon }}" class="icon" draggable="false" alt="" />
						<# } #>
					</div>
					<div class="filename">
						<div>{{ data.filename }}</div>
					</div>
				<# } #>
			</div>
			<# if ( data.buttons.close ) { #>
				<button type="button" class="button-link attachment-close media-modal-icon"><span class="screen-reader-text">Remove</span></button>
			<# } #>
		</div>
		<# if ( data.buttons.check ) { #>
			<button type="button" class="check" tabindex="-1"><span class="media-modal-icon"></span><span class="screen-reader-text">Deselect</span></button>
		<# } #>
		<#
		var maybeReadOnly = data.can.save || data.allowLocalEdits ? '' : 'readonly';
		if ( data.describe ) {
			if ( 'image' === data.type ) { #>
				<input type="text" value="{{ data.caption }}" class="describe" data-setting="caption"
					aria-label="Caption"
					placeholder="Caption&hellip;" {{ maybeReadOnly }} />
			<# } else { #>
				<input type="text" value="{{ data.title }}" class="describe" data-setting="title"
					<# if ( 'video' === data.type ) { #>
						aria-label="Video title"
						placeholder="Video title&hellip;"
					<# } else if ( 'audio' === data.type ) { #>
						aria-label="Audio title"
						placeholder="Audio title&hellip;"
					<# } else { #>
						aria-label="Media title"
						placeholder="Media title&hellip;"
					<# } #> {{ maybeReadOnly }} />
			<# }
		} #></script> <script type="text/html" id="tmpl-attachment-details"><h2>
			Attachment Details			<span class="settings-save-status" role="status">
				<span class="spinner"></span>
				<span class="saved">Saved.</span>
			</span>
		</h2>
		<div class="attachment-info">
			<div class="thumbnail thumbnail-{{ data.type }}">
				<# if ( data.uploading ) { #>
					<div class="media-progress-bar"><div></div></div>
				<# } else if ( 'image' === data.type && data.sizes ) { #>
					<img src="{{ data.size.url }}" draggable="false" alt="" />
				<# } else { #>
					<img src="{{ data.icon }}" class="icon" draggable="false" alt="" />
				<# } #>
			</div>
			<div class="details">
				<div class="filename">{{ data.filename }}</div>
				<div class="uploaded">{{ data.dateFormatted }}</div>

				<div class="file-size">{{ data.filesizeHumanReadable }}</div>
				<# if ( 'image' === data.type && ! data.uploading ) { #>
					<# if ( data.width && data.height ) { #>
						<div class="dimensions">
							{{ data.width }} by {{ data.height }} pixels						</div>
					<# } #>

					<# if ( data.originalImageURL && data.originalImageName ) { #>
						Original image:						<a href="{{ data.originalImageURL }}">{{data.originalImageName}}</a>
					<# } #>

					<# if ( data.can.save && data.sizes ) { #>
						<a class="edit-attachment" href="{{ data.editLink }}&amp;image-editor" target="_blank">Edit Image</a>
					<# } #>
				<# } #>

				<# if ( data.fileLength && data.fileLengthHumanReadable ) { #>
					<div class="file-length">Length:						<span aria-hidden="true">{{ data.fileLength }}</span>
						<span class="screen-reader-text">{{ data.fileLengthHumanReadable }}</span>
					</div>
				<# } #>

				<# if ( ! data.uploading && data.can.remove ) { #>
											<button type="button" class="button-link delete-attachment">Delete Permanently</button>
									<# } #>

				<div class="compat-meta">
					<# if ( data.compat && data.compat.meta ) { #>
						{{{ data.compat.meta }}}
					<# } #>
				</div>
			</div>
		</div>
		<# var maybeReadOnly = data.can.save || data.allowLocalEdits ? '' : 'readonly'; #>
		<# if ( 'image' === data.type ) { #>
			<span class="setting has-description" data-setting="alt">
				<label for="attachment-details-alt-text" class="name">Alt Text</label>
				<input type="text" id="attachment-details-alt-text" value="{{ data.alt }}" aria-describedby="alt-text-description" {{ maybeReadOnly }} />
			</span>
			<p class="description" id="alt-text-description"><a href="https://www.w3.org/WAI/tutorials/images/decision-tree" target="_blank" rel="noopener noreferrer">Describe the purpose of the image<span class="screen-reader-text"> (opens in a new tab)</span></a>. Leave empty if the image is purely decorative.</p>
		<# } #>
				<span class="setting" data-setting="title">
			<label for="attachment-details-title" class="name">Title</label>
			<input type="text" id="attachment-details-title" value="{{ data.title }}" {{ maybeReadOnly }} />
		</span>
				<# if ( 'audio' === data.type ) { #>
				<span class="setting" data-setting="artist">
			<label for="attachment-details-artist" class="name">Artist</label>
			<input type="text" id="attachment-details-artist" value="{{ data.artist || data.meta.artist || '' }}" />
		</span>
				<span class="setting" data-setting="album">
			<label for="attachment-details-album" class="name">Album</label>
			<input type="text" id="attachment-details-album" value="{{ data.album || data.meta.album || '' }}" />
		</span>
				<# } #>
		<span class="setting" data-setting="caption">
			<label for="attachment-details-caption" class="name">Caption</label>
			<textarea id="attachment-details-caption" {{ maybeReadOnly }}>{{ data.caption }}</textarea>
		</span>
		<span class="setting" data-setting="description">
			<label for="attachment-details-description" class="name">Description</label>
			<textarea id="attachment-details-description" {{ maybeReadOnly }}>{{ data.description }}</textarea>
		</span>
		<span class="setting" data-setting="url">
			<label for="attachment-details-copy-link" class="name">Copy Link</label>
			<input type="text" id="attachment-details-copy-link" value="{{ data.url }}" readonly />
		</span></script> <script type="text/html" id="tmpl-media-selection"><div class="selection-info">
			<span class="count"></span>
			<# if ( data.editable ) { #>
				<button type="button" class="button-link edit-selection">Edit Selection</button>
			<# } #>
			<# if ( data.clearable ) { #>
				<button type="button" class="button-link clear-selection">Clear</button>
			<# } #>
		</div>
		<div class="selection-view"></div></script> <script type="text/html" id="tmpl-attachment-display-settings"><h2>Attachment Display Settings</h2>

		<# if ( 'image' === data.type ) { #>
			<span class="setting align">
				<label for="attachment-display-settings-alignment" class="name">Alignment</label>
				<select id="attachment-display-settings-alignment" class="alignment"
					data-setting="align"
					<# if ( data.userSettings ) { #>
						data-user-setting="align"
					<# } #>>

					<option value="left">
						Left					</option>
					<option value="center">
						Center					</option>
					<option value="right">
						Right					</option>
					<option value="none" selected>
						None					</option>
				</select>
			</span>
		<# } #>

		<span class="setting">
			<label for="attachment-display-settings-link-to" class="name">
				<# if ( data.model.canEmbed ) { #>
					Embed or Link				<# } else { #>
					Link To				<# } #>
			</label>
			<select id="attachment-display-settings-link-to" class="link-to"
				data-setting="link"
				<# if ( data.userSettings && ! data.model.canEmbed ) { #>
					data-user-setting="urlbutton"
				<# } #>>

			<# if ( data.model.canEmbed ) { #>
				<option value="embed" selected>
					Embed Media Player				</option>
				<option value="file">
			<# } else { #>
				<option value="none" selected>
					None				</option>
				<option value="file">
			<# } #>
				<# if ( data.model.canEmbed ) { #>
					Link to Media File				<# } else { #>
					Media File				<# } #>
				</option>
				<option value="post">
				<# if ( data.model.canEmbed ) { #>
					Link to Attachment Page				<# } else { #>
					Attachment Page				<# } #>
				</option>
			<# if ( 'image' === data.type ) { #>
				<option value="custom">
					Custom URL				</option>
			<# } #>
			</select>
		</span>
		<span class="setting">
			<label for="attachment-display-settings-link-to-custom" class="name">URL</label>
			<input type="text" id="attachment-display-settings-link-to-custom" class="link-to-custom" data-setting="linkUrl" />
		</span>

		<# if ( 'undefined' !== typeof data.sizes ) { #>
			<span class="setting">
				<label for="attachment-display-settings-size" class="name">Size</label>
				<select id="attachment-display-settings-size" class="size" name="size"
					data-setting="size"
					<# if ( data.userSettings ) { #>
						data-user-setting="imgsize"
					<# } #>>
											<#
						var size = data.sizes['thumbnail'];
						if ( size ) { #>
							<option value="thumbnail" >
								Thumbnail &ndash; {{ size.width }} &times; {{ size.height }}
							</option>
						<# } #>
											<#
						var size = data.sizes['medium'];
						if ( size ) { #>
							<option value="medium" >
								Medium &ndash; {{ size.width }} &times; {{ size.height }}
							</option>
						<# } #>
											<#
						var size = data.sizes['large'];
						if ( size ) { #>
							<option value="large" >
								Large &ndash; {{ size.width }} &times; {{ size.height }}
							</option>
						<# } #>
											<#
						var size = data.sizes['full'];
						if ( size ) { #>
							<option value="full"  selected='selected'>
								Full Size &ndash; {{ size.width }} &times; {{ size.height }}
							</option>
						<# } #>
									</select>
			</span>
		<# } #></script> <script type="text/html" id="tmpl-gallery-settings"><h2>Gallery Settings</h2>

		<span class="setting">
			<label for="gallery-settings-link-to" class="name">Link To</label>
			<select id="gallery-settings-link-to" class="link-to"
				data-setting="link"
				<# if ( data.userSettings ) { #>
					data-user-setting="urlbutton"
				<# } #>>

				<option value="post" <# if ( ! wp.media.galleryDefaults.link || 'post' == wp.media.galleryDefaults.link ) {
					#>selected="selected"<# }
				#>>
					Attachment Page				</option>
				<option value="file" <# if ( 'file' == wp.media.galleryDefaults.link ) { #>selected="selected"<# } #>>
					Media File				</option>
				<option value="none" <# if ( 'none' == wp.media.galleryDefaults.link ) { #>selected="selected"<# } #>>
					None				</option>
			</select>
		</span>

		<span class="setting">
			<label for="gallery-settings-columns" class="name select-label-inline">Columns</label>
			<select id="gallery-settings-columns" class="columns" name="columns"
				data-setting="columns">
									<option value="1" <#
						if ( 1 == wp.media.galleryDefaults.columns ) { #>selected="selected"<# }
					#>>
						1					</option>
									<option value="2" <#
						if ( 2 == wp.media.galleryDefaults.columns ) { #>selected="selected"<# }
					#>>
						2					</option>
									<option value="3" <#
						if ( 3 == wp.media.galleryDefaults.columns ) { #>selected="selected"<# }
					#>>
						3					</option>
									<option value="4" <#
						if ( 4 == wp.media.galleryDefaults.columns ) { #>selected="selected"<# }
					#>>
						4					</option>
									<option value="5" <#
						if ( 5 == wp.media.galleryDefaults.columns ) { #>selected="selected"<# }
					#>>
						5					</option>
									<option value="6" <#
						if ( 6 == wp.media.galleryDefaults.columns ) { #>selected="selected"<# }
					#>>
						6					</option>
									<option value="7" <#
						if ( 7 == wp.media.galleryDefaults.columns ) { #>selected="selected"<# }
					#>>
						7					</option>
									<option value="8" <#
						if ( 8 == wp.media.galleryDefaults.columns ) { #>selected="selected"<# }
					#>>
						8					</option>
									<option value="9" <#
						if ( 9 == wp.media.galleryDefaults.columns ) { #>selected="selected"<# }
					#>>
						9					</option>
							</select>
		</span>

		<span class="setting">
			<input type="checkbox" id="gallery-settings-random-order" data-setting="_orderbyRandom" />
			<label for="gallery-settings-random-order" class="checkbox-label-inline">Random Order</label>
		</span>

		<span class="setting size">
			<label for="gallery-settings-size" class="name">Size</label>
			<select id="gallery-settings-size" class="size" name="size"
				data-setting="size"
				<# if ( data.userSettings ) { #>
					data-user-setting="imgsize"
				<# } #>
				>
									<option value="thumbnail">
						Thumbnail					</option>
									<option value="medium">
						Medium					</option>
									<option value="large">
						Large					</option>
									<option value="full">
						Full Size					</option>
							</select>
		</span></script> <script type="text/html" id="tmpl-playlist-settings"><h2>Playlist Settings</h2>

		<# var emptyModel = _.isEmpty( data.model ),
			isVideo = 'video' === data.controller.get('library').props.get('type'); #>

		<span class="setting">
			<input type="checkbox" id="playlist-settings-show-list" data-setting="tracklist" <# if ( emptyModel ) { #>
				checked="checked"
			<# } #> />
			<label for="playlist-settings-show-list" class="checkbox-label-inline">
				<# if ( isVideo ) { #>
				Show Video List				<# } else { #>
				Show Tracklist				<# } #>
			</label>
		</span>

		<# if ( ! isVideo ) { #>
		<span class="setting">
			<input type="checkbox" id="playlist-settings-show-artist" data-setting="artists" <# if ( emptyModel ) { #>
				checked="checked"
			<# } #> />
			<label for="playlist-settings-show-artist" class="checkbox-label-inline">
				Show Artist Name in Tracklist			</label>
		</span>
		<# } #>

		<span class="setting">
			<input type="checkbox" id="playlist-settings-show-images" data-setting="images" <# if ( emptyModel ) { #>
				checked="checked"
			<# } #> />
			<label for="playlist-settings-show-images" class="checkbox-label-inline">
				Show Images			</label>
		</span></script> <script type="text/html" id="tmpl-embed-link-settings"><span class="setting link-text">
			<label for="embed-link-settings-link-text" class="name">Link Text</label>
			<input type="text" id="embed-link-settings-link-text" class="alignment" data-setting="linkText" />
		</span>
		<div class="embed-container" style="display: none;">
			<div class="embed-preview"></div>
		</div></script> <script type="text/html" id="tmpl-embed-image-settings"><div class="wp-clearfix">
			<div class="thumbnail">
				<img src="{{ data.model.url }}" draggable="false" alt="" />
			</div>
		</div>

		<span class="setting alt-text has-description">
			<label for="embed-image-settings-alt-text" class="name">Alternative Text</label>
			<input type="text" id="embed-image-settings-alt-text" data-setting="alt" aria-describedby="alt-text-description" />
		</span>
		<p class="description" id="alt-text-description"><a href="https://www.w3.org/WAI/tutorials/images/decision-tree" target="_blank" rel="noopener noreferrer">Describe the purpose of the image<span class="screen-reader-text"> (opens in a new tab)</span></a>. Leave empty if the image is purely decorative.</p>

					<span class="setting caption">
				<label for="embed-image-settings-caption" class="name">Caption</label>
				<textarea id="embed-image-settings-caption" data-setting="caption" />
			</span>
		
		<fieldset class="setting-group">
			<legend class="name">Align</legend>
			<span class="setting align">
				<span class="button-group button-large" data-setting="align">
					<button class="button" value="left">
						Left					</button>
					<button class="button" value="center">
						Center					</button>
					<button class="button" value="right">
						Right					</button>
					<button class="button active" value="none">
						None					</button>
				</span>
			</span>
		</fieldset>

		<fieldset class="setting-group">
			<legend class="name">Link To</legend>
			<span class="setting link-to">
				<span class="button-group button-large" data-setting="link">
					<button class="button" value="file">
						Image URL					</button>
					<button class="button" value="custom">
						Custom URL					</button>
					<button class="button active" value="none">
						None					</button>
				</span>
			</span>
			<span class="setting">
				<label for="embed-image-settings-link-to-custom" class="name">URL</label>
				<input type="text" id="embed-image-settings-link-to-custom" class="link-to-custom" data-setting="linkUrl" />
			</span>
		</fieldset></script> <script type="text/html" id="tmpl-image-details"><div class="media-embed">
			<div class="embed-media-settings">
				<div class="column-settings">
					<span class="setting alt-text has-description">
						<label for="image-details-alt-text" class="name">Alternative Text</label>
						<input type="text" id="image-details-alt-text" data-setting="alt" value="{{ data.model.alt }}" aria-describedby="alt-text-description" />
					</span>
					<p class="description" id="alt-text-description"><a href="https://www.w3.org/WAI/tutorials/images/decision-tree" target="_blank" rel="noopener noreferrer">Describe the purpose of the image<span class="screen-reader-text"> (opens in a new tab)</span></a>. Leave empty if the image is purely decorative.</p>

											<span class="setting caption">
							<label for="image-details-caption" class="name">Caption</label>
							<textarea id="image-details-caption" data-setting="caption">{{ data.model.caption }}</textarea>
						</span>
					
					<h2>Display Settings</h2>
					<fieldset class="setting-group">
						<legend class="legend-inline">Align</legend>
						<span class="setting align">
							<span class="button-group button-large" data-setting="align">
								<button class="button" value="left">
									Left								</button>
								<button class="button" value="center">
									Center								</button>
								<button class="button" value="right">
									Right								</button>
								<button class="button active" value="none">
									None								</button>
							</span>
						</span>
					</fieldset>

					<# if ( data.attachment ) { #>
						<# if ( 'undefined' !== typeof data.attachment.sizes ) { #>
							<span class="setting size">
								<label for="image-details-size" class="name">Size</label>
								<select id="image-details-size" class="size" name="size"
									data-setting="size"
									<# if ( data.userSettings ) { #>
										data-user-setting="imgsize"
									<# } #>>
																			<#
										var size = data.sizes['thumbnail'];
										if ( size ) { #>
											<option value="thumbnail">
												Thumbnail &ndash; {{ size.width }} &times; {{ size.height }}
											</option>
										<# } #>
																			<#
										var size = data.sizes['medium'];
										if ( size ) { #>
											<option value="medium">
												Medium &ndash; {{ size.width }} &times; {{ size.height }}
											</option>
										<# } #>
																			<#
										var size = data.sizes['large'];
										if ( size ) { #>
											<option value="large">
												Large &ndash; {{ size.width }} &times; {{ size.height }}
											</option>
										<# } #>
																			<#
										var size = data.sizes['full'];
										if ( size ) { #>
											<option value="full">
												Full Size &ndash; {{ size.width }} &times; {{ size.height }}
											</option>
										<# } #>
																		<option value="custom">
										Custom Size									</option>
								</select>
							</span>
						<# } #>
							<div class="custom-size wp-clearfix<# if ( data.model.size !== 'custom' ) { #> hidden<# } #>">
								<span class="custom-size-setting">
									<label for="image-details-size-width">Width</label>
									<input type="number" id="image-details-size-width" aria-describedby="image-size-desc" data-setting="customWidth" step="1" value="{{ data.model.customWidth }}" />
								</span>
								<span class="sep" aria-hidden="true">&times;</span>
								<span class="custom-size-setting">
									<label for="image-details-size-height">Height</label>
									<input type="number" id="image-details-size-height" aria-describedby="image-size-desc" data-setting="customHeight" step="1" value="{{ data.model.customHeight }}" />
								</span>
								<p id="image-size-desc" class="description">Image size in pixels</p>
							</div>
					<# } #>

					<span class="setting link-to">
						<label for="image-details-link-to" class="name">Link To</label>
						<select id="image-details-link-to" data-setting="link">
						<# if ( data.attachment ) { #>
							<option value="file">
								Media File							</option>
							<option value="post">
								Attachment Page							</option>
						<# } else { #>
							<option value="file">
								Image URL							</option>
						<# } #>
							<option value="custom">
								Custom URL							</option>
							<option value="none">
								None							</option>
						</select>
					</span>
					<span class="setting">
						<label for="image-details-link-to-custom" class="name">URL</label>
						<input type="text" id="image-details-link-to-custom" class="link-to-custom" data-setting="linkUrl" />
					</span>

					<div class="advanced-section">
						<h2><button type="button" class="button-link advanced-toggle">Advanced Options</button></h2>
						<div class="advanced-settings hidden">
							<div class="advanced-image">
								<span class="setting title-text">
									<label for="image-details-title-attribute" class="name">Image Title Attribute</label>
									<input type="text" id="image-details-title-attribute" data-setting="title" value="{{ data.model.title }}" />
								</span>
								<span class="setting extra-classes">
									<label for="image-details-css-class" class="name">Image CSS Class</label>
									<input type="text" id="image-details-css-class" data-setting="extraClasses" value="{{ data.model.extraClasses }}" />
								</span>
							</div>
							<div class="advanced-link">
								<span class="setting link-target">
									<input type="checkbox" id="image-details-link-target" data-setting="linkTargetBlank" value="_blank" <# if ( data.model.linkTargetBlank ) { #>checked="checked"<# } #>>
									<label for="image-details-link-target" class="checkbox-label">Open link in a new tab</label>
								</span>
								<span class="setting link-rel">
									<label for="image-details-link-rel" class="name">Link Rel</label>
									<input type="text" id="image-details-link-rel" data-setting="linkRel" value="{{ data.model.linkRel }}" />
								</span>
								<span class="setting link-class-name">
									<label for="image-details-link-css-class" class="name">Link CSS Class</label>
									<input type="text" id="image-details-link-css-class" data-setting="linkClassName" value="{{ data.model.linkClassName }}" />
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="column-image">
					<div class="image">
						<img src="{{ data.model.url }}" draggable="false" alt="" />
						<# if ( data.attachment && window.imageEdit ) { #>
							<div class="actions">
								<input type="button" class="edit-attachment button" value="Edit Original" />
								<input type="button" class="replace-attachment button" value="Replace" />
							</div>
						<# } #>
					</div>
				</div>
			</div>
		</div></script> <script type="text/html" id="tmpl-image-editor"><div id="media-head-{{ data.id }}"></div>
		<div id="image-editor-{{ data.id }}"></div></script> <script type="text/html" id="tmpl-audio-details"><# var ext, html5types = {
			mp3: wp.media.view.settings.embedMimes.mp3,
			ogg: wp.media.view.settings.embedMimes.ogg
		}; #>

				<div class="media-embed media-embed-details">
			<div class="embed-media-settings embed-audio-settings">
				<audio style="visibility: hidden"
	controls
	class="wp-audio-shortcode"
	width="{{ _.isUndefined( data.model.width ) ? 400 : data.model.width }}"
	preload="{{ _.isUndefined( data.model.preload ) ? 'none' : data.model.preload }}"
	<#
		if ( ! _.isUndefined( data.model.autoplay ) && data.model.autoplay ) {
		#> autoplay<#
	}
		if ( ! _.isUndefined( data.model.loop ) && data.model.loop ) {
		#> loop<#
	}
	#>
>
	<# if ( ! _.isEmpty( data.model.src ) ) { #>
	<source src="{{ data.model.src }}" type="{{ wp.media.view.settings.embedMimes[ data.model.src.split('.').pop() ] }}" />
	<# } #>

		<# if ( ! _.isEmpty( data.model.mp3 ) ) { #>
	<source src="{{ data.model.mp3 }}" type="{{ wp.media.view.settings.embedMimes[ 'mp3' ] }}" />
	<# } #>
			<# if ( ! _.isEmpty( data.model.ogg ) ) { #>
	<source src="{{ data.model.ogg }}" type="{{ wp.media.view.settings.embedMimes[ 'ogg' ] }}" />
	<# } #>
			<# if ( ! _.isEmpty( data.model.flac ) ) { #>
	<source src="{{ data.model.flac }}" type="{{ wp.media.view.settings.embedMimes[ 'flac' ] }}" />
	<# } #>
			<# if ( ! _.isEmpty( data.model.m4a ) ) { #>
	<source src="{{ data.model.m4a }}" type="{{ wp.media.view.settings.embedMimes[ 'm4a' ] }}" />
	<# } #>
			<# if ( ! _.isEmpty( data.model.wav ) ) { #>
	<source src="{{ data.model.wav }}" type="{{ wp.media.view.settings.embedMimes[ 'wav' ] }}" />
	<# } #>
		</audio>
	
				<# if ( ! _.isEmpty( data.model.src ) ) {
					ext = data.model.src.split('.').pop();
					if ( html5types[ ext ] ) {
						delete html5types[ ext ];
					}
				#>
				<span class="setting">
					<label for="audio-details-source" class="name">URL</label>
					<input type="text" id="audio-details-source" readonly data-setting="src" value="{{ data.model.src }}" />
					<button type="button" class="button-link remove-setting">Remove audio source</button>
				</span>
				<# } #>
								<# if ( ! _.isEmpty( data.model.mp3 ) ) {
					if ( ! _.isUndefined( html5types.mp3 ) ) {
						delete html5types.mp3;
					}
				#>
				<span class="setting">
					<label for="audio-details-mp3-source" class="name">MP3</label>
					<input type="text" id="audio-details-mp3-source" readonly data-setting="mp3" value="{{ data.model.mp3 }}" />
					<button type="button" class="button-link remove-setting">Remove audio source</button>
				</span>
				<# } #>
								<# if ( ! _.isEmpty( data.model.ogg ) ) {
					if ( ! _.isUndefined( html5types.ogg ) ) {
						delete html5types.ogg;
					}
				#>
				<span class="setting">
					<label for="audio-details-ogg-source" class="name">OGG</label>
					<input type="text" id="audio-details-ogg-source" readonly data-setting="ogg" value="{{ data.model.ogg }}" />
					<button type="button" class="button-link remove-setting">Remove audio source</button>
				</span>
				<# } #>
								<# if ( ! _.isEmpty( data.model.flac ) ) {
					if ( ! _.isUndefined( html5types.flac ) ) {
						delete html5types.flac;
					}
				#>
				<span class="setting">
					<label for="audio-details-flac-source" class="name">FLAC</label>
					<input type="text" id="audio-details-flac-source" readonly data-setting="flac" value="{{ data.model.flac }}" />
					<button type="button" class="button-link remove-setting">Remove audio source</button>
				</span>
				<# } #>
								<# if ( ! _.isEmpty( data.model.m4a ) ) {
					if ( ! _.isUndefined( html5types.m4a ) ) {
						delete html5types.m4a;
					}
				#>
				<span class="setting">
					<label for="audio-details-m4a-source" class="name">M4A</label>
					<input type="text" id="audio-details-m4a-source" readonly data-setting="m4a" value="{{ data.model.m4a }}" />
					<button type="button" class="button-link remove-setting">Remove audio source</button>
				</span>
				<# } #>
								<# if ( ! _.isEmpty( data.model.wav ) ) {
					if ( ! _.isUndefined( html5types.wav ) ) {
						delete html5types.wav;
					}
				#>
				<span class="setting">
					<label for="audio-details-wav-source" class="name">WAV</label>
					<input type="text" id="audio-details-wav-source" readonly data-setting="wav" value="{{ data.model.wav }}" />
					<button type="button" class="button-link remove-setting">Remove audio source</button>
				</span>
				<# } #>
				
				<# if ( ! _.isEmpty( html5types ) ) { #>
				<fieldset class="setting-group">
					<legend class="name">Add alternate sources for maximum HTML5 playback</legend>
					<span class="setting">
						<span class="button-large">
						<# _.each( html5types, function (mime, type) { #>
							<button class="button add-media-source" data-mime="{{ mime }}">{{ type }}</button>
						<# } ) #>
						</span>
					</span>
				</fieldset>
				<# } #>

				<fieldset class="setting-group">
					<legend class="name">Preload</legend>
					<span class="setting preload">
						<span class="button-group button-large" data-setting="preload">
							<button class="button" value="auto">Auto</button>
							<button class="button" value="metadata">Metadata</button>
							<button class="button active" value="none">None</button>
						</span>
					</span>
				</fieldset>

				<span class="setting-group">
					<span class="setting checkbox-setting autoplay">
						<input type="checkbox" id="audio-details-autoplay" data-setting="autoplay" />
						<label for="audio-details-autoplay" class="checkbox-label">Autoplay</label>
					</span>

					<span class="setting checkbox-setting">
						<input type="checkbox" id="audio-details-loop" data-setting="loop" />
						<label for="audio-details-loop" class="checkbox-label">Loop</label>
					</span>
				</span>
			</div>
		</div></script> <script type="text/html" id="tmpl-video-details"><# var ext, html5types = {
			mp4: wp.media.view.settings.embedMimes.mp4,
			ogv: wp.media.view.settings.embedMimes.ogv,
			webm: wp.media.view.settings.embedMimes.webm
		}; #>

				<div class="media-embed media-embed-details">
			<div class="embed-media-settings embed-video-settings">
				<div class="wp-video-holder">
				<#
				var w = ! data.model.width || data.model.width > 640 ? 640 : data.model.width,
					h = ! data.model.height ? 360 : data.model.height;

				if ( data.model.width && w !== data.model.width ) {
					h = Math.ceil( ( h * w ) / data.model.width );
				}
				#>

				<#  var w_rule = '', classes = [],
		w, h, settings = wp.media.view.settings,
		isYouTube = isVimeo = false;

	if ( ! _.isEmpty( data.model.src ) ) {
		isYouTube = data.model.src.match(/youtube|youtu\.be/);
		isVimeo = -1 !== data.model.src.indexOf('vimeo');
	}

	if ( settings.contentWidth && data.model.width >= settings.contentWidth ) {
		w = settings.contentWidth;
	} else {
		w = data.model.width;
	}

	if ( w !== data.model.width ) {
		h = Math.ceil( ( data.model.height * w ) / data.model.width );
	} else {
		h = data.model.height;
	}

	if ( w ) {
		w_rule = 'width: ' + w + 'px; ';
	}

	if ( isYouTube ) {
		classes.push( 'youtube-video' );
	}

	if ( isVimeo ) {
		classes.push( 'vimeo-video' );
	}

#>
<div style="{{ w_rule }}" class="wp-video">
<video controls
	class="wp-video-shortcode {{ classes.join( ' ' ) }}"
	<# if ( w ) { #>width="{{ w }}"<# } #>
	<# if ( h ) { #>height="{{ h }}"<# } #>
			<#
		if ( ! _.isUndefined( data.model.poster ) && data.model.poster ) {
			#> poster="{{ data.model.poster }}"<#
		} #>
			preload			="{{ _.isUndefined( data.model.preload ) ? 'metadata' : data.model.preload }}"
				<#
		if ( ! _.isUndefined( data.model.autoplay ) && data.model.autoplay ) {
		#> autoplay<#
	}
		if ( ! _.isUndefined( data.model.loop ) && data.model.loop ) {
		#> loop<#
	}
	#>
>
	<# if ( ! _.isEmpty( data.model.src ) ) {
		if ( isYouTube ) { #>
		<source src="{{ data.model.src }}" type="video/youtube" />
		<# } else if ( isVimeo ) { #>
		<source src="{{ data.model.src }}" type="video/vimeo" />
		<# } else { #>
		<source src="{{ data.model.src }}" type="{{ settings.embedMimes[ data.model.src.split('.').pop() ] }}" />
		<# }
	} #>

		<# if ( data.model.mp4 ) { #>
	<source src="{{ data.model.mp4 }}" type="{{ settings.embedMimes[ 'mp4' ] }}" />
	<# } #>
		<# if ( data.model.m4v ) { #>
	<source src="{{ data.model.m4v }}" type="{{ settings.embedMimes[ 'm4v' ] }}" />
	<# } #>
		<# if ( data.model.webm ) { #>
	<source src="{{ data.model.webm }}" type="{{ settings.embedMimes[ 'webm' ] }}" />
	<# } #>
		<# if ( data.model.ogv ) { #>
	<source src="{{ data.model.ogv }}" type="{{ settings.embedMimes[ 'ogv' ] }}" />
	<# } #>
		<# if ( data.model.flv ) { #>
	<source src="{{ data.model.flv }}" type="{{ settings.embedMimes[ 'flv' ] }}" />
	<# } #>
		{{{ data.model.content }}}
</video>
</div>
	
				<# if ( ! _.isEmpty( data.model.src ) ) {
					ext = data.model.src.split('.').pop();
					if ( html5types[ ext ] ) {
						delete html5types[ ext ];
					}
				#>
				<span class="setting">
					<label for="video-details-source" class="name">URL</label>
					<input type="text" id="video-details-source" readonly data-setting="src" value="{{ data.model.src }}" />
					<button type="button" class="button-link remove-setting">Remove video source</button>
				</span>
				<# } #>
								<# if ( ! _.isEmpty( data.model.mp4 ) ) {
					if ( ! _.isUndefined( html5types.mp4 ) ) {
						delete html5types.mp4;
					}
				#>
				<span class="setting">
					<label for="video-details-mp4-source" class="name">MP4</label>
					<input type="text" id="video-details-mp4-source" readonly data-setting="mp4" value="{{ data.model.mp4 }}" />
					<button type="button" class="button-link remove-setting">Remove video source</button>
				</span>
				<# } #>
								<# if ( ! _.isEmpty( data.model.m4v ) ) {
					if ( ! _.isUndefined( html5types.m4v ) ) {
						delete html5types.m4v;
					}
				#>
				<span class="setting">
					<label for="video-details-m4v-source" class="name">M4V</label>
					<input type="text" id="video-details-m4v-source" readonly data-setting="m4v" value="{{ data.model.m4v }}" />
					<button type="button" class="button-link remove-setting">Remove video source</button>
				</span>
				<# } #>
								<# if ( ! _.isEmpty( data.model.webm ) ) {
					if ( ! _.isUndefined( html5types.webm ) ) {
						delete html5types.webm;
					}
				#>
				<span class="setting">
					<label for="video-details-webm-source" class="name">WEBM</label>
					<input type="text" id="video-details-webm-source" readonly data-setting="webm" value="{{ data.model.webm }}" />
					<button type="button" class="button-link remove-setting">Remove video source</button>
				</span>
				<# } #>
								<# if ( ! _.isEmpty( data.model.ogv ) ) {
					if ( ! _.isUndefined( html5types.ogv ) ) {
						delete html5types.ogv;
					}
				#>
				<span class="setting">
					<label for="video-details-ogv-source" class="name">OGV</label>
					<input type="text" id="video-details-ogv-source" readonly data-setting="ogv" value="{{ data.model.ogv }}" />
					<button type="button" class="button-link remove-setting">Remove video source</button>
				</span>
				<# } #>
								<# if ( ! _.isEmpty( data.model.flv ) ) {
					if ( ! _.isUndefined( html5types.flv ) ) {
						delete html5types.flv;
					}
				#>
				<span class="setting">
					<label for="video-details-flv-source" class="name">FLV</label>
					<input type="text" id="video-details-flv-source" readonly data-setting="flv" value="{{ data.model.flv }}" />
					<button type="button" class="button-link remove-setting">Remove video source</button>
				</span>
				<# } #>
								</div>

				<# if ( ! _.isEmpty( html5types ) ) { #>
				<fieldset class="setting-group">
					<legend class="name">Add alternate sources for maximum HTML5 playback</legend>
					<span class="setting">
						<span class="button-large">
						<# _.each( html5types, function (mime, type) { #>
							<button class="button add-media-source" data-mime="{{ mime }}">{{ type }}</button>
						<# } ) #>
						</span>
					</span>
				</fieldset>
				<# } #>

				<# if ( ! _.isEmpty( data.model.poster ) ) { #>
				<span class="setting">
					<label for="video-details-poster-image" class="name">Poster Image</label>
					<input type="text" id="video-details-poster-image" readonly data-setting="poster" value="{{ data.model.poster }}" />
					<button type="button" class="button-link remove-setting">Remove poster image</button>
				</span>
				<# } #>

				<fieldset class="setting-group">
					<legend class="name">Preload</legend>
					<span class="setting preload">
						<span class="button-group button-large" data-setting="preload">
							<button class="button" value="auto">Auto</button>
							<button class="button" value="metadata">Metadata</button>
							<button class="button active" value="none">None</button>
						</span>
					</span>
				</fieldset>

				<span class="setting-group">
					<span class="setting checkbox-setting autoplay">
						<input type="checkbox" id="video-details-autoplay" data-setting="autoplay" />
						<label for="video-details-autoplay" class="checkbox-label">Autoplay</label>
					</span>

					<span class="setting checkbox-setting">
						<input type="checkbox" id="video-details-loop" data-setting="loop" />
						<label for="video-details-loop" class="checkbox-label">Loop</label>
					</span>
				</span>

				<span class="setting" data-setting="content">
					<#
					var content = '';
					if ( ! _.isEmpty( data.model.content ) ) {
						var tracks = jQuery( data.model.content ).filter( 'track' );
						_.each( tracks.toArray(), function( track, index ) {
							content += track.outerHTML; #>
						<label for="video-details-track-{{ index }}" class="name">Tracks (subtitles, captions, descriptions, chapters, or metadata)</label>
						<input class="content-track" type="text" id="video-details-track-{{ index }}" aria-describedby="video-details-track-desc-{{ index }}" value="{{ track.outerHTML }}" />
						<span class="description" id="video-details-track-desc-{{ index }}">
						The srclang, label, and kind values can be edited to set the video track language and kind.						</span>
						<button type="button" class="button-link remove-setting remove-track">Remove video track</button><br/>
						<# } ); #>
					<# } else { #>
					<span class="name">Tracks (subtitles, captions, descriptions, chapters, or metadata)</span><br />
					<em>There are no associated subtitles.</em>
					<# } #>
					<textarea class="hidden content-setting">{{ content }}</textarea>
				</span>
			</div>
		</div></script> <script type="text/html" id="tmpl-editor-gallery"><# if ( data.attachments.length ) { #>
			<div class="gallery gallery-columns-{{ data.columns }}">
				<# _.each( data.attachments, function( attachment, index ) { #>
					<dl class="gallery-item">
						<dt class="gallery-icon">
							<# if ( attachment.thumbnail ) { #>
								<img src="{{ attachment.thumbnail.url }}" width="{{ attachment.thumbnail.width }}" height="{{ attachment.thumbnail.height }}" alt="{{ attachment.alt }}" />
							<# } else { #>
								<img src="{{ attachment.url }}" alt="{{ attachment.alt }}" />
							<# } #>
						</dt>
						<# if ( attachment.caption ) { #>
							<dd class="wp-caption-text gallery-caption">
								{{{ data.verifyHTML( attachment.caption ) }}}
							</dd>
						<# } #>
					</dl>
					<# if ( index % data.columns === data.columns - 1 ) { #>
						<br style="clear: both;">
					<# } #>
				<# } ); #>
			</div>
		<# } else { #>
			<div class="wpview-error">
				<div class="dashicons dashicons-format-gallery"></div><p>No items found.</p>
			</div>
		<# } #></script> <script type="text/html" id="tmpl-crop-content"><img class="crop-image" src="{{ data.url }}" alt="Image crop area preview. Requires mouse interaction.">
		<div class="upload-errors"></div></script> <script type="text/html" id="tmpl-site-icon-preview"><h2>Preview</h2>
		<strong aria-hidden="true">As a browser icon</strong>
		<div class="favicon-preview">
			<img src="https://classic.lisfinity.com/wp-admin/images/browser.png" class="browser-preview" width="182" height="" alt="" />

			<div class="favicon">
				<img id="preview-favicon" src="{{ data.url }}" alt="Preview as a browser icon"/>
			</div>
			<span class="browser-title" aria-hidden="true"><# print( 'Lisfinity' ) #></span>
		</div>

		<strong aria-hidden="true">As an app icon</strong>
		<div class="app-icon-preview">
			<img id="preview-app-icon" src="{{ data.url }}" alt="Preview as an app icon"/>
		</div></script> <script  src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAze3_5wbmLHwo1T-JulnbwCJop8kI_Qvk&#038;libraries=places&#038;language=en&#038;ver=5.4.2'></script> <script type='text/javascript'>/*  */
var pluploadL10n = {"queue_limit_exceeded":"You have attempted to queue too many files.","file_exceeds_size_limit":"%s exceeds the maximum upload size for this site.","zero_byte_file":"This file is empty. Please try another.","invalid_filetype":"Sorry, this file type is not permitted for security reasons.","not_an_image":"This file is not an image. Please try another.","image_memory_exceeded":"Memory exceeded. Please try another smaller file.","image_dimensions_exceeded":"This is larger than the maximum size. Please try another.","default_error":"An error occurred in the upload. Please try again later.","missing_upload_url":"There was a configuration error. Please contact the server administrator.","upload_limit_exceeded":"You may only upload 1 file.","http_error":"Unexpected response from the server. The file may have been uploaded successfully. Check in the Media Library or reload the page.","http_error_image":"Post-processing of the image failed likely because the server is busy or does not have enough resources. Uploading a smaller image may help. Suggested maximum size is 2500 pixels.","upload_failed":"Upload failed.","big_upload_failed":"Please try uploading this file with the %1$sbrowser uploader%2$s.","big_upload_queued":"%s exceeds the maximum upload size for the multi-file uploader when used in your browser.","io_error":"IO error.","security_error":"Security error.","file_cancelled":"File canceled.","upload_stopped":"Upload stopped.","dismiss":"Dismiss","crunching":"Crunching\u2026","deleted":"moved to the Trash.","error_uploading":"\u201c%s\u201d has failed to upload."};
var _wpPluploadSettings = {"defaults":{"file_data_name":"async-upload","url":"\/wp-admin\/async-upload.php","filters":{"max_file_size":"2097152b","mime_types":[{"extensions":"jpg,jpeg,jpe,gif,png,bmp,tiff,tif,ico,asf,asx,wmv,wmx,wm,avi,divx,flv,mov,qt,mpeg,mpg,mpe,mp4,m4v,ogv,webm,mkv,3gp,3gpp,3g2,3gp2,txt,asc,c,cc,h,srt,csv,tsv,ics,rtx,css,htm,html,vtt,dfxp,mp3,m4a,m4b,aac,ra,ram,wav,ogg,oga,flac,mid,midi,wma,wax,mka,rtf,js,pdf,class,tar,zip,gz,gzip,rar,7z,psd,xcf,doc,pot,pps,ppt,wri,xla,xls,xlt,xlw,mdb,mpp,docx,docm,dotx,dotm,xlsx,xlsm,xlsb,xltx,xltm,xlam,pptx,pptm,ppsx,ppsm,potx,potm,ppam,sldx,sldm,onetoc,onetoc2,onetmp,onepkg,oxps,xps,odt,odp,ods,odg,odc,odb,odf,wp,wpd,key,numbers,pages,svg,json,redux"}]},"multipart_params":{"action":"upload-attachment","_wpnonce":"0f2aebe2b4"}},"browser":{"mobile":true,"supported":true},"limitExceeded":false};
/*  */</script> <script type='text/javascript'>/*  */
var wpApiSettings = {"root":"https:\/\/classic.lisfinity.com\/wp-json\/","nonce":"bd3d37099e","versionString":"wp\/v2\/"};
/*  */</script> <script >( 'fetch' in window ) || document.write( '<script src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-includes/js/dist/vendor/wp-polyfill-fetch.min.js?ver=3.0.0"></scr' + 'ipt>' );( document.contains ) || document.write( '<script src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-includes/js/dist/vendor/wp-polyfill-node-contains.min.js?ver=3.42.0"></scr' + 'ipt>' );( window.DOMRect ) || document.write( '<script src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min.js?ver=3.42.0"></scr' + 'ipt>' );( window.URL && window.URL.prototype && window.URLSearchParams ) || document.write( '<script src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-includes/js/dist/vendor/wp-polyfill-url.min.js?ver=3.6.4"></scr' + 'ipt>' );( window.FormData && window.FormData.prototype.keys ) || document.write( '<script src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-includes/js/dist/vendor/wp-polyfill-formdata.min.js?ver=3.0.12"></scr' + 'ipt>' );( Element.prototype.matches && Element.prototype.closest ) || document.write( '<script src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-includes/js/dist/vendor/wp-polyfill-element-closest.min.js?ver=2.0.2"></scr' + 'ipt>' );</script> <script type='text/javascript'>/*  */
var _wpMediaViewsL10n = {"mediaFrameDefaultTitle":"Media","url":"URL","addMedia":"Add Media","search":"Search","select":"Select","cancel":"Cancel","update":"Update","replace":"Replace","remove":"Remove","back":"Back","selected":"%d selected","dragInfo":"Drag and drop to reorder media files.","uploadFilesTitle":"Upload Files","uploadImagesTitle":"Upload Images","mediaLibraryTitle":"Media Library","insertMediaTitle":"Add Media","createNewGallery":"Create a new gallery","createNewPlaylist":"Create a new playlist","createNewVideoPlaylist":"Create a new video playlist","returnToLibrary":"\u2190 Return to library","allMediaItems":"All media items","allDates":"All dates","noItemsFound":"No items found.","insertIntoPost":"Insert into post","unattached":"Unattached","mine":"Mine","trash":"Trash","uploadedToThisPost":"Uploaded to this post","warnDelete":"You are about to permanently delete this item from your site.\nThis action cannot be undone.\n 'Cancel' to stop, 'OK' to delete.","warnBulkDelete":"You are about to permanently delete these items from your site.\nThis action cannot be undone.\n 'Cancel' to stop, 'OK' to delete.","warnBulkTrash":"You are about to trash these items.\n  'Cancel' to stop, 'OK' to delete.","bulkSelect":"Bulk Select","trashSelected":"Move to Trash","restoreSelected":"Restore from Trash","deletePermanently":"Delete Permanently","apply":"Apply","filterByDate":"Filter by date","filterByType":"Filter by type","searchLabel":"Search","searchMediaLabel":"Search Media","searchMediaPlaceholder":"Search media items...","mediaFound":"Number of media items found: %d","mediaFoundHasMoreResults":"Number of media items displayed: %d. Scroll the page for more results.","noMedia":"No media items found.","noMediaTryNewSearch":"No media items found. Try a different search.","attachmentDetails":"Attachment Details","insertFromUrlTitle":"Insert from URL","setFeaturedImageTitle":"Featured image","setFeaturedImage":"Set featured image","createGalleryTitle":"Create Gallery","editGalleryTitle":"Edit Gallery","cancelGalleryTitle":"\u2190 Cancel Gallery","insertGallery":"Insert gallery","updateGallery":"Update gallery","addToGallery":"Add to gallery","addToGalleryTitle":"Add to Gallery","reverseOrder":"Reverse order","imageDetailsTitle":"Image Details","imageReplaceTitle":"Replace Image","imageDetailsCancel":"Cancel Edit","editImage":"Edit Image","chooseImage":"Choose Image","selectAndCrop":"Select and Crop","skipCropping":"Skip Cropping","cropImage":"Crop Image","cropYourImage":"Crop your image","cropping":"Cropping\u2026","suggestedDimensions":"Suggested image dimensions: %1$s by %2$s pixels.","cropError":"There has been an error cropping your image.","audioDetailsTitle":"Audio Details","audioReplaceTitle":"Replace Audio","audioAddSourceTitle":"Add Audio Source","audioDetailsCancel":"Cancel Edit","videoDetailsTitle":"Video Details","videoReplaceTitle":"Replace Video","videoAddSourceTitle":"Add Video Source","videoDetailsCancel":"Cancel Edit","videoSelectPosterImageTitle":"Select Poster Image","videoAddTrackTitle":"Add Subtitles","playlistDragInfo":"Drag and drop to reorder tracks.","createPlaylistTitle":"Create Audio Playlist","editPlaylistTitle":"Edit Audio Playlist","cancelPlaylistTitle":"\u2190 Cancel Audio Playlist","insertPlaylist":"Insert audio playlist","updatePlaylist":"Update audio playlist","addToPlaylist":"Add to audio playlist","addToPlaylistTitle":"Add to Audio Playlist","videoPlaylistDragInfo":"Drag and drop to reorder videos.","createVideoPlaylistTitle":"Create Video Playlist","editVideoPlaylistTitle":"Edit Video Playlist","cancelVideoPlaylistTitle":"\u2190 Cancel Video Playlist","insertVideoPlaylist":"Insert video playlist","updateVideoPlaylist":"Update video playlist","addToVideoPlaylist":"Add to video playlist","addToVideoPlaylistTitle":"Add to Video Playlist","filterAttachments":"Filter Media","attachmentsList":"Media list","settings":{"tabs":[],"tabUrl":"https:\/\/classic.lisfinity.com\/wp-admin\/media-upload.php?chromeless=1","mimeTypes":{"image":"Images","audio":"Audio","video":"Video","application\/msword,application\/vnd.openxmlformats-officedocument.wordprocessingml.document,application\/vnd.ms-word.document.macroEnabled.12,application\/vnd.ms-word.template.macroEnabled.12,application\/vnd.oasis.opendocument.text,application\/vnd.apple.pages,application\/pdf,application\/vnd.ms-xpsdocument,application\/oxps,application\/rtf,application\/wordperfect,application\/octet-stream":"Documents","application\/vnd.apple.numbers,application\/vnd.oasis.opendocument.spreadsheet,application\/vnd.ms-excel,application\/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application\/vnd.ms-excel.sheet.macroEnabled.12,application\/vnd.ms-excel.sheet.binary.macroEnabled.12":"Spreadsheets","application\/x-gzip,application\/rar,application\/x-tar,application\/zip,application\/x-7z-compressed":"Archives"},"captions":true,"nonce":{"sendToEditor":"abf5ae7b76"},"post":{"id":8},"defaultProps":{"link":"none","align":"","size":""},"attachmentCounts":{"audio":1,"video":1},"oEmbedProxyUrl":"https:\/\/classic.lisfinity.com\/wp-json\/oembed\/1.0\/proxy","embedExts":["mp3","ogg","flac","m4a","wav","mp4","m4v","webm","ogv","flv"],"embedMimes":{"mp3":"audio\/mpeg","ogg":"audio\/ogg","flac":"audio\/flac","m4a":"audio\/mpeg","wav":"audio\/wav","mp4":"video\/mp4","m4v":"video\/mp4","webm":"video\/webm","ogv":"video\/ogg","flv":"video\/x-flv"},"contentWidth":940,"months":[{"year":"2020","month":"5","text":"May 2020"},{"year":"2020","month":"4","text":"April 2020"},{"year":"2020","month":"3","text":"March 2020"},{"year":"2020","month":"2","text":"February 2020"},{"year":"2019","month":"12","text":"December 2019"},{"year":"2019","month":"10","text":"October 2019"}],"mediaTrash":0}};
/*  */</script> <script type='text/javascript'>/*  */
var lc_data = {"dir":"https:\/\/classic.lisfinity.com\/wp-content\/plugins\/lisfinity-core\/","is_demo":"1","demo_product":"https:\/\/classic.lisfinity.com\/ad\/2019-sea-arrow-sailing-yacht\/","is_ssl":"1","rtl":"","is_front":"","is_search":"","is_business":"","url":"https:\/\/classic.lisfinity.com\/","site_url":"\/","admin_url":"https:\/\/classic.lisfinity.com\/wp-admin\/","ajaxurl":"https:\/\/classic.lisfinity.com\/wp-admin\/admin-ajax.php","wp_resturl":"https:\/\/classic.lisfinity.com\/wp-json\/","resturl":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1","locale":{"wp":"en_US","js":"en-US"},"timezone":"7200","site_title":"Lisfinity","endpoint-business":"premium_profile","is_admin":"0","user_admin":"","logged_in":"1","page_id":"8","current_user_id":"2","bookmarks":[288,385,659,763,306,561,616,413,722,0,755,648,707,716,627,280],"business_id":"32","taxonomies":"{\"car\":[\"make\",\"model\",\"body-type\",\"fuel-type\",\"transmission\",\"gears\",\"drivetrain\",\"engine-cc\",\"engine-hp\",\"mileage\",\"engine-kw\",\"door\",\"exterior-colour\",\"air-conditioning\",\"interior-features\",\"security\",\"headlights-type\",\"daytime-running-lights\",\"adaptive-lighting\",\"airbags\",\"wheels-and-tires\",\"breakdown-service\",\"parking-sensors\",\"sports\",\"extras\",\"interior-metal\",\"interior-colour\",\"fuel-consumption\",\"emission-class\",\"emission-sticker\",\"vehicle-history\",\"vehicle-type\",\"damaged-vehicles\",\"number-of-vehicle-owners\",\"hu-valid\",\"approved-used-programme\"],\"real-estate\":[\"property-type\",\"property-information\",\"floor\",\"storey\",\"parking-space\",\"total-space\",\"room\",\"lot-size\",\"bathroom\",\"building-type\",\"ceiling-height\",\"facilities\",\"additional-information\"],\"boat\":[\"boat-make\",\"boat-categories\",\"boat-type\",\"length\",\"width\",\"weight\",\"depth\",\"headroom\",\"engine-performance\",\"engine-hours\",\"year-built\",\"certified-nr-of-persons\",\"material\",\"propulsion\",\"boat-fuel-type\",\"fuel-capacity\",\"keel-type\",\"steering\",\"beds\",\"hull-color\",\"equipment\"],\"bike\":[\"bike-type\",\"bike-gender\",\"bike-brand\",\"wheel-size\",\"chainset-type\",\"bike-gears\",\"fork-travel\",\"frame-material\",\"frame-type\",\"frame-size\",\"bike-age\",\"bike-year\",\"bike-equipment\"],\"pet\":[\"pet-type\",\"breed\",\"pet-size\",\"energy-level\",\"friendliness-to-people\",\"friendliness-to-pets\",\"ease-of-training\",\"grooming-requirements\",\"vocality\",\"exercise-requirements\",\"affection-needs\",\"playfulness\",\"pet-age\",\"gender\",\"pet-color\",\"coat-length\",\"care-behavior\",\"pet-weight\",\"pet-height\"],\"toy-game\":[\"toy-type\",\"age-level\",\"platform\",\"game-category\",\"game-brand\",\"region-code\",\"format\",\"color\",\"language\"],\"common\":[\"state\",\"city\",\"condition\"]}","user_has_business":"1","slug_category":"ad-category","current_product_id":"","product_owner":"","product_business":"","is_owner":"","user_ip":"129.205.112.221","nonce":"bd3d37099e","current_time":"1596557512","product_permalink":{"product_base":"\/product","category_base":"product-category","tag_base":"product-tag","attribute_base":"","use_verbose_page_rules":false},"sticky_header":"0","compare":"","mapbox_url":"https:\/\/api.mapbox.com\/styles\/v1\/pebasdesign\/cjvc5hnuh04gi1fqujdtr8lsv\/tiles\/256\/{z}\/{x}\/{y}?access_token=pk.eyJ1IjoicGViYXNkZXNpZ24iLCJhIjoiY2pvOXdnOTllMDk5eTNxbjBna3Y5ZTh3ZSJ9.jKEoF1y2xKIWzyBbufhjpQ","myaccount":"my-account\/","page_search":"https:\/\/classic.lisfinity.com\/search\/","page_endpoint":"my-account","page_search_endpoint":"search","page_vendors":"https:\/\/classic.lisfinity.com\/authors\/","page_register":"https:\/\/classic.lisfinity.com\/register\/","page_login":"https:\/\/classic.lisfinity.com\/login\/","page_reset":"https:\/\/classic.lisfinity.com\/password-reset\/","page_register_endpoint":"register","page_login_endpoint":"login","page_reset_endpoint":"password-reset","search_product_style":"3","location_format":"partial","product_listing":"listing","payment_package":"payment_package","promotion":"promotion","attachment_data":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/attachment","get_groups":[{"single_name":"Car","plural_name":"Cars","slug":"car","description":"","bg_image":"425","icon":"1084"},{"single_name":"Real Estate","plural_name":"Real Estates","slug":"real-estate","description":"","bg_image":"428","icon":"1085"},{"single_name":"Boat","plural_name":"Boats","slug":"boat","description":"","bg_image":"1066","icon":"1086"},{"single_name":"Bike","plural_name":"Bikes","slug":"bike","bg_image":"424","description":"","icon":"1087"},{"single_name":"Pet","plural_name":"Pets","slug":"pet","bg_image":"384","description":"","icon":"1089"},{"single_name":"Toy & Game","plural_name":"Toys & Games","slug":"toy-game","bg_image":"429","description":"","icon":""},{"single_name":"Electronic","plural_name":"Electronics","slug":"electronic","bg_image":"895"}],"group_fields":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/group-fields","groups":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/groups","groups_by_term":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/groups-term\/(?P<term>\\S+)","group_store":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/group\/store","group_edit":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/group\/edit","group_delete":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/group\/delete","export_fields":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/fields\/export","import_fields":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/fields\/import","import_terms":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/fields\/import\/terms","search_export_fields":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/search-builder\/export","search_import_fields":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/search-builder\/import","taxonomy_fields":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/taxonomy-fields","taxonomy_options":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/taxonomy-options","taxonomy_location_options":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/taxonomy-options\/locations","taxonomy_group_options":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/taxonomy-options\/(?P<group>\\S+)","taxonomy_options_store":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/taxonomy-options\/store","taxonomy_options_edit":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/taxonomy-options\/edit","taxonomy_options_delete":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/taxonomy-options\/delete","get_cf_versions":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/cf\/versions","reset_cf_version":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/cf\/reset-version","save_cf_version":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/cf\/save-version","term":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/term","term_fields":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/terms-fields","terms_get":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/terms","terms_by_group":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/terms-by-group","terms_edit":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/terms-edit","terms_by_taxonomy":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/terms\/(?P<taxonomy>\\S+)","terms_for_search":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/terms-search","term_store":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/term-store","term_edit":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/term-edit","term_remove":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/term-remove","business_fields":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/business\/fields","package_fields":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/package\/fields","product_fields":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/product\/fields","product_submit":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/product\/store","product":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/product","get_product_method":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/product\/method","product_action":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/product-action","packages":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/packages","package_and_promotions":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/package\/get-package","product_data":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/product\/get-data","check_package":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/package\/check","compare_products":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/compare","compare_remove":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/compare-remove","request_call":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/request-call","query_attachments":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/query-attachments","business":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/business","business_type":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/business\/type","business_archive":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/business\/archive","options":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/options\/","option":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/option","options_export":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/options\/export","options_import":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/options\/import","chats":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/chats","messages":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/messages","messages_chat":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/messages","message_submit":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/messages\/store","message_update":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/messages\/update","bids":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/bids\/","submit_bid":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/bids\/store","update_bid":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/bids\/update","buy_bid":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/bids\/buy","update_notifications":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/notifications","update_all_notifications":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/notifications-all","get_stats":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/stats\/get","update_stats":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/stats\/store","search_keyword":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/search\/keyword","search":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/search\/","search_builder_options":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/search-builder\/options","search_builder_fields":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/search-builder\/fields","search_builder_submit":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/search-builder\/store","search_builder_group_get":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/search-builder\/group\/get","search_builder_group_submit":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/search-builder\/group\/store","search_builder_order_edit":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/search-builder\/group\/order","search_builder_groups":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/search-builder\/groups","single_builder_options":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/single-builder\/get","single_builder_add_group":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/single-builder\/group\/store","single_builder_delete_group":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/single-builder\/group\/delete","single_builder_change_group":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/single-builder\/group\/change","single_builder_order_group":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/single-builder\/group\/order","user":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/user","user_action":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/user","auth_options":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/auth\/options","register":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/register","login":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/auth\/login","sms_verify":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/register\/sms","sms_resend":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/register\/sms\/resend","forgot":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/auth\/forgot","reset":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/auth\/reset","login_demo":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/auth\/login\/demo","report_submit":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/report\/store","report_options":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/report\/options","submit_review":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/testimonial\/store","get_reviews":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/testimonial\/get","get_business":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/dashboard\/business\/","get_all_ads":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/dashboard\/all-ads\/","get_product":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/dashboard\/product\/","get_notifications":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/dashboard\/notifications\/","purchase_package":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/dashboard\/purchase-package","purchase_promotion":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/dashboard\/product\/purchase-promotion","purchase_premium":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/dashboard\/purchase-premium","purchase_ad_renewal":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/dashboard\/purchase-ad-renewal","get_wc_profile":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/wc\/profile\/","update_wc_profile":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/wc\/profile\/update","get_country_states":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/wc\/states","get_wc_orders":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/wc\/orders\/","get_wc_order":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/wc\/order\/","get_wc_downloads":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/wc\/downloads","get_cart_count":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/wc\/cart-count","get_tips":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/tips\/get","get_mobile_menu":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/menus\/mobile","jst":["Import or export the theme options fields into the theme.","Preparing fields...","Search Builder","Import\/Export","Create your business-based search fields without limitation","Home Page","Home search fields","Search Page","Detailed search fields","Detailed Search","Ad Single Group Fields","If you want to remove the search builder from WP Dashboard after building it %s","follow these steps","Import\/Export Fields","Please choose what content to search:","Titles","Description","IDs","Enable search field suggestions","Field groups","Choose field groups to suggest","Author","Premium Profiles","All Authors","Ads","Promoted Ads","All Ads","Field Groups","Taxonomies","Choose fields groups that will be included in the keyword suggestions","Deselect All","Select All","Enter the name of the group","Edit %s Group","Save Group","No Placeholder","Step Size","Label","No label","Placeholder","No placeholder","Prefix","Suffix","Group","Not Specified","The group has been edited","Are you sure you wish to delete the group?","The group has been deleted","Disabled!","You have disabled detailed search from the theme options. Click here to go and re-enable it:","Theme Options","What search fields you would like to see on the search page?","Save","Niche:","Taxonomy","Fields Meta","Add Group","Add New Group","Group Name","What:","Type your search term...","Placholder","What search fields you would like to see on the home page?","Keyword","Choose steps size for this range field","Are you sure that you wish to delete the group?","Single Page","What search field groups would you like to organize\/create on the ad single page?","No group","Select Image","Go back to the taxonomy groups","Common","There are no created taxonomies","Click on the button below to create your first business-based taxonomy","If you want to remove taxonomy builder from WP Dashboard after building it, please %s","Create New Taxonomy","Edit %s","Add Taxonomy","NOTHING TO SHOW","Export Fields","Copied!","Click to copy","Importing fields will override current ones. Do you wish to proceed?","Importing in progress...","Completed!","Import Fields","Are you sure you wish to delete the taxonomy?","Group has been successfully deleted","Fields Builder","Create your business-based taxonomies without limitation. Check %s for any help.","tutorials here","Add Fields Group","Edit %s Field Group","Add new field group","Save","Esc","Are you sure you wish to delete the term?","No parent","Add New Term","Add Term","Values entered by the end users.","When the field is set to the input type terms are not being listed as there can be unlimited number of them.","Not selected","%s left","Premium","Submit","New Ad","Dashboard","Welcome to your dashboard %s","Become"," - Free","Buy Package","There are no available packages for buying. Either create some or disable this section completely from the theme options.","Sorry, but you do not have any active packages.","Purchase package:","In this package","Submit Ad","There is","There are","%s active","package","packages","Package","Media","Action","%d ad left","%d ads left","Days","Free","No Additional Media","Active Ads","Bids","Messages","Packages","Day","Month","Months","You're getting a %s discount","Profile","Search Your Ads","About Page","Testimonials Page","News Page","Shop Page","Contact Page","Choose duration","Premium Profile","Started:","Expires:","Premium profile is currently active and will be for the next <strong class=\"text-grey-1000\">%s<\/strong>. Once it is expired your profile will be reverted to Basic version.","You can extend it anytime by buying the package below. Expiration date would be extended for the amount purchased.","Mark All","Mark as read","%s ago","Archive","Ad has been reported","Ad has been bookmarked","Ad has been liked","Ad has been shared on: %s","Are you sure you wish to mark notification as read?","Are you sure you wish to mark selected notifications as read?","No new notifications.","Not your product.","The ad is currently being reviewed by the site administration.","Edit","Mark as not sold","Mark as sold","Renew","Delete","Agent","Submitted","Expires in","Expired on","Are you sure that you wish to delete this ad?","Are you sure you wish to mark the ad as sold?","Banned Users","Overall settings","Promotions","There are no banned users","Are you sure you wish to unblock the user?","Search by a user","Search bids by a user","Sort by:","There are no bids.","Newest","Oldest","Amount","Amount asc","Search Users...","Are you sure you wish to block the user?","Message cannot be empty.","All Messages (%s)","Click on a name to show the messages.","Your message","User is blocked","Message...","<span class=\"font-semibold\">%d<\/span> characters left","Maximum amount of characters reached.","Send Message","You've been blocked from submitting messages to this conversation.","All Messages","Info","for","day","Purchase","No available promotions to buy","days","Active: %s","Not active","Active Package","Added","Details","left","There are no active promotions.","Add New Promotion","Bump Ad","Currently not on the","1st page","in category","Currently on the","position in category","Active Promotions","See ad page","Pending review","Sold","Search ads...","Expired ads:","Show","Hide","Image","Title","Price","Notifications","Actions","No available ads","Listed date","Expire date","Negotiable","Price on call","0:00:00","Auction Ended","First name","First Name","Last name","Last Name","Company","Country","State","Street Address","Street Address 2","Postcode \/ ZIP","City","Phone","Email","Billing Information","Pages:","No available downloads.","Orders","Product","Downloads Remaining","Expires","Product:","Downloads remaining:","Never","Download","Display name","Display Name","Profile Picture","General Information","Order: # %s","Order updates","No available orders.","Order","Date","Status","Total","Order:","# %s","Date:","Status:","%1$s for %2$s item","%1$s for %2$s items","Password Information","Password","Re-Password","Shipping Information","General","Billing Details","Shipping Details","Conversions","Number of times your ads were shown to users","Number of times users clicked to see your ad.","Ratio between Impressions and Reaches.","Ratio between Reaches and number of times someone clicked to contact you.","Analytics","Last 7 Days","This month","This Year","Impressions","Reaches","Leads","Business Details","My account settings","My Profile","Downloads","Active","Become Premium","Not Active","Hi, ","Compare","Ad received a new like","Bookmark","Read","See Bid","No new notifications","Expiring Ads","Expiring Promotions","The package you selected is not correct, please choose another one.","Choose package","Go Back","Step","out of","Proceed to payment","Save Changes","Prev","Next","Success!","Media Costs","Total media costs: %s","Promotion Costs","Total promotion costs: %s","Total Costs","Total: %s","Choose category","Choose %s","Enter %s","The provided coordinate for %s is not in the correct format.","Your %s","Choose location input","Choose if you wish to use google to find your location or enter coordinates manually.","Google Map","Longitude & Latitude","Type the address","Type your location","Latitude","Enter latitude of your location","Longitude","Enter longitude of your location","Click to get coordinates from any address.","Drag marker on the map","You can drag marker to your desired location.","%s (allowed formats JPG, PNG and maximum %s)","FREE","%s %s left","You have","free %s","and","paid %s","You cannot add more than %s %s","Upload Image","Profile Avatar","Visual","Text","Enable working hours","Working Day","Open all day","Non-working day","Viber","WhatsApp","Skype","Features Included","Add Ons Included","Promotion","Add Promotion","Remove Promotion","%s (only online hosted videos allowed)","Find a Video","Type or paste url of the video","Insert video","The video could not be found","An error occurred while trying to fetch files data.","The %s value cannot be lower than %d.","The %s value cannot be higher than %d.","The %s have to be checked.","The %s cannot be empty.","The %s cannot be empty","Contact phones","Work time","Additional info","Welcome to","<span class=\"font-bold uppercase text-green-800\">Open<\/span> today from","to","Closed today","Price Acs","Price Desc","Top Rated","Nearby","Recommended","%s ads","in","All Categories","Loading...","No results found","Visit Store","Testimonials","Contact","Leave a Testimonial","Please provide all required ratings!","Please provide a testimonial message.","Leave a review","No products to display","Any","%s in %s","None","%s in %s","%s in %s: %s","%s category","From:","To:","Login","Don't have an account?","Sign up","Username","Your username","Remember me","Forgot Password?","Re-enter New Password","Back to Login","Reset Password","Username or Email Address","New Password","+150017122661","You will receive a verification code on this number.","Terms & Conditions","Sign Up","Valid email","Enter 4 digits code","Only members of the site can send messages, click on the button below to become a member.","Send","Start bidding","Place new bid","You've been blocked by the owner.","Starting price at","Place Bid","or","Buy now price at","Buy Now","You can choose to place bid or to buy now for predefined price.","Start Messaging","Report Form","Select a Reason","You can be banned for violent messages.","Submit Report","Testimonial Form","Overall score","<span class=\"font-semibold text-red-700\">%d<\/span> characters left","Submit Testimonial","Search","Preparing dashboard...","Sign up +","Lisfinity on social networks","Expand","Resize","Esc","SMS Code","SMS Verifiction","Promo Image","Home","Map:","Back to search","Search my store","Filter","Reset","Category","Search %s","On Call","%s results","Selected:","Product Image","First","Last","Fixed","Sale","Logo","%s Icon","of","Bid has to be higher than 0.","Bid has to be higher than %d.","Are you sure that you wish to buy now?","See Bids","Accepting bids: ","No bids","We notified the owner about your purchase and provided them your necessary information so they can contact you with additional details.","Please take your time to read our <a href=\"javascript:\" target=\"_blank\" class=\"font-bold text-blue-600\">Purchase Guide<\/a> and familiarize yourself with our <a href=\"javascript:\" target=\"_blank\" class=\"font-bold text-blue-600\">Privacy Policy<\/a>","In case of any issue please <a href=\"javascript:\" target=\"_blank\" class=\"font-bold text-blue-600\">Contact Us<\/a>","Thank you","Bidding History","Your bid","Read Messages","Send a Message","Members only","Messenger","No messages","Authors","ID: %s","Other","%s:","Bookmarked","Print","Report","Share","Calculator","You cannot compare %s and a %s. Please confirm to proceed with comparison.","Add to compare","Remove","Nothing to compare","Compare Criteria","Share on","Advertisement","Trade-in value","Sales Tax","Interest Rate","Terms","12 Months","24 Months","Calculate","36 Months","Total: ","Taxes: ","48 Months","Interest: ","Monthly: ","60 Months","Financing Calculator","Down Price","Safety Tips","Buy and sell safely on %s!","Read our Safety Tips","Similar ads","Show on Map","Address","Request Call","from","Closed","See work times","Show number","%d day","%d days","detailed","There are no available fields groups","Create field groups","Page <span class=\"text-grey-1100\">%d<\/span> of %d","Preparing comparison data...","Preparing products","Compare ads","There are no statistics available at the moment. Either you have no ads or they are yet to be seen by someone.","Saving...","Already have an account?","Sign in","Use Testimonials Builder from the theme options to build your own testimonials rating criteria required to leave testimonials.","Loading Ad...","Promoted Authors","All Authors","%s Authors","There are no active businesses","Type author name...","5 Stars","4 Stars","3 Stars","2 Stars","1 Star","Review:","All","There are no safety tips to show.","Resend SMS code","Renew Ad","Purchase package","Choose the package that will be used for the ad renewal","It seems that you don't have any packages that could be used for renewal. Please click on a button below to purchase one.","Renewing...","Parent > Child related taxonomies cannot be moved together in this version!","SOLUTION 1: Separate them before moving then connect them again afterwards.","SOLUTION 2: Move other taxonomies around them.","To achieve the best looking layout it is suggested not to mix checkbox type with the other taxonomy types, while the checkboxes can be mixed together.","Choose %s","Additional Files","AD","Please set comparison criteria in the theme options","Logout","Are you sure you wish to remove the image?","Are you sure you wish to logout from the site?","Loading Ads...","Preparing Page...","Package Details","Loading Messages","New Package","%d remaining","Hide number","Find us on map","Expand map","Hide work times","Demo account required!","Please use demo account in order to try instant messaging system.","Click on the button below if you wish to login as the demo user.","NOTE:","Your actions after login will not be saved, this is a demo account.","Demo Notification","This is a demo account used for showcasing the theme functionality! Any changes that you make during the theme exploration will not be saved.","Block user","See Messages","This is your ad. You will be redirected to your dashboard to see all messages you received.","If you would you like to see messages from buyer perspective go to:","See Ad","Only members of the site can post bids, click on the button below to become a member.","Please use demo account in order to try auction system.","This is your ad. You will be redirected to your dashboard to see all bids you received.","If you would you like to see bids from buyer perspective go to:","You cannot post a review your own profile.","Cancel","Edit Fields","Edit Group","Delete Group","See More","See Less","You have to be a member in order leave a testimonial.","Click on a button below to open login page.","Login","Registration is disabled for the demo purposes. Click on the button below to login as the demo user and keep exploring the theme.","Demo account:","About","<span class=\"text-grey-1100\">%d<\/span> of %d","You can choose to place bid or to buy now for predefined price, check our <a href=\"javascript:\" target=\"_blank\" class=\"font-semibold text-blue-800 hover:underline\">FAQ<\/a> page for more info.","You can be banned for violent messages, check our <a href=\"24\" target=\"_blank\" class=\"font-semibold text-blue-800 hover:underline\">FAQ<\/a> page for more info.","Back to search","Bookmarks","Bookmarks","Email Subscriptions","Are you sure you wish to remove the bookmarked ad?","Page will be automatically reloaded.","REASON: At the current version of drag and drop builder it is not 100% error free to create new taxonomy and immediately attach it to another one and it is best to refresh the page first.","<strong>INFO:<\/strong> At the current version of the builder it is strongly recommended to refresh the page before <strong>connecting, deleting or editing taxonomies<\/strong> as it can cause some unwanted issues while doing those actions without refreshing beforehand. <br \/><strong>We are working hard to improve the builder in every way and regular improvements are to be expected.<\/strong>","INFO: In order to safely delete this taxonomy you will have to refresh the page first.","INFO: It is not possible to attach more than one child taxonomy.","<strong>Note:<\/strong> Only non-assigned terms will be displayed. Click on the parent taxonomy term in order to display its childs.","Pages:","Version History","Current Version","Reset to this version","Are you sure you wish to reset fields builder to this version?","Save as a template","Saved as a template","Displaying last %s versions","Reset to saved template","Create an account","Currently there are no expiring ads","Currently there are no expiring promotions","No ads to display"]};
/*  */</script> <script type='text/javascript'>/*  */
var lc_data = {"dir":"https:\/\/classic.lisfinity.com\/wp-content\/plugins\/lisfinity-core\/","is_demo":"1","demo_product":"https:\/\/classic.lisfinity.com\/ad\/2019-sea-arrow-sailing-yacht\/","is_ssl":"1","rtl":"","is_front":"","is_search":"","is_business":"","url":"https:\/\/classic.lisfinity.com\/","site_url":"\/","admin_url":"https:\/\/classic.lisfinity.com\/wp-admin\/","ajaxurl":"https:\/\/classic.lisfinity.com\/wp-admin\/admin-ajax.php","wp_resturl":"https:\/\/classic.lisfinity.com\/wp-json\/","resturl":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1","locale":{"wp":"en_US","js":"en-US"},"timezone":"7200","site_title":"Lisfinity","endpoint-business":"premium_profile","is_admin":"0","user_admin":"","logged_in":"1","page_id":"8","current_user_id":"2","bookmarks":[288,385,659,763,306,561,616,413,722,0,755,648,707,716,627,280],"business_id":"32","taxonomies":"{\"car\":[\"make\",\"model\",\"body-type\",\"fuel-type\",\"transmission\",\"gears\",\"drivetrain\",\"engine-cc\",\"engine-hp\",\"mileage\",\"engine-kw\",\"door\",\"exterior-colour\",\"air-conditioning\",\"interior-features\",\"security\",\"headlights-type\",\"daytime-running-lights\",\"adaptive-lighting\",\"airbags\",\"wheels-and-tires\",\"breakdown-service\",\"parking-sensors\",\"sports\",\"extras\",\"interior-metal\",\"interior-colour\",\"fuel-consumption\",\"emission-class\",\"emission-sticker\",\"vehicle-history\",\"vehicle-type\",\"damaged-vehicles\",\"number-of-vehicle-owners\",\"hu-valid\",\"approved-used-programme\"],\"real-estate\":[\"property-type\",\"property-information\",\"floor\",\"storey\",\"parking-space\",\"total-space\",\"room\",\"lot-size\",\"bathroom\",\"building-type\",\"ceiling-height\",\"facilities\",\"additional-information\"],\"boat\":[\"boat-make\",\"boat-categories\",\"boat-type\",\"length\",\"width\",\"weight\",\"depth\",\"headroom\",\"engine-performance\",\"engine-hours\",\"year-built\",\"certified-nr-of-persons\",\"material\",\"propulsion\",\"boat-fuel-type\",\"fuel-capacity\",\"keel-type\",\"steering\",\"beds\",\"hull-color\",\"equipment\"],\"bike\":[\"bike-type\",\"bike-gender\",\"bike-brand\",\"wheel-size\",\"chainset-type\",\"bike-gears\",\"fork-travel\",\"frame-material\",\"frame-type\",\"frame-size\",\"bike-age\",\"bike-year\",\"bike-equipment\"],\"pet\":[\"pet-type\",\"breed\",\"pet-size\",\"energy-level\",\"friendliness-to-people\",\"friendliness-to-pets\",\"ease-of-training\",\"grooming-requirements\",\"vocality\",\"exercise-requirements\",\"affection-needs\",\"playfulness\",\"pet-age\",\"gender\",\"pet-color\",\"coat-length\",\"care-behavior\",\"pet-weight\",\"pet-height\"],\"toy-game\":[\"toy-type\",\"age-level\",\"platform\",\"game-category\",\"game-brand\",\"region-code\",\"format\",\"color\",\"language\"],\"common\":[\"state\",\"city\",\"condition\"]}","user_has_business":"1","slug_category":"ad-category","current_product_id":"","product_owner":"","product_business":"","is_owner":"","user_ip":"129.205.112.221","nonce":"bd3d37099e","current_time":"1596557512","product_permalink":{"product_base":"\/product","category_base":"product-category","tag_base":"product-tag","attribute_base":"","use_verbose_page_rules":false},"sticky_header":"0","compare":"","mapbox_url":"https:\/\/api.mapbox.com\/styles\/v1\/pebasdesign\/cjvc5hnuh04gi1fqujdtr8lsv\/tiles\/256\/{z}\/{x}\/{y}?access_token=pk.eyJ1IjoicGViYXNkZXNpZ24iLCJhIjoiY2pvOXdnOTllMDk5eTNxbjBna3Y5ZTh3ZSJ9.jKEoF1y2xKIWzyBbufhjpQ","myaccount":"my-account\/","page_search":"https:\/\/classic.lisfinity.com\/search\/","page_endpoint":"my-account","page_search_endpoint":"search","page_vendors":"https:\/\/classic.lisfinity.com\/authors\/","page_register":"https:\/\/classic.lisfinity.com\/register\/","page_login":"https:\/\/classic.lisfinity.com\/login\/","page_reset":"https:\/\/classic.lisfinity.com\/password-reset\/","page_register_endpoint":"register","page_login_endpoint":"login","page_reset_endpoint":"password-reset","search_product_style":"3","location_format":"partial","product_listing":"listing","payment_package":"payment_package","promotion":"promotion","attachment_data":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/attachment","get_groups":[{"single_name":"Car","plural_name":"Cars","slug":"car","description":"","bg_image":"425","icon":"1084"},{"single_name":"Real Estate","plural_name":"Real Estates","slug":"real-estate","description":"","bg_image":"428","icon":"1085"},{"single_name":"Boat","plural_name":"Boats","slug":"boat","description":"","bg_image":"1066","icon":"1086"},{"single_name":"Bike","plural_name":"Bikes","slug":"bike","bg_image":"424","description":"","icon":"1087"},{"single_name":"Pet","plural_name":"Pets","slug":"pet","bg_image":"384","description":"","icon":"1089"},{"single_name":"Toy & Game","plural_name":"Toys & Games","slug":"toy-game","bg_image":"429","description":"","icon":""},{"single_name":"Electronic","plural_name":"Electronics","slug":"electronic","bg_image":"895"}],"group_fields":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/group-fields","groups":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/groups","groups_by_term":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/groups-term\/(?P<term>\\S+)","group_store":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/group\/store","group_edit":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/group\/edit","group_delete":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/group\/delete","export_fields":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/fields\/export","import_fields":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/fields\/import","import_terms":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/fields\/import\/terms","search_export_fields":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/search-builder\/export","search_import_fields":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/search-builder\/import","taxonomy_fields":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/taxonomy-fields","taxonomy_options":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/taxonomy-options","taxonomy_location_options":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/taxonomy-options\/locations","taxonomy_group_options":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/taxonomy-options\/(?P<group>\\S+)","taxonomy_options_store":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/taxonomy-options\/store","taxonomy_options_edit":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/taxonomy-options\/edit","taxonomy_options_delete":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/taxonomy-options\/delete","get_cf_versions":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/cf\/versions","reset_cf_version":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/cf\/reset-version","save_cf_version":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/cf\/save-version","term":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/term","term_fields":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/terms-fields","terms_get":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/terms","terms_by_group":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/terms-by-group","terms_edit":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/terms-edit","terms_by_taxonomy":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/terms\/(?P<taxonomy>\\S+)","terms_for_search":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/terms-search","term_store":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/term-store","term_edit":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/term-edit","term_remove":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/term-remove","business_fields":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/business\/fields","package_fields":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/package\/fields","product_fields":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/product\/fields","product_submit":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/product\/store","product":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/product","get_product_method":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/product\/method","product_action":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/product-action","packages":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/packages","package_and_promotions":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/package\/get-package","product_data":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/product\/get-data","check_package":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/package\/check","compare_products":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/compare","compare_remove":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/compare-remove","request_call":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/request-call","query_attachments":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/query-attachments","business":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/business","business_type":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/business\/type","business_archive":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/business\/archive","options":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/options\/","option":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/option","options_export":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/options\/export","options_import":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/options\/import","chats":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/chats","messages":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/messages","messages_chat":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/messages","message_submit":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/messages\/store","message_update":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/messages\/update","bids":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/bids\/","submit_bid":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/bids\/store","update_bid":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/bids\/update","buy_bid":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/bids\/buy","update_notifications":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/notifications","update_all_notifications":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/notifications-all","get_stats":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/stats\/get","update_stats":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/stats\/store","search_keyword":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/search\/keyword","search":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/search\/","search_builder_options":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/search-builder\/options","search_builder_fields":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/search-builder\/fields","search_builder_submit":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/search-builder\/store","search_builder_group_get":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/search-builder\/group\/get","search_builder_group_submit":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/search-builder\/group\/store","search_builder_order_edit":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/search-builder\/group\/order","search_builder_groups":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/search-builder\/groups","single_builder_options":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/single-builder\/get","single_builder_add_group":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/single-builder\/group\/store","single_builder_delete_group":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/single-builder\/group\/delete","single_builder_change_group":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/single-builder\/group\/change","single_builder_order_group":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/single-builder\/group\/order","user":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/user","user_action":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/user","auth_options":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/auth\/options","register":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/register","login":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/auth\/login","sms_verify":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/register\/sms","sms_resend":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/register\/sms\/resend","forgot":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/auth\/forgot","reset":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/auth\/reset","login_demo":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/auth\/login\/demo","report_submit":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/report\/store","report_options":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/report\/options","submit_review":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/testimonial\/store","get_reviews":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/testimonial\/get","get_business":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/dashboard\/business\/","get_all_ads":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/dashboard\/all-ads\/","get_product":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/dashboard\/product\/","get_notifications":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/dashboard\/notifications\/","purchase_package":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/dashboard\/purchase-package","purchase_promotion":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/dashboard\/product\/purchase-promotion","purchase_premium":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/dashboard\/purchase-premium","purchase_ad_renewal":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/dashboard\/purchase-ad-renewal","get_wc_profile":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/wc\/profile\/","update_wc_profile":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/wc\/profile\/update","get_country_states":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/wc\/states","get_wc_orders":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/wc\/orders\/","get_wc_order":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/wc\/order\/","get_wc_downloads":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/wc\/downloads","get_cart_count":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/wc\/cart-count","get_tips":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/tips\/get","get_mobile_menu":"https:\/\/classic.lisfinity.com\/wp-json\/lisfinity\/v1\/menus\/mobile","jst":["Import or export the theme options fields into the theme.","Preparing fields...","Search Builder","Import\/Export","Create your business-based search fields without limitation","Home Page","Home search fields","Search Page","Detailed search fields","Detailed Search","Ad Single Group Fields","If you want to remove the search builder from WP Dashboard after building it %s","follow these steps","Import\/Export Fields","Please choose what content to search:","Titles","Description","IDs","Enable search field suggestions","Field groups","Choose field groups to suggest","Author","Premium Profiles","All Authors","Ads","Promoted Ads","All Ads","Field Groups","Taxonomies","Choose fields groups that will be included in the keyword suggestions","Deselect All","Select All","Enter the name of the group","Edit %s Group","Save Group","No Placeholder","Step Size","Label","No label","Placeholder","No placeholder","Prefix","Suffix","Group","Not Specified","The group has been edited","Are you sure you wish to delete the group?","The group has been deleted","Disabled!","You have disabled detailed search from the theme options. Click here to go and re-enable it:","Theme Options","What search fields you would like to see on the search page?","Save","Niche:","Taxonomy","Fields Meta","Add Group","Add New Group","Group Name","What:","Type your search term...","Placholder","What search fields you would like to see on the home page?","Keyword","Choose steps size for this range field","Are you sure that you wish to delete the group?","Single Page","What search field groups would you like to organize\/create on the ad single page?","No group","Select Image","Go back to the taxonomy groups","Common","There are no created taxonomies","Click on the button below to create your first business-based taxonomy","If you want to remove taxonomy builder from WP Dashboard after building it, please %s","Create New Taxonomy","Edit %s","Add Taxonomy","NOTHING TO SHOW","Export Fields","Copied!","Click to copy","Importing fields will override current ones. Do you wish to proceed?","Importing in progress...","Completed!","Import Fields","Are you sure you wish to delete the taxonomy?","Group has been successfully deleted","Fields Builder","Create your business-based taxonomies without limitation. Check %s for any help.","tutorials here","Add Fields Group","Edit %s Field Group","Add new field group","Save","Esc","Are you sure you wish to delete the term?","No parent","Add New Term","Add Term","Values entered by the end users.","When the field is set to the input type terms are not being listed as there can be unlimited number of them.","Not selected","%s left","Premium","Submit","New Ad","Dashboard","Welcome to your dashboard %s","Become"," - Free","Buy Package","There are no available packages for buying. Either create some or disable this section completely from the theme options.","Sorry, but you do not have any active packages.","Purchase package:","In this package","Submit Ad","There is","There are","%s active","package","packages","Package","Media","Action","%d ad left","%d ads left","Days","Free","No Additional Media","Active Ads","Bids","Messages","Packages","Day","Month","Months","You're getting a %s discount","Profile","Search Your Ads","About Page","Testimonials Page","News Page","Shop Page","Contact Page","Choose duration","Premium Profile","Started:","Expires:","Premium profile is currently active and will be for the next <strong class=\"text-grey-1000\">%s<\/strong>. Once it is expired your profile will be reverted to Basic version.","You can extend it anytime by buying the package below. Expiration date would be extended for the amount purchased.","Mark All","Mark as read","%s ago","Archive","Ad has been reported","Ad has been bookmarked","Ad has been liked","Ad has been shared on: %s","Are you sure you wish to mark notification as read?","Are you sure you wish to mark selected notifications as read?","No new notifications.","Not your product.","The ad is currently being reviewed by the site administration.","Edit","Mark as not sold","Mark as sold","Renew","Delete","Agent","Submitted","Expires in","Expired on","Are you sure that you wish to delete this ad?","Are you sure you wish to mark the ad as sold?","Banned Users","Overall settings","Promotions","There are no banned users","Are you sure you wish to unblock the user?","Search by a user","Search bids by a user","Sort by:","There are no bids.","Newest","Oldest","Amount","Amount asc","Search Users...","Are you sure you wish to block the user?","Message cannot be empty.","All Messages (%s)","Click on a name to show the messages.","Your message","User is blocked","Message...","<span class=\"font-semibold\">%d<\/span> characters left","Maximum amount of characters reached.","Send Message","You've been blocked from submitting messages to this conversation.","All Messages","Info","for","day","Purchase","No available promotions to buy","days","Active: %s","Not active","Active Package","Added","Details","left","There are no active promotions.","Add New Promotion","Bump Ad","Currently not on the","1st page","in category","Currently on the","position in category","Active Promotions","See ad page","Pending review","Sold","Search ads...","Expired ads:","Show","Hide","Image","Title","Price","Notifications","Actions","No available ads","Listed date","Expire date","Negotiable","Price on call","0:00:00","Auction Ended","First name","First Name","Last name","Last Name","Company","Country","State","Street Address","Street Address 2","Postcode \/ ZIP","City","Phone","Email","Billing Information","Pages:","No available downloads.","Orders","Product","Downloads Remaining","Expires","Product:","Downloads remaining:","Never","Download","Display name","Display Name","Profile Picture","General Information","Order: # %s","Order updates","No available orders.","Order","Date","Status","Total","Order:","# %s","Date:","Status:","%1$s for %2$s item","%1$s for %2$s items","Password Information","Password","Re-Password","Shipping Information","General","Billing Details","Shipping Details","Conversions","Number of times your ads were shown to users","Number of times users clicked to see your ad.","Ratio between Impressions and Reaches.","Ratio between Reaches and number of times someone clicked to contact you.","Analytics","Last 7 Days","This month","This Year","Impressions","Reaches","Leads","Business Details","My account settings","My Profile","Downloads","Active","Become Premium","Not Active","Hi, ","Compare","Ad received a new like","Bookmark","Read","See Bid","No new notifications","Expiring Ads","Expiring Promotions","The package you selected is not correct, please choose another one.","Choose package","Go Back","Step","out of","Proceed to payment","Save Changes","Prev","Next","Success!","Media Costs","Total media costs: %s","Promotion Costs","Total promotion costs: %s","Total Costs","Total: %s","Choose category","Choose %s","Enter %s","The provided coordinate for %s is not in the correct format.","Your %s","Choose location input","Choose if you wish to use google to find your location or enter coordinates manually.","Google Map","Longitude & Latitude","Type the address","Type your location","Latitude","Enter latitude of your location","Longitude","Enter longitude of your location","Click to get coordinates from any address.","Drag marker on the map","You can drag marker to your desired location.","%s (allowed formats JPG, PNG and maximum %s)","FREE","%s %s left","You have","free %s","and","paid %s","You cannot add more than %s %s","Upload Image","Profile Avatar","Visual","Text","Enable working hours","Working Day","Open all day","Non-working day","Viber","WhatsApp","Skype","Features Included","Add Ons Included","Promotion","Add Promotion","Remove Promotion","%s (only online hosted videos allowed)","Find a Video","Type or paste url of the video","Insert video","The video could not be found","An error occurred while trying to fetch files data.","The %s value cannot be lower than %d.","The %s value cannot be higher than %d.","The %s have to be checked.","The %s cannot be empty.","The %s cannot be empty","Contact phones","Work time","Additional info","Welcome to","<span class=\"font-bold uppercase text-green-800\">Open<\/span> today from","to","Closed today","Price Acs","Price Desc","Top Rated","Nearby","Recommended","%s ads","in","All Categories","Loading...","No results found","Visit Store","Testimonials","Contact","Leave a Testimonial","Please provide all required ratings!","Please provide a testimonial message.","Leave a review","No products to display","Any","%s in %s","None","%s in %s","%s in %s: %s","%s category","From:","To:","Login","Don't have an account?","Sign up","Username","Your username","Remember me","Forgot Password?","Re-enter New Password","Back to Login","Reset Password","Username or Email Address","New Password","+150017122661","You will receive a verification code on this number.","Terms & Conditions","Sign Up","Valid email","Enter 4 digits code","Only members of the site can send messages, click on the button below to become a member.","Send","Start bidding","Place new bid","You've been blocked by the owner.","Starting price at","Place Bid","or","Buy now price at","Buy Now","You can choose to place bid or to buy now for predefined price.","Start Messaging","Report Form","Select a Reason","You can be banned for violent messages.","Submit Report","Testimonial Form","Overall score","<span class=\"font-semibold text-red-700\">%d<\/span> characters left","Submit Testimonial","Search","Preparing dashboard...","Sign up +","Lisfinity on social networks","Expand","Resize","Esc","SMS Code","SMS Verifiction","Promo Image","Home","Map:","Back to search","Search my store","Filter","Reset","Category","Search %s","On Call","%s results","Selected:","Product Image","First","Last","Fixed","Sale","Logo","%s Icon","of","Bid has to be higher than 0.","Bid has to be higher than %d.","Are you sure that you wish to buy now?","See Bids","Accepting bids: ","No bids","We notified the owner about your purchase and provided them your necessary information so they can contact you with additional details.","Please take your time to read our <a href=\"javascript:\" target=\"_blank\" class=\"font-bold text-blue-600\">Purchase Guide<\/a> and familiarize yourself with our <a href=\"javascript:\" target=\"_blank\" class=\"font-bold text-blue-600\">Privacy Policy<\/a>","In case of any issue please <a href=\"javascript:\" target=\"_blank\" class=\"font-bold text-blue-600\">Contact Us<\/a>","Thank you","Bidding History","Your bid","Read Messages","Send a Message","Members only","Messenger","No messages","Authors","ID: %s","Other","%s:","Bookmarked","Print","Report","Share","Calculator","You cannot compare %s and a %s. Please confirm to proceed with comparison.","Add to compare","Remove","Nothing to compare","Compare Criteria","Share on","Advertisement","Trade-in value","Sales Tax","Interest Rate","Terms","12 Months","24 Months","Calculate","36 Months","Total: ","Taxes: ","48 Months","Interest: ","Monthly: ","60 Months","Financing Calculator","Down Price","Safety Tips","Buy and sell safely on %s!","Read our Safety Tips","Similar ads","Show on Map","Address","Request Call","from","Closed","See work times","Show number","%d day","%d days","detailed","There are no available fields groups","Create field groups","Page <span class=\"text-grey-1100\">%d<\/span> of %d","Preparing comparison data...","Preparing products","Compare ads","There are no statistics available at the moment. Either you have no ads or they are yet to be seen by someone.","Saving...","Already have an account?","Sign in","Use Testimonials Builder from the theme options to build your own testimonials rating criteria required to leave testimonials.","Loading Ad...","Promoted Authors","All Authors","%s Authors","There are no active businesses","Type author name...","5 Stars","4 Stars","3 Stars","2 Stars","1 Star","Review:","All","There are no safety tips to show.","Resend SMS code","Renew Ad","Purchase package","Choose the package that will be used for the ad renewal","It seems that you don't have any packages that could be used for renewal. Please click on a button below to purchase one.","Renewing...","Parent > Child related taxonomies cannot be moved together in this version!","SOLUTION 1: Separate them before moving then connect them again afterwards.","SOLUTION 2: Move other taxonomies around them.","To achieve the best looking layout it is suggested not to mix checkbox type with the other taxonomy types, while the checkboxes can be mixed together.","Choose %s","Additional Files","AD","Please set comparison criteria in the theme options","Logout","Are you sure you wish to remove the image?","Are you sure you wish to logout from the site?","Loading Ads...","Preparing Page...","Package Details","Loading Messages","New Package","%d remaining","Hide number","Find us on map","Expand map","Hide work times","Demo account required!","Please use demo account in order to try instant messaging system.","Click on the button below if you wish to login as the demo user.","NOTE:","Your actions after login will not be saved, this is a demo account.","Demo Notification","This is a demo account used for showcasing the theme functionality! Any changes that you make during the theme exploration will not be saved.","Block user","See Messages","This is your ad. You will be redirected to your dashboard to see all messages you received.","If you would you like to see messages from buyer perspective go to:","See Ad","Only members of the site can post bids, click on the button below to become a member.","Please use demo account in order to try auction system.","This is your ad. You will be redirected to your dashboard to see all bids you received.","If you would you like to see bids from buyer perspective go to:","You cannot post a review your own profile.","Cancel","Edit Fields","Edit Group","Delete Group","See More","See Less","You have to be a member in order leave a testimonial.","Click on a button below to open login page.","Login","Registration is disabled for the demo purposes. Click on the button below to login as the demo user and keep exploring the theme.","Demo account:","About","<span class=\"text-grey-1100\">%d<\/span> of %d","You can choose to place bid or to buy now for predefined price, check our <a href=\"javascript:\" target=\"_blank\" class=\"font-semibold text-blue-800 hover:underline\">FAQ<\/a> page for more info.","You can be banned for violent messages, check our <a href=\"24\" target=\"_blank\" class=\"font-semibold text-blue-800 hover:underline\">FAQ<\/a> page for more info.","Back to search","Bookmarks","Bookmarks","Email Subscriptions","Are you sure you wish to remove the bookmarked ad?","Page will be automatically reloaded.","REASON: At the current version of drag and drop builder it is not 100% error free to create new taxonomy and immediately attach it to another one and it is best to refresh the page first.","<strong>INFO:<\/strong> At the current version of the builder it is strongly recommended to refresh the page before <strong>connecting, deleting or editing taxonomies<\/strong> as it can cause some unwanted issues while doing those actions without refreshing beforehand. <br \/><strong>We are working hard to improve the builder in every way and regular improvements are to be expected.<\/strong>","INFO: In order to safely delete this taxonomy you will have to refresh the page first.","INFO: It is not possible to attach more than one child taxonomy.","<strong>Note:<\/strong> Only non-assigned terms will be displayed. Click on the parent taxonomy term in order to display its childs.","Pages:","Version History","Current Version","Reset to this version","Are you sure you wish to reset fields builder to this version?","Save as a template","Saved as a template","Displaying last %s versions","Reset to saved template","Create an account","Currently there are no expiring ads","Currently there are no expiring promotions","No ads to display"]};
/*  */</script> <div id="wp-link-backdrop" style="display: none"></div><div id="wp-link-wrap" class="wp-core-ui" style="display: none" role="dialog" aria-labelledby="link-modal-title"><form id="wp-link" tabindex="-1"> <input type="hidden" id="_ajax_linking_nonce" name="_ajax_linking_nonce" value="61fd6fd8fb" /><h1 id="link-modal-title">Insert/edit link</h1> <button type="button" id="wp-link-close"><span class="screen-reader-text">Close</span></button><div id="link-selector"><div id="link-options"><p class="howto" id="wplink-enter-url">Enter the destination URL</p><div> <label><span>URL</span> <input id="wp-link-url" type="text" aria-describedby="wplink-enter-url" /></label></div><div class="wp-link-text-field"> <label><span>Link Text</span> <input id="wp-link-text" type="text" /></label></div><div class="link-target"> <label><span></span> <input type="checkbox" id="wp-link-target" /> Open link in a new tab</label></div></div><p class="howto" id="wplink-link-existing-content">Or link to existing content</p><div id="search-panel"><div class="link-search-wrapper"> <label> <span class="search-label">Search</span> <input type="search" id="wp-link-search" class="link-search-field" autocomplete="off" aria-describedby="wplink-link-existing-content" /> <span class="spinner"></span> </label></div><div id="search-results" class="query-results" tabindex="0"><ul></ul><div class="river-waiting"> <span class="spinner"></span></div></div><div id="most-recent-results" class="query-results" tabindex="0"><div class="query-notice" id="query-notice-message"> <em class="query-notice-default">No search term specified. Showing recent items.</em> <em class="query-notice-hint screen-reader-text">Search or use up and down arrow keys to select an item.</em></div><ul></ul><div class="river-waiting"> <span class="spinner"></span></div></div></div></div><div class="submitbox"><div id="wp-link-cancel"> <button type="button" class="button">Cancel</button></div><div id="wp-link-update"> <input type="submit" value="Add Link" class="button button-primary" id="wp-link-submit" name="wp-link-submit"></div></div></form></div> <script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_f583af4141381bc23d37b3e29069466f.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_aae20f5d0d8186f303a6599223407079.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_4b205bba0fb7d6d227be650d02611881.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_caf9d49b4e1f49d0dd7791d6a18f67df.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_5d3729c6272944c9a6ae0d9e0235f1ec.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_1e0b5bc8e50fc00857a9aab22c2168c1.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_0fea02c5bb1cbacdcde81a82a302cc17.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_b4de0d1a718ffbb44f8e0220cc26fde5.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_5ff45ba4cffafdc407704e03345e7a36.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_2f0b323eb7a2034cc9a98af9b11a3149.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_cbe961a16a16eb5a398fc58212adb201.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_04a7a3841ed1065280ae2e7ee5ba109f.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_4a8dfaafda53524f07a0fade26985274.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_e8ef994e6433edde88f56d1a71e4562c.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_df03c520f4495978c5c6da15ada49e59.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_ecde37ea7d9601feadc84543404492f0.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_1ff6bfc8f021eb514cae47606345ce18.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_31eea6e8505c6f5c7030c0e99c211719.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_bb0189f784ef5536a3ece7d25db7fe16.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_91a1c382d0c83a1de6549d38308ae463.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_a7abf4561a737192d6152f8824448aac.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_d3efe9f7c619ef9b8a8fdd59b68017e3.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_d84a5e71ccc4429fe1498c2131f924f3.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_799acd1a50034b593ce4d278627025fe.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_d0dadaf03fdae728c14fab43d742119e.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_3403ffc15df6e078a30198e8b491d272.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_9d0c231d7fff1819ace3ff298beff2f4.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_fd921f353fc6d76a9f05f8fb65e87c3b.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_f7bab9f9d64f30591a59167536e08f07.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_f90228c39697f593474d52765d86dcdd.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_b401bf29f7c6a71db6b8cf3c8fa80acc.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_c2e23c5f7d1effb9a122c4a29b42a3df.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_1b68c4547b1a8ff724666f70c7a6b9fb.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_6be68e59f975248a347b78c346469518.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_f50f61ea2ff9ca8b6e200ab938b1521b.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_34ee86cecde627d41883f01edf2eea2b.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_c5fee0cb08b07292fdcafe1a49c44691.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_6f3dee811c0c55a22f190bfca8f9bd22.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_86c222082904fb6c43cc16baca775277.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_124836ddcd8f9ea03a0d642fd159f3de.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_c0a0b7101ecf9f9bd3c122591a85aa06.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_12e42e0f680139dc902157d11c8f79e3.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_75f2148153e579adfb5019dd6dd2c16a.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_7fd026321953eaf00176133bb75cfd7b.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_9eca48bcb9887abec5c51683c83c7ac8.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_8d1ae6bea53a200bb5e75b78293b320f.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_0bf904d1173aa515608f2229fb1c4ab0.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_7ac532a39db4258934c7607c4b36089b.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_82fdb3f9f4d42ba21a299f8b527fd5a8.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_d0faa3c5021689b94dcdf309612fc828.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_fc648fd2733ecc327b3458d35d3b89ff.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_f36504828d0545dbf28c852b26b21fbc.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_878d637af2ddcb545eac32a78dee8f66.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_186f6b4d7ced1bf8f60dd41f83c80678.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_2ed9fb86e150280feedea8133dbc2a76.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_881fb0f186eda186ae17e720b78530ef.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_038eaf5f2fdfbd69fd82b480e9c27e6c.js"></script><script type="text/javascript" src="//411969-1296438-raikfcquaxqncofqfm.stackpathdns.com/wp-content/cache/breeze-minification/editor/js/breeze_801fce5d07aee0f75bb55e37f7a6dd13.js"></script><script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"NRJS-2daad049a5f06189192","applicationID":"320542214","transactionName":"MQNQZkRTCEADVEYKDghJc1FCWwldTUdTBAQ=","queueTime":0,"applicationTime":1533,"atts":"HURTEAxJG04=","errorBeacon":"bam.nr-data.net","agent":""}</script></body></html>
