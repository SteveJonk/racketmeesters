// When clicking button with class 'go-up-button', the page scrolls to the top.
document.querySelector('.is-style-go-up')?.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth',
  });
});

export {};
