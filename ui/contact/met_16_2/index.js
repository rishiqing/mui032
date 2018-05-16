/*
* @Author: P
* @Date:   2018-03-20 18:18:35
* @Last Modified by:   P
* @Last Modified time: 2018-05-16 13:48:31
*/
METUI_FUN['$uicss'] = {
    name:'$uicss',
    init: function() {
     // 视频播放
      var $metcontact=METUI['$uicss'],
      $videoModal = $metcontact.find('.play-video-modal'),
      $video = $videoModal.find('video'),
      $playBtn = $metcontact.find('.play-btn'),
      $close = $metcontact.find('.icon-close');
      if($metcontact.length){
          $playBtn.click(function () {
              var videoSrc = $(this).attr('data-src');
              $video.attr('src', videoSrc).show();
              $videoModal.addClass('show');
              $video[0].play();
          });
          $close.click(function () {
              $videoModal.removeClass('show');
              $video.attr('src', '');
          });
      }
    }
};
var contact=metui(METUI_FUN['$uicss']);