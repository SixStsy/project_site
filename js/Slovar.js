document.addEventListener('DOMContentLoaded', () => {
    const glossaryData = [
        { term: "Элеон", description: "Название Отеля ." },
        { term: "Агузки ", description: "Плохие повара  " },
        { term: "Локация", description: "Москва" },
        { term: "Части", description: "5" },
        { term: "Герои", description: "Мульти героизм ." },
        { term: "Управляющие ", description: "София и Джекович ." },
        { term: "Стручок", description: "Шеф Повар" },
        { term: "Страна", description: "Россия" },
        { term: "Старт", description: "Сериал внутри сериала   " },
        { term: "Джекович", description: "Черный управляющий  ." }
    ];

    const searchInput = document.getElementById('search-input');
    const glossaryList = document.getElementById('glossary-list');
    const descriptionText = document.getElementById('description-text');

    function displayGlossary(terms) {
        glossaryList.innerHTML = '';
        terms.forEach(item => {
            const listItem = document.createElement('li');
            listItem.textContent = item.term;
            listItem.addEventListener('click', () => {
                descriptionText.textContent = item.description;
            });
            glossaryList.appendChild(listItem);
        });
    }

    searchInput.addEventListener('input', () => {
        const query = searchInput.value.toLowerCase();
        const filteredTerms = glossaryData.filter(item =>
            item.term.toLowerCase().includes(query)
        );
        displayGlossary(filteredTerms);
    });

    displayGlossary(glossaryData);
});
