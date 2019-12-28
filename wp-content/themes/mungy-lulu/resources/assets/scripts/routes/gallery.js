export default {
    init() {
      // JavaScript to be fired on gallery
  
    },
    finalize() {
      // JavaScript to be fired on gallery, after page specific JS is fired
      $(document).ready (() => {
        waitForEl('.ftg-loaded', () => {
            $(window).trigger('resize');
        });  
      });
    },
  };

// https://gist.github.com/chrisjhoughton/7890303#gistcomment-2638757
/**
 * Wait for the specified element to appear in the DOM. When the element appears,
 * provide it to the callback.
 *
 * @param selector a jQuery selector (eg, 'div.container img')
 * @param callback function that takes selected element (null if timeout)
 * @param maxtries number of times to try (return null after maxtries, false to disable, if 0 will still try once)
 * @param interval ms wait between each try
 */
function waitForEl(selector, callback, maxtries = false, interval = 100) {
    const poller = setInterval(() => {
      const el = jQuery(selector)
      const retry = maxtries === false || maxtries-- > 0
      if (retry && el.length < 1) return // will try again
      clearInterval(poller)
      callback(el || null)
    }, interval)
  }