const districtsByProvince = {
  "Kigali": ["Gasabo", "Nyarugenge", "Kicukiro"],
  "Northern": ["Burera", "Musanze", "Gicumbi"],
  "Southern": ["Huye", "Nyanza", "Ruhango"],
  "Eastern": ["Nyagatare", "Gatsibo", "Bugesera"],
  "Western": ["Rubavu", "Rusizi", "Karongi"]
};
function updateDistricts() {
  const province = document.getElementById('province');
  const district = document.getElementById('district');
  const selected = province.value;
  district.innerHTML = "";

  if (districtsByProvince[selected]) {
    districtsByProvince[selected].forEach(function (d) {
      const option = document.createElement("option");
      option.value = d;
      option.textContent = d;
      district.appendChild(option);
    });
  }
}
document.addEventListener("DOMContentLoaded", function () {
  const province = document.getElementById('province');
  province.addEventListener("change", updateDistricts);
 const form = document.getElementById('registerForm');
  form.addEventListener("submit", function (e) {
    const name = document.getElementById('name').value.trim();
    const province = document.getElementById('province').value;
    const district = document.getElementById('district').value;

    if (name === "" || province === "" || district === "") {
      e.preventDefault();
      alert("Please fill all fields before submitting!");
    }
  });
});
