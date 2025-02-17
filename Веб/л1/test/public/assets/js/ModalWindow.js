$(document).ready(function () {
    function createModal() {
        const modal = $('<div id="modal" class="modal"></div>');
        const modalBox = $('<div class="modal-box"></div>');
        const closeButton = $('<span class="close">&times;</span>');
        const message = $('<p>Вы уверены, что уверены?</p>');
        const buttonContainer = $('<div class="modal-buttons"></div>');
        const yesButton = $('<button id="yesButton">Да</button>');
        const noButton = $('<button id="noButton">Нет</button>');
        buttonContainer.append(yesButton, noButton);
        modalBox.append(closeButton, message, buttonContainer);
        modal.append(modalBox);
        $('body').append(modal);
        modal.fadeIn();
        closeButton.click(function () {
            modal.fadeOut(function () {
                modal.remove();
            });
        });
        yesButton.click(function () {
            modal.fadeOut(function () {
                modal.remove(); 
            });
        });
        noButton.click(function () {
            modal.fadeOut(function () {
                modal.remove(); 
            });
        });
        $(window).click(function (event) {
            if ($(event.target).is(modal)) {
                modal.fadeOut(function () {
                    modal.remove();
                });
            }
        });
    }
    $("#openModal").click(function () {
        createModal();
    });
});
