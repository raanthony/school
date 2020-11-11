function somme(a,b){
    return parseFloat(a)+parseFloat(b);
}

//var fSomme = somme(document.getElementById('int_1').value,document.getElementById('int_2').value);

$("#btnSomme").on('click',function(){
    var fSomme = somme($("#int_1").val(),$("#int_2").val());
    console.log(fSomme);
    $("#resulat").html(fSomme);

    $("#form-addition > div.card").css({
        //backgroundColor : "red"
    });

    if( $("#form-addition").is(':visible') ){
        $("#form-addition").slideUp();
    }else{
        $("#form-addition").slideDown();
    }
});


$("#checkAll").on('click',function(){
    if( $(this).is(':checked') ){
        $(".check-eleve").prop('checked',true);
    }else{
        $(".check-eleve").prop('checked',false);
    }
});


$("#form-add-eleve").on('submit',function(e){
    e.preventDefault();

    $.ajax({
        url : '/eleve',
        type : 'post',
        data : $("#form-add-eleve").serialize(),
        dataType : 'json',
        success : function(eleve){
            $("#list_eleve").append('<tr>' +
                '<td>' + eleve.id + '</td>' +
                '<td>' + eleve.nom + '</td>'+
                '<td>' + eleve.prenom + '</td>'+
                '<td>' + eleve.birth_date + '</td>'+
            '</tr>');
            $("#form-add-eleve").find('input:text').val('');
        }
    });
});