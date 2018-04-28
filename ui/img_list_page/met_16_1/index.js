/*
* @Author: P
* @Date:   2018-03-20 18:18:35
* @Last Modified by:   P
* @Last Modified time: 2018-04-28 18:32:46
*/
METUI_FUN['$uicss'] = {
    name:'$uicss',
    init: function() {
      var $main=METUI['$uicss'],
      $modal = $main.find('.play-modal'),
      $img = $modal.find('img'),
      $video = $modal.find('video'),
      $close = $modal.find('.icon-close');
      $('.skill-img-list li').click(function (e) {
          var $item = $(this);
          console.log(111);
          $video.hide();
          var imgSrc = $item.find('.img-wrap[data-src]').attr('data-src');
          $img.attr('src', imgSrc).show();
          $modal.addClass('show');
      });
      $('.helpthree-img-list .play-btn').each(function (index, item) {
        var $item = $(item);
        var videoSrc = $item.attr('data-src');
        $item.click(function () {
          $img.hide();
          $video.attr('src', videoSrc).show();
          $modal.addClass('show');
          $video[0].play();
        });
      });
      $close.click(function () {
          $modal.removeClass('show');
          $img.attr('src', '');
          $video.attr('src', '');
      });
    }
};
METUI['$uicss'] = new metui(METUI_FUN['$uicss']);