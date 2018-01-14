import $ from 'jquery';

class Modal {

constructor(){
  this.open   = $(".btn--open-modal");
  this.close  = $(".btn--close-modal");
  this.modal  = $(".modal");
  this.events();

}

events(){
  this.open.click(this.openModal.bind(this));

  this.close.click(this.closeModal.bind(this));
}

openModal (){
  this.modal.addClass("modal--is-visible");
  return false;
}

closeModal (){
  this.modal.removeClass("modal--is-visible");
  return false;
}

}

export default Modal;
