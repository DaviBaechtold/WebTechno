function filterBooksByGenre() 
{
    const selectedGenre = document.getElementById('genreDropdown').value;
    const books = document.querySelectorAll('.bookGenre');

    books.forEach(book => {
        const bookGenre = book.getAttribute('data-genre');
        if (selectedGenre === 'all' || bookGenre === selectedGenre) 
        {
            book.style.visibility = 'visible';
            book.style.display = 'list-item';
        } 
        else 
        {
            book.style.display = 'none';
        }
    });
}

document.getElementById('genreDropdown').addEventListener('change', filterBooksByGenre);