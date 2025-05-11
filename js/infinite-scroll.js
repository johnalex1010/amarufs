jQuery(document).ready(function ($) {
    var canBeLoaded = true,
        bottomOffset = 1000; // Distancia desde el fondo de la página para cargar más posts

    $(window).scroll(function () {
        var data = {
            action: "loadmore",
            query: infinite_scroll_params.posts,
            page: infinite_scroll_params.current_page,
        };

        if ($(document).scrollTop() > $(document).height() - bottomOffset && canBeLoaded) {
            $.ajax({
                url: ajax_params.ajax_url,
                data: data,
                type: "POST",
                beforeSend: function (xhr) {
                    $("#loading").show();
                    canBeLoaded = false;
                },
                success: function (data) {
                    if (data) {
                        $("#post-container").append(data);
                        $("#loading").hide();
                        canBeLoaded = true;
                        infinite_scroll_params.current_page++;
                    } else {
                        $("#loading").html("<span class='fa-solid fa-flag-checkered fa-bounce'></span>");
                    }
                },
            });
        }
    });
});
