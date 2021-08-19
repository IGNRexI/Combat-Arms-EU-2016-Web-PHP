<?php include 'header.php';?>
<?php include 'menu.php';?>

<div id="baseSingleBodyWrapper">
    <h2>Oyuncu Sıralamaları</h2>
    <div class="rankingWrapper">
        <div class="search_pname_form">
            <ul>
                <li class="li_pn"><span>Oyuncu ismi giriniz</span><input type="text" class="txt_pn"></li>
                <li class="li_sc_btn"><input type="button" class="btn_search_profile" value="Arama"></li>
            </ul>
        </div>

        <div class="search_result_wrapper" style="display: none;">
            <h3>Haftalık Sıralama<span class="rank_date"></span></h3>

            <table class="ranking_tbl" summary="">
                <colgroup>
                    <col width="80">
                    <col width="250">
                    <col width="100">
                    <col width="150">
                    <col width="100">
                    <col width="100">
                    <col width="280">
                </colgroup>
                <thead>
                    <tr>
                        <th></th>
                        <th>İsim </th>
                        <th>Rütbe </th>
                        <th>EXP </th>
                        <th>KDR </th>
                        <th>Ülke </th>
                        <th>Klan </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="cell_left"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <div class="pager_wrapper">
            </div>
        </div>
    </div>
</div>

</div>
<?php include 'footer.php';?>