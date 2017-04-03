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

   $('#testimonials-2 .testimonial').click(function() {
        var testimonialContent;

        testimonialContent = "<blockquote><p>";
        testimonialContent += this.dataset.content;
        testimonialContent += "</p><footer>";
        testimonialContent += this.dataset.author;
        testimonialContent += "</footer></blockquote>";
        $('#testimonial-display').html(testimonialContent);
        $('#testimonials-2 .testimonial').removeClass('active');
        return $(this).addClass('active');
    });

    return $('#testimonials .testimonial').click(function() {
      var testimonialContent;
      testimonialContent = "<blockquote><p>";
      testimonialContent += this.dataset.content;
      testimonialContent += "</p><footer>";
      testimonialContent += this.dataset.author;
      testimonialContent += "</footer></blockquote>";
      $('#testimonial-display').html(testimonialContent);
      $('#testimonials .testimonial').removeClass('active');
      return $(this).addClass('active');
    });
  });

}).call(this);
