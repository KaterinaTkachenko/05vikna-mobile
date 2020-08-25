require("./bootstrap");

$(document).ready(function() {
    /* #region  HEADER */
    if ($(".header__viber")) {
        $(".header__viber").mouseover(function() {
            $(".header__viber").attr("src", "../images/viber-orange.png");
        });
        $(".header__viber").mouseout(function() {
            $(".header__viber").attr("src", "../images/viber-grey.png");
        });
    }
    if ($(".header__tel")) {
        $(".header__tel").mouseover(function() {
            $(".header__tel").attr("src", "../images/phone-orange.png");
        });
        $(".header__tel").mouseout(function() {
            $(".header__tel").attr("src", "../images/phone-grey.png");
        });
    }
    if ($("#header__responsive .btn-main")) {
        $("#header__responsive .btn-main").mouseover(function() {
            $("#header__responsive .btn-main.zamer").removeClass("active");
        });
        $("#header__responsive .btn-main").mouseout(function() {
            $("#header__responsive .btn-main.zamer").addClass("active");
        });
    }
    /* #endregion */

    /* #region  FOOTER */
    if ($("footer .btn-main")) {
        $("footer .btn-main").mouseover(function() {
            $("footer .btn-main.zamer").removeClass("active");
        });
        $("footer .btn-main").mouseout(function() {
            $("footer .btn-main.zamer").addClass("active");
        });
    }
    /* #endregion */

    /* #region  SIDEBAR */
    if ($(".openSidebar")) {
        $(".openSidebar").click(function() {
            if ($(".l-sidebar").hasClass("open"))
                $(".l-sidebar").removeClass("open");
            else $(".l-sidebar").addClass("open");
        });
    }
    if ($(".sidebar__close")) {
        $(".sidebar__close").click(function() {
            if ($(".l-sidebar").hasClass("open"))
                $(".l-sidebar").removeClass("open");
        });
    }
    if ($(".fa-chevron-down")) {
        $(".fa-chevron-down").click(function(e) {
            let dropDown = $(this)
                .parent()
                .next(".dropdown-content");
            if (dropDown.hasClass("hidden")) {
                dropDown.removeClass("hidden");
            } else {
                dropDown.addClass("hidden");
            }
            if ($(this).hasClass("rotate")) $(this).removeClass("rotate");
            else $(this).addClass("rotate");
        });
    }

    /* #endregion */

    /* #region  HOME */
    if ($("#home .carousel-control-prev")) {
        $("#home .carousel-control-prev").mouseover(function() {
            $("#home .carousel-control-prev img").attr(
                "src",
                "../images/arrprev-orange.png"
            );
        });
        $("#home .carousel-control-prev").mouseout(function() {
            $("#home .carousel-control-prev img").attr(
                "src",
                "../images/arrprev.png"
            );
        });
    }

    if ($("#home .carousel-control-next")) {
        $("#home .carousel-control-next").mouseover(function() {
            $("#home .carousel-control-next img").attr(
                "src",
                "../images/arrnext-orange.png"
            );
        });
        $("#home .carousel-control-next").mouseout(function() {
            $("#home .carousel-control-next img").attr(
                "src",
                "../images/arrnext.png"
            );
        });
    }
    /* #endregion */

    /* #region  Kalkulyator */
    if ($(".select1")) {
        $(".select1").change(function() {
            if ($(".select1 option:selected").val() == "Двери") {
                $(".wins").addClass("hidden");
                $(".doors").removeClass("hidden");

                document
                    .querySelector(".doors .calc_doors_active")
                    .classList.remove("calc_doors_active");
                document
                    .querySelector(".doors li:first-child")
                    .classList.add("calc_doors_active");

                let door1 =
                    '<div class="slideshow-container"><div class="mySlides1" onclick="plusSlides(1,0)"><img src="../images/door-l.png" alt="slider1"><div class="wincalc-layout-label" label-id="door" style="position: absolute; left: 12px; top: 235px; width: 80px; height: 20px;">Дверь левая</div></div><div class="mySlides1" onclick="plusSlides(1,0)"><img src="../images/door-lu.png" alt="slider2"><div class="wincalc-layout-label" label-id="door" style="position: absolute; left: 14px; top: 235px; width: 75px; height: 20px;">Дверь левая с откр-ем вверх</div></div></div>' +
                    '<div class="sizer-right" title="Высота" style="position: absolute; left: 307px; top: 2px; width: 12px; height: 298px;"><div class="sizer-right-line" style="position: absolute; left: 13px; top: 0px; height: 298px;"></div><div class="sizer-right-arrow1" style="position: absolute; left: 7.5px; top: 0px;"></div><div class="sizer-right-arrow2" style="position: absolute; left: 7.5px; top: 286px;"></div><input type="text" name="height" maxlength="4" value="2200" style="position: absolute; left: -11px; top: 135.5px;"></div>' +
                    '<div class="sizer-down" title="Ширина" style="position: absolute; left: 206px; top: 300px; width: 98px; height: 12px;"><div class="sizer-down-line" style="position: absolute; left: 0px; top: 13px; width: 98px;"></div><div class="sizer-down-arrow1" style="position: absolute; left: 0px; top: 8px;"></div><div class="sizer-down-arrow2" style="position: absolute; left: 84px; top: 8px;"></div><input type="text" name="width" maxlength="4" value="700" style="position: absolute; left: 21px; top: 0.5px;"></div>';

                $("#calc .calc__params__img").html(door1);
                var slideIndex = [1];
                var slideId = ["mySlides1"];
                showSlides(1, 0);
                function plusSlides(n, no) {
                    showSlides((slideIndex[no] += n), no);
                }

                function showSlides(n, no) {
                    var i;
                    var x = document.getElementsByClassName(slideId[no]);
                    if (n > x.length) {
                        slideIndex[no] = 1;
                    }
                    if (n < 1) {
                        slideIndex[no] = x.length;
                    }
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    x[slideIndex[no] - 1].style.display = "block";
                }
            } else {
                $(".wins").removeClass("hidden");
                $(".doors").addClass("hidden");

                document
                    .querySelector(".wins .calc_active")
                    .classList.remove("calc_active");
                document
                    .querySelector(".wins li:first-child")
                    .classList.add("calc_active");

                let wins1 =
                    '<div class="slideshow-container"><div class="mySlides1" onclick="plusSlides(1,0)"><img src="../../images/leaf-x.png"><div class="wincalc-layout-label" label-id="leaf_left" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Глухая створка</div></div><div class="mySlides1" onclick="plusSlides(1,0)"><img src="../../images/leaf-l.png"><div class="wincalc-layout-label" label-id="leaf_left" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная влево</div></div><div class="mySlides1" onclick="plusSlides(1,0)"><img src="../../images/leaf-lu.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортно/откидная левая</div></div><div class="mySlides1" onclick="plusSlides(1,0)"><img src="../../images/leaf-r.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная вправо</div></div><div class="mySlides1" onclick="plusSlides(1,0)"><img src="../../images/leaf-ru.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная/откидная правая</div></div><div class="sizer-up" title="Ширина" style="position: absolute; left: 1px; top: -13px; width: 98px; height: 12px;"><div class="sizer-up-line" style="position: absolute; left: 0px; top: 5px; width: 98px;"></div><div class="sizer-up-arrow1" style="position: absolute; left: 0px; top: 0px;"></div><div class="sizer-up-arrow2" style="position: absolute; left: 84px; top: 0px;"></div><input type="text" name="width" maxlength="4" value="700" style="position: absolute; left: 21px; top: -13.5px;"></div><div class="sizer-right" title="Высота" style="position: absolute; left: 101px; top: 0px; width: 12px; height: 198px;"><div class="sizer-right-line" style="position: absolute; left: 13px; top: 0px; height: 198px;"></div><div class="sizer-right-arrow1" style="position: absolute; left: 7.5px; top: 0px;"></div><div class="sizer-right-arrow2" style="position: absolute; left: 7.5px; top: 186px;"></div><input type="text" name="height" maxlength="4" value="1500" style="position: absolute; left: -10px; top: 85.5px;"></div></div>';

                $("#calc .calc__params__img").html(wins1);
                var slideIndex = [1];
                var slideId = ["mySlides1"];
                showSlides(1, 0);
                function plusSlides(n, no) {
                    showSlides((slideIndex[no] += n), no);
                }

                function showSlides(n, no) {
                    var i;
                    var x = document.getElementsByClassName(slideId[no]);
                    if (n > x.length) {
                        slideIndex[no] = 1;
                    }
                    if (n < 1) {
                        slideIndex[no] = x.length;
                    }
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    x[slideIndex[no] - 1].style.display = "block";
                }
            }
        });
    }
    if ($(".calc__lay__selector li")) {
        $(".calc__lay__selector li").mouseover(function() {
            $(this).addClass("calc_current");
        });

        $(".calc__lay__selector li").mouseout(function() {
            $(this).removeClass("calc_current");
        });
    }
    // WINS li click
    var winsContainer = document.querySelector(".wins");
    if (winsContainer) {
        var winsLi = winsContainer.querySelectorAll("li");

        for (var i = 0; i < winsLi.length; i++) {
            winsLi[i].addEventListener("click", function() {
                var calc_active = document.getElementsByClassName(
                    "calc_active"
                );
                calc_active[0].className = calc_active[0].className.replace(
                    "calc_active",
                    ""
                );
                this.className += " calc_active";
                var wins1 =
                    '<div class="slideshow-container"><div class="mySlides1" onclick="plusSlides(1,0)"><img src="../../images/leaf-x.png"><div class="wincalc-layout-label" label-id="leaf_left" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Глухая створка</div></div><div class="mySlides1" onclick="plusSlides(1,0)"><img src="../../images/leaf-l.png"><div class="wincalc-layout-label" label-id="leaf_left" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная влево</div></div><div class="mySlides1" onclick="plusSlides(1,0)"><img src="../../images/leaf-lu.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортно/откидная левая</div></div><div class="mySlides1" onclick="plusSlides(1,0)"><img src="../../images/leaf-r.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная вправо</div> </div><div class="mySlides1" onclick="plusSlides(1,0)"><img src="../../images/leaf-ru.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная/откидная правая</div></div><div class="sizer-up" title="Ширина" style="position: absolute; left: 1px; top: -13px; width: 98px; height: 12px;"><div class="sizer-up-line" style="position: absolute; left: 0px; top: 5px; width: 98px;"></div><div class="sizer-up-arrow1" style="position: absolute; left: 0px; top: 0px;"></div><div class="sizer-up-arrow2" style="position: absolute; left: 84px; top: 0px;"></div><input type="text" name="width" maxlength="4" value="700" style="position: absolute; left: 21px; top: -13.5px;"></div><div class="sizer-right" title="Высота" style="position: absolute; left: 101px; top: 0px; width: 12px; height: 198px;"><div class="sizer-right-line" style="position: absolute; left: 13px; top: 0px; height: 198px;"></div><div class="sizer-right-arrow1" style="position: absolute; left: 7.5px; top: 0px;"></div><div class="sizer-right-arrow2" style="position: absolute; left: 7.5px; top: 186px;"></div><input type="text" name="height" maxlength="4" value="1500" style="position: absolute; left: -10px; top: 85.5px;"></div></div>';

                var wins2 =
                    '<div class="slideshow-container"><div class="mySlides1" onclick="plusSlides(1,0)"><img src="../../images/leaf-x.png"><div class="wincalc-layout-label" label-id="leaf_left" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Глухая створка</div></div><div class="mySlides1" onclick="plusSlides(1,0)"><img src="../../images/leaf-r.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная вправо</div></div><div class="mySlides1" onclick="plusSlides(1,0)"><img src="../../images/leaf-ru.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная/откидная правая</div></div></div>' +
                    '<div class="slideshow-container"><div class="mySlides2" onclick="plusSlides(1,1)"><img src="../../images/leaf-x.png"><div class="wincalc-layout-label" label-id="leaf_left" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Глухая створка</div></div><div class="mySlides2" onclick="plusSlides(1,1)"><img src="../../images/leaf-l.png"><div class="wincalc-layout-label" label-id="leaf_left" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная влево</div></div><div class="mySlides2" onclick="plusSlides(1,1)"><img src="../../images/leaf-lu.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортно/откидная левая</div></div><div class="sizer-up" title="Общая ширина окна" style="position: absolute; left: -100px; top: -13px; width: 198px; height: 12px;"><div class="sizer-up-line" style="position: absolute; left: 0px; top: 5px; width: 198px;"></div><div class="sizer-up-arrow1" style="position: absolute; left: 0px; top: 0px;"></div><div class="sizer-up-arrow2" style="position: absolute; left: 184px; top: 0px;"></div><input type="text" name="width" maxlength="4" value="1400" style="position: absolute; left: 71px; top: -13.5px;"></div><div class="sizer-right" title="Высота" style="position: absolute; left: 100px; top: 0px; width: 12px; height: 198px;"><div class="sizer-right-line" style="position: absolute; left: 13px; top: 0px; height: 198px;"></div><div class="sizer-right-arrow1" style="position: absolute; left: 7.5px; top: 0px;"></div><div class="sizer-right-arrow2" style="position: absolute; left: 7.5px; top: 186px;"></div><input type="text" name="height" maxlength="4" value="1500" style="position: absolute; left: -10px; top: 85.5px;"></div><div class="sizer-down" title="Ширина левой створки" style="position: absolute; left: -100px; top: 200px; width: 98px; height: 12px;"><div class="sizer-down-line" style="position: absolute; left: 0px; top: 13px; width: 98px;"></div><div class="sizer-down-arrow1" style="position: absolute; left: 0px; top: 8px;"></div><div class="sizer-down-arrow2" style="position: absolute; left: 84px; top: 8px;"></div><input type="text" name="left_width" maxlength="4" value="700" style="position: absolute; left: 21px; top: 0.5px;"></div></div>';

                var wins3 =
                    '<div class="slideshow-container"><div class="mySlides1" onclick="plusSlides(1,0)"><img src="../../images/leaf-x.png"><div class="wincalc-layout-label" label-id="leaf_left" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Глухая створка</div></div><div class="mySlides1" onclick="plusSlides(1,0)"><img src="../../images/leaf-r.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная вправо</div> </div><div class="mySlides1" onclick="plusSlides(1,0)"><img src="../../images/leaf-ru.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная/откидная правая</div></div></div>' +
                    '<div class="slideshow-container"><div class="mySlides2" onclick="plusSlides(1,1)"><img src="../../images/leaf-x.png"><div class="wincalc-layout-label" label-id="leaf_left" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Глухая створка</div></div><div class="mySlides2" onclick="plusSlides(1,1)"><img src="../../images/leaf-l.png"><div class="wincalc-layout-label" label-id="leaf_left" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная влево</div></div><div class="mySlides2" onclick="plusSlides(1,1)"><img src="../../images/leaf-lu.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортно/откидная левая</div></div><div class="mySlides2" onclick="plusSlides(1,1)"><img src="../../images/leaf-r.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная вправо</div></div><div class="mySlides2" onclick="plusSlides(1,1)"><img src="../../images/leaf-ru.png"> <div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная/откидная правая</div></div></div>' +
                    '<div class="slideshow-container"><div class="mySlides3" onclick="plusSlides(1,2)"><img src="../../images/leaf-x.png"><div class="wincalc-layout-label" label-id="leaf_left" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Глухая створка</div></div><div class="mySlides3" onclick="plusSlides(1,2)"><img src="../../images/leaf-l.png"><div class="wincalc-layout-label" label-id="leaf_left" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная влево</div></div><div class="mySlides3" onclick="plusSlides(1,2)"><img src="../../images/leaf-lu.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортно/откидная левая</div></div></div>' +
                    '<div class="sizer-up" title="Общая ширина" style="position: absolute; left: 106px; top: -13px; width: 298px; height: 12px;"><div class="sizer-up-line" style="position: absolute; left: 0px; top: 5px; width: 298px;"></div><div class="sizer-up-arrow1" style="position: absolute; left: 0px; top: 0px;"></div><div class="sizer-up-arrow2" style="position: absolute; left: 284px; top: 0px;"></div><input type="text" name="width" maxlength="4" value="2100" style="position: absolute; left: 121px; top: -13.5px;"></div>' +
                    '<div class="sizer-right" title="Высота" style="position: absolute; left: 407px; top: 1px; width: 12px; height: 198px;"><div class="sizer-right-line" style="position: absolute; left: 13px; top: 0px; height: 198px;"></div><div class="sizer-right-arrow1" style="position: absolute; left: 7.5px; top: 0px;"></div><div class="sizer-right-arrow2" style="position: absolute; left: 7.5px; top: 186px;"></div><input type="text" name="height" maxlength="4" value="1500" style="position: absolute; left: -11px; top: 85.5px;"></div>' +
                    '<div class="sizer-down" title="Ширина левой створки" style="position: absolute; left: 106px; top: 200px; width: 98px; height: 12px;"><div class="sizer-down-line" style="position: absolute; left: 0px; top: 13px; width: 98px;"></div><div class="sizer-down-arrow1" style="position: absolute; left: 0px; top: 8px;"></div><div class="sizer-down-arrow2" style="position: absolute; left: 84px; top: 8px;"></div><input type="text" name="left_width" maxlength="4" value="700" style="position: absolute; left: 21px; top: 0.5px;"></div>' +
                    '<div class="sizer-down" title="Ширина правой створки" style="position: absolute; left: 306px; top: 200px; width: 98px; height: 12px;"><div class="sizer-down-line" style="position: absolute; left: 0px; top: 13px; width: 98px;"></div><div class="sizer-down-arrow1" style="position: absolute; left: 0px; top: 8px;"></div><div class="sizer-down-arrow2" style="position: absolute; left: 84px; top: 8px;"></div><input type="text" name="right_width" maxlength="4" value="700" style="position: absolute; left: 21px; top: 0.5px;"></div>';

                var wins4 =
                    '<div class="slideshow-container"><div class="mySlides1" onclick="plusSlides(1,0)"><img src="../../images/leaf-x.png"><div class="wincalc-layout-label" label-id="leaf_left" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Глухая створка</div></div><div class="mySlides1" onclick="plusSlides(1,0)"><img src="../../images/leaf-r.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная вправо</div> </div><div class="mySlides1" onclick="plusSlides(1,0)"><img src="../../images/leaf-ru.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная/откидная правая</div></div></div>' +
                    '<div class="slideshow-container"><div class="mySlides2" onclick="plusSlides(1,1)"><img src="../../images/leaf-x.png"><div class="wincalc-layout-label" label-id="leaf_left" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Глухая створка</div></div><div class="mySlides2" onclick="plusSlides(1,1)"><img src="../../images/leaf-l.png"><div class="wincalc-layout-label" label-id="leaf_left" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная влево</div></div><div class="mySlides2" onclick="plusSlides(1,1)"><img src="../../images/leaf-lu.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортно/откидная левая</div></div><div class="mySlides2" onclick="plusSlides(1,1)"><img src="../../images/leaf-r.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная вправо</div> </div><div class="mySlides2" onclick="plusSlides(1,1)"><img src="../../images/leaf-ru.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная/откидная правая</div>  </div></div>' +
                    '<div class="slideshow-container"><div class="mySlides3" onclick="plusSlides(1,2)"><img src="../../images/leaf-x.png"><div class="wincalc-layout-label" label-id="leaf_left" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Глухая створка</div></div><div class="mySlides3" onclick="plusSlides(1,2)"><img src="../../images/leaf-l.png"><div class="wincalc-layout-label" label-id="leaf_left" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная влево</div></div><div class="mySlides3" onclick="plusSlides(1,2)"><img src="../../images/leaf-lu.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортно/откидная левая</div></div><div class="mySlides3" onclick="plusSlides(1,2)"><img src="../../images/leaf-r.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная вправо</div> </div><div class="mySlides3" onclick="plusSlides(1,2)"><img src="../../images/leaf-ru.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная/откидная правая</div>  </div></div>' +
                    '<div class="slideshow-container"><div class="mySlides4" onclick="plusSlides(1,3)"><img src="../../images/leaf-x.png"><div class="wincalc-layout-label" label-id="leaf_left" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Глухая створка</div></div><div class="mySlides4" onclick="plusSlides(1,3)"><img src="../../images/leaf-l.png"><div class="wincalc-layout-label" label-id="leaf_left" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная влево</div></div><div class="mySlides4" onclick="plusSlides(1,3)"><img src="../../images/leaf-lu.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортно/откидная левая</div></div></div>' +
                    '<div class="sizer-up" title="Общая ширина" style="position: absolute; left: 56px; top: -14px; width: 398px; height: 12px;"><div class="sizer-up-line" style="position: absolute; left: 0px; top: 5px; width: 398px;"></div><div class="sizer-up-arrow1" style="position: absolute; left: 0px; top: 0px;"></div><div class="sizer-up-arrow2" style="position: absolute; left: 384px; top: 0px;"></div><input type="text" name="width" maxlength="4" value="2800" style="position: absolute; left: 171px; top: -12.5px;"></div>' +
                    '<div class="sizer-right" title="Высота" style="position: absolute; left: 455px; top: 1px; width: 12px; height: 198px;"><div class="sizer-right-line" style="position: absolute; left: 13px; top: 0px; height: 198px;"></div><div class="sizer-right-arrow1" style="position: absolute; left: 7.5px; top: 0px;"></div><div class="sizer-right-arrow2" style="position: absolute; left: 7.5px; top: 186px;"></div><input type="text" name="height" maxlength="4" value="1500" style="position: absolute; left: -9px; top: 85.5px;"></div>' +
                    '<div class="sizer-down" title="Ширина левой створки" style="position: absolute; left: 56px; top: 200px; width: 98px; height: 12px;"><div class="sizer-down-line" style="position: absolute; left: 0px; top: 13px; width: 98px;"></div><div class="sizer-down-arrow1" style="position: absolute; left: 0px; top: 8px;"></div><div class="sizer-down-arrow2" style="position: absolute; left: 84px; top: 8px;"></div><input type="text" name="left_width" maxlength="4" value="700" style="position: absolute; left: 21px; top: 0.5px;"></div>' +
                    '<div class="sizer-down" title="Ширина левой створки" style="position: absolute; left: 356px; top: 200px; width: 98px; height: 12px;"><div class="sizer-down-line" style="position: absolute; left: 0px; top: 13px; width: 98px;"></div><div class="sizer-down-arrow1" style="position: absolute; left: 0px; top: 8px;"></div><div class="sizer-down-arrow2" style="position: absolute; left: 84px; top: 8px;"></div><input type="text" name="left_width" maxlength="4" value="700" style="position: absolute; left: 21px; top: 0.5px;"></div>';

                function plusSlides(n, no) {
                    showSlides((slideIndex[no] += n), no);
                }

                function showSlides(n, no) {
                    var i;
                    var x = document.getElementsByClassName(slideId[no]);
                    if (n > x.length) {
                        slideIndex[no] = 1;
                    }
                    if (n < 1) {
                        slideIndex[no] = x.length;
                    }
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    x[slideIndex[no] - 1].style.display = "block";
                }

                if (this.getAttribute("data-wins-section") == "1") {
                    $(".calc__params__img").html(wins1);
                    var slideIndex = [1];
                    var slideId = ["mySlides1"];
                    showSlides(1, 0);
                }
                if (this.getAttribute("data-wins-section") == "2") {
                    $(".calc__params__img").html(wins2);
                    var slideIndex = [1, 1];
                    var slideId = ["mySlides1", "mySlides2"];
                    showSlides(1, 0);
                    showSlides(1, 1);
                }
                if (this.getAttribute("data-wins-section") == "3") {
                    $(".calc__params__img").html(wins3);
                    var slideIndex = [1, 1, 1];
                    var slideId = ["mySlides1", "mySlides2", "mySlides3"];
                    showSlides(1, 0);
                    showSlides(1, 1);
                    showSlides(1, 2);
                }
                if (this.getAttribute("data-wins-section") == "4") {
                    $(".calc__params__img").html(wins4);
                    var slideIndex = [1, 1, 1, 1];
                    var slideId = [
                        "mySlides1",
                        "mySlides2",
                        "mySlides3",
                        "mySlides4"
                    ];
                    showSlides(1, 0);
                    showSlides(1, 1);
                    showSlides(1, 2);
                    showSlides(1, 3);
                }
            });
        }
    }
    // DOORS li click
    var doorsContainer = document.querySelector(".doors");
    if (doorsContainer) {
        var doorsLi = doorsContainer.querySelectorAll("li");

        for (var i = 0; i < doorsLi.length; i++) {
            doorsLi[i].addEventListener("click", function() {
                var calc_doors_active = document.getElementsByClassName(
                    "calc_doors_active"
                );
                calc_doors_active[0].className = calc_doors_active[0].className.replace(
                    "calc_doors_active",
                    ""
                );
                this.className += " calc_doors_active";

                var door1 =
                    '<div class="slideshow-container"><div class="mySlides1" onclick="plusSlides(1,0)"><img src="../images/door-l.png" alt="slider1"><div class="wincalc-layout-label" label-id="door" style="position: absolute; left: 12px; top: 235px; width: 80px; height: 20px;">Дверь левая</div></div><div class="mySlides1" onclick="plusSlides(1,0)"><img src="../images/door-lu.png" alt="slider2"><div class="wincalc-layout-label" label-id="door" style="position: absolute; left: 14px; top: 235px; width: 75px; height: 20px;">Дверь левая с откр-ем вверх</div></div></div>';

                var razmeri1 =
                    '<div class="sizer-right" title="Высота" style="position: absolute; left: 307px; top: 2px; width: 12px; height: 298px;"><div class="sizer-right-line" style="position: absolute; left: 13px; top: 0px; height: 298px;"></div><div class="sizer-right-arrow1" style="position: absolute; left: 7.5px; top: 0px;"></div><div class="sizer-right-arrow2" style="position: absolute; left: 7.5px; top: 286px;"></div><input type="text" name="height" maxlength="4" value="2200" style="position: absolute; left: -11px; top: 135.5px;"></div>' +
                    '<div class="sizer-down" title="Ширина" style="position: absolute; left: 206px; top: 300px; width: 98px; height: 12px;"><div class="sizer-down-line" style="position: absolute; left: 0px; top: 13px; width: 98px;"></div><div class="sizer-down-arrow1" style="position: absolute; left: 0px; top: 8px;"></div><div class="sizer-down-arrow2" style="position: absolute; left: 84px; top: 8px;"></div><input type="text" name="width" maxlength="4" value="700" style="position: absolute; left: 21px; top: 0.5px;"></div>';

                var razmeri =
                    '<div class="sizer-right" title="Высота" style="position: absolute; left: 356px; top: 1px; width: 12px; height: 298px;"><div class="sizer-right-line" style="position: absolute; left: 13px; top: 0px; height: 298px;"></div><div class="sizer-right-arrow1" style="position: absolute; left: 7.5px; top: 0px;"></div><div class="sizer-right-arrow2" style="position: absolute; left: 7.5px; top: 286px;"></div><input type="text" name="height" maxlength="4" value="2200" style="position: absolute; left: -11px; top: 135.5px;"></div>' +
                    '<div class="sizer-down" title="Ширина" style="position: absolute; left: 256px; top: 300px; width: 98px; height: 12px;"><div class="sizer-down-line" style="position: absolute; left: 0px; top: 13px; width: 98px;"></div><div class="sizer-down-arrow1" style="position: absolute; left: 0px; top: 8px;"></div><div class="sizer-down-arrow2" style="position: absolute; left: 84px; top: 8px;"></div><input type="text" name="width" maxlength="4" value="700" style="position: absolute; left: 21px; top: 0.5px;"></div>' +
                    '<div class="sizer-up" title="Ширина" style="position: absolute; left: 156px; top: -13px; width: 198px; height: 12px;"><div class="sizer-up-line" style="position: absolute; left: 0px; top: 5px; width: 198px;"></div><div class="sizer-up-arrow1" style="position: absolute; left: 0px; top: 0px;"></div><div class="sizer-up-arrow2" style="position: absolute; left: 184px; top: 0px;"></div><input type="text" name="width" maxlength="4" value="1450" style="position: absolute; left: 71px; top: -13.5px;"></div>' +
                    '<div class="sizer-left" title="Высота окна" style="position: absolute; left: 140px; top: 1px; width: 12px; height: 198px;"><div class="sizer-left-line" style="position: absolute; left: 5px; top: 0px; height: 198px;"></div><div class="sizer-left-arrow1" style="position: absolute; left: -0.5px; top: 0px;"></div><div class="sizer-left-arrow2" style="position: absolute; left: -0.5px; top: 186px;"></div><input type="text" name="height" maxlength="4" value="1500" style="position: absolute; left: -22px; top: 85.5px;"></div>';

                let razmeri3 =
                    '<div class="sizer-up" title="Ширина" style="position: absolute; left: 105px; top: -15px; width: 298px; height: 12px;"><div class="sizer-up-line" style="position: absolute; left: 0px; top: 5px; width: 298px;"></div><div class="sizer-up-arrow1" style="position: absolute; left: 0px; top: 0px;"></div><div class="sizer-up-arrow2" style="position: absolute; left: 284px; top: 0px;"></div><input type="text" name="width" maxlength="4" value="2200" style="position: absolute; left: 121px; top: -11.5px;"></div>' +
                    '<div class="sizer-left" title="Высота окна" style="position: absolute; left: 90px; top: 1px; width: 12px; height: 198px;"><div class="sizer-left-line" style="position: absolute; left: 5px; top: 0px; height: 198px;"></div><div class="sizer-left-arrow1" style="position: absolute; left: -0.5px; top: 0px;"></div><div class="sizer-left-arrow2" style="position: absolute; left: -0.5px; top: 186px;"></div><input type="text" name="height" maxlength="4" value="1500" style="position: absolute; left: -22px; top: 85.5px;"></div>' +
                    '<div class="sizer-down" title="Ширина левой створки" style="position: absolute; left: 106px; top: 200px; width: 98px; height: 12px;"><div class="sizer-down-line" style="position: absolute; left: 0px; top: 13px; width: 98px;"></div><div class="sizer-down-arrow1" style="position: absolute; left: 0px; top: 8px;"></div><div class="sizer-down-arrow2" style="position: absolute; left: 84px; top: 8px;"></div><input type="text" name="left_width" maxlength="4" value="750" style="position: absolute; left: 21px; top: 0.5px;"></div>' +
                    '<div class="sizer-down" title="Ширина двери" style="position: absolute; left: 306px; top: 300px; width: 98px; height: 12px;"><div class="sizer-down-line" style="position: absolute; left: 0px; top: 13px; width: 98px;"></div><div class="sizer-down-arrow1" style="position: absolute; left: 0px; top: 8px;"></div><div class="sizer-down-arrow2" style="position: absolute; left: 84px; top: 8px;"></div><input type="text" name="door_width" maxlength="4" value="700" style="position: absolute; left: 21px; top: 0.5px;"></div>' +
                    '<div class="sizer-right" title="Высота двери" style="position: absolute; left: 407px; top: 1px; width: 12px; height: 298px;"><div class="sizer-right-line" style="position: absolute; left: 13px; top: 0px; height: 298px;"></div><div class="sizer-right-arrow1" style="position: absolute; left: 7.5px; top: 0px;"></div><div class="sizer-right-arrow2" style="position: absolute; left: 7.5px; top: 286px;"></div><input type="text" name="door_height" maxlength="4" value="2200" style="position: absolute; left: -11px; top: 135.5px;"></div>';

                var wins11 =
                    '<div class="slideshow-container"><div class="mySlides2" onclick="plusSlides(1,1)"><img src="../../images/leaf-x.png"><div class="wincalc-layout-label" label-id="leaf_left" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Глухая створка</div></div><div class="mySlides2" onclick="plusSlides(1,1)"><img src="../../images/leaf-r.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная вправо</div></div><div class="mySlides2" onclick="plusSlides(1,1)"><img src="../../images/leaf-ru.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная/откидная правая</div> </div></div>';

                var wins22 =
                    wins11 +
                    '<div class="slideshow-container"><div class="mySlides3" onclick="plusSlides(1,2)"><img src="../../images/leaf-x.png"><div class="wincalc-layout-label" label-id="leaf_left" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Глухая створка</div></div><div class="mySlides3" onclick="plusSlides(1,2)"><img src="../../images/leaf-l.png"><div class="wincalc-layout-label" label-id="leaf_left" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная влево</div></div><div class="mySlides3" onclick="plusSlides(1,2)"><img src="../../images/leaf-lu.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортно/откидная левая</div></div><div class="mySlides3" onclick="plusSlides(1,2)"><img src="../../images/leaf-r.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная вправо</div></div><div class="mySlides3" onclick="plusSlides(1,2)"><img src="../../images/leaf-ru.png"><div class="wincalc-layout-label" label-id="leaf" style="position: absolute; left: 10px; top: 150px; width: 80px; height: 20px;">Повортная/откидная правая</div></div></div>';

                function plusSlides(n, no) {
                    showSlides((slideIndex[no] += n), no);
                }

                function showSlides(n, no) {
                    var i;
                    var x = document.getElementsByClassName(slideId[no]);
                    if (n > x.length) {
                        slideIndex[no] = 1;
                    }
                    if (n < 1) {
                        slideIndex[no] = x.length;
                    }
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    x[slideIndex[no] - 1].style.display = "block";
                }

                if (this.getAttribute("data-doors-section") == "1") {
                    $(".calc__params__img").html(door1 + razmeri1);
                    var slideIndex = [1];
                    var slideId = ["mySlides1"];
                    showSlides(1, 0);
                }

                if (this.getAttribute("data-doors-section") == "2") {
                    $(".calc__params__img").html(wins11 + door1 + razmeri);
                    var slideIndex = [1, 1];
                    var slideId = ["mySlides1", "mySlides2"];
                    showSlides(1, 0);
                    showSlides(1, 1);
                }

                if (this.getAttribute("data-doors-section") == "3") {
                    $(".calc__params__img").html(wins22 + door1 + razmeri3);
                    var slideIndex = [1, 1, 1];
                    var slideId = ["mySlides1", "mySlides2", "mySlides3"];
                    showSlides(1, 0);
                    showSlides(1, 1);
                    showSlides(1, 2);
                }
            });
        }
    }
    /* #endregion */

    /* #region  okna-s-laminatsiyey */
    $(".js-lam-color ul li").click(function() {
        let big = $(this).attr("data-big");
        let title = $(this).attr("data-color");
        $(".js-lam-big img").attr("src", big);
        $(".color-lam__title").html(title);
        $(".color-lam__active").removeClass("color-lam__active");
        $(this).addClass("color-lam__active");
    });

    $(".js__profile__item").click(function() {
        let profimg = $(this).attr("data-profimg");
        $(".js-profImg img").attr("src", profimg);
        $(".profile__dot--active").removeClass("profile__dot--active");
        $(this).addClass("profile__dot--active");
    });
    /* #endregion */

    /* #region upper btn when scroll down */
    jQuery(function($) {
        var $win = $(window);
        var winH = $win.height(); // Get the window height.

        $win.on("scroll", function() {
            if ($(this).scrollTop() > winH) {
                $(".upper").addClass("upper_fixed");
                $(".upper__btn").addClass("upper_fixed");
            } else {
                $(".upper").removeClass("upper_fixed");
                $(".upper__btn").removeClass("upper_fixed");
            }
        }).on("resize", function() {
            // If the user resizes the window
            winH = $(this).height(); // you'll need the new height value
        });
    });

    $('.js-upper').click(function(){
        window.scrollTo({ top: 0, behavior: 'smooth' });
    })
    /* #endregion */

    $('.js__showParams').click(function(){
        if($('.catalog__parambox__mobile .catalog__parambox').css('display') == 'none')
            $('.catalog__parambox__mobile .catalog__parambox').css('display', 'block');
        else
            $('.catalog__parambox__mobile .catalog__parambox').css('display', 'none')
    })

    $('.small_icons img').click(function(){
        $('.small_icons img').removeClass('active');
        $(this).addClass('active');
        $('.advant__item1 > img').attr('src', '../images/derevyannyye-okna/' + $(this).attr('data-img'));       
    })

    if($(document).width() <= 375){
        $('.vhod__dveri__flex1').removeClass('shadowBox');
        $('.garantiya__flex1').removeClass('shadowBox');
        $('.otzyvy').removeClass('shadowBox');
    }
});
