var jQueryScriptOutputted = false;
var currentElement

function initJQuery() {

  //if the jQuery object isn't available
  if (typeof(jQuery) == 'undefined') {

    if (!jQueryScriptOutputted) {
      //only output the script once..
      jQueryScriptOutputted = true;

      //output the script (load it from google api)
      document.write("<scr" + "ipt type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js\"></scr" + "ipt>");
    }
    setTimeout("initJQuery()", 50);
  } else {

    $(function() {
      //executes after jquery loaded;

      // var dropPopup; // the popup element
      $(document).ready(function() {
        $(".htw-helper-dialog").hide();

        var cookie_current_flow_id = read_cookie("flow_id");
        var prev_flowstep_id = "0";

        /****************************************************************************
				Check if cookie exists cookie_flow_id in the url
	****************************************************************************/
        if (cookie_current_flow_id) {
          htw_show_action_description(cookie_current_flow_id, prev_flowstep_id);
        }

        $(document).on('click', '.htw-exit-btn', function() {
          dropPopup.remove();
          $('.htw-selected-style').removeClass('htw-selected-style');
          eraseCookie("prev_flowstep_id");
          eraseCookie("flow_id");
        });
      });


      function createCookie(name, value, days) {
        if (days) {
          var date = new Date();
          date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
          var expires = "; expires=" + date.toUTCString();
        } else var expires = "";
        document.cookie = name + "=" + value + expires + "; path=/";
      }

      function read_cookie(cookie_name) {
        var nameEQ = cookie_name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
          var c = ca[i];
          while (c.charAt(0) == ' ') c = c.substring(1, c.length);
          if (c.indexOf(nameEQ) == 0)
            return c.substring(nameEQ.length, c.length);
        }
        return null;
      }

      function eraseCookie(name) {
        document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
      }

      function htw_show_action_description(flow_id, prev_flowstep_id) {
        if (read_cookie("flow_id") != 0) {
          console.log('http://howtoways.linways.com/getflowstep/index.php?flow_id=' + read_cookie("flow_id") + '&prev_flowstep_id=' + read_cookie("prev_flowstep_id"));
          $.ajax({
            url: 'http://howtoways.linways.com/getflowstep/index.php?flow_id=' + read_cookie("flow_id") + '&prev_flowstep_id=' + read_cookie("prev_flowstep_id"),
            type: 'GET',
            dataType: 'json',
            success: function(data) {
              if (data != "") {
                // var currentElement='#'+data[0].identifier;
                currentElement = getElementByXpath(data[0].identifier);
                console.log(data[0].identifier);
                if ($(currentElement).length > 0) {
                  if (countTimer) {
                    clearInterval(countTimer);
                  }
                  htw_action(currentElement, data);
                } else {
                  var countTimer = setInterval(function() {
                    if ($(currentElement).length > 0) {
                      clearInterval(countTimer);
                      htw_action(currentElement, data);
                    }
                  }, 3000);
                }
              } else {
                createCookie("prev_flowstep_id", 0, "");
                createCookie("flow_id", 0, "");
              }
            }
          });
        }
      }

      function htw_action(currentElement, data) {
        $(currentElement).addClass("htw-selected-style");
        // var
        htw_html = "<div class=\"htw-action-box\" id=\"htw-box\">\r\n" +
          "<i class=\"glyphicon glyphicon-remove-circle htw-exit-btn\"></i>" +
          "<div class=\"htw-action-header\">" +
          data[0].title +
          "<\/div>\r\n " +
          "<div class=\"htw-action-message\">" +
          data[0].description + "\r\n" +
          "<\/div>\r\n" +
          "<\/div>";


        var offset = $(currentElement).offset();
        var windowHeight = $(window).height();
        var windowWidth = $(window).width();
        var bottom = windowHeight - (offset.top + $(currentElement).height());
        var right = windowWidth - (offset.left + $(currentElement).width());
        // console.log("right: "+ right);
        // console.log("bottom: "+ bottom);
        //alert("element width "+ bottom);
        var tetherOptions;
        if (offset.left >= 300) {
          // if space is available in left side of the target.
          tetherOptions = {
            attachment: 'middle right',
            targetAttachment: 'middle left'
          };
        } else if (offset.left < 300 && right > 300) {
          // if space not available in the left but available in the right of the target.
          tetherOptions = {
            attachment: 'middle left',
            targetAttachment: 'middle right'
          };
        } else {
          // if space not available in left and right
          if (bottom > 200) {
            // if space available below the target
            tetherOptions = {
              attachment: 'top left',
              targetAttachment: 'bottom middle'
            };
          } else if (bottom < 200 && top > 200) {
            // if space not available below the target but available above the target/
            tetherOptions = {
              attachment: 'bottom left',
              targetAttachment: 'top middle'
            };
          } else {
            // fallback condition-> display below the target
            tetherOptions = {
              attachment: 'top left',
              targetAttachment: 'bottom middle'
            };
          }
        }
        console.log(tetherOptions);
        dropPopup = new Drop({
          target: currentElement,
          content: htw_html,
          classes: 'howtoways-popovers',
          openOn: 'always',
          constrainToWindow: true,
          tetherOptions: tetherOptions
        });
        $('html,body').animate({scrollTop: $(currentElement).offset().top},'slow');
        $(document).on('click', '#triggerCurrentElement', function() {
          //alert(currentElement);
          $(currentElement)[0].click();
          // $(currentElement).trigger( "click" );
        });
        $(currentElement).click(function() {
          $(this).css("border", "");
          dropPopup.remove();
          $(this).off('click');

          prev_flowstep_id = data[0].id;
          createCookie("prev_flowstep_id", prev_flowstep_id, "");
          flow_id = read_cookie("flow_id");
          prev_flowstep_id = read_cookie("prev_flowstep_id");
          if (flow_id != "null") {
            //alert(prev_flowstep_id);
            htw_show_action_description(flow_id, prev_flowstep_id);
          } else {
            eraseCookie("prev_flowstep_id");
            eraseCookie("flow_id");
          }

        });
      }


      //to select element using xpath
      // source http://stackoverflow.com/a/14284815
      function getElementByXpath(path) {
        return document.evaluate(path, document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue;
      }
    });
  }

}
initJQuery();