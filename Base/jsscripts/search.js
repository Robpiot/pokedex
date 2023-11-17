// tryting to create a search function

const search = document.querySelector("[data-search]");

let pkmn = [];

searchInput.addEventListener("input", (e) => {
  const value = e.target.value;
  pkmn.forEach((pokemon) => {
    const isVisible = pkmn.name.includes(value) || pkmn.type.includes(value);
    pokemon.element.classList.toggle("hide", !isVisible);
  });
});

fetch(".../connect.php");
