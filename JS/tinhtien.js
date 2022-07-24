function calculate() {
    const pricebl = document.getElementById('pro');
    const qtyInput = document.getElementById('qty');

    const price = Number(pricebl.getAttribute('data-price'));
    const qty = Number(qtyInput.value);
    const nameSpan = document.getElementById('name');
    const amountSpan = document.getElementById('amount');
    nameSpan.innerText = "Vé Xem Phim";
    amountSpan.innerText = price * qty + " " + "VNĐ";

}