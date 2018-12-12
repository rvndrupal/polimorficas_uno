if ($(".btn-editar").length > 0) {
    $(".titulo").attr("contentEditable", true);
    $(".nosotros").attr("contentEditable", true);
    $(".noso_titulo").attr("contentEditable", true);
    $(".noso_descri").attr("contentEditable", true);
    $(".b1").attr("contentEditable", true);
    $(".b2").attr("contentEditable", true);
    $(".b3").attr("contentEditable", true);
    $(".b4").attr("contentEditable", true);
    $(".b5").attr("contentEditable", true);
    $(".b6").attr("contentEditable", true);
    $(".b7").attr("contentEditable", true);
    // $(".b8").attr("contentEditable", true);
    // $(".b9").attr("contentEditable", true);
    $(".b10").attr("contentEditable", true);
    $(".b11").attr("contentEditable", true);
    $(".b12").attr("contentEditable", true);
    $(".b13").attr("contentEditable", true);
} //si se puede editar



//$(".footer").attr("contentEditable", true);

$(".btn-editar").on('click', function() {

    var titulo = $(".titulo").text();
    var nosotros = $(".nosotros").text();
    var noso_titulo = $(".noso_titulo").text();
    var noso_descri = $(".noso_descri").text();
    var b1 = $(".b1").text();
    var b2 = $(".b2").text();
    var b3 = $(".b3").text();
    var b4 = $(".b4").text();
    var b5 = $(".b5").text();
    var b6 = $(".b6").text();
    var b7 = $(".b7").text();
    // var b8 = $(".b8").text();
    // var b9 = $(".b9").text();
    var b10 = $(".b10").text();
    var b11 = $(".b11").text();
    var b12 = $(".b12").text();
    var b13 = $(".b13").text();



    var id = $(".id").text();

    /*console.log(titulo);
    console.log(footer);*/


    $.ajax({
        type: 'post',
        url: 'editar_master',
        data: {
            '_token': $('input[name=_token').val(),
            // '_token': '{{csrf_token()}}'
            'titulo': titulo,
            'nosotros': nosotros,
            'noso_titulo': noso_titulo,
            'noso_descri': noso_descri,
            'b1': b1,
            'b2': b2,
            'b3': b3,
            'b4': b4,
            'b5': b5,
            'b6': b6,
            'b7': b7,
            // 'b8': b8,
            // 'b9': b9,
            'b10': b10,
            'b11': b11,
            'b12': b12,
            'b13': b13,

        },
        success: function(data) {
            window.location.reload();
        },


    });

})