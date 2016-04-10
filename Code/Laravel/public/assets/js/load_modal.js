$(document).ready(function(){
	 $('input').iCheck({
        checkboxClass: 'icheckbox_minimal',
        radioClass: 'iradio_minimal-red'
      });
      $('.select').select2({
       width : '100%',
       display: 'inline-block',
       minimumInputLength: '1'
      });
      $.fn.modal.Constructor.prototype.enforceFocus = function () {};
    });