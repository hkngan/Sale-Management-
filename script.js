const btn = document.querySelectorAll("button")

btn.forEach(function (button, index) {
    button.addEventListener("click", function (event) {
        {
            var btnItem = event.target
            var product = btnItem.parentElement
            var productName = product.querySelector('h2').innerText
            var productPrice = product.querySelector('p').innerText
            addcart(productName, productPrice)

        }
    })
})
function addcart(productName, productPrice) {
    var addtr = document.createElement("tr")
    var item = document.querySelectorAll("tbody tr")
    for (var i = 0; i<item.length; i++) {
        var productT = document.querySelectorAll(".nameItem")
        if (productT[i].innerHTML == productName) {
            alert("Sản phẩm bạn đã chọn có trong giỏ hàng")
            return

        }
    }
    var trcontent = '<td ><span class="nameItem">' + productName + '</span></td><td><p>' + productPrice + '</p></td><td> <input style="width: 40px; outline:none;" type="number" value="1" min="0"></td><td style="cursor: pointer" ><span class="del">Xóa</span></td></tr>'
    addtr.innerHTML = trcontent
    var cartTable = document.querySelector("tbody")
    cartTable.append(addtr)
    total()
    delItem()
    addAmount()
    
}
function total() {
    var item = document.querySelectorAll("tbody tr")
    var totalE = 0
    for (var i = 0; i < item.length; i++) {
        var value = item[i].querySelector("input").value
        // console.log(value)
        var productPrice = item[i].querySelector("p").innerText
        totalMutiple = productPrice * value
        totalE = totalE + totalMutiple

    }
    var totalPrice = document.querySelector(".total-price span")
    totalPrice.innerHTML = totalE.toLocaleString("de-DE")
}

function delItem() {
    var item = document.querySelectorAll("tbody tr")
    for (var i = 0; i < item.length; i++) {
        var productT = document.querySelectorAll(".del")
        productT[i].addEventListener("click", function (event) {
            var deleteC = event.target
            var deleteI = deleteC.parentElement.parentElement
            deleteI.remove()
            total()
        })

    }
}
function addAmount(){
    var item = document.querySelectorAll("tbody tr")
    for (var i = 0; i < item.length; i++) {
        var changValue = item[i].querySelector("input")
        changValue.addEventListener("change",function(){
            total()
        })

    }
}


