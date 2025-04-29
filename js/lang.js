function setLanguage(lang) {
    fetch(`lang/${lang}.json`)
      .then(response => response.json())
      .then(data => {
        document.querySelectorAll('[data-i18n]').forEach(element => {
          const key = element.getAttribute('data-i18n');
          if (data[key]) {
            element.textContent = data[key];
          }
        });
  
        // Сохраняем язык в localStorage
        localStorage.setItem('language', lang);
      });
  }
  
  // Загружаем язык из localStorage при загрузке страницы
  document.addEventListener("DOMContentLoaded", () => {
    const savedLang = localStorage.getItem('language') || 'cs';
    setLanguage(savedLang);
  });