function kontrol(){

    var son_p = $('p:last').attr('id');
    var son_id_al = son_p.split('-');
    var son = son_id_al['1'];
    var sayi = '1';

    while (sayi <= son) {


        var id = $('#satir-'+sayi+' input').attr('id');
        var cevap = $('#satir-'+sayi+' input').val();


        var data = 'veri='+id+'-'+cevap;
        var sonuc = $.ajax({
            type: 'POST',
            url: "../exercises/kontrol.php",
            data: data,
            dataType: 'html',
            context: document.body,
            global: false,
            async:false,
            success: function(data) {
                return data;
            }
        }).responseText;
        var parcala=sonuc.split("-");
        var durum = parcala['0'];
        var dogrusu = parcala['1'];

        if(cevap=='') {var cevap='- - -';}

        if(durum=='1'){

            $('#'+id).val(cevap);
            $("#y-"+id).val("True");
            $("#y-"+id).show();
            $('#'+id).prop('readonly', true);
            $('#'+id).removeClass('cevap').addClass('dogru');

        }else {

            $("#"+id).val(cevap);
            $("#y-"+id).val("Correct Answer: "+dogrusu);
            $("#y-"+id).show();
            $('#'+id).prop('readonly', true);
            $('#'+id).removeClass('cevap').addClass('yanlis');

        }

        sayi++;
    }

}