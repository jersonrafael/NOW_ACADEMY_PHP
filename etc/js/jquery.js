$(document).ready(function () {

    // HANDLER RESPONSIVE VIEWS
    function HandleWindowChange(x) {
        if (x.matches) {
            // Si la pantalla es menor o igual a 500px
            $("#web-sections").addClass("hidden");
            $("#li-gallery-elements").addClass("hidden");

            // Asegúrate de que los elementos específicos de móvil estén visibles
            $('#phone-gallery-buttons').removeClass('hidden');
            $('#phone-hamburguer-menu').removeClass('hidden');
        } else {
            // Si la pantalla es mayor a 500px
            $("#web-sections").removeClass("hidden");
            $("#li-gallery-elements").removeClass("hidden");

            // Ocultar los elementos específicos de móvil
            $('#phone-gallery-buttons').addClass('hidden');
            $('#phone-hamburguer-menu').addClass('hidden');
        }
    }

    const mmObj = window.matchMedia("(max-width: 780px)");

    HandleWindowChange(mmObj);

    mmObj.addEventListener("change", HandleWindowChange);


    // AUTO CHANGE THE GALLERY IMAGES

    var cur = 0; // current index
    setInterval(autoAnim, 4000); // auto change every 4s

    function autoAnim() {
        if (cur >= 4) cur = 0;
        cur++;
        $("#cell-img").attr("src", images[cur]);
    }
    
    // BUTTON FOR CHANGE IMAGES HANLDER

    $("li[id^='btn-learn']").hover(function () {
        $(this).css("color", "white")
        let img = $(this).data("img");
        $("#cell-img").attr("src", img);
        cur = 0
    }, function () {
        $(this).css("color", "#c6c5c5")
        // $("#cell-img").attr("src", "etc/img/cell2.png");
    })

    // CHANGE IMAGES IN RESPONSIVE MODE

    let images = ["etc/img/cell2.png", "etc/img/cell3.png", "etc/img/cell4.png","etc/img/cell5.png"]
    let index = 0
    $("#previous-image").click(function () {
        index--;
        if (index <= 0) {
            index = 0;
        }
        $("#cell-img").attr("src", images[index]);
    })
    $("#next-image").click(function () {
        index++;
        if (index >= images.length) {
            index = 0;
        }
        $("#cell-img").attr("src", images[index]);
    })

    // MANAGE HAMBURGUER MENU
    $('#open-menu').click(function () {
        $('#hamburguer-menu').removeClass("translate-x-[100%]");
        $('#hamburguer-menu').addClass("translate-x-[0%]");

        $("#open-menu").addClass("hidden");
        $("#close-menu").removeClass("hidden");
    })
    $('#close-menu').click(function () {
        $('#hamburguer-menu').addClass("translate-x-[100%]");
        $('#hamburguer-menu').removeClass("translate-x-[0%]");

        $("#open-menu").removeClass("hidden");
        $("#close-menu").addClass("hidden");
    })
});