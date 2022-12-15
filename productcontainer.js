const button = document.getElementById("btn");

function createBlock(classname, cotent) {
  let div = document.createElement("div");
  div.setAttribute("class", classname);
  div.innerHTML = cotent;
  return div;
}

var ajax = new XMLHttpRequest();
ajax.open("GET", "Database.php", true);
ajax.send();

ajax.onreadystatechange = function () {
  if (this.readyState == 4 && this.status == 200) {
    var data = JSON.parse(this.responseText);
    console.log(data);

    for (var a = 0; a < data.length; a++) {
      var firstName = data[a].name;
      var lastName = data[a].price;
      var jobTitle = data[a].info;

      // function addOuter() {
      let outerelement = document.createElement("div");
      outerelement.setAttribute("class", "items");
      document.querySelector(".container").appendChild(outerelement);

      outerelement.appendChild(createBlock("img", "image"));
      outerelement.appendChild(createBlock("name", firstName));
      outerelement.appendChild(createBlock("price", lastName));
      outerelement.appendChild(createBlock("info", jobTitle));
      // }
    }
  }
};
