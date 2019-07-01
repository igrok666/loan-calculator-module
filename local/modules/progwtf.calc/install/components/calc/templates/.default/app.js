$(document).ready(function () {

    function mes_plat(S,n) {
        if($('.stavka_val').val() !== ''){
            i = $('.stavka_val').val();
        }else{
            i = parseFloat($('.stavka_val').text());
        }
        i = i/100/12;
        i = +i.toFixed(5);
        result = S * (i + i/ (Math.pow(1+i,n) - 1));
        return +result.toFixed(2);
    }

    function create_table(srok, platezh, summa) {
        platezh = parseFloat(platezh);
        summa = parseFloat(summa);
        var table = $('.result_table table');
        table.html('');
        table.append('<tr><td>№</td><td>Ежемесячный платеж</td><td>Остаток долга</td></tr>');
        console.log(srok + '--' + platezh);
        var result = summa-platezh;
        for (var i = 1; i <= srok; i++){
            table.append('<tr><td>' + i + '</td><td>' + platezh + '</td><td>' + result.toFixed(2) + '</td></tr>')
            var result = result-platezh;
        }
    }

    var ezh_plat = $('.ezh_plat');
    var full_credit = $('.full_credit');
    var pereplata = $('.pereplata');
    var summ_credit = $('.summ_credit');

    var start_procent = $('#myRange').attr('value');
    var slider = $("#myRange");
    var output = $("#summ");
    output.attr('value', start_procent);
    output.html(slider.val());

    $(document).on('input', slider, function () {
        output.val(slider.val());
        summ_credit.text(slider.val());
        pereplata.text((parseFloat(full_credit.text()) - parseFloat(summ_credit.text())).toFixed(2));
        create_table(output_srok.val(), ezh_plat.text(), full_credit.text());
    });

    var slider_srok = $("#myRange_srok");
    var start_srok = slider_srok.attr('value');
    var output_srok = $("#srok");
    output_srok.attr('value', start_srok);
    output_srok.html(slider_srok.val());

    $(document).on('input', slider_srok, function () {
        output_srok.val(slider_srok.val());
        ezh_plat.text(mes_plat(slider.val(), slider_srok.val()));
        full_credit.text((mes_plat(slider.val(), slider_srok.val()) * output_srok.val()).toFixed(2));
        pereplata.text((parseFloat(full_credit.text()) - parseFloat(summ_credit.text())).toFixed(2));
        create_table(output_srok.val(), ezh_plat.text(), full_credit.text());
    });

    ezh_plat.text(mes_plat(slider.val(), slider_srok.val()));
    summ_credit.text(slider.val());
    full_credit.text((mes_plat(slider.val(), slider_srok.val()) * output_srok.val()).toFixed(2));
    pereplata.text((parseFloat(full_credit.text()) - parseFloat(summ_credit.text())).toFixed(2));
    console.log(full_credit.text());
    create_table(output_srok.val(), ezh_plat.text(), full_credit.text());
});