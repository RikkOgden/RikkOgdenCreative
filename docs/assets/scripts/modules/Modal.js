import $ from 'jquery';

class Modal {

  constructor() {
    this.open = $(".button--open-modal");
    this.close = $(".button--close-modal, .modal__overlay");
    this.modal = $("#work-history");
    this.events();
    this.onEscape();

  }

  onEscape() {
    this.on('keyup', function(evt) {
      if (evt.keyCode == 27) {
        this.close.click(this.closeModal.bind(this));
      }
    });
  }

  events() {
    this.open.click(this.openModal.bind(this));
    this.close.click(this.closeModal.bind(this));
  }

  openModal() {

    //var curScrollTop = $(window).scrollTop();
    $("html").addClass("noscroll");
    this.modal.addClass("modal--is-visible");
    this.modal.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(e) {
      $('#work-history .button--close-modal').focus();
    });

    //setTimeout(function() { $('.button--close-modal').focus() }, 1500);

    //.css('top', '-' + curScrollTop + 'px');
    return false;

  }

  closeModal() {
    $("html").removeClass("noscroll");
    this.modal.removeClass("modal--is-visible");
    return false;
  }

}

export default Modal;
