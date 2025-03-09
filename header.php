<header id="header">
<script>
	grecaptcha.ready(function() {
	grecaptcha.execute('_reCAPTCHA_site_key_', {action: 'homepage'}).then(function(token) {
  		   ...
   		});
	});
		</script>
	<div class="menumovil">
		<button id="botonmenumovil" onclick="mostrarmenu()">≡</button>
		<button onclick="cerrarmenu()" id="botonmenumovil2">x</button>
		<div id="menumovil2">
			<ul id="listamovil">
				<a href="/"><li>Inicio</li></a>
				<a href="/contactar"><li>Contactar</li></a>
				<a href="/coronavirus"><li>Colabora contra el CoronaVirus</li></a>
				<a href="/phoneinstall"><li>Instalar como aplicación</li></a>
			</ul>
			<form style="margin-top:10vw;width: 90%;margin-left: 5%;" method="post" action="/newsletter.php">
				<h1>Newsletter</h1>
				<p>Recibe en tu correo nuestras noticias más importantes.</p>
				<input placeholder="Correo electrónico" type="email" name="correo">
				<input type="submit" value="Enviar">
			</form>
		</div>
		<script type="text/javascript">
			function mostrarmenu(){
				document.getElementById('botonmenumovil').style.display = 'none';
				document.getElementById('botonmenumovil2').style.display = 'flex';
				document.getElementById('menumovil2').id = 'menumovil3';
			}
			function cerrarmenu(){
				document.getElementById('botonmenumovil').style.display = 'flex';
				document.getElementById('menumovil3').id = 'menumovil2';
				document.getElementById('botonmenumovil2').style.display = 'none';
			}
		</script>
	</div>
	<a href="/index.php"><img alt="NewsBad" src="/img/letraslogo.png"></a>
	<ul>
		<a href="/"><li>Inicio</li></a>
		<a href="/contactar"><li>Contactar</li></a>
		<a href="/coronavirus"><li>Colabora contra el CoronaVirus</li></a>
	</ul>
</header>
	<a href="https://www.newsbad.es/coronavirus/">
		<div class="apartadocoronavirus">
			<img alt="Médicos con mascarillas" src="/img/mascarillasmedico.jpg">
			<div>
				<p>Ayúdanos a difundir</p>
				<p>Difusión medios para donaciones y entretenimiento para matar al virus.</p>
				<p>Click aquí</p>
			</div>
		</div>
	</a>
