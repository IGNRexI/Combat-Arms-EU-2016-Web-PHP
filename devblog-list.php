<?php include 'header.php';?>
<?php include 'menu.php';?>
<div id="bodyContentsWrapper">
    <form class="board_list">
        <h2>Dev. Blog</h2>
        <div class="board_list_search">
            <input type="submit" value="Arama" class="search_btn">
            <input type="text" class="search_input">
            <select>
				<option value="Title" selected="selected">Konu</option>
				<option value="Content">İçindekiler</option>
            </select>
        </div>
        <table class="board_list_table">
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
                        <tr onclick="document.location.href='#">
                            <td class="board_list_table_title">
                                <a href="#">Combat Arms Dev Blog – "GP Ödülleri Artışı ve Kiralık Ekipman Sınırının Kaldırılması"</a>
                            </td>
                            <td class="board_list_table_date">23.09.2016</td>
                            <td class="board_list_table_count">282</td>
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
    <li><a href="event-list">Etkinlikler</a></li>
    <li class="on"><a href="devblog-list">Dev. Blog</a></li>
</ul>
<div class="sideNews">
    <h3>Son Haberler</h3>
    <ul class="sidebar_mrnews">
                <li><a href="#120"><h4>Özel Firsat! FAMAS G2 SE &amp; MP7 MOD Steel</h4><p> 
 &amp;nbsp; 

 &amp;nbsp; 

   Askerler,   
 
Combat Arms Ekibi mağazaya yeni bir &amp;Ouml;zel Fırsat ekledi! 
 
Hemen giriş yapın ve bu fırsatı...</p></a></li>
                <li><a href="#117"><h4>NX silahlarinizin süresini Slim Weapon License ile GP kullanarak uzatin!</h4><p> S&amp;uuml;resi dolmak &amp;uuml;zere olan silahlarınız mı var? Bu hafta, Slim Weapon License eşyaları sizleri bekliyor - s&amp;uuml;resi dolmak &amp;uuml;zere ...</p></a></li>
                <li><a href="#114"><h4>Kalici Silah, Most American Package, Myst Eternity, ve benzeri!</h4><p>   

 &amp;nbsp; 

 &amp;nbsp; 

     Askerler, Dikkat!     
 
 
  Haftalık fırsatlar hazır ve ayrıca sizlere yeni    
&amp;nbsp; 
   &amp;ldquo;The Mo...</p></a></li>
                <li><a href="/web/20161015075252/http://combatarms.nexon.net/Notice/View/8317"><h4>[Tamamlandı] Haftalık Bakım: 12.10.2016 (07:00 - 09:00 CEST)</h4><p>  Askerler,   
 
Bakımımızı başarıyla tamamladık. 
T&amp;uuml;m oyun sunucuları an itibariyle &amp;ccedil;evrimi&amp;ccedil;idir. 
 
----------------...</p></a></li>

    </ul>
</div>
<div id="clearFloat"></div>
</div></div>
<?php include 'footer.php';?>