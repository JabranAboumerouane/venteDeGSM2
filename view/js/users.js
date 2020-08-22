
var  clicActive = function(){
    if($(this).text()=="0"){
        $destination='user_active.php';
    }else{
        $destination='user_disabled.php';
    };
    var elem = $( this );
    $.post( $destination, { active : $(this).parent().attr('id') } )
        .done(function( result ) {
                elem.empty();
                elem.html(result);
            }
        );
};

//recherche
var clicKeyUp = function() {

    $destination = 'users_tab.php';

    var elem = $(this);

    $.post( $destination, { last_name: elem.val()})
        .done(function(result) {
            $('#users').replaceWith(result);
        });
};

var  clicModif = function(){
    var elem = $( this );
    $destination='users_fic.php';
    $.post( $destination, { employe : $(this).parent().attr('id') })
        .done(function( result ) {
            displayModal(result);
        });
};

var displayModal= function(result){
    $("#myModal").remove();
    $VarTmp = '<div class="modal fade" id="myModal" role="dialog">'+
        '<div class="modal-dialog modal-sm">'+
        '<div class="modal-content">'+
        '<div class="modal-header">'+
        '<button type="button" class="close" data-dismiss="modal">&times;</button>'+
        '<h4 class="modal-title">Modal Header</h4>'+
        '</div>'+
        '<div class="modal-body">'+
        '  <p></p>'+
        '</div>'+
        '</div>'+
        '</div>'+
        '</div>';

    $('body').append($VarTmp);
    $('.modal-body').html(result);
    $("#myModal").modal();
    $("#myModal form").submit(function( event ) {
        event.preventDefault();
        $.post('users_fic.php',$(this).serialize()).done(function(result) {});
        $("#myModal").modal('toggle');
        $("form #PRENOM").trigger('keyup');

    });
}


$(function() {
    $(document).on('click', '#users #actif', clicActive);
    $(document).on('click', '#users #modifier', clicModif);
    $(document).on('change', 'form[name="form_find_addUser"] #active', clicKeyUp); //modal
    $(document).on('keyup', 'form[name="form_find_addUser"] #active', clicKeyUp); //modal
    $('form[name="form_find_addUser"]').submit(function (event) {clicNew(event)});

    };