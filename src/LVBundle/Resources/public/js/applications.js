$(function () {    $(".btn-remove").click(function (e) {        var idVideo = $.trim($(this).attr("data-id").replace('video-',''));        $(".btn-ok-delete").attr("data-id", idVideo);        $(".video-id-remove").html($(this).attr("data-title"));                $("#modal-remove").modal('show');        e.preventDefault();    });    $(".btn-ok-delete").click(function (e) {        var idVideo =$(".btn-ok-delete").attr("data-id")        var data = {                id:idVideo ,            };        var href = Routing.generate('list_view');        $('#id-video-' + idVideo).remove();        if (href != null && data != null) {            // $.getJSON(href, data)            //     .done(function (data) {            //         console.log(data.result);            //         $(".text-response-ajax").html(data.message);            //         if (data.result) {            //             $('#' + line).fadeOut(500, function () {            //                 $(this).remove();            //             });            //            //             $.notify({            //                 // options            //                 icon: 'glyphicon glyphicon-ok',            //                 message: data.message,            //             }, {            //                 type: "success",            //             });            //            //         } else {            //             $.notify({            //                 // options            //                 icon: 'glyphicon glyphicon-warning-sign',            //                 title: 'Error: ',            //                 message: 'Une erreur s\'est produit lors de la suppression de l\'utilisateur',            //             }, {            //                 type: "danger",            //            //             });            //            //         }            //     });        }        e.preventDefault();    });});