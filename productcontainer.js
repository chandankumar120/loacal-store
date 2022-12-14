// let parent = document.querySelector(".container");
const button = document.getElementById("btn");

function createBlock(classname, cotent) {
  let div = document.createElement("div");
  div.setAttribute("class", classname);
  div.innerHTML = cotent;
  return div;
}
function addOuter() {
  let outerelement = document.createElement("div");
  outerelement.setAttribute("class", "items");
  document.querySelector(".container").appendChild(outerelement);

  outerelement.appendChild(createBlock("img", "image"));
  outerelement.appendChild(createBlock("name", "aalu"));
  outerelement.appendChild(createBlock("price", "5"));
  outerelement.appendChild(createBlock("info", "this is new"));
}
