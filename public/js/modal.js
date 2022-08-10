$(document).on('click', '.login', function(e) {
    
    e.preventDefault();

    let modal = $('#exampleModalCenter');
    let minha_modal = new bootstrap.Modal(modal);
    minha_modal.show();


});