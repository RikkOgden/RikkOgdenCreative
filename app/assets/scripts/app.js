import MobileMenu from './modules/MobileMenu';
import RevealOnScroll from './modules/RevealOnScroll';
import StickyHeader from './modules/StickyHeader';
import Modal from './modules/Modal';
new MobileMenu('.site-header__menu-icon', '.nav-primary');
new RevealOnScroll('.usp--home', '90%');
new RevealOnScroll('.feature-item', '90%');
new StickyHeader();
new Modal();