<!-- Anuncio Banner grande ordenador -->
<div class="anunciosordenador">
	
	<noscript>
	    <iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3870950&output=noscript&type=300x250" width="300" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
	</noscript>
	<script type="application/javascript">
	(function() {

	    //version 1.0.0

	    var adConfig = {
	    "ads_host": "a.exdynsrv.com",
	    "syndication_host": "syndication.exdynsrv.com",
	    "idzone": 3870954,
	    "popup_fallback": false,
	    "popup_force": false,
	    "chrome_enabled": true,
	    "new_tab": true,
	    "frequency_period": 720,
	    "frequency_count": 2,
	    "trigger_method": 3,
	    "trigger_class": "",
	    "only_inline": false
	};

	    if(!window.document.querySelectorAll){document.querySelectorAll=document.body.querySelectorAll=Object.querySelectorAll=function querySelectorAllPolyfill(r,c,i,j,a){var d=document,s=d.createStyleSheet();a=d.all;c=[];r=r.replace(/\[for\b/gi,"[htmlFor").split(",");for(i=r.length;i--;){s.addRule(r[i],"k:v");for(j=a.length;j--;){a[j].currentStyle.k&&c.push(a[j])}s.removeRule(0)}return c}}var popMagic={version:"1.0.0",cookie_name:"",url:"",config:{},open_count:0,top:null,browser:null,configTpl:{ads_host:"",syndication_host:"",idzone:"",frequency_period:720,frequency_count:1,trigger_method:1,trigger_class:"",popup_force:false,popup_fallback:false,chrome_enabled:true,new_tab:false,cat:"",tags:"",el:"",sub:"",sub2:"",sub3:"",only_inline:false},init:function(config){if(typeof config.idzone==="undefined"||!config.idzone){return}for(var key in this.configTpl){if(!this.configTpl.hasOwnProperty(key)){continue}if(typeof config[key]!=="undefined"){this.config[key]=config[key]}else{this.config[key]=this.configTpl[key]}}if(typeof this.config.idzone==="undefined"||this.config.idzone===""){return}if(this.config.only_inline!==true){this.loadHosted()}this.addEventToElement(window,"load",this.preparePop)},getCountFromCookie:function(){var shownCookie=popMagic.getCookie(popMagic.cookie_name);var ctr=typeof shownCookie==="undefined"?0:parseInt(shownCookie);if(isNaN(ctr)){ctr=0}return ctr},shouldShow:function(){if(popMagic.open_count>=popMagic.config.frequency_count){return false}var ctr=popMagic.getCountFromCookie();popMagic.open_count=ctr;return!(ctr>=popMagic.config.frequency_count)},setAsOpened:function(){var new_ctr=1;if(popMagic.open_count!==0){new_ctr=popMagic.open_count+1}else{new_ctr=popMagic.getCountFromCookie()+1}popMagic.setCookie(popMagic.cookie_name,new_ctr,popMagic.config.frequency_period);if(new_ctr>=popMagic.config.frequency_count){popMagic.setCookie("nb-no-req-"+popMagic.config.idzone,true,popMagic.config.frequency_period)}},loadHosted:function(){var hostedScript=document.createElement("script");hostedScript.type="text/javascript";hostedScript.async=true;hostedScript.src="//"+this.config.ads_host+"/popunder1000.js";hostedScript.id="popmagicldr";for(var key in this.config){if(!this.config.hasOwnProperty(key)){continue}if(key==="ads_host"||key==="syndication_host"){continue}hostedScript.setAttribute("data-exo-"+key,this.config[key])}var insertAnchor=document.getElementsByTagName("body").item(0);if(insertAnchor.firstChild){insertAnchor.insertBefore(hostedScript,insertAnchor.firstChild)}else{insertAnchor.appendChild(hostedScript)}},preparePop:function(){if(typeof exoJsPop101==="object"&&exoJsPop101.hasOwnProperty("add")){return}popMagic.top=self;if(popMagic.top!==self){try{if(top.document.location.toString()){popMagic.top=top}}catch(err){}}popMagic.cookie_name="splashWeb-"+popMagic.config.idzone+"-42";popMagic.buildUrl();popMagic.browser=popMagic.browserDetector.detectBrowser(navigator.userAgent);if(!popMagic.config.chrome_enabled&&(popMagic.browser.name==="chrome"||popMagic.browser.name==="crios")){return}var popMethod=popMagic.getPopMethod(popMagic.browser);popMagic.addEvent("click",popMethod)},getPopMethod:function(browserInfo){if(popMagic.config.popup_force){return popMagic.methods.popup}if(popMagic.config.popup_fallback&&browserInfo.name==="chrome"&&browserInfo.version>=68&&!browserInfo.isMobile){return popMagic.methods.popup}if(browserInfo.isMobile){return popMagic.methods.default}if(browserInfo.name==="chrome"){return popMagic.methods.chromeTab}return popMagic.methods.default},buildUrl:function(){var protocol=document.location.protocol!=="https:"&&document.location.protocol!=="http:"?"https:":document.location.protocol;var p=top===self?document.URL:document.referrer;var script_info={type:"inline",name:"popMagic",ver:this.version};var encodeScriptInfo=function(script_info){var result=script_info["type"]+"|"+script_info["name"]+"|"+script_info["ver"];return encodeURIComponent(btoa(result))};this.url=protocol+"//"+this.config.syndication_host+"/splash.php"+"?cat="+this.config.cat+"&idzone="+this.config.idzone+"&type=8"+"&p="+encodeURIComponent(p)+"&sub="+this.config.sub+(this.config.sub2!==""?"&sub2="+this.config.sub2:"")+(this.config.sub3!==""?"&sub3="+this.config.sub3:"")+"&block=1"+"&el="+this.config.el+"&tags="+this.config.tags+"&scr_info="+encodeScriptInfo(script_info)},addEventToElement:function(obj,type,fn){if(obj.addEventListener){obj.addEventListener(type,fn,false)}else if(obj.attachEvent){obj["e"+type+fn]=fn;obj[type+fn]=function(){obj["e"+type+fn](window.event)};obj.attachEvent("on"+type,obj[type+fn])}else{obj["on"+type]=obj["e"+type+fn]}},addEvent:function(type,fn){var targetElements;if(popMagic.config.trigger_method=="3"){targetElements=document.querySelectorAll("a");for(i=0;i<targetElements.length;i++){popMagic.addEventToElement(targetElements[i],type,fn)}return}if(popMagic.config.trigger_method=="2"&&popMagic.config.trigger_method!=""){var trigger_classes;var trigger_classes_final=[];if(popMagic.config.trigger_class.indexOf(",")===-1){trigger_classes=popMagic.config.trigger_class.split(" ")}else{var trimmed_trigger_classes=popMagic.config.trigger_class.replace(/\s/g,"");trigger_classes=trimmed_trigger_classes.split(",")}for(var i=0;i<trigger_classes.length;i++){if(trigger_classes[i]!==""){trigger_classes_final.push("."+trigger_classes[i])}}targetElements=document.querySelectorAll(trigger_classes_final.join(", "));for(i=0;i<targetElements.length;i++){popMagic.addEventToElement(targetElements[i],type,fn)}return}popMagic.addEventToElement(document,type,fn)},setCookie:function(name,value,ttl_minutes){var now_date=new Date;now_date.setMinutes(now_date.getMinutes()+parseInt(ttl_minutes));var c_value=encodeURIComponent(value)+"; expires="+now_date.toUTCString()+"; path=/";document.cookie=name+"="+c_value},getCookie:function(name){var i,x,y,cookiesArray=document.cookie.split(";");for(i=0;i<cookiesArray.length;i++){x=cookiesArray[i].substr(0,cookiesArray[i].indexOf("="));y=cookiesArray[i].substr(cookiesArray[i].indexOf("=")+1);x=x.replace(/^\s+|\s+$/g,"");if(x===name){return decodeURIComponent(y)}}},randStr:function(length,possibleChars){var text="";var possible=possibleChars||"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";for(var i=0;i<length;i++){text+=possible.charAt(Math.floor(Math.random()*possible.length))}return text},isValidUserEvent:function(event){if("isTrusted"in event&&event.isTrusted&&popMagic.browser.name!=="ie"&&popMagic.browser.name!=="safari"){return true}else{return event.screenX!=0&&event.screenY!=0}},isValidHref:function(href){if(typeof href==="undefined"||href==""){return false}var empty_ref=/\s?javascript\s?:/i;return!empty_ref.test(href)},findLinkToOpen:function(clickedElement){var target=clickedElement;var location=false;try{var breakCtr=0;while(breakCtr<20&&!target.getAttribute("href")&&target!==document&&target.nodeName.toLowerCase()!=="html"){target=target.parentNode;breakCtr++}var elementTargetAttr=target.getAttribute("target");if(!elementTargetAttr||elementTargetAttr.indexOf("_blank")===-1){location=target.getAttribute("href")}}catch(err){}if(!popMagic.isValidHref(location)){location=false}return location||window.location.href},getPuId:function(){return"ok_"+Math.floor(89999999*Math.random()+1e7)},browserDetector:{browserDefinitions:[["firefox",/Firefox\/([0-9.]+)(?:\s|$)/],["opera",/Opera\/([0-9.]+)(?:\s|$)/],["opera",/OPR\/([0-9.]+)(:?\s|$)$/],["edge",/Edge\/([0-9._]+)/],["ie",/Trident\/7\.0.*rv:([0-9.]+)\).*Gecko$/],["ie",/MSIE\s([0-9.]+);.*Trident\/[4-7].0/],["ie",/MSIE\s(7\.0)/],["safari",/Version\/([0-9._]+).*Safari/],["chrome",/(?!Chrom.*OPR)Chrom(?:e|ium)\/([0-9.]+)(:?\s|$)/],["bb10",/BB10;\sTouch.*Version\/([0-9.]+)/],["android",/Android\s([0-9.]+)/],["ios",/Version\/([0-9._]+).*Mobile.*Safari.*/],["yandexbrowser",/YaBrowser\/([0-9._]+)/],["crios",/CriOS\/([0-9.]+)(:?\s|$)/]],detectBrowser:function(userAgent){var isMobile=userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile|WebOS|Windows Phone/i);for(var i in this.browserDefinitions){var definition=this.browserDefinitions[i];if(definition[1].test(userAgent)){var match=definition[1].exec(userAgent);var version=match&&match[1].split(/[._]/).slice(0,3);var versionTails=Array.prototype.slice.call(version,1).join("")||"0";if(version&&version.length<3){Array.prototype.push.apply(version,version.length===1?[0,0]:[0])}return{name:definition[0],version:version.join("."),versionNumber:parseFloat(version[0]+"."+versionTails),isMobile:isMobile}}}return{name:"other",version:"1.0",versionNumber:1,isMobile:isMobile}}},methods:{default:function(triggeredEvent){if(!popMagic.shouldShow()||!popMagic.isValidUserEvent(triggeredEvent))return true;var clickedElement=triggeredEvent.target||triggeredEvent.srcElement;var href=popMagic.findLinkToOpen(clickedElement);window.open(href,"_blank");popMagic.setAsOpened();popMagic.top.document.location=popMagic.url;if(typeof triggeredEvent.preventDefault!=="undefined"){triggeredEvent.preventDefault();triggeredEvent.stopPropagation()}return true},chromeTab:function(event){if(!popMagic.shouldShow()||!popMagic.isValidUserEvent(event))return true;if(typeof event.preventDefault!=="undefined"){event.preventDefault();event.stopPropagation()}else{return true}var a=top.window.document.createElement("a");var target=event.target||event.srcElement;a.href=popMagic.findLinkToOpen(target);document.getElementsByTagName("body")[0].appendChild(a);var e=new MouseEvent("click",{bubbles:true,cancelable:true,view:window,screenX:0,screenY:0,clientX:0,clientY:0,ctrlKey:true,altKey:false,shiftKey:false,metaKey:true,button:0});e.preventDefault=undefined;a.dispatchEvent(e);a.parentNode.removeChild(a);window.open(popMagic.url,"_self");popMagic.setAsOpened()},popup:function(triggeredEvent){if(!popMagic.shouldShow()||!popMagic.isValidUserEvent(triggeredEvent))return true;var winOptions="";if(popMagic.config.popup_fallback&&!popMagic.config.popup_force){var height=Math.max(Math.round(window.innerHeight*.8),300);var width=Math.max(Math.round(window.innerWidth*.7),300);var top=window.screenY+100;var left=window.screenX+100;winOptions="menubar=1,resizable=1,width="+width+",height="+height+",top="+top+",left="+left}var prePopUrl=document.location.href;var popWin=window.open(prePopUrl,popMagic.getPuId(),winOptions);setTimeout(function(){popWin.location.href=popMagic.url},200);popMagic.setAsOpened();if(typeof triggeredEvent.preventDefault!=="undefined"){triggeredEvent.preventDefault();triggeredEvent.stopPropagation()}}}};
	    popMagic.init(adConfig);
	})();
	</script>	
