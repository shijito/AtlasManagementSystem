$(function () {
  $('.search_conditions').click(function () {
    $('.search_conditions_inner').slideToggle();
    $('.arrow').toggleClass("rotate");
  });

  $('.subject_edit_btn').click(function () {
    $('.subject_inner').slideToggle();
    $('.arrow').toggleClass("rotate");
  });

  
  // $('.post_category_list').on('click', function () {
  // $(this).next().slideToggle();
  // //openクラスをつける
  // $(this).toggleClass("open");
  // //クリックされていないac-parentのopenクラスを取る
  // $('.post_category_list').not(this).removeClass('open');

  // // 一つ開くと他は閉じるように
  // $('.post_category_list').not($(this)).next('.post_category_inner').slideUp();
  // $('.arrow').toggleClass("rotate");
  // });

  // $('.post_category_list').on('click',function() {            //post_category_listをクリックすると、
  // $(this).toggleClass('selected');                            //クラス名selectedを付与
  // $(this).next().slideToggle();                               //次の要素の表示/非表示を切り替える。
  // $('.post_category_list').not($(this)).next().slideUp();     //クリックした以外を対象に、slideUpメソッドを実行している
  // $('.post_category_list').not($(this)).removeClass('selected'); //クラス名selectedの削除
  // $('.arrow').toggleClass("rotate");                          //矢印が動く
  // });

  // $('.post_category_list').click(function () {                //post_category_listをクリックすると、
  //   $('.post_category_inner').slideToggle();                  //post_category_innerを表示/非表示を切り替える。
  //   $('.arrow').toggleClass("rotate");                        //矢印が動く
  // });

})