$(function () {    $(".btn-remove").click(function (e) {        var idVideo = $.trim($(this).attr("data-id"));        var action = $(this).attr("data-action");        $(".btn-ok-delete").attr("data-id", idVideo);                $('#modal-dialog').modal();        e.preventDefault();    });    $(".btn-ok-delete").click(function (e) {        var action = $(this).attr("data-action");        var href = null, data = null;        if (action == "remove-user") {            href = Routing.generate('ad_remove_user');            var tree = $.trim($(this).attr("data-tree"));            var line = $.trim($(this).attr("data-line"));            var username = $.trim($(this).attr("data-username"));            data = {                tree: tree,                username: username            };        } else if (action == "remove-group") {            href = Routing.generate('ad_remove_user_group');            var dnUser = $.trim($(this).attr("data-dnUser"));            var username = $.trim($(this).attr("data-username"));            var groupName = $.trim($(this).attr("data-groupName"));            var dnGroup = $.trim($(this).attr("data-dnGroup"));            var line = $.trim($(this).attr("data-line"));            data = {                dnUser: dnUser,                dnGroup: dnGroup,                groupName: groupName,                username: username            };            console.log(data);        }        if (href != null && data != null) {            $.getJSON(href, data)                .done(function (data) {                    console.log(data.result);                    $(".text-response-ajax").html(data.message);                    if (data.result) {                        $('#' + line).fadeOut(500, function () {                            $(this).remove();                        });                        $.notify({                            // options                            icon: 'glyphicon glyphicon-ok',                            message: data.message,                        }, {                            type: "success",                        });                    } else {                        $.notify({                            // options                            icon: 'glyphicon glyphicon-warning-sign',                            title: 'Error: ',                            message: 'Une erreur s\'est produit lors de la suppression de l\'utilisateur',                        }, {                            type: "danger",                        });                    }                });        }        e.preventDefault();    });});