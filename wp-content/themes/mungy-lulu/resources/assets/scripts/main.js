// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import services from './routes/services';
import { library, dom } from '@fortawesome/fontawesome-svg-core'; // import then needed Font Awesome functionality
import { faFacebook, faInstagram } from '@fortawesome/free-brands-svg-icons'; // import the Facebook and Instagram icons

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
  // Services
  services,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

// FontAwesome: https://discourse.roots.io/t/how-to-use-font-awesome-5-in-your-sage-theme/11737
library.add(faFacebook, faInstagram);
dom.watch(); // tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup
