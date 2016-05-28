(function($, window) {
  window.contact = function (event) {
    event.preventDefault();

    var form = $('form[name="contact"]');
    var messageOk = $('#contact-thanks');
    var messageError = $('#contact-error');

    messageOk.slideUp('fast');
    messageError.slideUp('fast');

    var url = "https://formspree.io/contact@docit.dk";

    $.ajax({
      url: url,
      method: "POST",
      data: form.serializeArray(),
      dataType: "json",
      success: function () {
        messageOk.slideDown('fast');
        form.trigger('reset');
      },
      error: function () {
        messageError.slideDown('fast');
      },
    });
  }
}(jQuery, window));
