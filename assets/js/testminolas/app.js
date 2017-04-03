(function() {
  $(function() {
    setTimeout(function() {
      return $('.course-selector-content').addClass('fadeOutDown');
    }, 1000);
    $('.course-selector').hover(function() {
      return $(this).find('.course-selector-content').removeClass('fadeOutDown').addClass('fadeInUp');
    });
    $('.course-selector').mouseleave(function() {
      return $(this).find('.course-selector-content').removeClass('fadeInUp').addClass('fadeOutDown');
    });
    $('#home-page header').affix({
      offset: {
        top: 300
      }
    });
    $('#about .items-sm .item').click(function() {
      if (!$(this).hasClass('active')) {
        $('#about .items-sm .item').removeClass('active');
        return $(this).addClass('active');
      }
    });
    $('#videos .video-nav .items .item').click(function() {
      var videoFrame;
      if (!$(this).hasClass('active')) {
        $('#videos .video-nav .items .item').removeClass('active');
        $(this).addClass('active');
        videoFrame = "<iframe  src='" + this.dataset.videoUrl + "' frameborder='0' allowfullscreen></iframe>";
        return $('#videos .video-container').html(videoFrame);
      }
    });

      // var testimonial_1_active=-10, testimonial_2_active=-20;
      // $('#testimonials-2 .testimonial').click(function() {
      //     var testimonialContent;
      //     if( testimonial_2_active >= 0 ){
      //         $('#testimonials .testimonial')[testimonial_1_active].removeClass('active');
      //         testimonial_1_active = -10;
      //     }
      //
      //     testimonialContent = "<blockquote><p>";
      //     testimonialContent += this.dataset.content;
      //     testimonialContent += "</p><footer>";
      //     testimonialContent += this.dataset.author;
      //     testimonialContent += "</footer></blockquote>";
      //     $('#testimonial-display-2').html(testimonialContent);
      //     $('#testimonials-2 .testimonial').removeClass('active');
      //     testimonial_2_active = $('#testimonials-2 .testimonial').index($(this));
      //     return $(this).addClass('active');
      // });

      return $('#testimonials .testimonial').click(function() {
          var testimonialContent;


          testimonialContent = "<blockquote><p>";
          testimonialContent += this.dataset.content;
          testimonialContent += "</p><footer>";
          testimonialContent += this.dataset.author;
          testimonialContent += "</footer></blockquote>";
          var rem_class=  $(this).closest(".testimonials-container").find(".active");
          // rem_class.removeClass('.active');
          $('#testimonials .testimonial').removeClass('active');
          clear_content = rem_class.closest(".testminioals-group").find("#testimonial-display");
          clear_content.html('');
          var temp_div =$(this).closest(".testminioals-group").find("#testimonial-display");
          temp_div.html(testimonialContent);

          return $(this).addClass('active');
      });
  });

}).call(this);
