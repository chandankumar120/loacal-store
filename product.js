const other=document.querySelector("#other")
const selectedItem=document.querySelector(".select-item")
const itemBrandName=document.querySelector(".item-brand-name")
const pricePerItem=document.querySelector(".price-per-item")
const itemQuantity=document.querySelector(".item-quantity")
const calculateTotalPrice=document.querySelector(".calculate-total-price")
const totalPrice=document.querySelector(".total-price")

function calculatePrice(){
    let pricePerItemValue=Number(document.querySelector(".price-per-item").value)
    let itemQuantityValue=Number(document.querySelector(".item-quantity").value)
    if(pricePerItemValue*0!=0 || itemQuantityValue*0!=0)
    alert("Please enter a valid number!")
    if(pricePerItemValue<=0)
    alert("Item Price should be greater than 0.")
    else if(itemQuantityValue<=0)
    alert("Item Quantity should be greater than 0.")
    else
    totalPrice.value="Total price is "+(pricePerItemValue*itemQuantityValue)
}

