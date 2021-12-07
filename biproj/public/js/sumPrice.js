let basket = {
    totalPrice: 0,
    reCalc    : function () {
        this.totalPrice = parseInt(document.querySelector(".product-price").textContent.replace(/[^0-9]/g, ''));
        document.querySelectorAll(".product-check").forEach(function (item) {
            if (item.checked === true) {
                var price = item.getAttribute('value')
                this.totalPrice += parseInt(price);
            }
        }, this)
    },
    updateUI  : function () {
        document.querySelector(".rec-price-sum").textContent = `Total $${this.totalPrice.formatNumber()}`;
    },
    checkItem : function () {
        this.reCalc();
        this.updateUI();
    }
}

Number.prototype.formatNumber = function () {
    if (this == 0) return 0;
    let regex = /(^[+-]?\d+)(\d{2})/;
    let nstr = (this + '');
    nstr = nstr.replace(regex, '$1' + '.' + '$2');
    return nstr;
};
