const breakpointMobile = 616;
const breakpointDesktop = 1216;

class Navigation {
    constructor(element) {
        if (!element) {
            return;
        }

        this.element = element;
        this.form = element.querySelector('.search');
        this.input = element.querySelector('.search input');
        this.close = element.querySelector('.search .search-icon-close');
        this.boundHandleKeyup = this.handleKeyup.bind(this);
        this.activeClass = 'isSearchVisible';
        this.isVisible = false;

        this.element.addEventListener('submit', this.handleSubmit.bind(this));
        this.close.addEventListener('click', this.handleClick.bind(this));
    }

    handleClick(event) {
        event.preventDefault();

        this.toggleSearch();
    }

    handleSubmit(event) {
        event.preventDefault();

        if (this.isVisible) {
            this.form.submit();
        }

        this.toggleSearch();
    }

    handleKeyup(event) {
        // Return if key pressed is not "Esc"
        if (event.keyCode !== 27) {
            return;
        }

        this.toggleSearch();
    }

    handleResize() {
        if (!this.isVisible) {
            this.form.style.width = '16px';
            return;
        }

        if (window.innerWidth <= breakpointDesktop) {
            const spacing = window.innerWidth <= breakpointMobile ? 32 : 96;
            this.form.style.width = (window.innerWidth - spacing) + 'px';
            return;
        }

        this.form.style.width = '256px';
    }

    toggleSearch() {
        this.isVisible = !this.isVisible;

        if (this.isVisible) {
            this.element.classList.add(this.activeClass);
            this.input.focus();
            this.input.addEventListener('keyup', this.boundHandleKeyup);
            this.handleResize();

            return;
        }

        this.handleResize();
        this.input.removeEventListener('keyup', this.boundHandleKeyup, true);
        this.element.classList.remove(this.activeClass);
    }
}

const navigation = new Navigation(document.getElementById('nativedsd-navigation'));

window.addEventListener('resize', () => {
    if (navigation.element) {
        navigation.handleResize();
    }
});