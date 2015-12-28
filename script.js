var email = document.getElementById('email');
var seller_name = document.getElementById('seller-name');
var author_name = document.getElementById('author-name');
var book_name = document.getElementById('book-name');
var phone_no = document.getElementById('seller-no');
var book_price = document.getElementById('book-price');
var bookDetails = [email, seller_name, phone_no, book_name, book_price, book_price, author_name];
var index;
for (index = 0; index < bookDetails.length; index++) {
    document.getElementById('confirm-submission').innerHTML = bookDetails[index]; 
}
