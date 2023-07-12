jQuery(document).ready(function($) {
    var pills = $('#pills-tab');
    var pills_width = pills.width();
    var pills_scroll_width = pills[0].scrollWidth;
    var pills_offset = pills.offset().left;
    var pills_max_scroll = pills_scroll_width - pills_width;
    var pills_scroll_pos = 0;
    var pills_scroll_step = pills_width / 2;

    pills.before('<a class="nav-link-prev" href="#"><i class="fas fa-angle-left"></i></a>');
    pills.after('<a class="nav-link-next" href="#"><i class="fas fa-angle-right"></i></a>');

    $('.nav-link-prev').on('click', function(e) {
      e.preventDefault();
      pills_scroll_pos -= pills_scroll_step;
      if (pills_scroll_pos < 0) {
        pills_scroll_pos = pills_max_scroll;
      }
      pills.animate({ scrollLeft: pills_scroll_pos }, 500);
    });

    $('.nav-link-next').on('click', function(e) {
      e.preventDefault();
      pills_scroll_pos += pills_scroll_step;
      if (pills_scroll_pos > pills_max_scroll) {
        pills_scroll_pos = 0;
      }
      pills.animate({ scrollLeft: pills_scroll_pos }, 500);
    });

  });
