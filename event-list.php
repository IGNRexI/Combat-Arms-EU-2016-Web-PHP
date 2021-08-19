<?php include 'header.php';?>
<?php include 'menu.php';?>
<div id="bodyContentsWrapper">
    <form class="board_list">
        <h2>Etkinlikler</h2>
        <div class="board_list_search">
            <input type="submit" value="Arama" class="search_btn">
            <input type="text" class="search_input">
            <select>
				<option value="Title" selected="selected">Konu</option>
				<option value="Content">İçindekiler</option>
            </select>
        </div>
        <table class="board_list_table event_table">
            <colgroup>
                <col class="board_list_table_title">
                <col class="board_list_table_date">
                <col class="board_list_table_count">
            </colgroup>
            <thead>
                <tr>
                    <th>Konu</th>
                    <th>Tarih</th>
                    <th>Görüntüleme</th>
                </tr>
            </thead>
            <tbody>
                        <tr class="line_separator">
                            <td colspan="3"></td>
                        </tr>
                        <tr onclick="document.location.href='#'">
                            <td class="event_list_table_title">
                                <a href="#" class="evt_01"><img height="20" src="img/weapons/weapon_sample.png"></a><a href="#1" class="evt_02">Özel Firsat!</a><div class="event_stat on">İşlem sürüyor</div>
                            </td>
                            <td class="event_list_table_date"><div>23.09.2016<br>-<br>25.09.2016</div></td>
                            <td class="event_list_table_count">172</td>
                        </tr>
                        <tr class="line_separator">
                            <td colspan="3"></td>
                        </tr>
                        <tr onclick="document.location.href='#'">
                            <td class="event_list_table_title">
                                <a href="#" class="evt_01"><img height="20" src="img/weapons/weapon_sample.png"></a><a href="#1" class="evt_02">Özel Firsat!</a><div class="event_stat on">İşlem sürüyor</div>
                            </td>
                            <td class="event_list_table_date"><div>23.09.2016<br>-<br>25.09.2016</div></td>
                            <td class="event_list_table_count">172</td>
                        </tr>
                        <tr class="line_separator">
                            <td colspan="3"></td>
                        </tr>
                        <tr onclick="document.location.href='#'">
                            <td class="event_list_table_title">
                                <a href="#" class="evt_01"><img height="20" src="img/weapons/weapon_sample.png"></a><a href="#1" class="evt_02">Özel Firsat!</a><div class="event_stat on">İşlem sürüyor</div>
                            </td>
                            <td class="event_list_table_date"><div>23.09.2016<br>-<br>25.09.2016</div></td>
                            <td class="event_list_table_count">172</td>
                        </tr>
                        <tr class="line_separator">
                            <td colspan="3"></td>
                        </tr>
            </tbody>
        </table>
        <div class="pager_wrapper">
&lt;                        <strong>1</strong>
                        <a href="#2">-2</a>
                    <a href="#6">&gt;</a>
                    <a href="#18">&gt;&gt;</a>
        </div>
    </form>
</div>
<div id="sidebarWrapper">
    
<ul class="sideNavi">
    <li><a href="notice-list">Bildirimler</a></li>
    <li><a href="update-list">Güncellemeler</a></li>
    <li class="on"><a href="event-list">Etkinlikler</a></li>
    <li><a href="devblog-list">Dev. Blog</a></li>
</ul>
<div class="sideNews">
    <h3>Son Haberler</h3>
    <ul class="sidebar_mrnews">
                <li><a href="/web/20160924080821/http://combatarms.nexon.net/Event/View/3083"><h4>Özel Firsat! TPG-1 Master ve RPK-74M</h4><p>   
 
&amp;nbsp; 
&amp;nbsp;  Askerler,   
 
 Combat Arms Ekibi mağazaya yeni bir &amp;Ouml;zel Fırsat ekledi! 
 
Hemen giriş yapın ve bu fırsatı ka&amp;...</p></a></li>
                <li><a href="/web/20160924080821/http://combatarms.nexon.net/Event/View/3080"><h4>Güçsüzler Etkinligi, Kiralama Süresi Artirimlari ve Harita Günlük Görevleri!</h4><p>  
 
 Askerler,  
 
Bu haftaki etkinlik serisi sizlere eşsiz GP kiralama etkinliği, zayıf silah etkinlikleri ve yeni g&amp;uuml;nl&amp;uuml;k g&amp;ouml;re...</p></a></li>
                <li><a href="/web/20160924080821/http://combatarms.nexon.net/Event/View/3077"><h4>Oktoberfest Özel, GP Indirimleri, Mythic Firsatlar ve muhtesem Paketler!</h4><p>  
 
   Askerler,    
 
  Bu hafta sizler i&amp;ccedil;in harika fırsatlarımız var, haydi başlayalım!   
 
  Ayrıca kalıcı silah ve te&amp;ccedi...</p></a></li>
                <li><a href="/web/20160924080821/http://combatarms.nexon.net/Update/View/871"><h4>Kışlalar Temizleniyor: Daha Uzun Kiralama Süreleri, Ghost HiSec Kaldırma ve Aksaklık Giderme</h4><p> Askerler,  
 
Bir taraftan Combat Arms tarihinin en b&amp;uuml;y&amp;uuml;k g&amp;uuml;ncellemesini hazırlarken diğer taraftan da mevcut sorunları unutmuş ...</p></a></li>

    </ul>
</div>
<div id="clearFloat"></div>
</div></div>
<?php include 'footer.php';?>