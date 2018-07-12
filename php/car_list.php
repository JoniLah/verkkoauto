<?php
$url_int = isset($_POST['url_int']) ? $_POST['url_int'] : 0;
car_item($url_int);
function car_item($url_counter) {
    $url_array = array(
        'https://www.nettiauto.com/yritys/verkkoauto/vaihtoautot?sorting_list=makemodel_DESC',
        'https://www.nettiauto.com/yritys/verkkoauto/vaihtoautot?sorting_list=makemodel_ASC',
        'https://www.nettiauto.com/yritys/verkkoauto/vaihtoautot?sorting_list=datecreate_DESC',
        'https://www.nettiauto.com/yritys/verkkoauto/vaihtoautot?sorting_list=datecreate_ASC',
        'https://www.nettiauto.com/yritys/verkkoauto/vaihtoautot?sorting_list=mileage_DESC',
        'https://www.nettiauto.com/yritys/verkkoauto/vaihtoautot?sorting_list=mileage_ASC',
        'https://www.nettiauto.com/yritys/verkkoauto/vaihtoautot?sorting_list=year_ASC',
        'https://www.nettiauto.com/yritys/verkkoauto/vaihtoautot?sorting_list=year_DESC',
        'https://www.nettiauto.com/yritys/verkkoauto/vaihtoautot?sorting_list=price_DESC',
        'https://www.nettiauto.com/yritys/verkkoauto/vaihtoautot?sorting_list=price_ASC',
    );
    
    $content = file_get_contents($url_array[$url_counter]);

    $retrieve_title_begin = explode('<div class="mb10 small_text9 lnh18 pt10 vif_top">', $content);
    $retrieve_title_end = explode('</div>', $retrieve_title_begin[1]);

    $retrieve_img_begin = explode('<div class="listImgBox">', $content);
    $retrieve_img_end = explode('</div>', $retrieve_img_begin[1]);

    $retrieve_details_begin = explode('<div class="temp3_col2 word_wrap">', $content);
    $retrieve_details_end = explode('</div>', $retrieve_details_begin[1]);

    $retrieve_price_begin = explode('<div class="text_big15 right_align vif_cnt_right">', $content);
    $retrieve_price_end = explode('</div>', $retrieve_price_begin[1]);

    echo $retrieve_title_end[0];
    echo '<br/>' . $retrieve_price_end[0];
    echo $retrieve_img_end[0];

    echo '<div id="car-container-details">';
    echo $retrieve_details_end[0];
    echo '</div>';
    $url_counter++;
}
?>
<script>
    $(".smallHourLogo").hide();
    $(".bigHourLogo").hide();
    $(".tricky_link").hide();
    $(".update_logo").hide();
    $(".big_text").css('font-size', '34px');
</script>