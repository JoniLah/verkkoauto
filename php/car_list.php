<?php

    $a = ['https://www.nettiauto.com/yritys/verkkoauto/vaihtoautot',
        'https://www.nettiauto.com/yritys/verkkoauto/vaihtoautot?sorting_list=makemodel_DESC'
    ];

    $url = $a[mt_rand(0, count($a) - 1)];

    // Get the range of items
    $min = 1;

    // Retrieve the max count of the items
    $html_string = file_get_contents($url); 
    $dom = new DOMDocument;
    libxml_use_internal_errors(true);
    $dom->loadHTML($html_string);
    libxml_clear_errors();
    $xpath = new DOMXpath($dom);
    $class = 'mb10 small_text9 lnh18 pt10 vif_top';
    $elements = $xpath->query("//*[contains(@class, '{$class}')]");
    $max = $elements->length;

    $car_no = rand($min, $max);

    // Retrieve the item contents
    $content = file_get_contents($url);

    $retrieve_title_begin = explode('<div class="mb10 small_text9 lnh18 pt10 vif_top">', $content);
    $retrieve_title_end = explode('</div>', $retrieve_title_begin[$car_no]);

    $retrieve_img_begin = explode('<div class="listImgBox">', $content);
    $retrieve_img_end = explode('</div>', $retrieve_img_begin[$car_no]);

    $retrieve_details_begin = explode('<div class="temp3_col2 word_wrap">', $content);
    $retrieve_details_end = explode('</div>', $retrieve_details_begin[$car_no]);

    $retrieve_price_begin = explode('<div class="text_big15 right_align vif_cnt_right">', $content);
    $retrieve_price_end = explode('</div>', $retrieve_price_begin[$car_no]);

    echo $retrieve_title_end[0];
    echo '<br/>' . $retrieve_price_end[0];
    echo $retrieve_img_end[0];

    echo '<div id="car-container-details">';
    echo $retrieve_details_end[0];
    echo '</div>';

?>
<script>
    $(".smallHourLogo").hide();
    $(".bigHourLogo").hide();
    $(".tricky_link").hide();
    $(".update_logo").hide();
    $(".big_text").css('font-size', '34px');
</script>