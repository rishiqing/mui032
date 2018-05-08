/*
* @Author: P
* @Date:   2018-03-20 18:18:35
* @Last Modified by:   P
* @Last Modified time: 2018-04-28 23:27:45
*/
METUI_FUN['$uicss'] = {
    name:'$uicss',
    init: function() {
      var $main=METUI['$uicss'],
      $imgModal = $main.find('.play-img-modal'),
      $videoModal = $main.find('.play-video-modal'),
      $img = $imgModal.find('img'),
      $video = $videoModal.find('video'),
      $close = $main.find('.icon-close');
      $('.skill-img-list li').click(function (e) {
          var $item = $(this);
          $video.hide();
          var imgSrc = $item.find('.img-wrap[data-src]').attr('data-src');
          $img.attr('src', imgSrc).show();
          $imgModal.addClass('show');
      });
      $('.helpthree-img-list .play-btn').each(function (index, item) {
        var $item = $(item);
        var videoSrc = $item.attr('data-src');
        $item.click(function () {
          $img.hide();
          $video.attr('src', videoSrc).show();
          $videoModal.addClass('show');
          $video[0].play();
        });
      });
      $close.click(function () {
          $imgModal.removeClass('show');
          $videoModal.removeClass('show');
          $img.attr('src', '');
          $video.attr('src', '');
      });
    }
};
METUI['$uicss'] = new metui(METUI_FUN['$uicss']);