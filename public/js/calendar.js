$(function(){

    $('.delete_date').on('click',function(){
        $('.js-modal').fadeIn();
        var setting_resreve = $(this).attr('setting_resreve');
        var setting_part = $(this).attr('setting_part');
        var setting_id = $(this).attr('setting_id');
        $('.modal-setting-resreve input').val(setting_resreve);
        $('.modal-setting-part input').val(setting_part);
        $('.delete-modal-hidden').val(setting_id);
        return false;
      });
      $('.js-modal-close').on('click', function () {
        $('.js-modal').fadeOut();
        return false;
      });
});


// var setting_resreve ←設定する変数
// = $(this).attr('setting_resreve');　←htmlで取得した値
// $('.modal-setting-resreve input').　←htmlで設定しているclassに
// val(setting_resreve);　←設定した変数を設定する