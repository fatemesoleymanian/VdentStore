$('#EvaluateModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('whatever')
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
});

function aos_footer(){
    let footerContent = document.querySelector('.aos-div');
    let footerContentPosition = footerContent.getBoundingClientRect().top;
    let screenPosition = window.innerHeight / 1.5 ;

    if (footerContentPosition < screenPosition ){
        footerContent.classList.add('appear');
    }else footerContent.classList.remove('appear');
}
        window.addEventListener('scroll' , aos_footer);

