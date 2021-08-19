<?php include 'header.php';?>
<?php include 'menu.php';?>
<div id="baseSingleBodyWrapper">
    <h2>Klan Sıralamaları</h2>
    <div class="rankingWrapper">
        <div class="search_pname_form">
            <ul>
                <li class="li_pn"><span>Klan adı yazınız</span><input type="text" class="txt_pn"></li>
                <li class="li_sc_btn"><input type="button" class="btn_search_profile" value="Arama"></li>
            </ul>
        </div>

        <div class="search_result_wrapper" style="display: none;">
            <h3>Haftalık Sıralama<span class="rank_date"></span></h3>

            <table class="ranking_tbl" summary="">
                <colgroup>
                    <col width="60">
                    <col width="100">
                    <col width="250">
                    <col width="200">
                    <col width="150">
                    <col width="150">
                    <col width="150">
                </colgroup>
                <thead>
                    <tr>
                        <th></th>
                        <th>Klan </th>
                        <th>Klan Adı </th>
                        <th>Klan Tecrübesi(EXP) </th>
                        <th>kazanılan </th>
                        <th>Kayıplar </th>
                        <th>Kazanma Oranı </th>
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