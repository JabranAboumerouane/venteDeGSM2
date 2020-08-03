var  clicActive = function(){
    if($(this).text()=="0"){
        $destination='user_active.php';
    }else{
        $destination='user_desactive.php';
    };
    var elem = $( this );
    $.post( $destination, { code : $(this).parent().attr('id_user') } )
        .done(function( data ) {
                elem.empty();
                elem.html(data);
            }
        );
};

var  clicKeyUp = function(){

    $destination='find_user.php';

    var elem = $( this );

    $.post( $destination, { NOM : elem.val()} )
        .done(function( data ) {
                $('#users').replaceWith(data);
            }
        );
};


var  clicModif = function(){
    var elem = $( this );
    $destination='users_fic.php';
    $.post( $destination, { user : $(this).parent().attr('id_user') })
        .done(function( data ) {
            displayModal(data);
        });
};

var  clicNew = function(event){
    event.preventDefault();
    var elem = $( this );
    $destination='users_fic.php';
    $.post( $destination)
        .done(function( data ) {
            displayModal(data);
        });
};

var displayModal= function(data){
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
    $('.modal-body').html(data);
    $("#myModal").modal();
    $("#myModal form").submit(function( event ) {
        event.preventDefault();
        $.post('users_fic.php',$(this).serialize()).done(function(data) {});
        $("#myModal").modal('toggle');
        $("form #PRENOM").trigger('keyup');

    });
}

$(function(){
    $(document).on('click','#users #actif',clicActive);
    $(document).on('click','#users #modifier',clicModif);
    $(document).on('change','form[name="FormUser_tab"] #PRENOM',clicKeyUp);
    $(document).on('keyup','form[name="FormUser_tab"] #PRENOM',clicKeyUp);
    $('form[name="NewUser_tab"]').submit(function( event ) {clicNew(event)});
});

