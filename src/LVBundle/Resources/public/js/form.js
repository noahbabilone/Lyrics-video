var player;var loaded = false;$(function () {    var $container = $('div#video_subTitle');    var index = $container.find(':input').length;    $("#btn-search").click(function (e) {        var video = $.trim($(".titre-video").val());        var href = Routing.generate('youtube_search_ajax');        console.log(href);        if (video && href) {            console.log(video);            var data = {search: video};            // $.getJSON(href, data)            $.ajax({                url: href,                dataType: "json",                data: data,                type: 'GET',                beforeSend: function () {                    /*   $("#icon_search_film").removeClass("fa-film")                     .addClass("fa-spin")                     .addClass("fa-spinner");*/                }            }).done(function (data) {                    if (data.response) {                        var $table = $("<table class='table table-striped'></table>");                        $.each(data.result, function (key, value) {                                                        var $row = $("<tr id='line-'+id>");                            var $cell = $("<td />");                            var $link = $('<a class="select-video" ' +                                'data-id="' + value.id + '" data-description="' + value.description + '" >' + value.title + '</a>');                            $link.click(function (e) {                                $("#youtube-video").addClass("embed-responsive embed-responsive-16by9");                                var idVideo = $(this).attr("data-id");                                var description = $(this).attr("data-description");                                $('.btn-add-video').removeClass('hide');                                $(".description-video").val(description);                                $(".titre-video").val($(this).text());                                $(".id-video").val(idVideo);                                                                console.log(idVideo);                                if (!loaded) {                                    loaded =true;                                    onYouTubeIframeAPIReady();                                    function onYouTubeIframeAPIReady() {                                        player = new YT.Player('youtube-video-player', {                                            width: 600,                                            height: 500,                                            videoId: idVideo,                                            playerVars: {                                                'autoplay': 0, 'controls': 1, 'autohide': 0, 'wmode': 'opaque'                                                // playlist: 'u1gpkOSYntY,L56Q6ZdpZzc',                                            },                                            events: {                                                // onReady: onPlayerReady,                                            }                                        });                                    }                                } else {                                    player.cueVideoById(idVideo);                                }                                e.preventDefault();                                return false;                            });                            $row.append($("<td />").html($link));                            $table.append($row);                        });                        $("#result-search").html('');                        $("#result-search").html($table);                    }                    console.log(data);                }            );        } else {            alert("Attention vous n'avez rien tapé")        }        //  $('#btn-search').modal('show')        e.preventDefault();        return false;    });        $('.btn-add-video').click(function(){                   });    $("#btn-add-subtitle").click(function (e) {        addSubTitle($container);        e.preventDefault();        return false;    });    function addSubTitle($container) {        console.log($container);        var $prototype = $($container.attr('data-prototype').replace(/__name__label__/g, "")            .replace(/__name__/g, index));        console.log($prototype);        var idContainer = $container.attr('id') + "_" + index;        console.log(idContainer);        deleteSubTitle($prototype);        $prototype.find("#" + idContainer + " label").addClass("col-sm-2");        $prototype.find("#" + idContainer + " .start_time").addClass("col-sm-9").parent().addClass("col-sm-6");        $prototype.find("#" + idContainer + " .end_time").addClass("col-sm-9").parent().addClass("col-sm-6");        // $prototype.find("#" + idContainer + " div").addClass("col-sm-12");        $prototype.find("#" + idContainer + " textarea")            .parent()            .addClass("col-sm-12")            .addClass("margin-form");        $('#list-subtitle .row').append($prototype.hide().delay(300).fadeIn(600));        index++;    }    function deleteSubTitle($prototype) {        var $deleteLink = $('<a href="#" class="btn btn-danger btn-xs" >Supprimer</a>');        var $lineDelete = $('<div class="col-sm-12 margin-form text-right"></div>');        $lineDelete.append($deleteLink);        $prototype.append($lineDelete);        $deleteLink.click(function (e) {            $deleteLink.fadeOut("slow", function () {                $prototype.remove();            });            e.preventDefault();            return false;        });    }}); // Fin Doc Ready