</div>

<div class="menulateral">
	<h2>Últimas noticias</h2>
	<a href="https://www.newsbad.es/noticias/verano-coronavirus.php"><p>Verano, playas, piscinas y coronavirus</p></a>
	<a href="https://www.newsbad.es/noticias/apple-cae-bolsa.php"><p>Apple cae en bolsa y casi regala sus acciones en Wall Street</p></a>
	<a href="https://www.newsbad.es/noticias/paliza-tekashi.php"><p>Brutal paliza Tekashi 6ix9ine</p></a>
</div>

<div class="menulateral" style="top:52%;">
	<h2>NewsLetter</h2>
	<p>Únete a nuestra newsletter para recibir nuestras noticias más importantes</p>
	<form style="width: 90%;" method="post" action="/newsletter.php">
		<input placeholder="Correo electrónico" type="email" name="correo">
		<input type="submit" value="Enviar">
	</form>
</div>
<div class="menulateral" style="background-color: white;top:100%">

<!-- Anuncio Banner -->

<script type="application/javascript">
    var ad_idzone = "3870920",
    ad_width = "300",
    ad_height = "250"
</script>
<script type="application/javascript" src="https://a.exdynsrv.com/ads.js"></script>
<noscript>
    <iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3870920&output=noscript&type=300x250" width="300" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
</noscript>
</div>
