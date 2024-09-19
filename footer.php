<footer class="footer">
    <img src="<?php echo get_template_directory_uri() ?>/img/top-bg.png" class="top-bg" alt="">
    <img src="<?php echo get_template_directory_uri() ?>/img/left-border.png" class="left-border" alt="">
    <img src="<?php echo get_template_directory_uri() ?>/img/right-border.png" class="right-border" alt="">
    <div class="container-fluid">
        <div class="text-2" id="contact">Контакты</div>
        <div class="col-lg-offset-1 col-lg-10">
            <div class="col-md-8">
                <div class="map">
                    <?php $option = get_option('sample_theme_options'); echo $option['map'];?>
                </div>
            </div>
            <div class="col-md-4">
                <span>Адрес: <?php $option = get_option('sample_theme_options'); echo $option['adress'];?></span>
                <span>Тел.: <?php $option = get_option('sample_theme_options'); echo $option['phone'];?>
                    <br> <?php $option = get_option('sample_theme_options'); echo $option['phone2'];?>
                    <br> <?php $option = get_option('sample_theme_options'); echo $option['phone3'];?></span>
                <span><a style="color:#FFF;" href="http://<?php $option = get_option('sample_theme_options'); echo $option['site'];?>" target="_blank"><?php $option = get_option('sample_theme_options'); echo $option['site'];?></a></span>
                <span>Режим работы: <br> <?php $option = get_option('sample_theme_options'); echo $option['work_time'];?><br> Вечерняя группа <br>до 19:00</span>
		<span>              </span>
            </div>
        </div>
        <div class="col-lg-offset-1 col-lg-10" style="min-height:50px">
   <div class="garcom" style="display:none">
                <p><a href="http://garcom.kz/" target="_blank">Производство
                        <img src="<?php echo get_template_directory_uri() ?>/img/garcom.png" alt="">
                        <br>
                        Cделано в Казахстане</a></p>
            </div>

            <!--яндекс метрика-->
            <div class="yandex">
<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=40124795&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/40124795/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="40124795" data-lang="ru" /></a>
<!-- /Yandex.Metrika informer -->
<script type="text/javascript">
var yaParams = {};
var xhr = new XMLHttpRequest();
xhr.open('GET', 'https://ip.up66.ru/', true);
xhr.onload = function() {
yaParams.ip = this.responseText;
}
xhr.send();
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter40124795 = new Ya.Metrika({
params:window.yaParams,
                    id:40124795,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<!-- /Yandex.Metrika counter -->
                <?php $option = get_option('sample_theme_options'); echo $option['yandex'];?>


            </div>
        </div>
    </div>
    <div class="fixed-phone">
        <a href="" data-toggle="modal" data-target="#callModal"><img src="<?php echo get_template_directory_uri() ?>/img/phone.png" alt=""></a>
    </div>

    <!-- Modal -->
    <div id="callModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                    <div class="tel">
                        <a onclick="gtag('event', 'click', {'event_category' : 'call', 'event_label' : 'mobile'});" href="tel:<?php $option = get_option('sample_theme_options'); echo $option['phone'];?>"><?php $option = get_option('sample_theme_options'); echo $option['phone'];?></a>
                        <br>
                        <a onclick="gtag('event', 'click', {'event_category' : 'call', 'event_label' : 'mobile'});" href="tel:<?php $option = get_option('sample_theme_options'); echo $option['phone2'];?>"><?php $option = get_option('sample_theme_options'); echo $option['phone2'];?></a>
                        <br>
                        <a onclick="gtag('event', 'click', {'event_category' : 'call', 'event_label' : 'mobile'});" href="tel:<?php $option = get_option('sample_theme_options'); echo $option['phone3'];?>"><?php $option = get_option('sample_theme_options'); echo $option['phone3'];?></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <a id="back-to-top" href="" class="btn back-to-top" role="button" data-toggle="tooltip" data-placement="left"><img src="<?php echo get_template_directory_uri() ?>/img/backToTop.png" alt=""></a>

</footer>
<!--FOOTER END-->
</div>
</div>

<!-- mob.version menu -->

<div class="slide-in visible-sm visible-xs">
    <nav class="main-nav">
        <ul class="tk-museo-sans">
            <li><a href="#about">О нас</a></li>
            <li><a href="#school">Наши школы</a></li>
            <li><a href="#teach">Обучение и воспитание</a></li>
            <li><a href="#eat">Питание</a></li>
            <li><a href="#reviwes">Отзывы</a></li>
            <li><a href="#stars">Наши звезды</a></li>
            <li><a href="#contact">Контакты</a></li>
        </ul>
    </nav>
</div>



<script src="<?php echo get_template_directory_uri() ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/slick/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/slick/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/plugins-scroll/plugins-scroll.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/scroll2id/PageScroll2id.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/common.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/hammer.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/menu-mobil.js"></script>


</body>

</html>