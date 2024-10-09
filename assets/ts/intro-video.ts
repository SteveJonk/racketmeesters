document.addEventListener('DOMContentLoaded', () => {
  const hideIntro = Boolean(getCookie('stef_hide_intro'));
  if (hideIntro) return;

  document.body.style.overflow = 'hidden';
  const container = document.querySelector('.intro-animation__container');
  const image = container.querySelector('.intro-animation__image');

  document.body.style.overflow = 'hidden';

  setTimeout(() => {
    image?.classList.add('animate');
  }, 500);

  image.addEventListener('transitionend', () => {
    setTimeout(() => {
      container?.classList.add('fade-out');
      document.body.style.removeProperty('overflow');
      document.cookie = 'stef_hide_intro=true; max-age=3600; path=/; samesite=strict';
    }, 600);
  });
});

const getCookie = (cname) => {
  let name = cname + '=';
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
};

export {};
