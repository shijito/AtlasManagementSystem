$(function(){

    $('.delete_date').on('click',function(){
        $('.js-modal').fadeIn();
        var setting_resreve = $(this).attr('setting_resreve');
        var setting_part = $(this).attr('setting_part');
        var setting_id = $(this).attr('setting_id');
        $('.modal-setting-resreve input').val(setting_resreve);
        $('.modal-setting-part input').val(setting_part);
        // $('.modal-setting-part date-on').val(setting_part);
        $('.delete-modal-hidden').val(setting_id);
        return false;
      });
      $('.js-modal-close').on('click', function () {
        $('.js-modal').fadeOut();
        return false;
      });
});
