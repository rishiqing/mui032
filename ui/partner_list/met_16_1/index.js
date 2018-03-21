/*
* @Author: P
* @Date:   2018-03-12 12:07:55
* @Last Modified by:   P
* @Last Modified time: 2018-03-19 14:42:48
*/
METUI_FUN['$uicss'] = {
    name:'$uicss',
    init: function() {
      var $partnerlist=METUI['$uicss'],
      $listContainer = $partnerlist.find('.list-container'),
      $ul = $partnerlist.find('ul.index-page'),
      $li = $ul.find('li');
      $prev = $partnerlist.find('.prev'),
      $next = $partnerlist.find('.next');
      if ($ul.length) {
        var width = $li.outerWidth(true);
        var len = $li.length;
        var num = Math.floor($listContainer.width() / width);
        var index = 0;
        $next.on('click', function () {
          if( $ul.is(':animated')) return;
          index++;
          if ($ul.find('li').length <= len && index > (len - num) ) {
            $ul.append($li.clone());
          }
          $ul.stop().animate({
            'left': index >= 0 ? -width*index : -width*(len+index)
          }, 0, function () {
            if (index > (num + 1)) {
              index = 0;
              $(this).css('left', 0);
            }
          });
        });
        $prev.on('click', function () {
          if( $ul.is(':animated')) return;
          index--;
          if ($ul.find('li').length <= len && index < 0) {
            $ul.append($li.clone());
          }
          $ul.stop().animate({
            'left': index <= 0 ? -width*(len+index) : -width*index
          }, 0, function () {
            if (index < -(num + 1)) {
              index = 0;
              $(this).css('left', 0);
            }
          });
        });
      }
    }
};
METUI['$uicss'] = new metui(METUI_FUN['$uicss']);