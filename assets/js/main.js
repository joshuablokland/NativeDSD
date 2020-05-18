const breakpointMobile = 616;
const breakpointDesktop = 1216;

/**
 * Navigation
 */
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


/**
 * Subscribe popup
 */
class SubscribePopup {
    constructor(element) {
        if (!element) {
            return;
        }

        if (this.hasUserInteractedWithPopup()) {
            element.remove();

            return;
        }

        this.element = element;
        this.isOpen = this.hasUserInteractedWithPopup() ? false : true;
        this.form = element.querySelector('.subscribe-form');
        this.btnClose = element.querySelector('.btn-close-subscribe');

        this.form.addEventListener('submit', this.handleSubmit.bind(this));
        this.btnClose.addEventListener('click', this.handleClick.bind(this));

        this.setClassName();
    }

    toggleOpen() {
        this.isOpen = !this.isOpen;

        this.setClassName();
    }

    setClassName() {
        if (this.isOpen) {
            this.element.classList.add('show');

            return;
        }

        this.element.classList.remove('show');
    }

    handleSubmit() {
        this.toggleOpen();
        this.setUserInteractedWithPopup();
    }

    handleClick() {
        this.toggleOpen();
        this.setUserInteractedWithPopup();
    }

    hasUserInteractedWithPopup() {
        return window.localStorage.getItem('hasUserInteractedWithPopup');
    }

    setUserInteractedWithPopup() {
        window.localStorage.setItem('hasUserInteractedWithPopup', true);
    }
}

const subscribePopup = new SubscribePopup(document.getElementById('nativedsd-subscribe-popup'));


/**
 * Music player
 */
class MusicPlayer {
    constructor(element, callbacks) {
        this.audio = new Audio(element.getAttribute('data-source'));
        this.callbacks = callbacks;

        const btnPlay = element.querySelector('button.btn-play');
        const btnPause = element.querySelector('button.btn-pause');
        const progress = element.querySelector('.nativedsd-player-progress-path');

        this.audio.addEventListener('loadeddata', () => {
            const duration = new Date(this.audio.duration * 1000).toISOString().substr(11, 8);

            element.querySelector('.nativedsd-player-duration').innerHTML = duration;
        });

        this.audio.addEventListener('timeupdate', () => {
            const percentage = this.audio.currentTime / this.audio.duration;
            const total = 138;
            const calc = percentage * total;

            progress.setAttribute('stroke-dasharray', `${calc},${total}`)

        });

        this.audio.addEventListener('pause', () => {
            btnPlay.classList.add('show');
            btnPause.classList.remove('show');
            element.classList.remove('is-playing');
        });

        this.audio.addEventListener('play', () => {
            btnPause.classList.add('show');
            btnPlay.classList.remove('show');
            element.classList.add('is-playing');
        });

        btnPlay.addEventListener('click', () => {
            this.callbacks.onPlay();
            this.audio.play();
        });

        btnPause.addEventListener('click', () => {
            this.audio.pause();
            this.callbacks.onPause();
        });
    }
}

const musicPlayers = (() => {
    const $musicPlayers = document.getElementsByClassName('nativedsd-player');

    if ($musicPlayers.length === 0) {
        return;
    }

    const musicPlayers = Object.values($musicPlayers).map(musicPlayer => new MusicPlayer(musicPlayer, {
        onPlay: () => {
            musicPlayers.forEach(musicPlayer => musicPlayer.audio.pause())
        },
        onPause: () => { }
    }));

})()


/**
 * Scroll indicator
 */
class ScrollIndicator {
    constructor(element, progress) {
        if (!element) {
            return;
        }

        this.element = element;
        this.progress = progress;

        window.addEventListener('scroll', this.handleScroll.bind(this));
    }

    handleScroll() {
        const max = window.scrollY > (this.element.offsetHeight - window.innerHeight);

        if (max) {
            this.setPercentage(100);

            return;
        }

        const maxScreensInsideContent = (this.element.offsetHeight - window.innerHeight) / window.innerHeight;
        const currentScreensInsideContent = window.scrollY / window.innerHeight;
        const percentage = (currentScreensInsideContent / maxScreensInsideContent) * 100;

        this.setPercentage(percentage);
    }

    setPercentage(percentage) {
        const round = Math.round(percentage);

        this.progress.style.width = round + '%';
    }
}

const scrollIndicator = new ScrollIndicator(
    document.querySelector('.track-scroll-progress'),
    document.querySelector('.track-scroll-progress-bar')
);

// Resize
window.addEventListener('resize', () => {
    if (navigation.element) {
        navigation.handleResize();
    }
});