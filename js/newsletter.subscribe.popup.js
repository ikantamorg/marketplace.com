/*! 
 * Updated         : 26.02.14
 * Further changes : @ElmahdiMahmoud
 */
var template = '';
var subscribe = {
  checkIfPopupShow: function () {
    var result;
    $.ajax({
      async: false,
      type: 'post',
      data: 'subscribe=check',
      dataType: 'json',
      url: 'functions.php',
      success: function (response) {
        if (response.remind) {
          result = response.remind;
        }

        if (response.template) {
          template = response.template;
        }

      }
    });
    return result;
  }, //checkIfUserSubscribed

  getPopup: function () {
    return template;
  },
  showPopUp: function () {
    var _this = this;
    if (!template) {
      return;
    }
    var $wrap = $('#wrap');
    $wrap.html(template);

    _this.$popup = $wrap.find('#subscribe-popup');

    $('.subscribe-overlay').fadeIn(600, function () {
      $('.subscribe-window').slideDown('fast', function(){
        _this.popupAutoAdjustSize();
      });
    });

    $wrap.on('click', '.close-butt', function () {
      _this.$popup.fadeOut(500);
    });

    var input = $('#input_subscribe_email');

    var button = $('#button_subscribe');
    var form = $('#form_subscribe');

    var $errorField = _this.$popup.find('.error');

    var loading = false;

    button.on('click', function (e) {
      e.preventDefault();

      if (loading){
        return;
      }

      $errorField.empty();

      _this.popupAutoAdjustSize();

      input.prop('disabled', true);

      button.addClass('loader');

      loading = true;

      $.ajax({
        type: 'post',
        data: {email: input.val()},
        dataType: 'json',
        url: 'functions.php'
      }).always(function(){
          input.prop('disabled', false);
          loading = false;
          button.removeClass('loader');
      }).fail(function(){
          
      }).done(function(data){
          if (!data || !data.result) {
            if (data && data.error) {
              $errorField.html(data.error);
              _this.popupAutoAdjustSize();
            }

            return;
          }

          var succcessMessage = 'Your email successfully added to subscription list.';

          form.parent().find('.popup-text').text(succcessMessage);
          form.remove();

          _this.popupAutoAdjustSize();


/*           setTimeout(function(){
            _this.$popup.fadeOut(500);
          },5000);  */
      });



    });

	
    $(document).bind('click', function (e) {
      var $clicked = $(e.target);
      if (!$clicked.closest('.subscribe-window').length) {
        _this.$popup.fadeOut(500);
      }
    });

  },//showPopup
  popupAutoAdjustSize: function(){
    var $window = this.$popup.find('.subscribe-window');
    var height = $window.find('.popup-content').outerHeight(true, true);
    $window.animate({height: height}, 100);
  },
  start: function () {
    var _this = this;
    var timeout = 1000 * 60 * 1; //after 1 minute show popup
	/*
      setTimeout(function(){
        if (_this.checkIfPopupShow()) {
          _this.showPopUp();
        }
      }, timeout);
	*/

    return true;
  },

  showSuccess: function () {
    $('.subscribe-overlay').html($(core.getSuccess()).html());
  }

};
$(document).ready(function () {
  subscribe.start();
});
        
 