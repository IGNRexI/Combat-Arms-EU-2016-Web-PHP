<?php include 'header.php';?>
<?php include 'menu.php';?>
<div id="bodyContentsWrapper">
    <form class="board_list">
        <h2>Güncellemeler</h2>
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
                        <tr onclick="document.location.href='/tr/Update/View/871/1'">
                            <td class="board_list_table_title">
                                <a href="#">Kışlalar Temizleniyor: Daha Uzun Kiralama Süreleri, Ghost HiSec Kaldırma ve Aksaklık Giderme</a>
                            </td>
                            <td class="board_list_table_date">21.09.2016</td>
                            <td class="board_list_table_count">848</td>
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
    <li class="on"><a href="update-list">Güncellemeler</a></li>
    <li><a href="event-list">Etkinlikler</a></li>
    <li><a href="devblog-list">Dev. Blog</a></li>
</ul>
<div class="sideNews">
    <h3>Son Haberler</h3>
    <ul class="sidebar_mrnews">
                <li><a href="#"><h4>Kararsız Hizmet 28.09.2016</h4><p> Askerler,  
 
Kışlalar Temizleniyor: Daha Uzun Kiralama Süreleri, Ghost HiSec Kaldırma ve Aksaklık Giderme</p></a></li>

    </ul>
</div>
<div id="clearFloat"></div>
</div>
        </div>
    </div>
<?php include 'footer.php';?>